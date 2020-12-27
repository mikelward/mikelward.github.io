<?php

set_include_path("/home/michael/www/library/build/classes:" . get_include_path());

require_once 'propel/Propel.php';
Propel::init(getcwd() . "/build/conf/library-conf.php");
include_once 'library/Movie.php';
if (include_once 'propel/util/Criteria.php')
{
}
else
{
	print "Can't include Criteria.php";
}

$link = mysql_connect("localhost", "library", "library")
	or die("Can't connect to database server");
mysql_select_db("movies")
	or die("Can't select movies database");

function add_row($row)
{
	print(print_r($row, true));
	$title = $row['name'];
	$asin = $row['asin'];
	$isbn = $row['isbn'];
	$id = $row['number'];
	$lastused = $row['lastwatched'];
	$purchased = $row['purchased'];

	$movie = new Movie();
	$movie->setTitle($title);
	if (isset($asin))
	{
		$movie->setAsin($asin);
	}
	if (isset($isbn))
	{
		$movie->setIsbn($isbn);
	}
	if (isset($purchased))
	{
		$movie->setPurchasedOn($purchased);
	}
	if (isset($lastused))
	{
		$movie->setLastusedOn($lastused);
	}
	print "Adding " . $movie->getTitle() . ", last used " . $movie->getLastusedOn('%x') . "\n";
	$movie->save();
}

$query = "SELECT * FROM movies.movie";
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
