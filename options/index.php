<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <title>Site Options</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Mikel Ward" />
    <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
    <meta name="description" content="MikelWard.com Web Site Options" />
    <meta name="keywords" content="Mikel, Ward, Web, Site, Page, Style, Theme, Navigation, Fonts, Preferences, Settings, Options" />
    <?php include "style.php"; ?>
<script type="text/javascript" src="/scripts/styleswitcher.js"></script>
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
    <h1>Site Options</h1>
    <div id="crumb">
        <?php include "crumb.php" ?>
    </div>
    </div>

    <div id="content">
    <noscript>
      <h2>Notice</h2>
        <p class="notice">Setting these options requires cookies and JavaScript.  You seem to have these disabled.</p>
    </noscript>

      <h2>Page Theme</h2>
        <ul>
          <li><a href="#" onclick="setActiveStyleSheet(''); return false;">None</a></li>
          <li><a href="#" onclick="setDefaultStyleSheet(); return false;">Default</a></li>
          <li><a href="#" onclick="setActiveStyleSheet('Gray tabs'); return false;">Gray tabs</a></li>
          <li><a href="#" onclick="setActiveStyleSheet('Blue banner'); return false;">Blue banner</a></li>
        </ul>
    </div>

    <hr class="hide" />

    <div id="footer">
      <?php include "footer.php"; ?>
    </div>
  </body>
</html>

