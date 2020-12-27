<?php
session_start();

require_once 'propel/Propel.php';
require_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/../build/conf/library-conf.php");
require_once 'library/Album.php';
require_once 'library/Artist.php';

/*
vi: set sw=4 ts=33:

    Music Library - Administrator Version
    $Id: music.php 1515 2008-01-01 10:14:53Z mikel $

    TODO
    1. allow configuration of the AMG/Gracenote/etc album lookups
    3. allow smarter logins (using PAM/SASL?)
    4. combine non-privileged and privileged page versions
    5. allow borrowing books
    6. factor out database code, use persistent connections?
    7. searching

    Music Information Links:

    # All Music Guide
    Music Search	"http://www.allmusic.com/cg/amg.dll?p=amg&amp;sql=";
    Artist Search	"http://www.allmusic.com/cg/amg.dll?p=amg&amp;opt1=1&amp;sql=";
    Album Search	"http://www.allmusic.com/cg/amg.dll?p=amg&amp;opt1=2&amp;sql=";

    # Amazon.com
    Music Search	"http://www.amazon.com/exec/obidos/search-handle-url/002-7732939-0429600?index=music" .
    Item Link	"http://www.amazon.com/exec/obidos/ASIN/<asin>/endbracket-20";

    # Gracenote CDDB
    Music Search	"http://www.gracenote.com/music/search.html?q=";
    Artist Search	"http://www.gracenote.com/music/artist.html?Art=";
    Album Search	"http://www.gracenote.com/music/search.html?f=disc&amp;q=";
*/

unset($error);
unset($success);

error_log ("Request vars:");
error_log (print_r ($_REQUEST, true));

$add = $_REQUEST['add'];
$buy = $_REQUEST['buy'];
$borrow = $_REQUEST['borrow'];
$delete = $_REQUEST['delete'];
$done = $_REQUEST['done'];
$edit = $_REQUEST['edit'];

// Per-album actions
if ($borrow)
{
    $album = $borrow;

    // TODO: borrow album
    $success = "Would borrow $album";
}
else if ($buy)
{
    $album = ItemPeer::retrieveByPK($buy);

    if ($album)
    {
        $title = $album->getTitle();
        $album->setPurchasedOn();
        $album->save();
        $success = "Purchased $title";
    }
}
else if ($delete)
{
    $album = ItemPeer::retrieveByPK($delete);

    if ($album)
    {
        $title = $album->getTitle();
        $album->delete();
        $success = "Deleted album $title";
    }
    else
    {
        $error = "Could not delete album";
    }
}
else if ($done)
{
    $album = ItemPeer::retrieveByPK($done);

    if ($album)
    {
        $album->setLastusedOn();
        $album->save();
        $success = "Marked album $album as listened";
    }
    else
    {
        $error = "Could not mark album $album as listened: " . mysql_error();
    }
}
else if ($edit)
{
    $album = $edit;

    // TODO: edit album
    $success = "Would edit album $album";
}

?>

<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Music</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward's Music" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, music, album, band, compact disc, cd, media, library, wishlist" />
<!--<meta name="robots" content="NOINDEX" />-->
<?php include "style.php" ?>
<style type="text/css">
    td.artist { width: 20em } td.album { width: 35em } td.genre { width: 10em }
    /*td.rating { width: 6em; text-align: center; cursor: pointer }*/
    span.error { color: red; background: white }
    select#addartist-genre { width: 15em }
    input#addartist-artist { width: 15em }
    select#addalbum-artist { width: 15em }
    input#addalbum-name { width: 15em }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<!--<script type="text/javascript" src="/scripts/sort.js"></script>-->
<script type="text/javascript" src="/scripts/tree.js"></script>
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
<h1>Music</h1>
<?php include "crumb.php" ?>
</div>

<?php
?>
<div id="content">
<p>
    Here is a list of most of the <a href="#have">albums I own</a>.
    If you know me personally, you are welcome to borrow them.
</p>
<p>
    There's also a list of the <a href="#want">albums I want</a>
    in case you're looking to buy me a gift.
</p>
<!--
<p>
    Please note I do not purchase albums that have been
    <a href="http://ukcdr.org/issues/cd/">corrupted using copy protection</a>
    as I can not play them on my computer.  Many such albums also include
    deliberate errors which will make them easier to damage and therefore not
    last as long.
    In Australia you can tell these recordings apart by looking for a
    <a href="http://www.ifpi.org/site-content/press/20020917.html">small logo</a>
    on the front of the packaging.
</p>
-->
<!--
<p>
    Artists and albums are listed here using the standard eleven 
    <a href="http://www.freedb.org/modules.php?name=Sections&amp;sop=viewarticle&amp;artid=26#2-6">FreeDB genres</a>.
    As these genres are very broad, most of the music I listen to
    (alternative, electronic, grunge, metal, rock, etc.) is categorized as
    rock.  One day I&#39;ll write something to automatically sort them into
    more fine-grained sub-genres, but until then, this will have to do.
</p>
-->

