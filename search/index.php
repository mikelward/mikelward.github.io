<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Search Mikel Ward's Web Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Search Mikel Ward's Web Site" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, Mikel, Ward, web, site, search, google" />
<?php include "style.php" ?>
<style type="text/css">
table { border: none }
</style>
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

<hr class="hide" />

<div id="title">
<h1>Search</h1>
</div>

<div id="content">
  <div id="google">
    <form action="http://mikelward.com/search" id="cse-search-box">
      <div>
        <input type="hidden" name="cx" value="013014075674102242704:du85rnxtxds" />
        <input type="hidden" name="cof" value="FORID:9" />
        <input type="hidden" name="ie" value="UTF-8" />
        <input type="text" name="q" size="31" />
        <input type="submit" name="sa" value="Search" />
      </div>
    </form>
  </div>

  <div id="results">
  <div id="cse-search-results"></div>
  <script type="text/javascript">
    var googleSearchIframeName = "cse-search-results";
    var googleSearchFormName = "cse-search-box";
    var googleSearchFrameWidth = 600;
    var googleSearchDomain = "www.google.com";
    var googleSearchPath = "/cse";
  </script>
  <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
  </div>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

<!-- vi: set sw=2 ts=33: -->
