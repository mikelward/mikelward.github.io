<?php
  $dirs = explode("/", $_SERVER['REQUEST_URI']);
  if ($dirs[1] == "michael")
  {
    $basedir = "/michael/";
  }
  elseif ($dirs[1] == "mical")
  {
    $basedir = "/mical/";
  }
  elseif ($dirs[1] == "mikel")
  {
    $basedir = "/mikel/";
  }
  else
  {
    $basedir = "/";
  }
  $menu = array(
    "about" => "About",
    "blog" => "Blog",
    #"books" => "Books",
    "contact" => "Contact",
    #"library" => "Library",
    #"links" => "Links",
    #"movies" => "Movies",
    #"music" => "Music",
    #"news" => "News",
    #"photos" => "Photos",
    "resume" => "Resume",
    "software" => "Software",
    #"work" => "Work",
	#"options" => "Options",
    #"search" => "Search"
  );
?>
<?php
  $path = $_SERVER['REQUEST_URI'];
  print "<ul>\n";
  if (preg_match("/^\/$/", "$path"))
  {
    print "<li class=\"current menuitem\">";
  }
  elseif (preg_match("/^\/(~?(mical|michael|mikel)\/)?(index|home|main|)(\/|\.[^\/]*)?$/", "$path"))
  {
    print "<li class=\"current menuitem\">";
  }
  else
  {
    print "<li class=\"menuitem\">";
  }
  print "<a href=\"$basedir\">Home</a></li>\n";
  foreach ($menu as $page => $title)
  {
	$section = "$basedir$page";
    if (preg_match("#^$section#", "$path"))
    {
	  error_log("$section matches start of $path");
      print "<li class=\"current menuitem\">";
    }
    elseif ($page == "software" && preg_match("/\/projects/", $path))
    {
      print "<li class=\"current menuitem\">";
    }
    else
    {
      print "<li class=\"menuitem\">";
    }
    print "<a href=\"$basedir$page\">$title</a></li>\n";
  }
  print "</ul>\n";

?>
<div id="search">
<form action="http://mikelward.com/search" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="013014075674102242704:du85rnxtxds" />
    <input type="hidden" name="cof" value="FORID:9" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input id="searchfield" type="text" name="q" size="16" />
    <input id="searchbutton" type="submit" name="sa" value="Search" />
  </div>
</form>
</div>