<div id="admin">
<h2>Administration</h2>
<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
    <fieldset>
    <legend>Add Artist</legend>
    <label for="addartist-artist">Name</label>
    <input name="addartist-artist" id="addartist-artist" type="text" />
    <input name="addartist" type="submit" value="Add Artist" />
<?php
if ($_POST['addartist'])
{
    # TODO see if artist already exists...

    $artist = new Artist();
    $artist->setName($_POST['addartist']);
    $artist->save();

    print "\t<span>Added " . htmlentities($artist) . "</span>\n";
}
?>
    </fieldset>

    <fieldset>
    <legend>Add Album</legend>
    <label for="addalbum-artist">Artist</label>
<?php
    $cartists = new Criteria();
    $cartists->addAscendingOrderByColumn("name");
    $artists = ArtistPeer::doSelect($cartists);

    if ($artists)
    {
        print "\t<select name=\"addalbum-artist\" id=\"addalbum-artist\">\n";
        foreach ($artists as $artist)
        {
            $id = $artist->getArtistId();
            $name = $artist->getName();
            print "\t<option value=\"$id\">" . htmlentities($name) . "</option>\n";
        }
        print "\t</select>\n";
    }
?>
    <label for="addalbum-name">Album Name</label>
    <input name="addalbum-name" id="addalbum-name" type="text" />
    <input name="addalbum" type="submit" value="Add Album" />
<?php
if ($_POST['addalbum'])
{
    $artist = ArtistPeer::retrieveByPK($_POST['addalbum-artist']);
    $album = new Album();
    $album->setTitle($_POST['addalbum-name']);
    $album->setArtist($artist);
    $album->save();
    print "\t<span>Added " . htmlentities($album->getTitle()) . "</span>\n";
}
?>
    </fieldset>
</form>
</div>

