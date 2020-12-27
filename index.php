<?php
  include "functions.inc";
  error_log("Document root is " . get_document_root ());
  date_default_timezone_set("Australia/Melbourne");
  $birthdate = get_owner_birthdate ();
  $age = get_age_from_birthdate ($birthdate);
  #error_log("Birthdate is $birthdate");
  #error_log("Age is $age");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Home Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="<?php print get_owner_name ()?>" />
<meta name="description" content="<?php print get_owner_name ()?>'s Home Page" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="<?php print get_owner_name ()?>, Michael Wardle, home, page" />
<link rel="openid.server" href="https://pip.verisignlabs.com/server" />
<link rel="openid.delegate" href="https://mikelward.pip.verisignlabs.com/" />
<?php include "style.php" ?>
<style type="text/css">
  #content { left: 0; right: 0; min-height: 96px }
  #photocolumn { padding: 0em; width: 96px; float: left }
  #photo { text-align: center; padding: 0; margin: 0; border: 1px groove black; }
  #textcolumn { float: right }
  .caption { text-align: center; padding: 0 }
  ul { list-style: none; padding: 0; margin: 0 }
  li { margin: 0 }
  #main { min-height: 96px /* same height as photo */ }
  #sidebar h2:first-child { margin-top: 0px }
  #sidebar { display: none }
</style>
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
<?php include "menu.php" ?>
</div>

<hr class="hide" />

<div id="title">
<h1>Welcome to Mikel Ward's web site</h1>
</div>


<div id="content">
  <div id="main">
  <div id="photocolumn">
    <img id="photo" src="photos/mikel-blue-104x104.jpg" alt="Portrait of Mikel" />
  </div>
  <div id="textcolumn">
    <!--
  <p>
    Welcome to Mikel Ward's web site!
  </p>
  -->
  <p>
    I am a <?php print $age ?> year old computer specialist from Melbourne, Australia.
  </p>
  <p>
    This site includes my <a href="software">software</a>, my <a href="blog">blog</a>, and more <a href="about">about me</a>.
  </p>
  <p>
    You can also view my <!--<a href="library">library</a>, <a href="photos">photos</a>, and--> <a href="work/resume">resume</a> or <a href="contact">contact me</a>.
  </p>
  </div>
  </div>
  <div id="sidebar">
    <div id="news">
    <h2><a href="/news">News</a></h2>
<?php
$entrynum = 0;
$inentry = 0;
function blogStartElement ($parser, $name, $attrs)
{
    global $entry;
    global $entrynum;
    global $linknum;
    global $inentry;
    global $tag;
    global $value;

    #error_log ("Tag is $name");
    #error_log ("Attrs are:");
    #error_log (print_r ($attrs, true));

    if ($name == "ENTRY")
    {
        $linknum = 0;
        $inentry = 1;
    }
    elseif ($inentry == 1)
    {
        if ($name == "LINK")
        {
            foreach ($attrs as $key => $val)
            {
                $entry[$entrynum]['LINK'][$linknum][$key] = $val;
                #$entry[$entrynum][$tag][$key] = $val;
            }
            $linknum++;
        }
        else
        {
            $tag = $name;
            foreach ($attrs as $key => $val)
            {
                $entry[$entrynum][$tag][$key] = $val;
            }
            $value = "";
        }
    }
}

function blogEndElement ($parser, $name)
{
    global $entry;
    global $tag;
    global $entrynum;
    global $inentry;
    global $value;

    if ($name == "ENTRY")
    {
        $entrynum++;
        $inentry = 0;
    }
    elseif ($inentry)
    {
        $entry[$entrynum][$tag]['VALUE'] = $value;
    }
}

function blogCharacterData ($parser, $data)
{
    global $value;
    global $inentry;

    if ($inentry)
    {
        $value .= $data;
    }
}

$blog_xml_parser = xml_parser_create ();
xml_set_element_handler ($blog_xml_parser, "blogStartElement", "blogEndElement");
xml_set_character_data_handler ($blog_xml_parser, "blogCharacterData");
$feed = "news/atom.xml";
$data = "";
if ($fp = fopen ($feed, "r")) {
  error_log ("Opened $feed");
  $start_time = microtime (true);
  while ($data = fread ($fp, 8192)) {
    if (!xml_parse ($blog_xml_parser, $data, feof ($fp))) {
            error_log (sprintf ("XML error: %s at line %d",
                                xml_error_string (xml_get_error_code ($blog_xml_parser)),
                                xml_get_current_line_number ($blog_xml_parser)));

    }
  }

  $count = 0;
  printf ("<ul>\n");
  foreach ($entry as $e)
  {
    if ($count > 4) break;

    foreach ($e['LINK'] as $l)
    {
      if ($l['REL'] == 'alternate' && $l['TYPE'] == 'text/html')
      {
        $link = $l['HREF'];
        break;
      }
    }

    #$date = $e['PUBLISHED']['VALUE'];
    #$time = strtotime($date);
    #$date = date("j M", $time);
    $title = $e['TITLE']['VALUE'];
    #error_log ($title . " published " . $date);

    printf ("<li><a href=\"%s\">%s</a></li>\n", $link, $title);
    $count++;
  }
  printf ("</ul>\n");
  $end_time = microtime (true);
  error_log ("Parsed $feed in " . ($end_time -= $start_time) . " seconds");
  #error_log (print_r ($entry, true));
}
else {
  printf ('<p class="error">Could not get news</p>');
}
xml_parser_free ($blog_xml_parser);
?>
    </div>
    <!--
    <div id="books">
    <h2><a href="/library/books">Books</a></h2>
