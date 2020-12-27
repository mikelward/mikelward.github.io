<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Internet Explorer Shortcuts Firefox Addon</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Firefox add-on that adds Mac-style keyboard shortcuts on Windows and Linux" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, firefox, browser, extension, plugin, addon, keyboard, shortcut, key, stroke, combination, apple, mac" />
<?php include "style.php"; ?>
<link href="extensions.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    table { border: none }
    table th { padding: 0 1em; text-align: left }
    table td { padding: 0 1em; text-align: left }
    table .heading { display: none }
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
<h1>Internet Explorer Shortcuts</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
    <div class="summary">
    <p>
        Adds some Internet Explorer keyboard shortcuts to the Windows version of Firefox.
    </p>
    </div>
    <div class="description">
        <table>
            <tr class="heading"><th>Shortcut</th><th>Command</th></tr>
            <tr><td class="shortcut">Ctrl+E</td><td class="command">Search Box</td></tr>
            <tr><td class="shortcut">Ctrl+F3</td><td class="command">View Source</td></tr>
        </table>
    </div>
    <div class="download">
    <p>
        <a href="ieshortcuts-0.1.xpi">Install Internet Explorer Shortcuts 0.1</a>
    </p>
    </div>
    <div class="notes">
    <p class="note">
       Also works on Linux.
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
