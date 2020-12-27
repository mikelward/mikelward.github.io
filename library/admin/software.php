<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Software Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward's Software Admin" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, software, programs, applications, games, library" />
<meta name="robots" content="NOINDEX" />
<?php include "style.php" ?>
<style type="text/css">
	th.title, td.title { width: 35em; font-style: normal; }
	span.error { color: red; background: white; }
</style>
<style type="text/css" media="print">
	#admin { display: none }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>
<?php
require_once 'propel/Propel.php';
include_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/../runtime-conf.php");
require_once 'library/Software.php';
require_once 'library/Platform.php';
require_once 'functions.inc';
require_once 'library.inc';

?>
</head>

<body>
<div id="skip">
<a href="#content">Skip to content</a>
</div>
<div id="banner">
<?php include "banner.php" ?>
</div>
<div id="menu">
<?php include "menu.php" ?>
</div>

<div id="title">
<h1>Software</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>
<?php
    # address for books with an ISBN
	$view_url = "http://www.amazon.com/exec/obidos/ASIN/";
    $view_url = "http://www.amazon.com/gp/product/";
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
<div id="admin">
	<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
	<fieldset id="add">
	<legend>Add Software</legend>
	<!--
	<label for="section">Section</label>
	<select name="section">
	<option value="nonfiction">Non-Fiction</option>
	<option value="fiction">Fiction</option>
	</select>
	-->
	<label for="title">Title</label>
	<input name="title" type="text" />
	<label for="platform">Platform</label>
	<select name="platform">
		<option>Windows</option>
		<option>Linux</option>
		<option>Mac</option>
	</select>
	<label for="key">Key</label>
	<input name="key" type="text" />
	<input name="add" type="submit" value="Add" />
<?php
if ($_POST['add'])
{
	$software = new Software();
	$software->setTitle($_POST['title']);
	$software->setPlatform(new Platform($_POST['platform']));
	if (isset($_POST['key']))
	{
		$software->setLicenceKey($_POST['key']);
	}
	$today = date('Y-m-d');
	$software->setPurchasedOn($today);
	$software->save();
	print "<span>Added $_POST[title]</span>\n";
}
else if ($_POST['used'])
{
    $softwareid = $_POST['used'];
	$software = ItemPeer::retrieveByPK($softwareid);
	if ($software)
	{
		$today = date('Y-m-d');
		$software->setLastusedOn($today);
		$software->save();
        print "<span>Marked software $software as used</span>\n";
	}
	else
	{
        print "<span class=\"error\">Could not mark software $software as used: " . mysql_error() . "</span>\n";
    }
}
?>
	</fieldset>
	</form>
</div>

<div id="all" class="collapsible">
<h2>All</h2>
	<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
<?php
	$c = new Criteria();
	$csoftware = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_SOFTWARE, Criteria::EQUAL);
	$c->add($csoftware);
	$c->addAscendingOrderByColumn("title");
	$software = ItemPeer::doSelect($c);

	print "<table summary=\"Mikel Ward&#39;s Software\">\n";
	print "<tr><th class=\"title\">Title</th><th>Key</th><th colspan=\"1\">Actions</th></tr>";
    $nitems = 0;
	foreach ($software as $item)
	{
        if ($nitems %2 == 0)
        {
            $class = "even";
        }
        else
        {
            $class = "odd";
        }

		print "<tr class=\"$class\">";
		$id = $item->getItemId();
		$title = $item->getTitle();
		$asin = $item->getAsin();
		$rating = $item->getRating();
		$licenceKey = $item->getLicenceKey();

        if ($asin)
        {
            print "<td class=\"title\"><a href=\"$view_url" . $asin . $view_tag . "\" title=\"$view_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        else
        {
            print "<td class=\"title\"><a href=\"$search_url" . urlencode("\"$title\"") . $search_tag . "\" title=\"$search_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        print "<td>$licenceKey</td>";
        print('<td><input name="used" value="' . $id . '" type="image" src="/icons/16x16/stock_mark" alt="Mark used" title="Mark ' . htmlentities($title) . ' as used" /></td>');
		print "</tr>\n";
        $nitems++;
	}
	print "</table>\n";
?>
</form>
</div>

</div>

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

