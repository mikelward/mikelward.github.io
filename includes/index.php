<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php print "$_SERVER[REQUEST_URI]"?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<?php include "style.php" ?>
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
<?php include "menu.php" ?>
</div>

<hr class="hide" />

<div id="title">
<?php
$path = preg_replace("/\/$/", "", $_SERVER['REQUEST_URI']);
$parts = explode("/", $path);
array_shift($parts);
$name = ucfirst(array_pop($parts));
?>

<h1><?php print $name ?></h1>
    <div id="crumb">
      <?php include "crumb.php" ?>
    </div>
</div>
<div id="content">
<?php
$path = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];
$dir = opendir($path);
$files = array();
while ($file = readdir($dir))
{
    if (preg_match("/^\./", $file))
    {
        continue;
    }
    array_push($files, $file);
}

asort($files);
print '<p></p>';
print '<ul>';
foreach ($files as $file)
{
    $name = preg_replace("/\.[^\.]*$/", "", $file);
    $name = preg_replace("/[-_]/", " ", $name);
    $name = ucwords($name);
    if ($name == "Index")
    {
        continue;
    }
    print '<li><a href="' . $file . '">' . $name . '</a></li>';
}
print '</ul>' . "\n";
?>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

