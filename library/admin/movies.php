<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Movies</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward's Movies" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, movie, video, dvd, media, library, wishlist" />
<meta name="robots" content="NOINDEX" />
<?php include "style.php"; ?>
<style type="text/css">
  td.movie { width: 35em; font-style: normal; }
  td.rating { text-align: center }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/sort.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>
<?php
require_once 'propel/Propel.php';
require_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/runtime-conf.php");
require_once 'library/Movie.php';
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
<?php include "menu.php"; ?>
</div>

<div id="title">
<h1>Movies</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<?php
    unset($error);
    unset($success);

    $add = (isset($_REQUEST['add']))? $_REQUEST['add']: "";
    $buy = (isset($_REQUEST['buy']))? $_REQUEST['buy']: "";
    $borrow = (isset($_REQUEST['borrow']))? $_REQUEST['borrow']: "";
    $delete = (isset($_REQUEST['delete']))? $_REQUEST['delete']: "";
    $edit = (isset($_REQUEST['edit']))? $_REQUEST['edit']: "";

    $query_url = "http://www.imdb.com/Tsearch";

    // Per-movie actions
    if ($borrow)
    {
        $movieid = $borrow;

        // TODO: borrow movie
        $success = "<p>Would borrow $movieid</p>";
    }
    else if ($buy)
    {
        $movieid = $buy;

        $movie = ItemPeer::retrieveByPk($movieid);
        if ($movie)
        {
            $today = date('Y-m-d');
            $movie->setPurchasedOn($today);
            $movie->save();
            print "<span>Set purchased date on movie " . htmlentities($movie->getTitle()) . "</span>\n";
        }
    }
    else if ($delete)
    {
        $movieid = $delete;

        $movie = ItemPeer::retrieveByPk($movieid);
        ItemPeer::doDelete($movie);
    }
    else if ($edit)
    {
        $movieid = $edit;

        // TODO: edit movie
        $success = "Would edit movie $movieid";
    }

?>

<div id="content">

<div id="admin">
<h2>Administration</h2>
<?php
if (isset($error))
{
    print "<p class\"error\">$error</p>\n";
}
else if (isset($success))
{
    print "<p class=\"success\">$success</p>\n";
}
?>
<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
    <fieldset>
    <legend>Add Movie</legend>
    <label for="addmovie-title">Name</label>
    <input name="addmovie-title" id="addmovie" type="text" />
    <label for="addmovie-asin">ASIN</label>
    <input name="asin" type="text" />
    <input name="addmovie" type="submit" value="Add Movie" />
<?php
if ($_REQUEST['addmovie'])
{
    $title = $_REQUEST['addmovie-title'];

    if ($title)
    {
        $criteria = new Criteria();
        $criteria->add(ItemPeer::TITLE, $title, Criteria::EQUAL);
        $movies = ItemPeer::doSelect($criteria);

        if ($movies)
        {
            print "\t<span class=\"error\">Movie already exists</span>\n";
            error_log("Movie already exists");
        }
        else
        {
            $movie = new Movie();
            $movie->setTitle($title);
            $movie->setAsin($_POST['asin']);
            if ($_POST['bought'] == 1)
            {
                $today = date('Y-m-d');
                $movie->setPurchasedOn($today);
            }
            $movie->save();
            print "\t<span>Added " . htmlentities($title) . "</span>\n";
        }
    }
    else
    {
        print "\t<span class=\"error\">No name supplied</span>\n";
    }
}
elseif ($_REQUEST['done'])
{
    $movieid = $_REQUEST['done'];

    $movie = ItemPeer::retrieveItemByPk($movieid);
    if ($movie)
    {
        $today = date('Y-m-d');
        $movie->setLastusedOn($today);
        $movie->save();
        $success = "Marked movie $movieid as watched";
    }
    else
    {
        $error = "Could not retrieve movie $movieid";
    }
}
?>
    </fieldset>

