<?php
    $birthdate = 19800929;
    $age = floor((date("Ymd")-$birthdate)/10000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Flashing GNOME Terminal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Version of GNOME Terminal that sets the urgency hint when a beep is received" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, gnome, linux, terminal, flash, window, tab, beep, bell, urgency, bold" />
<?php include "style.php"; ?>
<link href="extensions.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*.figure { margin-bottom: 2em }*/
/*.caption { font-size: small }*/
.caption { display: none }
</style>
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
<h1>Flashing GNOME Terminal</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
</div>

<div id="content">
<!--
    <div class="summary">
    <p>
        Makes GNOME Terminal's task bar icon flash when a program generates a bell
        if the window isn't focussed, to draw your attention to the bell.
    </p>
    </div>
-->
    <div class="description">
    <p>
        I wanted to be able to run a command in the background, go off and do something else,
        and have GNOME Terminal notify me when the command was done.
    </p>
    <p>
        The patch below makes GNOME Terminal flash when a command finishes and you're not working in that window.
        It also highlights the title of the tab inside GNOME Terminal.
    </p>
    </div>
    <div class="screenshots">
    <div class="figure">
    <img src="window%20notify%201%20-%20cropped.png"/>
    <p class="caption">A new terminal</p>
    </div>
    <div class="figure">
    <img src="window%20notify%202%20-%20cropped.png"/><br/>
    <p class="caption">Running a long command (for example a long file transfer or a build)</p>
    </div>
    <div class="figure">
    <img src="window%20notify%203%20-%20cropped.png"/><br/>
    <p class="caption">Getting on with something else while you wait</p>
    </div>
    <div class="figure">
    <img src="window%20notify%204%20-%20cropped.png"/>
    <p class="caption">The terminal flashes in the task bar to let you know the command has finished</p>
    </div>
    </div>
    <div class="version">
    <h3>GNOME 2.22</h3>
    <ol>
    <li>Check out VTE revision 2048 from <a href="http://svn.gnome.org/svn/vte/trunk">VTE trunk</a> (<tt>mkdir vte; svn co -r 2048 http://svn.gnome.org/svn/vte/trunk vte</tt>)</li>
    <li>Apply <a href="http://bugzilla.gnome.org/attachment.cgi?id=113316&action=view">this patch</a> (<tt>cd vte/src; patch < vte-beep-urgencyhint.patch</tt>)</li>
    <li>Build and install (<tt>cd ..; ./autogen.sh; make; sudo make install</tt>)</li>
    <li>Check out GNOME Terminal revision 3194 from <a href="http://svn.gnome.org/svn/gnome-terminal/branches/gnome-2-22" title="GNOME Terminal 2.22 Subversion branch">the GNOME 2.22 branch</a></li>
    <li>Apply <a href="gnome-terminal-urgencyhint-and-bold-tabs.patch" title="GNOME 2.22 GNOME Terminal Flashing Title Patch">this patch</a>
    <li>Build and install (<tt>./autogen.sh; make; sudo make install</tt>)</li>
    </ol>
    <h3>GNOME 2.24</h3>
    <ol>
    <li>Check out VTE revision 2185 from <a href="http://svn.gnome.org/svn/vte/trunk">VTE trunk</a></li>
    <li>(No VTE patch required)</li>
    <li>Build and install (<tt>./autogen.sh; make; sudo make install</tt>)</li>
    <li>Check out GNOME Terminal revision 3195 from <a href="http://svn.gnome.org/svn/gnome-terminal/branches/gnome-2-24" title="GNOME Terminal 2.24 Subversion branch">the GNOME 2.24 branch</a></li>
    <li>Apply <a href="gnome-terminal-2.24-highlight-tab-and-flash-icon-on-bell.patch" title="GNOME 2.24 GNOME Terminal Flashing Title Patch">this patch</a>
    <li>Build and install (<tt>./autogen.sh; make; sudo make install</tt>)</li>
    </ol>
    <h3>Both</h3>
    <ol>
    <li>Put <tt>PS1="\\007$PS1"</tt> in your .bashrc or .zshrc</li>
    <li>Log out and in</li>
    </ol>
    </div>
    <div class="demos">
    <h3>Use Cases</h3>
    <ol>
    <li><a href="terminal-bell-demo2.ogv">telling you when a long-running command has finished</a></li>
    <li><a href="terminal-bell-demo4.ogv">in place of an audible bell</a></li>
    <li><a href="terminal-bell-demo3.ogv">incorrect mix of settings and prompt</a></li>
    </div>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>

<!-- vim: set sw=4 ts=4 et: -->
