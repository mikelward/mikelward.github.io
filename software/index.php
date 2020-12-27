<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Software</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Mikel Ward's Software" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, computing, projects, development, downloads, configuration" />
<?php include "style.php"; ?>
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
<h1>Software</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
    <dl>
        <!--
        <dt><a href="http://svn.endbracket.net/michael/cygwin/">Cygwin Customizations</a></dt>
        <dd>Improvements and additions for <a href="http://www.cygwin.com/">Cygwin</a></dd>
        -->
        <dt><a href="firefox-addons">Firefox Addons</a></dt>
        <dd>Small programs that add extra functionality to the Firefox web browser</dd>
		<dt><a href="gnome">GNOME-related Patches</a></dt>
		<dd>Currently includes an improved GNOME Terminal</dd>
		<dt><a href="keyboard">Keyboard Layouts</a></dt>
		<dd>Other ways of typing foreign letters on an English keyboard</dd>
		<!--
        <dt>Monash Map</dt>
        <dd>Currently unavailable</dd>
		-->
        <dt><a href="conf">UNIX Configuration</a></dt>
        <dd>Configuration files for UNIX programs including Bourne Shell, C Shell, Emacs, and Vi</dd>
        <dt><a href="scripts">UNIX Scripts</a></dt>
        <dd>Small programs to accomplish common tasks on UNIX systems</dd>
    </dl>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

<!-- vi: set sw=4 ts=4: -->
