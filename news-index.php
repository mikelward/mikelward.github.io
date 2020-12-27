<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php print "$_SERVER[REQUEST_URI]"?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<?php include "style.php" ?>
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
<?php
function get_name_for_file($file)
{
    $name = preg_replace("/\.[^\.]*$/", "", $file);
    $name = preg_replace("/[-_]/", " ", $name);
    $name = ucwords($name);

    if ($name == "01")
    {
        $name = "January";
    }
    elseif ($name == "02")
    {
        $name = "February";
    }
    elseif ($name == "03")
    {
        $name = "March";
    }
    elseif ($name == "04")
    {
        $name = "April";
    }
    elseif ($name == "05")
    {
        $name = "May";
    }
    elseif ($name == "06")
    {
        $name = "June";
    }
    elseif ($name == "07")
    {
        $name = "July";
    }
    elseif ($name == "08")
    {
        $name = "August";
    }
    elseif ($name == "09")
    {
        $name = "September";
    }
    elseif ($name == "10")
    {
        $name = "October";
    }
    elseif ($name == "11")
    {
        $name = "November";
    }
    elseif ($name == "12")
    {
        $name = "December";
    }
    return $name;
}

$path = preg_replace("/\/$/", "", $_SERVER['REQUEST_URI']);
$parts = explode("/", $path);
array_shift($parts);
$name = get_name_for_file(array_pop($parts));
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
    if (preg_match("/^index.*/", $file))
    {
        continue;
    }
	if (filetype($path . $file) == 'file' && !preg_match("/\.(php|html)$/", $file))
	{
		# skip non articles, keep directories
		continue;
	}
    array_push($files, $file);

}

asort($files);
print '<p></p>';
print '<ul>';
foreach ($files as $file)
{
    $name = get_name_for_file($file);
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

