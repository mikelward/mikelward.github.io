<?php
    # vi: set ts=4 sw=4 et:
    # display a trail of crumbs for navigation

    require_once "functions.inc";

    $inifile = get_document_root() . "/site.ini";
    $ini = parse_ini_file($inifile, true);
    if (isset($ini['crumbs']) && isset($ini['crumbs']['basedir']))
    {
        $basedir = $ini['crumbs']['basedir'];
        if (!preg_match("#/$#", $basedir))
        {
            $basedir .= "/";
        }
        #error_log("Set basedir to $basedir");
    }
    else
    {
        error_log("Cannot get basedir from site.ini, using /");
        $basedir = "/";
    }
    if (isset($ini['crumbs']) && isset($ini['crumbs']['basename']))
    {
        $basename = $ini['crumbs']['basename'];
    }
    else
    {
        error_log("Cannot get basename from site.ini, using Home");
        $basename = "Home";
    }

    $uri = $_SERVER['REQUEST_URI'];
    $uri = preg_replace("#(\?.*?)$#", "", $uri);
    $uri = preg_replace("#(home|index|main)(\.\w*)?$#", "", $uri);
    $uri = preg_replace("#/$#", "", $uri);

    $path = preg_replace("#^$basedir/?#", "", $uri);
    $dirs = explode("/", $path);

    if ($path)
    {
        print "<p><a href=\"$basedir\">" . htmlentities($basename) . "</a>";

        $parts = array();
        foreach ($dirs as $dir)
        {
            array_push($parts, $dir);
            $path = $basedir . implode("/", $parts);

            $name = $dir;
            $name = preg_replace("/^~/", "", $name);
            $name = preg_replace("/\.\w*?$/", "", $name);
            $words = preg_split("/[ _-]/", $name);
            $name = implode(" ", $words);
            $name = ucwords($name);
            $name = preg_replace("/%([0-9A-Fa-f]{2})/e", "chr(hexdec($1))", $name);

            if (preg_match("/news\/\d\d\d\d\//", $path) && preg_match("/^\d\d$/", $name)) {
                if ($name == "01") $name = "JAN";
                elseif ($name == "02") $name = "FEBRUARY";
                elseif ($name == "03") $name = "MARCH";
                elseif ($name == "04") $name = "APRIL";
                elseif ($name == "05") $name = "MAY";
                elseif ($name == "06") $name = "JUNE";
                elseif ($name == "07") $name = "JULY";
                elseif ($name == "08") $name = "AUGUST";
                elseif ($name == "09") $name = "SEPTEMBER";
                elseif ($name == "10") $name = "OCTOBER";
                elseif ($name == "11") $name = "NOVEMBER";
                elseif ($name == "12") $name = "DECEMBER";
            }

            print " &gt; <a href=\"$path\">" . ucfirst($name) . "</a>";
        }
        print "</p>";
        print "\n";
    }
    else
    {
        # home page, don't show crumbs
    }
?>

