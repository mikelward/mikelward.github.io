<?php
  include "functions.inc";
?>
<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Page Not Found</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<?php include "style.php"; ?>
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
<h1>Page Not Found</h1>
<div id="crumb">
    <?php include "crumb.php"?>
</div>
</div>

<div id="content">
    <p>
    The page you were looking for could not be found.
    </p>
    <p>
    You might have mistyped the address or clicked on an out-of-date link.
    </p>
<?php
$path = $_SERVER['REQUEST_URI'];
$prefixes = array("michael", "mikel", "mical");

foreach ($prefixes as $prefix)
{
    if (strstr ($path, "/$prefix"))
    {
        $path = str_replace("/$prefix", "", $path);
        break;
    }
    unset($prefix);
}

$address = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$address = preg_replace("/\?.*$/", "", $address);

$docroot = $_SERVER['DOCUMENT_ROOT'];

$sitemap = $docroot . "/sitemap.txt";

if (file_exists($sitemap))
{
    $stream = fopen($sitemap, "r");
    if ($stream)
    {
        $comparisions = array();

        while ($line = fgets($stream))
        {
            $line = trim($line);
            $distance = levenshtein(strtolower(urldecode($address)), strtolower($line));
            $comparisons[$line] = $distance;
        }
    }
}

$similar = false;
if (isset($comparisons))
{
    asort($comparisons);

    $keys = array_keys($comparisons);
    $maxdistance = 2;
    # more than two differences means it's unlikely to be
    # what the user was looking for
    if ($comparisons[$keys[0]] <= $maxdistance)
    {
        $similar = true;
        print "<p>Similar pages:</p>\n";

        print "<ul>";
        for ($i = 0; ; $i++)
        {
            $path = $keys[$i];
            $distance = $comparisons[$keys[$i]];

            if ($distance > $maxdistance)
            {
                break;
            }
            # strip scheme
            $name = preg_replace("/.*:\/\//", "", $path);
            # strip host name
            $name = preg_replace("/^[^\/]*/", "", $name);
            # strip path name
            #$name = preg_replace("/.*\//", "", $name);
            # strip file name extensions
            #$name = preg_replace("/\.[^\.]*$/", "", $name);
            # change hyphen-minus and underscore to spaces
            #$name = preg_replace("/[-_]/", " ", $name);

            if ($name == "")
            {
                $name = "home";
            }
            print '<li><a href="' . $path . '">' . $name . '</a></li>' . "\n";
        }
        print "</ul>";
    }
}

if (!$similar)
{
    $popular = $docroot . "/popular.txt";

    if (file_exists($popular))
    {
        $stream = fopen($popular, "r");
        if ($stream)
        {
            print "<p>Popular pages:</p>\n";
            print "<ul>\n";

            while ($line = fgets($stream))
            {
                $url = $line;
                $path = preg_replace("/.*\:\/\//", "", $url);
                $path = preg_replace("/^[^\/]*/", "", $path);
                $name = urldecode($path);

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
}

$longest = 0;
$parent = "/";
foreach ($keys as $key)
{
    if (strstr($address, $key))
    {
        $length = strlen($key);
        if ($length > $longest)
        {
            $longest = $length;
            $parent = $key;
        }
    }
}
# strip scheme
$name = preg_replace("/.*\:\/\//", "", $parent);
# strip host name
$name = preg_replace("/^[^\/]*/", "", $name);
# strip path name
$name = preg_replace("/.*\//", "", $name);
# strip file name extensions
$name = preg_replace("/\.[^\.]*$/", "", $name);
# change hyphen-minus and underscore to spaces
$name = preg_replace("/[-_]/", " ", $name);

if ($name == "" || $name == "/")
{
    $name = "home page";
}
else
{
    $name .= " section";
}

print "<p>You can also go to my <a href=\"$parent\">$name</a> or try a search.</p>\n";
?>
  <div id="google">
    <form method="get" action="http://www.google.com/search">
    <div id="googlesearch">
    <input id="googleval" type="text" name="q" size="20" maxlength="255" value="" />
    <input id="googlesub" type="submit" name="sa" value="Search" />
    <input id="googledom" type="hidden" name="domains" value="mikelward.com" />
    <input type="hidden" name="sitesearch" value="mikelward.com" checked="checked" />
    </div>
    </form>
  </div>

    </div>
  </body>
</html>

