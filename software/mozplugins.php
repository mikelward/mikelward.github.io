<?php
  $birthdate = 19800929;
  $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Firefox Extensions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Mikel Ward's Favorite Mozilla Firefox Extensions" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, favorite, favourite, Mozilla, Firefox, download, extension, plugin" />
<?php include "style.php"; ?>
</head>

<body>
<div id="banner">
<?php include "banner.php" ?>
</div>

<div id="menu">
<?php include "menu.php"; ?>
</div>

<hr class="hide" />

<div id="title">
<h1>Projects</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
  <p>As there&#39;s so many useful Firefox plugins, I keep track of my favorite ones here.</p>
  <h3>
  <ul>
  <li><a href="http://v2studio.com/k/moz/">Caio Chassot&#39;s Extensions</a></li>
  <li><a href="http://extensionroom.mozdev.org/">Extension Room</a></li>
  <li><a href="http://addons.mozilla.org/extensions/">Mozilla Update</a></li>
  </ul>
  <ul>
  <li><a href="http://adblock.mozdev.org/">AdBlock</a></li>
  <li><a href="http://extensionroom.mozdev.org/more-info/booksync">Bookmarks Synchronizer</a></li>
  <li><a href="http://dmextension.mozdev.org/">Download Manager</a></li>
  </ul>

</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

