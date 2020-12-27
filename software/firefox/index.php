<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Firefox Addons</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Mikel Ward's add-ons for the Firefox web browser" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, firefox, browser, extension, plugin, addon" />
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
<h1>Firefox Addons</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content" name="content">
    <dl>
        <dt><a href="tabs-menu">Tabs Menu</a></dt>
        <dd>Adds a Tabs menu to the main menu bar, allowing you to easily change to a different tab</dd>

        <dt><a href="ie-shortcuts">Internet Explorer Shortcuts</a></dt>
        <dd>Adds some Internet Explorer keyboard shortcuts to the Windows version of Firefox</dd>

        <dt><a href="mac-shortcuts">Mac Shortcuts</a></dt>
        <dd>Adds some Mac keyboard shortcuts to the Windows version of Firefox</dd>

        <dt><a href="win-shortcuts">Windows Shortcuts</a></dt>
        <dd>Adds some Windows keyboard shortcuts to the Linux version of Firefox</dd>

        <dt><a href="link-tooltip">Link Tooltip</a></dt>
        <dd>Shows a link's address when hovering the mouse pointer over it</dd>
    </dl>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

<!-- vim: set sw=4 ts=4 et: -->
