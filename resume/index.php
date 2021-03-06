<?php
if ($_REQUEST['download'])
{
  header("Content-Disposition: attachment; filename=\"Mikel Ward Resume.html\"");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- vim: set et sts=2 sw=2 tw=78: -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Mikel Ward's Resume</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Mikel Ward" />
    <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
    <meta name="description" content="Mikel Ward&#39;s Resume" />
    <meta name="keywords" content="Mikel Ward, Michael Wardle, Resum&eacute; Resume, R&eacute;sum&eacute;, Curriculum Vitae, CV, employment, job, qualifications, experience, history, software, development, engineer, programmer, c, c++, Perl, Java, system, administrator, Linux, Red Hat, RHCE, UNIX, AIX, BSD, HP-UX, IRIX, Solaris" />
<?php include "style.php"; ?>
    <style type="text/css">
      .date { vertical-align: top; width: 10em }
      .name { vertical-align: top; width: 10em }
      .title { font-weight: bold; font-style: normal }
      .value { }
      table { border: none; width: 100% }
      ul { margin: 0.5em }
      .description { padding-bottom: 0.5em }
      pre { font-family: inherit }

      h2 { margin-top: 1em }

      #about { display: none }
      .vcard .name { display: none }
      .vcard .fn { font-size: large; font-weight: bold }
      .vcard table { text-align: center }
      .vcard { margin-bottom: 2em }

      h1, h2, h3, h4 { page-break-after: avoid }
      p, ul, ol, table { page-break-inside: avoid }
      /*#skills { page-break-before: always }*/
    </style>
    <style type="text/css" media="screen">
      p, .vcard { max-width: 56em }
    </style>
    <style type="text/css" media="print">
      #title { display: none }
      #menu { display: none }
      #footer { display: none }
      :link, :visited { color: inherit }
      p, .vcard { max-width: 1000em }
    </style>
  </head>
  <body>
<?php if (!$_REQUEST['download']):?>
    <div id="banner">
      <?php include "banner.php" ?>
    </div>

    <hr class="hide" />

    <div id="skip">
    <a href="#content">Skip to content</a>
    </div>

    <div class="menu" id="menu">
<?php include "menu.php" ?>
    </div>

    <hr class="hide" />

    <div id="title">
    <h1>Resume</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
    </div>
<?php endif; ?>

    <div id="content">

      <h2 id="about">Personal Details</h2>
      <div class="vcard">
      <table>
        <tr>
          <td class="name">Name</td>
          <td><span class="fn"><span class="given-name">Mikel</span> <span class="family-name">Ward</span></span></td>
        </tr>
        <tr>
          <td class="name">Address</td>
          <td><span class="adr">
              <span class="locality">Mountain View</span>, <span class="country-name">USA</span></span></td>
        </tr>
        <tr>
          <td class="name">Mail</td>
          <td class="email">mikel@mikelward.com</td>
        </tr>
      </table>
      </div>

    <h2 id="career">Career Ambitions</h2>
    <p>
      I would like to work in a challenging and rewarding
      software development or system administration environment
      where I can learn from other highly skilled people.
    </p>

    <h2 id="employment">Employment History</h2>
      <table>
        <tr>
          <td class="date">July 2011&mdash;present</td>
          <td class="description">
            <span class="title">Systems Engineer, Site Reliability Engineering</span><br />
            <a href="http://www.google.com/">Google</a>, Mountain View, USA</a>
          </td>
        </tr>

        <tr>
          <td class="date">Jun 2010&mdash;Mar 2011</td>
          <td class="description">
            <span class="title">Student, Master of Information Technology (withdrawn to pursue employment)</span><br />
            <a href="http://www.unimelb.edu.au/">University of Melbourne</a>, Parkville, Australia<br />
              <ul>
                <li>Learned Java, Python, and Haskell</li>
                <li>Revised Algorithms and Networking</li>
                <li>High Distinction (H1) for all subjects</li>
              </ul>
            </a>
          </td>
        </tr>
 
        <tr>
          <td class="date">2007&mdash;May 2010</td>
          <td class="description">
            <span class="title">Linux Systems Administrator/Systems Engineer</span><br />
            <a href="http://www.aconex.com/">Aconex</a>, Melbourne, Australia<br />
              <ul>
                <li>Administration of Java-based Web application</li>
                <li>Administration of Linux and Windows production servers</li>
				<li>System monitoring and alerting</li>
				<li>Automation of Windows and Linux system builds</li>
				<li>Development of in-house tools</li>
				<li>Documentation and development of processes</li>
                <li>On-call work</li>
              </ul>
          </td>
        </tr>
        <tr>
          <td class="date">2003&mdash;2007</td>
          <td class="description">
            <span class="title">Systems Administrator/Software Developer</span><br />
            <a href="http://www.abnote.com.au/">Leigh Mardon Australasia (now ABnote)</a>, Highett, Australia<br />
              <ul>
                <li>Development of UNIX server and Windows client software in C++</li>
                <li>Development of license capture Web site in PHP</li>
                <li>Porting of legacy license processing system to Linux</li>
                <li>Administration of license processing system on AIX</li>
                <li>Administration of AIX, HP-UX, Linux and Windows servers</li>
                <li>Telephone support and staff training</li>
              </ul>
          </td>
        </tr>
        <tr>
          <td class="date">2000&mdash;2003</td>
          <td class="description">
            <span class="title">Trainee Software Engineer/Systems Administrator</span><br />
            <a href="http://www.adacel.com/">Adacel Technologies</a>, Wodonga, Australia<br />
              <ul>
                <li>Development of <a href="http://oss.sgi.com/projects/failsafe/">FailSafe</a> network diagnostics in Perl on UNIX</li>
                <li>Maintenance of SGI <a href="http://oss.sgi.com/projects/fam/"><acronym title="File Alteration Monitor">FAM</acronym></a> file monitor in C++ on IRIX and Linux</li>
                <li>Administration of Red Hat Linux development and communications servers</li>
              </ul>
          </td>
        </tr>
        <tr>
          <td class="date">2000</td>
          <td class="description">
            <span class="title">Systems Engineer/Network Designer</span><br />
            Celvin Technologies, Bairnsdale, Australia<br />
              <ul>
                <li>Planning and rollout of 13 site
                    <abbr title="Integrated Services Digital Network">ISDN</abbr> <acronym title="Wide Area Network">WAN</acronym></li>
                <li>Installation and maintenance of Windows servers</li>
                <li>On-site technical support and user training</li>
              </ul>
          </td>
        </tr>
      </table>

      <h2 id="qualifications">Qualifications</h2>
      <table>
        <tr>
          <td class="date">2006, 2008, 2011</td>
          <td class="description">
            <span class="title">Red Hat Certified Engineer (RHCE)</span>
          </td>
        </tr>

        <tr>
          <td class="date">2011</td>
          <td class="description">
            <span class="title">Cisco Certified Entry Networking Technician (CCENT)</span><br />
          </td>
        </tr>
      
        <tr>
          <td class="date">2010&mdash;2011</td>
          <td class="description">
            <span class="title">Postgraduate Certificate of Information Technology</span><br />
            University of Melbourne</a>
          </td>
        </tr>

        <tr>
          <td class="date">2004&mdash;2007</td>
          <td class="description">
            <span class="title">Bachelor of Computer Science</span><br />
            Monash University</a>
          </td>
        </tr>

        <tr>
          <td class="date">2002</td>
          <td class="description">
            <span class="title">Certificate of Software Engineering</span><br />
            Melbourne University Private</a>
        </tr>
      </table>

    <h2 id="skills">Skills</h2>
      <ul>
        <li>Linux (Debian, Red Hat, etc.)</li>
        <li>Unix (AIX, FreeBSD, HP-UX, IRIX, Solaris, etc.)</li>
        <li>Windows (95, NT4, 2000, XP, 2003, Vista, 2008)</li>
        <li>Programming (C, C++, Java, Perl, Python, etc.)</li>
        <li>Scripting (Bash, KornShell, etc.)</li>
        <li>Networking (TCP/IP, firewalls, etc.)</li>
        <li>Web (HTML, CSS, JavaScript, PHP, etc.)</li>
        <li>Services (Apache, DNS, FTP, mail, NFS, SSH, etc.)</li>
		<li>Monitoring (PCP, Nagios)</li>
      </ul>

    <h2 id="awards">Awards</h2>
    <ul>
      <li>Perfect score, UNIX Tools, Monash University</li>
      <li>Perfect score, Red Hat Certified Engineer, Red Hat Learning Services</li>
    </ul>

    <h2 id="other">Other</h2>
      <p>Active contributor on the Stack Exchange network:</p>
      <ul>
        <li><a href="http://unix.stackexchange.com/users/3169/mikel">Unix &amp; Linux</a></li>
        <li><a href="http://superuser.com/users/15334/mikel">Superuser</a></li>
        <li><a href="http://stackoverflow.com/users/102182/mikel">Stackoverflow</a></li>
      </ul>

    <h2 id="referees">Referees</h2>
      <p>Please <a href="http://mikelward.com/contact">contact me</a> for details of my referees.</p>


<?php if (is_dir("download")): ?>
    <h2 id="download">Download</h2>
    <p>
      This document is available for download in soft copy in several formats
      at <a href="download">mikelward.com/resume/download</a>.
    </p>
<?php endif; ?>
    </div>

<?php if (!$_REQUEST['download']):?>
    <hr class="hide" />

    <div id="footer">
<?php include "footer.php"; ?>
    </div>
<?php endif; ?>
  </body>
</html>

