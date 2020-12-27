<?php
  include "functions.inc";
  error_log("Document root is " . get_document_root ());
  $birthdate = get_owner_birthdate ();
  $age = get_age_from_birthdate ($birthdate);
  error_log("Birthdate is $birthdate");
  error_log("Age is $age");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Blocked Message</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="author" content="<?php print get_owner_name ()?>" />
<meta name="description" content="<?php print get_owner_name ()?>'s Home Page" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="<?php print get_owner_name ()?>, Michael Wardle, mail, email, blocked, rejected, bounced, refused, spam, blacklist" />
<?php include "style.php" ?>
</head>

<body>
<div id="skip">
<a href="#content">Skip to content</a>
</div>

<hr class="hide" />

<div id="title">
<h1>Blocked Message</h1>
</div>


<div id="content">
  <p>
    Hi.
  </p>
  <p>
    If you tried to send a message but it got refused,
    it is probably for one of three reasons.
  </p>
  <p>
    To find out which, please read the "Undelivered Mail"
    error message in your inbox.
  </p>
<!--
  <ol>
    <li>Your mail server doesn't know what its name is</li>
    <li>Your mail server is running on a home broadband Internet connection</li>
    <li>Your mail server previously sent spam</li>
  </ol>
-->
  <h2 name="suspectedspam">1. Suspected Spam</h2>
  <p>
    If the error message mentioned "Suspected spam" and
    looks something like this:
  </p>
  <pre>
&lt;mikel@mikelward.com&gt;: host mail.endbracket.net[203.214.81.131] said: 554
    <b>5.7.1 Suspected spam.  Your mail server is blacklisted by dnsbl.sorbs.net</b>.
    Please see http://mikelward.com/help/suspectedspam for other ways of contacting me.
    (in reply to RCPT TO command)
  </pre>
  <p>
    It is likely that somebody else who uses the same mail server
    as you (for instance, somebody else that uses your Internet
    servier provider) has been sending unwanted emails.
  </p>
  <p>
    To reduce the likelihood of receiving more unwanted emails,
    your mail server has been placed on a black list.
  </p>
  <p>
    To find out why your mail server has been blacklisted,
    go to the web site for 

  <h2 name="dynamicaddress">2. Dynamic Address</h2>
  <h2 name="invalidhostname">3. Invalid Host Name</h2>
</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

<!-- vi: set sw=2 ts=33: -->
