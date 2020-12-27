<?php

# Get the MIME content type of an output format
# TODO: See if we can get a comprehensive list from /etc/mime.types
function get_content_type($format)
{
    if (strcmp($format, "html") == 0)
        return "text/html";
    elseif (strcmp($format, "ps") == 0)
        return "application/postscript";
    else
        return "";
}

# Return the string describing the associated exit status of the "man" command
function get_man_error_message($code)
{
    if ($code == 0)
        return "Success";
    elseif ($code == 1)
        return "Syntax error";
    elseif ($code == 16)
        return "Entry not found";
    else
        return "Unknown error";
}

# Print an error message
function print_error($message)
{
    print <<<END
    <p class="error">$message</p>
END;
}

# Print a page footer
function print_footer()
{
    print <<<END
    </body>
    </html>
END;
}

# Print a form to ask for a manual page
function print_form()
{
    print <<<END
    <form action="$_SERVER[REQUEST_URI]" method="POST">
    <fieldset>
    <legend>UNIX Manual Query</legend>
    <table>
    <tr><td>Format</td><td><select name="format"><option value="html">HTML</option><!--<option value="ps">PostScript</option>--><option value="pdf">PDF</option></select></td></tr>
    <tr><td>Section</td><td><input name="section" type="text"><td></tr>
    <tr><td>Command</td><td><input name="command" type="text"></td></tr>
    <tr><td colspan="2"><input name="submit" type="submit" value="Go"></td></tr>
    </table>
    </fieldset>
    </form>
END;
}

# Print a page header
function print_header()
{
    header("Content-type: text/html");

    print <<<END
    <head>
    <title>UNIX Manual</title>
    <style type="text/css">
    .error { color: rgb(255,0,0) }
    </style>
    </head>
    <body>
END;
}

# Sanitise the user-supplied data
$command = $_REQUEST['command'];
if (preg_match("/\W/", $command) || strlen($command) > 8)
{
    print_header();
    print_error("Invalid command");
    print_footer();
    exit(2);
}

$format = $_REQUEST['format'];
if (preg_match("/\W/", $format) || strlen($format) > 8)
{
    print_header();
    print_error("Invalid format");
    print_footer();
    exit(2);
}

$section = $_REQUEST['section'];
if (preg_match("/\D/", $section))
{
    print_header();
    print_error("Invalid section");
    print_footer();
    exit(2);
}

# Display a command's manual page
if (isset($command))
{
    # Set the default output format to HTML
    if (!isset($format))
    {
        $format = "html";
    }

    # Set the option string to query one section of the manual
    if (isset($section) && $section > 0)
    {
        $sectionflag = "-S $section";
    }
    else
    {
        $sectionflag = "";
    }

    if (strcmp($format, "html") == 0)
    {
        print_header();
        system("man -t -T$format $sectionflag $command", $status);
        if ($status != 0)
        {
            $message = get_man_error_message($status);
            print_error("Error generating manual page: $message");
        }
        print_footer();
    }
    else
    {
        $type = get_content_type($format);
        header("Content-type: $type");

        if (strcmp($format, "pdf") == 0)
        {
            passthru("man -t -Tps $sectionflag $command | ps2pdf -", $status);
        }
        else
        {
            system("man -t -T$format $sectionflag $command", $status);
        }
        if ($status != 0)
        {
            $message = get_man_error_message($status);
            print_header();
            print_error("Error generating manual page: $message");
            print_footer();
        }
    }

}
else
{
    print_header();
    print_form();
    print_footer();
}
?>

