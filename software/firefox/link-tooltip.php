<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Link Tooltip Firefox Extension</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Firefox add-on that shows you where a link will go when you click on it" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, firefox, browser, extension, plugin, addon, link, title, target, tooltip, popup" />
<?php include "style.php"; ?>
<link href="extensions.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    p { max-width: none }
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
<h1>Link Tooltip</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
    <div class="summary">
    <p>
       Rest the mouse pointer over a link to show where the link will go when you click on it.
    </p>
    </div>

    <div class="screenshots">
        <img src="link-tooltip-screenshot.png" alt="" />
        <p class="caption">Screenshot: Verifying a link to eBay&reg; with Link Tooltip</p>
    </div>

    <div class="download">
    <p>
       <a href="linktooltip.user.js">Install Link Tooltip</a>
       (requires <a href="https://addons.mozilla.org/en-US/firefox/addon/748">Greasemonkey</a>)
    </p>
    </div>
    <div class="note">
    <p>
       If the link already has a custom title, the link&#39;s address
       will be shown in brackets after the title.
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
