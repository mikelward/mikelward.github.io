<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>About Mikel Ward</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="Mikel Ward" />
  <meta name="description" content="About Mikel Ward" />
  <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
  <meta name="keywords" content="Mikel Ward, Michael Wardle, about" />
  <?php include "style.php"; ?>
  <style type="text/css">
    #content { left: 0; right: 0 }
    #about { padding: 0em 1em; width: 100px; float: right }
    #photo { text-align: center; padding: 0; margin: 0; border: 1px groove black; }
	#main { width: 42em }
    .caption { text-align: center; padding: 0 }
  </style>
</head>

<body>
<?php include "functions.php" ?>

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
    <h1>About Me</h1>
    <div id="crumb">
      <?php include "crumb.php" ?>
    </div>
  </div>

  <div id="content">
    <?php
      date_default_timezone_set("Australia/Melbourne");
      $birthdate = 19800929;
      $age = floor((date("Ymd")-$birthdate)/10000);
    ?>
    <div id="about">
        <img id="photo" src="photos/mike-20090215-gray-96x96.jpg" alt="Portrait of Mikel" />
    </div>
    <div id="main">
    <p>
      My name is Mikel Ward.  I am a <?php print $age; ?> year old Australian.
    </p>
    <p>
      I was born as Michael Wardle but changed my name legally to make it shorter and more logical.<br />
    </p>
    <p>
      I grew up in Naracoorte in South Australia.  I moved to Melbourne in 2003.<br />
    </p>
    <p>
      I am currently studying a Masters in IT at the University of Melbourne.
    </p>
    <p>
      I am interested in technology, music, movies, sports, science, politics, food, language, and travel.<br />
    </p>
    <!--
    <p>
      I have written some open source software, including the Tabs Menu Firefox extension.<br />
      <a href="/software">More about my software...</a>
    </p>
    -->
    </div>
  </div>

  <hr class="hide" />

  <div id="footer">
    <?php include "footer.php"; ?>
  </div>
</body>
</html>

