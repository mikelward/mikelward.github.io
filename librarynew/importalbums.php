<?php

set_include_path("/home/michael/www/library/build/classes:" . get_include_path());

require_once 'propel/Propel.php';
Propel::init(getcwd() . "/build/conf/library-conf.php");
include_once 'library/Album.php';
include_once 'library/Artist.php';
if (include_once 'propel/util/Criteria.php')
{
}
else
{
	print "Can't include Criteria.php";
}

$link = mysql_connect("localhost", "library", "library")
	or die("Can't connect to database server");
mysql_select_db("music")
	or die("Can't select music database");

function add_row($row)
{
	print(print_r($row, true));
	$title = $row['name'];
	$artistname = $row['artist'];
	$asin = $row['asin'];
	$isbn = $row['isbn'];
	$id = $row['number'];
	$lastused = $row['lastwatched'];
	$purchased = $row['purchased'];

	$artist = new Artist();
	$artist->setName($artistname);

	$album = new Album();
	$album->setTitle($title);
	$album->setArtist($artist);

	if (isset($asin))
	{
		$album->setAsin($asin);
	}
	if (isset($isbn))
	{
		$album->setIsbn($isbn);
	}
	if (isset($purchased))
	{
		$album->setPurchasedOn($purchased);
	}
	if (isset($lastused))
	{
		$album->setLastusedOn($lastused);
	}
	print "Adding " . $album->getTitle() . ", last used " . $album->getLastusedOn('%x') . "\n";
	$album->save();
}

$query = "SELECT album.name AS name, artist.name AS artist, album.purchased AS purchased, album.lastlistened AS lastlistened, album.asin AS asin, album.rating AS rating FROM music.album, music.artist WHERE album.artist = artist.number";
$result = mysql_query($query, $link);

if ($result)
{
	while ($row = mysql_fetch_assoc($result))
	{
		add_row($row);
	}
}
else
{
	print "Can't query database: " . mysql_error($link);
}

?>