<form action="<?php print "$_SERVER[PHP_SELF]" ?>" method="post">
<div id="have" class="collapsible">
<h2>Have</h2>
<?php
    $c = new Criteria();
    $calbums = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_ALBUM, Criteria::EQUAL);
    $cpurchased = $c->getNewCriterion("items.purchased_on", NULL, Criteria::ISNOTNULL);
    $calbums->addAnd($cpurchased);
    $c->add($calbums);
    $c->addJoin("artists.artist_id", "items.artist_id");
    $c->addAscendingOrderByColumn("artists.name");
    $albums = ItemPeer::doSelect($c);

    print "<table summary=\"Music albums owned by Mikel Ward\" class=\"sortable\">\n";
    print "<tr><th>Artist</th><th>Album</th><th>Rating</th><th colspan=\"4\">Actions</th></tr>\n";
    $nalbums = 0;
    foreach ($albums as $album)
    {
        $artistname = $album->getArtist()->getName();
        #$artist = $row['artistname'];
        #$artisturl = $row['artisturl'];
        $id = $album->getItemId();
        $title = $album->getTitle();
        $rating = $album->getRating();
        $asin = $album->getAsin();

        print "<tr id=\"have-$id\"";
        if ($nalbums % 2 == 0)
        {
            print " class=\"even\">";
        }
        else
        {
            print " class=\"odd\">";
        }

        if ($artisturl)
        {
            printf('<td class="artist"><a href="%s" target="_new" title="%s">%s</a></td>',
                    htmlentities($artisturl),
                    htmlentities("Visit $artistname's home page"),
                    htmlentities($artistname));
        }
        else
        {
            printf('<td class="artist"><a href="%s" target="_new" title="%s">%s</a></td>',
                    "http://www.allmusic.com/cg/amg.dll?p=amg&amp;opt1=1&amp;sql=" .  urlencode($artistname),
                    htmlentities("Read about $artistname on Allmusic.com"),
                    htmlentities($artistname));
        }

        if ($asin)
        {
            printf('<td class="album"><a href="%s" target="_new" title="%s">%s</a></td>',
                    "http://www.amazon.com/exec/obidos/ASIN/" .  urlencode($asin) . "/endbracket-20",
                    htmlentities("Buy $title on Amazon.com"),
                    htmlentities($title));
        }
        else
        {
            printf('<td class="album"><a href="%s" target="_new" title="%s">%s</a></td>',
                   "http://www.amazon.com/exec/obidos/search-handle-url/002-7732939-0429600?index=music" .  "&amp;field-keywords=" . rawurlencode($artistname . " " . $title),
                    htmlentities("Buy $title on Amazon.com"),
                    htmlentities($title));
        }

        print('<td class="rating">');
        $i = 1;
        # first <rating> stars (e.g. if rating is three, show the first three stars)
        for (; $i <= $rating; $i++)
        {
            printf('<img class="rating" src="/icons/16x16/stock_about" alt="*" title="Set rating to %s" style="visibility: visible" />', $i, $i, $i);
        }
        # last (5 - <rating>) stars (e.g. if rating is three, the last two stars are hidden until mouseover)
        for (; $i <= 5; $i++)
        {
            printf('<img class="rating" src="/icons/16x16/stock_about" alt="*" title="Set rating to %s" style="visibility: hidden" />', $i, $i, $i);
        }
        print('</td>');

        print('<td><input name="borrow" value="' . $id . '" type="image" src="/icons/16x16/stock_book_blue" alt="Borrow" title="Borrow ' . htmlentities($title) . '" /></td>');
        #print('<td><input name="edit" value="' . $id . '" type="image" src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . htmlentities($title) . '" /></td>');
        print('<td><a href="edit?id=' . $id . '"><img src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . htmlentities($title) . '" /></a></td>');
        print('<td><input name="delete" value="' . $id . '" type="image" src="/icons/16x16/stock_delete" alt="Delete" title="Delete ' . htmlentities($title) . '" /></td>');
        print('<td><input name="done" value="' . $id . '" type="image" src="/icons/16x16/stock_mark" alt="Done" title="Mark ' . htmlentities($title) . ' as listened" /></td>');
        print("</tr>\n");
        $nalbums++;
    }
    print "</table>\n";
?>
</div>
<div id="want" class="collapsible">
<h2>Want</h2>
<?php
    $c = new Criteria();
    $calbums = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_ALBUM, Criteria::EQUAL);
    $cunpurchased = $c->getNewCriterion("items.purchased_on", NULL, Criteria::ISNULL);
    $calbums->addAnd($cunpurchased);
    $c->add($calbums);
    $c->addJoin("artists.artist_id", "items.artist_id");
    $c->addAscendingOrderByColumn("artists.name");
    $albums = ItemPeer::doSelect($c);

    print "<table summary=\"Music albums wanted by Mikel Ward\" class=\"sortable\">\n";
    print "<tr><th>Artist</th><th>Album</th><th>Rating</th><th colspan=\"4\">Actions</th></tr>\n";
    $nalbums = 0;
    foreach ($albums as $album)
    {
        $artistname = $album->getArtist()->getName();
        #$artist = $row['artistname'];
        #$artisturl = $row['artisturl'];
        $id = $album->getItemId();
        $title = $album->getTitle();
        $rating = $album->getRating();
        $asin = $album->getAsin();

        print "<tr id=\"have-$id\"";
        if ($nalbums % 2 == 0)
        {
            print " class=\"even\">";
        }
        else
        {
            print " class=\"odd\">";
        }

        if ($artisturl)
        {
            printf('<td class="artist"><a href="%s" target="_new" title="%s">%s</a></td>',
                    htmlentities($artisturl),
                    htmlentities("Visit $artistname's home page"),
                    htmlentities($artistname));
        }
        else
        {
            printf('<td class="artist"><a href="%s" target="_new" title="%s">%s</a></td>',
                    "http://www.allmusic.com/cg/amg.dll?p=amg&amp;opt1=1&amp;sql=" .  urlencode($artistname),
                    htmlentities("Read about $artistname on Allmusic.com"),
                    htmlentities($artistname));
        }

        if ($asin)
        {
            printf('<td class="album"><a href="%s" target="_new" title="%s">%s</a></td>',
                    "http://www.amazon.com/exec/obidos/ASIN/" .  urlencode($asin) . "/endbracket-20",
                    htmlentities("Buy $title on Amazon.com"),
                    htmlentities($title));
        }
        else
        {
            printf('<td class="album"><a href="%s" target="_new" title="%s">%s</a></td>',
                   "http://www.amazon.com/exec/obidos/search-handle-url/002-7732939-0429600?index=music" .  "&amp;field-keywords=" . rawurlencode($artistname . " " . $title),
                    htmlentities("Buy $title on Amazon.com"),
                    htmlentities($title));
        }

        print('<td class="rating">');
        $i = 1;
        # first <rating> stars (e.g. if rating is three, show the first three stars)
        for (; $i <= $rating; $i++)
        {
            printf('<img class="rating" src="/icons/16x16/stock_about" alt="*" title="Set rating to %s" style="visibility: visible" />', $i, $i, $i);
        }
        # last (5 - <rating>) stars (e.g. if rating is three, the last two stars are hidden until mouseover)
        for (; $i <= 5; $i++)
        {
            printf('<img class="rating" src="/icons/16x16/stock_about" alt="*" title="Set rating to %s" style="visibility: hidden" />', $i, $i, $i);
        }
        print('</td>');


        print '<td><input name="buy" value="' . $id . '" type="image" src="/icons/16x16/finance" alt="Buy" title="Buy ' . htmlentities($title) . '" /></td>';
        print '<td><input name="edit" value="' . $id . '" type="image" src="/icons/16x16/stock_edit" alt="Edit" title="Edit ' . htmlentities($title) . '" /></td>';
        print '<td><input name="delete" value="' . $id . '" type="image" src="/icons/16x16/stock_delete" alt="Delete" title="Delete  ' . htmlentities($title) . '" /></td>';
        print "</tr>\n";
        $nalbums++;
    }
    print "</table>\n";
?>
</div>
</form>
<!--
<script type="text/javascript" src="ratings.js">
</script>
-->

<?php
    mysql_close($conn);
?>
</div>

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