</form>
</div>

<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
<div id="have" class="collapsible">
<h2>Have</h2>
<?php
	$criteria = new Criteria();
	$selectMovies = $criteria->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_MOVIE, CRITERIA::EQUAL);
	$purchased = $criteria->getNewCriterion(ItemPeer::PURCHASED_ON, NULL, CRITERIA::ISNOTNULL);
	$criteria->add($selectMovies);
	$criteria->addAscendingOrderByColumn("title");
	$movies = ItemPeer::doSelect($criteria);

    print "<table summary=\"Movies owned by Mikel Ward\" class=\"sortable\">\n";
    print "<tr><th>Title</th><th>Rating</th><th colspan=\"4\">Actions</th></tr>\n";
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
        $number = $movie->getItemId();
        print "<td class=\"movie\"><a href=\"$query_url?title=" . urlencode($title) . "\" title=\"Internet Movie Database search for $title\" target=\"_new\">" . $title . "</a></td>";
        print "<td class=\"rating\">";
        while ($rating > 0)
        {
            print '<img src="/icons/16x16/stock_about" alt="*" />';
            $rating--;
        }
        #print $rating;
        print "</td>";
        print '<td><input name="borrow" value="' . $number . '" type="image" src="/icons/16x16/stock_book_blue" alt="Borrow" title="Borrow ' . $title . '" /></td+>';
        #print '<td><input name="edit" value="' . $number . '" type="image" src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . $title . '" +/></td>';
        print '<td><a href="editmovie?id=' . $number . '"><img src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . $title . '" /></a></td>';
        print '<td><input name="delete" value="' . $number . '" type="image" src="/icons/16x16/stock_delete" alt="Delete" title="Delete  ' . $title . '" /></td>';
        print('<td><input name="done" value="' . $number . '" type="image" src="/icons/16x16/stock_mark" alt="Done" title="Mark ' . $title . ' as watched" /></td>');
        print "</tr>\n";
    }
    print "</table>\n";
?>
</div>

<div id="want" class="collapsible">
<h2>Want</h2>
<?php
	$criteria = new Criteria();
	$criteria->add(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_MOVIE, CRITERIA::EQUAL);
	$criteria->add(ItemPeer::PURCHASED_ON, NULL, CRITERIA::ISNULL);
	$criteria->addAscendingOrderByColumn("title");
	$movies = ItemPeer::doSelect($criteria);

    print "<table summary=\"Movies wanted by Mikel Ward\">\n";
    print "<tr><th>Title</th><th>Rating</th><th colspan=\"4\">Actions</th></tr>\n";
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
        $number = $movie->getItemId();
        print "<td class=\"movie\"><a href=\"$query_url?title=" . urlencode($title) . "\" title=\"Internet Movie Database search for $title\" target=\"_new\">" . $title . "</a></td>";
        print "<td class=\"rating\">";
        while ($rating > 0)
        {
            print '<img src="/icons/16x16/stock_about" alt="*" />';
            $rating--;
        }
        #print $rating;
        print "</td>";
        print '<td><input name="buy" value="' . $number . '" type="image" src="/icons/16x16/finance" alt="Buy" title="Buy ' . $title . '" /></td>';
        #print '<td><input name="edit" value="' . $number . '" type="image" src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . $title . '" /></td>';
        print '<td><a href="editmovie?id=' . $number . '"><img src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . $title . '" /></a></td>';
        print '<td><input name="delete" value="' . $number . '" type="image" src="/icons/16x16/stock_delete" alt="Delete" title="Delete  ' . $title . '" /></td>';
        print('<td><input name="done" value="' . $number . '" type="image" src="/icons/16x16/stock_mark" alt="Done" title="Mark ' . $title . ' as watched" /></td>');
        print "</tr>\n";
    }
    print "</table>\n";
?>
</div>
</form>

</div>

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

<!-- vim: set et sw=4 ts=4: -->
