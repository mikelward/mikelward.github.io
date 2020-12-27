<?php
/*
    Music Library - Guest Version
    $Id$

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
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Music Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="description" content="Mikel Ward&#39;s Music Library" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, music, album, band, compact disc, cd, media, library, wishlist" />
<!--<meta name="robots" content="NOINDEX" />-->
<?php include "style.php"; ?>
<style type="text/css">
    .item { float: left; width: 160px; margin: 1em }
    .item img { border: 1px solid black }
    .caption { width: 160px; vertical-align: bottom; text-align: center; }
  #albums, #all, #have, #want { clear: both }
  td.artist { width: 20em } td.album { width: 35em } td.genre { width: 10em }
  p { max-width: 65em /* same width as total width of table as above */ }
  #heading p { max-width: none }
  td.rating { text-align: center }
  th :link, th :visited, th :hover { color: inherit; background-color: inherit }
  #recent table { border: none }
  .caption { vertical-align: bottom; text-align: center }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/sort.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>

<?php
require_once 'propel/Propel.php';
require_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/runtime-conf.php");
require_once 'library/Album.php';
require_once 'library/Artist.php';
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
<h1>Music</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">

<div id="recent">
<h2>Recent</h2>
<?php
	$c = new Criteria();
	$now = time();
	$then = $now - 60 * 24 * 60 * 60;	// 60 days ago
	$cpurchased = $c->getNewCriterion(ItemPeer::PURCHASED_ON, $then, Criteria::GREATER_THAN);
	$clastused = $c->getNewCriterion(ItemPeer::LASTUSED_ON, $then, Criteria::GREATER_THAN);
	$calbums = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_ALBUM, Criteria::EQUAL);
	$cpurchased->addOr($clastused);
	$cpurchased->addAnd($calbums);
	$c->add($cpurchased);
	$albums = ItemPeer::doSelect($c);

	if ($albums)
    {
        foreach ($albums as $album)
        {
			$title = $album->getTitle();
			$asin = $album->getAsin();
			$id = $album->getItemId();

            print "<div class=\"item\">\n";
            if ($asin)
            {
                $image = get_album_image_url($id, $asin);
                if ($image)
                {
                    print '<a href="music"><img src="' . $image . '" alt="' . $title . '"></a>';
                }
            }
            else
            {
                error_log("Album $id has no asin, cannot get album artwork image");
            }
            print "<br />";
            print '<p class="caption">' . $title . '</p>';
            print "</div>\n";
        }
    }
?>
</div>

<div id="all" class="collapsible">
<h2>All</h2>
<?php
	$c = new Criteria();
	$c->add(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_ALBUM, Criteria::EQUAL);
	$c->add(ItemPeer::PURCHASED_ON, null, Criteria::ISNOTNULL);
	$c->addJoin(ArtistPeer::ARTIST_ID, ItemPeer::ARTIST_ID);
	$c->addAscendingOrderByColumn(ArtistPeer::NAME);
	$albums = ItemPeer::doSelect($c);

    print "<table summary=\"Music albums owned by Mikel Ward\" class=\"sortable\">\n";
    print "<tr class=\"header\"><th>Artist</th><th>Album</th><th>Rating</th></tr>\n";
    $nalbums = 0;
    foreach ($albums as $album)
    {
		$artist = $album->getArtist();
		$artistname = $artist->getName();
		$title = $album->getTitle();
		$rating = $album->getRating();
		$asin = $album->getAsin();

        /*
         * We want the first row to be odd, but its index is zero,
         * so we invert the logic
         */
        if ($nalbums % 2 == 0)
        {
            print "<tr class=\"odd\">";
        }
        else
        {
            print "<tr class=\"even\">";
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
        while ($rating > 0)
        {
             print('<img src="/icons/16x16/stock_about.png" alt="*" />');
             $rating--;
        }
        print('</td>');

        print("</tr>\n");

        $nalbums++;
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

