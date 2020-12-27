<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Michael Wardle's Music</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Michael Wardle" />
    <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
    <meta name="description" content="Michael Wardle's Music" />
    <meta name="keywords" content="Michael Wardle, Michael, Ward, music, album, band, compact disc, cd, media, library, wishlist" />
    <meta name="robots" content="NOINDEX" />
<?php include "style.php"; ?>
    <style type="text/css">
      td.artist { width: 20em; }
      td.album  { width: 20em; }
      td.genre  { width: 10em; }
    </style>
  </head>
  <body>
    <div id="banner">
<?php include "banner.php" ?>
</div>

<div id="menu">
<?php include "menu.php"; ?>
    </div>

    <div id="content">
<?php
    /* Set up the database connection for this page */
    $conn = mysql_connect("localhost", "library", "library")
        or die("Could not connect to database server: " . mysql_error());
    mysql_select_db("music")
        or die("Could not select database: " . mysql_error());
    /* All Music Guide query */
    $music_queryurl = "http://www.allmusic.com/cg/amg.dll?p=amg&sql=";
    $artist_queryurl = "http://www.allmusic.com/cg/amg.dll?p=amg&opt1=1&sql=";
    $album_queryurl = "http://www.allmusic.com/cg/amg.dll?p=amg&opt1=2&sql=";
    $music_querydesc = "All Music Guide search for ";
    $artist_querydesc = "All Music Guide search for ";
    $album_querydesc = "All Music Guide search for ";
    /* Gracenote CDDB query */
    /*
    $music_queryurl = "http://www.gracenote.com/music/search.html?q=";
    $artist_queryurl = "http://www.gracenote.com/music/artist.html?Art=";
    $album_queryurl = "http://www.gracenote.com/music/search.html?f=disc&q=";
    $music_querydesc = "Gracenote search for ";
    $artist_querydesc = "Gracenote search for ";
    $album_querydesc = "Gracenote search for ";
    */
?>

    <h1>Michael's Music</h1>

    <h2>Introduction</h2>
    <p>
      Here is a list of most of the <a href="#have">albums I own</a>.
      If you know me personally, you are welcome to borrow them.
    </p>
    <p>
      I've also added a list of some
      <a href="#want">albums I'd like to own</a> one day,
      just in case you're feeling particularly generous. ;-)
    </p>
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

    <h2 id="have">Have</h2>
<?php
    /* Query the database for a list of albums I own and print it */
    $query = "SELECT artist.name AS artistname, genre.name AS artistgenre, album.name AS albumname, album.rating AS albumrating";
    $query .= " FROM artist, genre, album";
    $query .= " WHERE album.artist=artist.number";
    $query .= " AND artist.genre=genre.number";
    $query .= " AND album.purchase IS NOT NULL";
    $query .= " ORDER BY genre.name,artist.name;";
    $result = mysql_query($query)
        or die ("Could not query database: " . mysql_error());

    print "<table summary=\"Music albums owned by Michael Wardle\">\n";
    print "<tr><th>Genre</th><th>Artist</th><th>Album</th><th>Rating</th></tr>\n";
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        print "<tr>";
        $artist = $row['artistname'];
        $album = $row['albumname'];
        $genre = ucfirst($row['artistgenre']);
        $rating = $row['albumrating'];
        print "<td class=\"genre\">$genre</td>";
        print "<td class=\"artist\"><a href=\"" . $artist_queryurl . urlencode($artist) .
          "\" target=\"_new\" title=\"" . $artist_querydesc . $artist . "\">" .
          $artist . "</td>";
        print "<td class=\"album\"><a href=\"" . $album_queryurl . urlencode($album) .
          "\" target=\"_new\" title=\"" . $album_querydesc . $album . "\">" .
          $album . "</td>";
        print "<td class=\"rating\">";
        while ($rating > 0)
        {
            print "<img src=\"/images/goldstar.gif\" alt=\"*\">";
            $rating--;
        }
        print "</td>\n";
        print "</tr>\n";
    }
    print "</table>\n";
?>

    <h2 id="want">Want</h2>
<?php
    /* Query the database for a list of albums I want and print it */
    $query = "SELECT artist.name AS artistname, album.name AS albumname";
    $query .= " FROM artist, genre, album";
    $query .= " WHERE album.artist=artist.number";
    $query .= " AND artist.genre=genre.number";
    $query .= " AND album.purchase IS NULL";
    $query .= " ORDER BY artist.name;";
    $result = mysql_query($query)
        or die ("Could not query database: " . mysql_error());

    print "<table summary=\"Music albums wanted by Michael Wardle\">\n";
    print "<tr><th>Artist</th><th>Album</th><th>Genre</th><th>Rating</th></tr>\n";
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        print "<tr>";
        $artist = $row['artistname'];
        $album = $row['albumname'];
        print "<td class=\"artist\"><a href=\"" . $artist_queryurl . urlencode($artist) .
          "\" target=\"_new\" title=\"" . $artist_querydesc . $artist . "\">" .
          $artist . "</td>";
        print "<td class=\"album\"><a href=\"" . $album_queryurl . urlencode($album) .
          "\" target=\"_new\" title=\"" . $album_querydesc . $album . "\">" .
          $album . "</td>";
        print "<td class=\"genre\"></td>";
        print "<td class=\"rating\"></td>";
        print "</tr>\n";
    }
    print "</table>\n";
?>
<?php
    mysql_close($conn);
?>
    </div>

    <div id="footer">
<?php include "footer.php"; ?>
    </div>
  </body>
</html>

