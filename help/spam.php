<?php
  include "functions.inc";
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
<style type="text/css">
</style>
</head>

<body>
<div id="skip">
<a href="#content">Skip to content</a>
</div>

<hr class="hide" />

<div id="title">
<h1>Message Blocked due to Suspected Spam</h1>
</div>


<div id="content">
  <div id="intro">
  <p>
    Hi.
  </p>
  <p>
    If you tried to send a message but it got blocked,
    this page helps to tell you why, what you can do about it,
    and how you can contact me in spite of this.
  </p>
  <p>
    You will probably have received what's called a bounce
    message with a subject similar to "Undelivered Mail" or
    "Delivery Status Notification".
  </p>
  <p>
    In it, there will be an error message that looks something like:
  </p>
  <pre>
&lt;somebody@endbracket.net&gt;: host mail.endbracket.net[203.214.81.131] said: 554
    5.7.1 <b>Suspected spam</b>.  Your mail server is blacklisted by <b>dnsbl.sorbs.net</b>.
    Please see http://endbracket.net/help/spam for other ways of contacting me.
    (in reply to RCPT TO command)
  </pre>
  </div>
  <div id="background">
  <p>
    This has happened because somebody who uses your mail server
    (for instance, somebody else who uses the same Internet 
    service provider as you) has been sending unwanted messages.
    Somebody noticed this, and reported your mail server to a
    spam black list.
  </p>
  <p>
    Many mail servers (including mine) reject mail from any mail
    server on a black list.  This greatly reduces the amount of
    spam I receive (by about 500 per day), but occasionally
    affects a legitimate message.
  </p>
  </div>
  <div id="actions">
  <p>
    These are the things you can do:
  </p>
  <p>
    <b>Find the name of the black list in the error message.</b>
    It will appear after the words
    "Your mail server is blacklisted by".
    In the above example, it's dnsbl.sorbs.net.
    You can then enter the name of the black list in your web
    browser and follow the instructions there to find out why
    your mail server is blacklisted.  If you think your mail
    server shouldn't be on their black list, you can often ask
    to have the server removed from the black list so that other
    people aren't affected.
  </p>
  <p>
    <b>Contact me to tell me about the problem.</b>  If you were trying
    to send legitimate mail, I will probably add you to a
    whitelist so that this should never happen again to any
    messages you send from that address.  You can do this by
    sending an email to postmaster at this domain or by
    calling me on +61-415-439-838.
  </p>
  <p>
    <b>Resend the message.</b>  After you have taken the above steps,
    please resend the message.
  </p>

</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php" ?>
</div>
</body>
</html>

<!-- vi: set sw=2 ts=33: -->
