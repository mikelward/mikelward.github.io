<!DOCTYPE html
  PUBLIC
  "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Mikel Ward's Contact Details</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Refresh" content="1800" />
    <meta name="author" content="Mikel Ward" />
    <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
    <meta name="description" content="Mikel Ward's Contact Details" />
    <meta name="keywords" content="Mikel Ward, Mike Ward, Michael Ward, Michael Wardle, contact, address, mail, telephone, feedback" />
<?php include "style.php"; ?>
    <script type="text/javascript" src="/scripts/util.js"></script>
    <script type="text/javascript" src="/scripts/tree.js"></script>
    <style type="text/css">
      div h2 { display: none }
      .ignore { display: none }
      #mail .preferred { font-weight: bolder }
      .inactive { display: none }
      table { border: none }
      /*table { border-collapse: separate; border-spacing: 1em 0em }*/
      td { padding: 2px 8px 2px 0px }
      .tag { font-weight: bolder; width: 5em }
      #contact-info tr td:first-child a { color: inherit }
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
      <h1>Contact Me</h1>
<div id="crumb">
      <?php include "crumb.php" ?>
</div>
    </div>

    <div id="content">

    <table id="contact-info">
    <tr>
      <td><a title="Electronic Email">Email</a></td>
      <td><a href="mailto:mikel@mikelward.com">mikel@mikelward.com</a></td>
      <td>No spam please (<a href="http://www.spamhaus.org/definition.html">definition</a>)</td>
    </tr>

    <!--
    <tr>
      <td><a href="http://www.google.com/talk/" title="Google Talk">Google Talk</a></td>
      <td><a href="gtalk:chat?jid=mikel.ward@gmail.com">mikel.ward@gmail.com</a></td>
    </tr>
    -->

    <!--
    <tr>
      <td><a href="http://messenger.msn.com/" title="MSN Messenger">Messenger</a></td>
      <td><a href="http://members.msn.com/mikel@mikelward.com">mikel@mikelward.com</a></td>
    </tr>
    -->

    <tr>
      <td>Phone</td>
      <td><a href="tel:+61-415-439838">+61-415-439-838</a></td>
      <?php
        $timezone = "Australia/Melbourne";
        if (date_default_timezone_set("Australia/Melbourne"))
        {
          print "<td>Local time is " . date("g:i a") . "</td>\n";
        }
        else
        {
          error_log ("Cannot set default time zone to $timezone");
        }
      ?>

    </tr>
    </table>

    <p>
      <a href="Mikel%20Ward.vcf">Download vCard</a>
    </p>

    </div>

    <!--
    <div class="vcard">
       <a class="url fn" href="http://endbracket.net/mical/">Mikel Ward</a>
       <a class="tel" href="tel:+61-415-439838">+61-415-439-838</a>
    </div>
    -->

    <hr class="hide" />

    <div id="footer">
<?php include "footer.php"; ?>
    </div>
  </body>
</html>

<!-- vi: set sw=2 ts=33: -->
