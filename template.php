<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Page Title</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="Michael Wardle" />
  <meta name="description" content="Page Description" />
  <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
  <meta name="keywords" content="Michael Wardle, Michael, Wardle, other, key, words" />
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
    <h1>Page Title</h1>
<div id="crumb">
    <?php include "crumb.php" ?>
</div>
  </div>

  <div id="content">
  <p>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In non nunc. Morbi
  lacinia sapien ac tortor. Curabitur eros nulla, dapibus at, iaculis ut,
  euismod id, magna. Aliquam erat volutpat. Ut fringilla dignissim felis.
  Vivamus diam. Nunc sit amet lacus. Maecenas accumsan, pede nec lobortis
  pharetra, lorem velit facilisis purus, sit amet semper pede nisl ut lectus.
  Ut consectetuer odio et augue. Vivamus ullamcorper. Vivamus gravida, elit ut
  vehicula dapibus, mi libero ultricies sem, ac varius sapien mi aliquet elit.
  Nam at urna ut metus suscipit mollis. Suspendisse blandit. Pellentesque
  auctor, quam a bibendum consequat, augue libero lobortis lorem, ac dignissim
  diam velit id lorem. Aliquam et magna. Phasellus enim dui, tempus at,
  consequat id, sollicitudin vitae, tortor.
  </p>
  <p>
    Subsections
  </p>
    <ul>
      <li><a href="page1">Page 1</a></li>
      <li><a href="page2">Page 2</a></li>
    </ul>
  </div>

  <div id="footer">
<?php include "footer.php"; ?>
  </div>

</body>
</html>

