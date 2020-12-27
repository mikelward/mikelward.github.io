<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Mikel Ward's Library" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, media, library, books, music, movies, videos, wishlist" />
<?php include "style.php"; ?>
<style type="text/css">
table { border: none }
.item { display: -moz-inline-block; display: inline-block }
.item .caption { font-size: x-small; width: 100px; text-align: center; display: block }
.item img { }
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
<?php include "menu.php"; ?>
</div>

<hr class="hide" />

<div id="title">
<h1>Library</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
  <dl>
    <dt><a href="books">Books</a></dt>
    <dt><a href="movies">Movies</a></dt>
    <dt><a href="music">Music</a></dt>
    <dt><a href="software">Software</a></dt>
  </dl>
  <p>
    <a href="admin">Admin Section</a>
  </p>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

