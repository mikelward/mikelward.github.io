<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tabs Menu Firefox Addon</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Firefox add-on that adds a Tabs menu to the main menu" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, firefox, browser, extension, plugin, addon, tabs, menu" />
<?php include "style.php"; ?>
<link href="extensions.css" rel="stylesheet" type="text/css" />
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
<h1>Tabs Menu</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
    <div class="summary">
    <p>
        Adds a Tabs menu to the main menu that lets you easily change between open tabs.
    </p>
    </div>
    <div class="description">
    <p>
        Just click on the new Tabs menu item in the main menu,
        then click on the name of the tab that you want to switch to.
    </p>
    </div>
    <div class="screenshots">
        <a href="tabs-menu-screenshot.png"><img src="tabs-menu-screenshot-small.png" alt="" /></a>
        <p class="caption">Screenshot: Opening the Tabs menu</p>
    </div>
    <div class="version">
    <p><a href="https://addons.mozilla.org/en-US/firefox/downloads/file/21797/tabs_menu-1.4.8-fx+sm+fl.xpi">Install Tabs Menu 1.4.8</a></p>
    </div>

    <div class="notes">
    <p class="note">
       This addon currently works on Windows and Linux in all versions of Firefox from 1.5.
       If you're using an older version of Firefox, try <a href="tabsmenu-0.8.4.xpi">Tabs Menu 0.8.4</a>.
    </p>
    <p class="note">
       The latest version should also work fine on Mac.  If you notice any problems, please <a href="/contact">contact me</a>.
    </p>
    <p class="note">
       Please visit <a href="http://www.babelzilla.org/">BabelZilla</a> to help add more languages if you can.
    </p>
    </div>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

<!-- vim: set sw=4 ts=4 et: -->