<?php
if (false) {
    $link = database_connect()
        or die("<p>There was a problem connecting to the database server.  Please try again later.</p>");
    mysql_select_db("books", $link)
        or die("<p>There was a problem reading the list of books.  Please try again later.</p>");
    # address for books with an ISBN
    #$view_url = "http://www.getonce.com.au/BooksQuery?searchType=t&searchTerm=";
    $view_url = "http://www.amazon.com/exec/obidos/ASIN/";
    $view_tag = "/endbracket-20";
    $view_desc = "Amazon.com information";
    $view2_url = "http://www.amazon.co.uk/exec/obidos/ASIN/";
    $view2_tag = "/endbracket-20";
    $view2_desc = "Amazon.co.uk information";
    # address for books without an ISBN
    $search_url = "http://www.google.com/search?q=";
    $search_tag = "&btnI=I%27m%20Feeling%20Lucky";
    $search_desc = "Google search";

    $query = "SELECT number, title, asin, isbn FROM books.nonfiction WHERE lastread > DATE_SUB(CURDATE(), INTERVAL 3 MONTH) ORDER BY lastread DESC LIMIT 5";
    $result = mysql_query($query, $link);
    if ($result)
    {
        print "<ul>\n";
        while ($row = mysql_fetch_assoc($result))
        {
            print "<li>";

            $title = $row['title'];
            $asin = $row['asin'];
            $isbn = $row['isbn'];
            $id = $row['number'];

            if ($asin)
            {
                print "<a href=\"$view_url" . $asin . $view_tag . "\" title=\"$view_desc for $title\" target=\"_new\">";
                print htmlentities ($title);
                #$image = get_book_image_url($id, $asin);
                #if ($image)
                #{
                #    print '<img src="' . $image . '" alt="' . $title . '">';
                #}
                print "</a>";
            }
            elseif ($isbn)
            {
                print "<a href=\"$view2_url" . $isbn . $view2_tag . "\" title=\"$view2_desc for $title\" target=\"_new\">";
                print htmlentities ($title);
                #$image = get_isbn_item_image_url($isbn);
                #if ($image)
                #{
                #    print '<img src="' . $image . '" alt="' . $title . '">';
                #}
                print "</a>";
            }
            else
            {
                print "<a href=\"$search_url" . urlencode("\"$title\"") . $search_tag . "\" title=\"$search_desc\" target=\"_new\">";
                print htmlentities ($title);
                print "</a>";
            }
            #print '<br />';
            #print '<span class="caption">' . $title . '</span>';
            print "</li>\n";
        }
        print "</ul>\n";
    }
    else
    {
      error_log ("Cannot get recently read books: " . mysql_error());
      print "<p class=\"error\">Error getting list of books</p>\n";
    }
}
?>
    </div>
    -->

<?php
    $docroot = $_SERVER['DOCUMENT_ROOT'];
    $popular = $docroot . "/popular.txt";

    if (file_exists($popular))
    {
        $stream = fopen($popular, "r");
        if ($stream)
        {
            print "<h2>Popular</h2>\n";
            print "<ul>\n";

            while ($line = fgets($stream))
            {
                $url = chop($line);
                $path = preg_replace("/.*\:\/\//", "", $url);
                $path = preg_replace("/^[^\/]*/", "", $path);
                $name = preg_replace("/.*\//", "", $path);

                $name = preg_replace("/\.\w*?$/", "", $name);
                $name = urldecode($name);
                $words = preg_split("/[ _-]/", $name);
                $name = implode(" ", $words);
                $name = ucwords($name);

                print "<li><a href=\"$path\">$name</a></li>\n";
            }

            print "</ul>\n";
        }
        else
        {
            error_log ("Error opening $popular, not showing popular links");
        }
    }
    else
    {
        error_log ("Cannot find $popular, not showing popular links");
    }
?>
<!--
    <div id="links">
      <h2>Links</h2>
    </div>
-->
  </div>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

<!-- vi: set sw=2 ts=33: -->
