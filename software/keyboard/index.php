<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Keyboard Layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Mikel Ward's keyboard layouts for Windows" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="windows, keyboard, layout, foreign, character, letter, accent, type, typing" />
<?php include "style.php"; ?>
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
<h1>Keyboard Layouts</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content" name="content">
    <p>
      These are some keyboard layouts for Microsoft Windows that allow you to type
      accented letters from languages such as French, German, Spanish, and Italian.
    </p>
    </p>
      They are all based on the QWERTY keyboard, which is standard in the US and Australia.<br />
    </p>

    <h3>Options</h3>
    <dl>
        <dt><a href="US-AltGr.zip">Right Alt</a></dt>
        <dd>Hold the right Alt key and press a letter<br />
            Best for German and special symbols<br />
            Right Alt+o = ó, Right Alt+p = ö, Right Alt+s = ß, Right Alt+5 = €, etc. <a href="US-AltGr.jpg" />Full list</a>
            <!--<a href="http://support.microsoft.com/kb/306560">More details</a>-->
        </dd>

        <dt><a href="US-Word.zip">Word</a></dt>
        <dd>Hold the Ctrl key and press a punctuation key then press a letter<br />
            Best for anyone familiar with the way Microsoft Word does it<br />
            Ctrl+' then o = ó, Ctrl+: then o = ö, Ctrl+Shift+&+s = ß, etc.
            <a href="http://tlt.psu.edu/suggestions/international/accents/codeword.html">Full list</a></dd>
            <!--<a href="http://support.microsoft.com/kb/269750/en-us">More details</a>-->

        <dt><a href="US-Grave.zip">Grave</a></dt>
        <dd>Press the ` key then press a letter to get an letter with a grave accent<br />
            Only useful if you won't be typing umlauts, acute accents, or other special characters<br />
            ` then a = à, etc.</dd>
    </dl>
    <h3>Instructions</h3>
    <ol>
        <li>Double click on the file that gets downloaded</li>
        <li>Double click on the setup file inside</li>
        <li>Click on Start, then Settings, then Control Panel</li>
        <li>Double click on Language and Regional Options<br />
            (This might be hidden under Date, Time, Language, and Regional Options)</li>
        <li>Click on the Languages tab</li>
        <li>Click the Add... button</li>
        <li>Click on the arrow on the Keyboard layout/IME drop-down list</li>
        <li>Select the name of the keyboard layout you downloaded<br />
            (e.g. United States with Microsoft Word-style accents)</li>
    </ol>

</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

<!-- vim: set sw=4 ts=4 et: -->
