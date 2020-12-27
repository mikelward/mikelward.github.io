<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Software Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward's Software Library" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, software, games, applications, library" />
<meta name="robots" content="NOINDEX" />
<?php include "style.php"; ?>
<style type="text/css">
  td.title { width: 35em; font-style: normal; }

  .item { float: left; width: 130px; height: 200px }
  .item .picture { width: 130px; min-height: 140px /* empty box so the text is always at the bottom */ }
  .item img { border: 1px solid black }
  .caption { width: 106px; vertical-align: bottom; text-align: center; /*margin-left: auto; margin-right: auto*/ }
  p { max-width: 65em /* same width as total width of table as above */ }
  #heading p { max-width: none }
  #all, #have, #want, #fiction, #nonfiction { clear: both }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>

<?php
require_once 'propel/Propel.php';
require_once 'propel/util/Criteria.php';
Propel::init(getcwd() . '/runtime-conf.php');
require_once 'library/Software.php';
require_once 'functions.inc';
require_once 'library.inc';
?>
</head>

<body>
<div id="banner">
<?php include "banner.php" ?>
</div>

<hr class="hide" />

<div id="skip">
<a href="#content">Skip to content</a>
</div>

<div id="menu">
<?php include "menu.php"; ?>
</div>

<hr class="hide" />

<div id="title">
<h1>Software Library</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>
<?php
    $start_time = microtime(true);

    #$view_url = "http://www.getonce.com.au/BooksQuery?searchType=t&searchTerm=";
    $view_url = "http://www.amazon.com/exec/obidos/ASIN/";
    $view_tag = "/endbracket-20";
    $view_desc = "Amazon.com information";
    $view2_url = "http://www.amazon.co.uk/exec/obidos/ASIN/";
    $view2_tag = "/endbracket-20";
    $view2_desc = "Amazon.co.uk information";
    # address for books without an ISBN
    $search_url = "http://www.google.com/search?q=";
    $search_tag = "&btnI=I%27m%20Feeling%20Lucky";
    $search_desc = "Google search";
?>

<div id="content">
<?php
	$c = new Criteria();
	$now = time();
	$then = $now - 60 * 24 * 60 * 60;	// 60 days ago
	$cpurchased = $c->getNewCriterion(ItemPeer::PURCHASED_ON, $then, Criteria::GREATER_THAN);
	$clastused = $c->getNewCriterion(ItemPeer::LASTUSED_ON, $then, Criteria::GREATER_THAN);
	$csoftware = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_SOFTWARE, Criteria::EQUAL);
	$cpurchased->addOr($clastused);
	$cpurchased->addAnd($csoftware);
	$c->add($cpurchased);
	$c->addDescendingOrderByColumn("purchased_on");
	$software = ItemPeer::doSelect($c);

    if ($software)
    {
		print "<div id=\"recent\">\n";
		print "<h2>Recent</h2>\n";

        foreach ($software as $item)
        {
			$title = $item->getTitle();
			$asin = $item->getAsin();
			$id = $item->getItemId();
			$platform = $item->getPlatform();

            print "<div class=\"item\">\n";
            if ($asin)
            {
                print "<a href=\"$view_url" . $asin . $view_tag . "\" title=\"$view_desc for $title\" target=\"_new\">";
                $image = get_software_image_url($id, $asin);
                if ($image)
                {
                    print '<img src="' . $image . '" alt="' . $title . '">';
                }
                print "</a>\n";
            }
            else
            {
                print "<a href=\"$search_url" . urlencode("\"$title\"") . $search_tag . "\" title=\"$search_desc\" target=\"_new\">";
                print "</a>\n";
            }
            print '<br />';
            print '<p class="caption">' . $title . '</p>';
            print "</div>\n";
        }
		print "</div>\n";
    }
?>
<div id="all" class="collapsible">
<h2>All</h2>
<?php
	$c = new Criteria();
	$csoftware = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_SOFTWARE, Criteria::EQUAL);
	$c->add($csoftware);
	$c->addAscendingOrderByColumn("title");
	$software = ItemPeer::doSelect($c);

    print "<table summary=\"Mikel Ward&#39;s Software\">\n";
	print "<tr class=\"header\"><th>Title</th><th>Rating</th></tr>\n";
    $i = 0;
    foreach ($software as $item)
    {
        $i++;
        if ($i % 2 == 0)
            $class = "even";
        else
            $class = "odd";

        print "<tr class=\"$class\">";
		$title = $item->getTitle();
		$asin = $item->getAsin();
		$rating = $item->getRating();
        if ($asin)
        {
            print "<td class=\"title\"><a href=\"$view_url" . $asin . $view_tag . "\" title=\"$view_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        else
        {
            print "<td class=\"title\"><a href=\"$search_url" . urlencode("\"$title\"") . $search_tag . "\" title=\"$search_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        #print "<td class=\"genre\"></td>";
        print "<td class=\"rating\">";
        while ($rating > 0)
        {
            print "<img src=\"/images/goldstar.gif\" alt=\"*\" />";
            $rating--;
        }
        print "</td>";
        print "</tr>\n";
        print "</tr>\n";
    }
    print "</table>\n";
?>
</div>
</div>

<?php
    $end_time = microtime(true);
    error_log("Generated page in " . ($end_time -= $start_time) . " seconds");
?>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

