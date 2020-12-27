<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Movie Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward's Movie Library" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, movie, video, dvd, media, library, wishlist" />
<meta name="robots" content="NOINDEX" />
<?php include "style.php"; ?>
<style type="text/css">
  td.movie { width: 35em; font-style: normal; }
  td.rating { text-align: center }
  #recent table { border: none }
  p { max-width: 65em /* same width as total width of table as above */ }
  #heading p { max-width: none }

  .item { float: left; width: 130px; height: 200px }
  .item .picture { width: 130px; min-height: 140px /* empty box so the text is always at the bottom */ }
  .caption { width: 106px; vertical-align: bottom; text-align: center; /*margin-left: auto; margin-right: auto*/ }
  p { max-width: 65em /* same width as total width of table as above */ }

  #all, #have, #want { clear: both }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<!--<script type="text/javascript" src="/scripts/sort.js"></script>-->
<script type="text/javascript" src="/scripts/tree.js"></script>
<?php
require_once 'propel/Propel.php';
require_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/runtime-conf.php");
require_once 'library/Movie.php';
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
<h1>Movie Library</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
<?php
	$c = new Criteria();
	$now = time();
	$then = $now - 60 * 24 * 60 * 60;	// 60 days ago
	$cpurchased = $c->getNewCriterion(ItemPeer::PURCHASED_ON, $then, Criteria::GREATER_THAN);
	$clastused = $c->getNewCriterion(ItemPeer::LASTUSED_ON, $then, Criteria::GREATER_THAN);
	$cmovies = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_MOVIE, Criteria::EQUAL);
	$cpurchased->addOr($clastused);
	$cpurchased->addAnd($cmovies);
	$c->add($cpurchased);
	$c->addDescendingOrderByColumn("purchased_on");
	$movies = ItemPeer::doSelect($c);

	if ($movies)
	{
		print "<div id=\"recent\" class=\"collapsible\">\n";
		print "<h2>Recent</h2>\n";
		foreach ($movies as $movie)
		{
			print "<div class=\"item\">\n";
			$title = $movie->getTitle();
			$asin = $movie->getAsin();
			$id = $movie->getItemId();
			$image = get_movie_image_url($id, $asin);
			if ($image)
			{
				print '<img src="' . $image . '" alt="' . $title . '">';
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
	$criteria = new Criteria();
	$selectMovies = $criteria->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_MOVIE, CRITERIA::EQUAL);
	$purchased = $criteria->getNewCriterion(ItemPeer::PURCHASED_ON, NULL, CRITERIA::ISNOTNULL);
	$criteria->add($selectMovies);
	$criteria->add($purchased);
	$criteria->addAscendingOrderByColumn("title");
	$movies = ItemPeer::doSelect($criteria);

    print "<table summary=\"Movies owned by Mikel Ward\" class=\"sortable\">\n";
    print "<tr class=\"header\"><th>Title</th><th>Rating</th></tr>\n";
    $i = 0;
    foreach ($movies as $movie)
    {
        $i++;
        if ($i % 2 == 0)
            $class = "even";
        else
            $class = "odd";

        print "<tr class=\"$class\">";
		$title = $movie->getTitle();
        #$genre = $row['genre'];
		$rating = $movie->getRating();
        print "<td class=\"movie\"><a href=\"$query_url?title=" . urlencode($title) . "\" title=\"Internet Movie Database search for $title\" target=\"_new\">" . $title . "</a></td>";
        print "<td class=\"rating\">";
        while ($rating > 0)
        {
            print "<img src=\"/images/goldstar.gif\" alt=\"*\" />";
            $rating--;
        }
        #print $rating;
        print "</td>";
        print "</tr>\n";
    }
    print "</table>\n";
?>
</div>

</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

