<?php

set_include_path("/home/michael/www/library/build/classes:" . get_include_path());

require_once 'propel/Propel.php';
Propel::init(getcwd() . "/build/conf/library-conf.php");
include_once 'library/Book.php';
//include_once 'library/FictionBook.php';
//include_once 'library/NonFictionBook.php';
if (include_once 'propel/util/Criteria.php')
{
}
else
{
	print "Can't include Criteria.php";
}

$link = mysql_connect("localhost", "library", "library")
	or die("Can't connect to database server");
mysql_select_db("books")
	or die("Can't select books database");

function add_row($row)
{
	print(print_r($row, true));
	$title = $row['title'];
	$asin = $row['asin'];
	$isbn = $row['isbn'];
	$id = $row['number'];
	$lastused = $row['lastread'];
	$purchased = $row['purchased'];

	$book = new Book();
	$book->setTitle($title);
	if (isset($asin))
	{
		$book->setAsin($asin);
	}
	if (isset($isbn))
	{
		$book->setIsbn($isbn);
	}
	if (isset($purchased))
	{
		$book->setPurchasedOn($purchased);
	}
	if (isset($lastused))
	{
		$book->setLastusedOn($lastused);
	}
	print "Adding " . $book->getTitle() . ", last used " . $book->getLastusedOn('%x') . "\n";
	$book->save();
}

$query = "SELECT * FROM books.nonfiction";
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

$query = "SELECT * FROM books.fiction";
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
