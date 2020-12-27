<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Books</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward's Books" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, book, literature, reference, library, wishlist" />
<meta name="robots" content="NOINDEX" />
<?php include "style.php" ?>
<style type="text/css">
	td.title { width: 35em; font-style: normal; }
	span.error { color: red; background: white; }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>
<?php
require_once 'propel/Propel.php';
require_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/../build/conf/library-conf.php");
require_once 'library/Book.php';
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
<h1>Books</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>
<?php
    # address for books with an ISBN
	#$view_url = "http://www.getonce.com.au/BooksQuery?searchType=t&searchTerm=";
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
<p>
	Here is a list of most of the books I own.
	If you know me you are welcome to borrow them.
</p>
<p>
	I also maintain a
	<a href="http://www.amazon.com/gp/registry/3R4FUXQ72PNUU" target="_new">wish list</a>
	on Amazon.com in case you're feeling generous!
</p>
<div id="admin">
	<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
	<fieldset id="add">
	<legend>Add Book</legend>
	<!--
	<label for="section">Section</label>
	<select name="section">
	<option value="nonfiction">Non-Fiction</option>
	<option value="fiction">Fiction</option>
	</select>
	-->
	<label for="title">Title</label>
	<input name="title" type="text" />
	<label for="isbn">ISBN</label>
	<input name="isbn" type="text" />
	<select name="bought"><option value="0">Will Buy</option><option value="1">Have Bought</option></select>
	<input name="add" type="submit" value="Add Book" />
<?php
if ($_POST['add'])
{
	$book = new Book();
	$book->setTitle($_POST['title']);
	$book->setIsbn($_POST['isbn']);
	if ($_POST['bought'] == 1)
	{
		$today = date('Y-m-d');
		$book->setPurchasedOn($today);
	}
	$book->save();
	print "<span>Added " . htmlentities($_POST['title']) . "</span>\n";
}
else if ($_POST['read'])
{
    $bookid = $_POST['read'];
	$book = ItemPeer::retrieveByPK($bookid);
	if ($book)
	{
		$today = date('Y-m-d');
		$book->setLastusedOn($today);
		$book->save();
        print "<span>Marked book " . $book->getTitle() . " as read</span>\n";
	}
	else
	{
        print "<span class=\"error\">Could not mark book $book as read: " . mysql_error() . "</span>\n";
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
	$cbooks = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_BOOK, Criteria::EQUAL);
	$c->add($cbooks);
	$c->addAscendingOrderByColumn("title");
	$books = ItemPeer::doSelect($c);

	print "<table summary=\"Mikel Ward&#39;s Books\">\n";
	print "<tr><th>Title</th><th>Rating</th><th colspan=\"1\">Actions</th></tr>";
    $nbooks = 0;
	foreach ($books as $book)
	{
        if ($nbooks %2 == 0)
        {
            $class = "even";
        }
        else
        {
            $class = "odd";
        }

		print "<tr class=\"$class\">";
		$id = $book->getItemId();
		$title = $book->getTitle();
		$asin = $book->getAsin();
		$isbn = $book->getIsbn();
		$rating = $book->getRating();

        if ($asin)
        {
            print "<td class=\"title\"><a href=\"$view_url" . $asin . $view_tag . "\" title=\"$view_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        else if ($isbn)
        {
            print "<td class=\"title\"><a href=\"$view2_url" . $isbn . $view2_tag . "\" title=\"$view2_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        else
        {
            print "<td class=\"title\"><a href=\"$search_url" . urlencode("\"$title\"") . $search_tag . "\" title=\"$search_desc for $title\" target=\"_new\">" . $title . "</a></td>";
        }
        print "<td>$rating</td>";
        print('<td><input name="read" value="' . $id . '" type="image" src="/icons/16x16/stock_mark" alt="Mark read" title="Mark ' . htmlentities($title) . ' as read" /></td>');
		print "</tr>\n";
        $nbooks++;
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

