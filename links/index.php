<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Mikel Ward's Links</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Mikel Ward" />
<meta name="description" content="Mikel Ward's Links" />
<meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
<meta name="keywords" content="Mikel Ward, Michael Wardle, links, bookmarks, favorites, favourites, best, sites, pages" />
<?php include "style.php"; ?>
<style type="text/css">
  .best:after { /*font-weight: bolder;*/ /*content: " *";*/ content: url(/icons/16x16/stock_about.png) }
  /*
  h2 { font-size: large }
  h3 { font-size: medium }
  h4 { font-size: medium }
  */
  h2, h3, h4, h5, h6 { margin: 0 }
  h2 { font-size: 120% }
  h3 { font-size: 110% }
  h4 { font-size: 100% }
  ul { list-style: none; padding: 0em 1em; margin: 0; margin-bottom: 0.5em }
  p { max-width: none }
  #quick { display: none }
  #quick { position: absolute; right: 1em }
  #quickfield { border: 1px solid black }
  #quickbutton { border: 1px solid black; background: gainsboro }
  #content { margin-top: 0.5em }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>
</head>

<body onload="collapseTree(); document.getElementById('sections').style.display=''; ">
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
<h1>Web Links</h1>
<div id="crumb">
<?php include "crumb.php" ?>
</div>
<div id="quick">
<form action="http://www.google.com/search" method="get">
<p>
<input id="quickfield" type="text" name="q" size="19" maxlength="255" value="" />
<input type="hidden" name="btnI" value="I'm Feeling Lucky" />
<input id="quickbutton" type="submit" value="Go" />
</p>
</form>
</div>
</div>
<script type="text/javascript">
document.getElementById('quickfield').focus();
</script>

<div id="content">
<!--
<p>
    Here's a collection of my favorite web sites in case you find them interesting or useful.
    I take no responsibility for their content.
</p>
-->

<!--
<p>
    A copy of my links can be obtained from my
    <a href="bookmarks/bookmarks.html">Netscape bookmarks file</a>.
</p>
-->
<div>
</div>

<div id="sections" style="display: none">
    <!--
<p>
    Click on the category heading to show the related links.
</p>
-->
<!--
<p>
    <a href="#" onclick="expandTree()">Show&nbsp;All</a>
    <a href="#" onclick="collapseTree()">Hide&nbsp;All</a>
</p>
-->
</div>


<div id="blogs" class="collapsible">
<h2>Blogs</h2>
<ul>
    <li><a href="http://www.blogger.com/">Blogger</a></li>
    <li><a href="http://www.livejournal.com/">LiveJournal</a></li>
    <li><a href="http://www.sixapart.com/movabletype/">MovableType</a></li>
    <li><a href="http://www.tumblr.com/">Tumblr</a></li>
    <li><a href="http://www.wordpress.org/">WordPress</a></li>
</ul>
</div>

<div id="calendars" class="collapsible">
<h2>Calendars</h2>
<ul>
    <li><a href="http://www.airset.com/">AirSet</a></li>
    <li><a href="http://www.bongo-project.org/">Bongo Project</a></li>
    <li><a href="http://calendar.google.com/">Google Calendar</a></li>
    <li><a href="http://www.icalshare.com/">iCalShare</a></li>
    <li><a href="http://calendar.yahoo.com/">Yahoo! Calendar</a></li>
</ul>
</div>

<div id="cars" class="collapsible">
<h2>Cars</h2>
<ul>
    <li><a href="http://www.caranddriver.com/">Car and Driver</a></li>
    <li><a href="http://carpoint.ninemsn.com.au/">Carpoint</a></li>
    <li><a href="http://drive.com.au/">Drive</a></li>
    <li><a href="http://www.edmunds.com/">Edmunds</a></li>
    <li><a href="http://www.ford.com.au/">Ford</a></li>
    <li><a href="http://www.holden.com.au/">Holden</a></li>
    <li><a href="http://www.honda.com.au/">Honda</a></li>
    <li><a href="http://www.howsafeisyourcar.com.au/">How Safe Is Your Car</a></li>
    <li><a href="http://www.kbb.com/car-reviews/">Kelly Blue Book</a></li>
    <li><a href="http://www.mitsubishi-motors.com.au/">Mitsubishi</a></li>
    <li><a href="http://www.racv.com.au/"><abbr title="Royal Automobile Club of Victoria">RACV</abbr></a></li>
    <li><a href="http://www.topgear.com/">Top Gear</a></li>
    <li><a href="http://www.toyota.com.au/">Toyota</a></li>
    <li><a href="http://www.vicroads.vic.gov.au/">VicRoads</a></li>
</ul>
</div>

<div id="cooking" class="collapsible">
<h2>Cooking</h2>
<ul>
    <li><a href="http://www.abc.net.au/canberra/recipes/">ABC Canberra Recipes</a></li>
    <li><a href="http://www.cooks.com/">Cooks.com</a></li>
    <li><a href="http://www.epicurean.com/exchange/index.html">epicurean.com recipes</a></li>
    <li><a href="http://www.fifthleg.com.au/flash.htm">Fifth Leg</a></li>
    <li><a href="http://base.google.com/base/search?q=&amp;a_r=1&amp;nd=0&amp;scoring=ld&amp;us=0&amp;a_n548=recipes&amp;a_y548=0&amp;a_s548=&amp;a_o548=">Google Recipes</a></li>
    <li><a href="http://importfood.com/recipes/">ImportFood.com Recipes</a></li>
    <li><a href="http://www.wholehealthmd.com/hk/recipes/browse/1,1461,,00.html">WholeHealthMD.com Healing Kitchen Recipes</a></li>
</ul>
</div>

<div id="development" class="collapsible">
<h2>Development</h2>
<ul>
    <li id="computing-agile" class="collapsible">
    <h3>Agile Programming</h3>
    <ul>
    <li><a href="http://www.agilealliance.org/">Agile Alliance</a></li>
    <li><a href="http://www.extremeprogramming.org/">Extreme Programming</a></li>
    <li><a href="http://www.martinfowler.com/">Martin Fowler</a></li>
    </ul>
    </li>

    <li id="computing-languages-c" class="collapsible">
    <h3>C</h3>
    <ul>
    <li><a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/9899-1999_cor_2-2004.pdf">C99 2004 Standard (PDF)</a></li>
    <li><a href="http://www.gnu.org/software/libc/manual/html_node/index.html">GNU C Library Manual</a></li>
    <li><a href="http://www.lysator.liu.se/c/">Lysator Programming in C</a></li>
    </ul>
    </li>

    <li id="computing-languages-cplusplus" class="collapsible">
    <h3>C++</h3>
    <ul>
    <li><a href="http://www.boost.org/">Boost C++ Libraries</a></li>
    <li><a href="http://www.cppreference.com/">C++ Reference</a></li>
    <li><a href="http://www.gnu.org/software/commoncpp/">CommonC++</a></li>
    <li><a href="http://www.cplusplus.com/">cplusplus Resources</a></li>
    <li><a href="http://gcc.gnu.org/onlinedocs/libstdc++/latest-doxygen/index.html">GNU C++ Library Documentation</a></li>
    <li><a href="http://www-306.ibm.com/software/awdtools/vacpp/library/">IBM VisualAge C++ Library</a></li>
    <li><a href="http://www.informit.com/guides/guide.asp?g=cplusplus">InformIT C++ Reference Guide</a></li>
    <li><a href="http://msdn.microsoft.com/library/default.asp?url=/library/en-us/vclang/html/vcrefcpluspluslanguagereference.asp"><abbr title="Microsoft Developer's Network">MSDN</abbr> C++ Language Reference</a></li>
    <li><a href="http://gcc.gnu.org/onlinedocs/porting/" title="Porting libstdc++">Porting to the GNU C++ Library</a></li>
    <li><a href="http://www.roguewave.com/support/docs/hppdocs/">Rogue Wave h++ Documentation</a></li>
    <li><a href="http://www.sgi.com/tech/stl/"><abbr title="Silicon Graphics Incorporated">SGI</abbr> <abbr title="Standard Template Library">STL</abbr> Programmer's Guide</a></li>
    </ul>
    </li>

    <li id="computing-databases" class="collapsible">
    <h3>Databases</h3>
    <ul>
    <li><a href="http://www.sleepycat.com/docs/index.html">Berkeley <abbr title="Database">DB</abbr></a></li>
    <li><a href="http://msdn.microsoft.com/sql/"><abbr title="Microsoft Developer Network">MSDN</abbr> SQL Server Developer Center</a></li>
    <li><a href="http://www.mysql.com/">MySQL</a> [<a href="http://dev.mysql.com/" title="MySQL Developer Zone">Developer Zone</a> <a href="http://dev.mysql.com/doc/mysql/" title="MySQL Reference Manual">Reference Manual</a> <a href="http://drizzle.org/">Drizzle</a>]</li>
    <li><a href="http://www.oracle.com/">Oracle</a> [<a href="http://www.oracle.com/technology/documentation/index.html" title="Oracle Technical Documentation">Documentation</a> <a href="http://www.oracle.com/technology/index.html" title="Oracle Technology Network">Network</a>]</li>
    <li><a href="http://www.postgresql.org/">PostgreSQL</a></li>
    <li><a href="http://www.sqlite.org/">SQLite</a> [<a href="http://www.sqlite.org/docs.html" title="SQLite Documentation">Documentation</a>]</li>
    </ul>
    </li>

    <li id="computing-eclipse" class="collapsible">
    <h3>Development Environments</h3>
    <ul>
    <li><a href="http://www.eclipse.org/">Eclipse</a></li>
    <li><a href="http://www.jetbrains.com/idea/">IntelliJ IDEA</a></li>
    <li><a href="http://netbeans.org/">NetBeans</a></li>
    </ul>
    </li>

    <li id="computing-development-forums" class="collapsible">
    <h3>Development Forums</h3>
    <ul>
    <li><a href="http://stackoverflow.com/">StackOverflow</a></li>
    </ul>
    </li>

    <li id="computing-gnome" class="collapsible">
    <h3>GNOME</h3>
    <ul>
    <li><a href="http://bugzilla.gnome.org/">GNOME Bugzilla</a></li>
    <li><a href="http://developer.gnome.org/doc/">GNOME Developer Documentation</a></li>
    <li><a href="http://developer.gnome.org/doc/API/2.0/gtk/index.html"><abbr title="Gimp ToolKit">GTK</abbr>+ Reference Manual</a></li>
    <li><a href="http://www.pidgin.im/">Pidgin</a></li>
    </ul>
    </li>

    <li id="computing-languages-go" class="collapsible">
    <h3>Go</h3>
    <ul>
    <li><a href="http://go-lang.cat-v.org/">Go Language Resources (cat-v.org)</a></li>
    <li><a href="http://golang.org/">The Go Programming Language (golang.org)</a> [<a href="http://play.golang.org/" title="Go Playground">Playground</a>]</li>
    <li><a href="https://groups.google.com/forum/#!forum/golang-nuts">golang-nuts</a></li>
    <li><a href="http://www.golang-book.com/">An Introduction to Programming in Go</a></li>
    </ul>
    </li>

    <li id="computing-languages-haskell" class="collapsible">
    <h3>Haskell</h3>
    <ul>
    <li><a href="http://www.haskell.org/haskellwiki/Haskell">Haskell</a></li>
    <li><a href="http://hackage.haskell.org/packages/hackage.html">HackageDB</a></li>
    <li><a href="http://www.haskell.org/hoogle/">Hoogle</a></li>
    <li><a href="http://learnyouahaskell.com/">Learn You a Haskell</a></li>
    <li><a href="http://www.realworldhaskell.org/blog/">Real World Haskell</a></li>
    </ul>
    </li>

    <li id="computing-languages-java" class="collapsible">
    <h3>Java</h3>
    <ul>
    <li><a href="http://java.sun.com/community/index.html">Java Community</a></li>
    <li><a href="http://java.sun.com/docs/">Java Documentation</a> [<a href="http://download.oracle.com/javase/6/docs/api/" title="Java Platform, Standard Edition 6 API Specification">J2SE 6 API Docs</a>]</li>
    <li>Java User Groups [<a href="http://www.ajug.org.au/" title="Australian Java Users Group">AJUG</a>]</li>
    </ul>
    </li>

    <li id="computing-mac" class="collapsible">
    <h3>Mac</h3>
    <ul>
    <li><a href="http://www.apple.com/">Apple</a> [<a href="http://developer.apple.com/documentation/index.html">Developer Documentation</a>]</li>
    </ul>
    </li>

    <li id="computing-magazines" class="collapsible">
    <h3>Magazines</h3>
    <ul>
    <li><a href="http://www.arstechnica.com/">Ars Technica</a></li>
    <li><a href="http://www.devx.com/">DevX</a></li>
    <li><a href="http://www.drdobbs.com/">Dr. Dobb's</a></li>
    <li><a href="http://www.ibm.com/developerworks/">IBM developerWorks</a></li>
    <li><a href="http://www.linux-mag.com/">Linux Magazine</a></li>
    <li><a href="http://www.onlamp.com/"><abbr title="O'Reilly Network">ON</abbr><acronym title="Linux, Apache, MySQL, and Perl/Python">Lamp</acronym></a></li>
    <li><a href="http://www.osdir.com/" title="O'Reilly Open Source Directory">OSDir</a></li>
    </ul>
    </li>

    <li id="computing-mobile" class="collapsible">
    <h3>Mobile</h3>
    <ul>
    <li><a href="http://www.android.com/">Android</a> [<a href="http://developer.android.com/index.html" title="Android Developer Guide">Development</a> <a href="http://source.android.com/" title="Android Source Code">Source</a>]</li>
    <li>iOS <a href="https://developer.apple.com/devcenter/ios/index.action" title="iOS Dev Center">Dev Center</a></li>
    </ul>
    </li>

    <li id="computing-mozilla" class="collapsible">
    <h3>Mozilla</h3>
    <ul>
    <li><a href="http://www.mozilla.org/">Mozilla</a></li>
    <li><a href="http://developer.mozilla.org/" title="MDN">Mozilla Developer Network</a> [<a href="https://developer.mozilla.org/En/XUL">XUL</a>]</li>
    <li><a href="http://www.mozilla.org/docs/#code">Mozilla Developer Documentation</a></li>
    <li><a href="http://lxr.mozilla.org/">Mozilla Source Code Cross Reference</a></li>
    <li><a href="http://addons.mozilla.org/extensions/">Mozilla Update Extensions</a></li>
    </ul>
    </li>

    <li id="computing-dotnet" class="collapsible">
    <h3>.NET</h3>
    <ul>
    <li><a href="http://www.gotdotnet.com/default.aspx">GotDotNet</a></li>
    <li><a href="http://www.informit.com/guides/guide.asp?g=dotnet">InformIT .NET Reference Guide</a></li>
    <li><a href="http://www.mono-project.com/">Mono</a> [<a href="http://www.go-mono.com/docs/" title="Mono Documentation">Documentation</a>]</li>
    <li>.NET User Groups [<a href="http://www.mdnug.org/">Melbourne</a>]</li>
    </ul>
    </li>

    <li id="computing-networking" class="collapsible">
    <h3>Networking</h3>
    <ul>
    <li><a href="http://www.cisco.com/">Cisco</a> [<a href="https://learningnetwork.cisco.com/index.jspa" title="Cisco Learning Network">Learning</a>]</li>
    <li><a href="http://netfilter.org/">netfilter/iptables</a></li>
    <li><a href="http://www.rfc.net/"><abbr title="Request for Comments">RFC</abbr> Repository</a></li>
    </ul>
    </li>

    <li id="computing-languages-perl" class="collapsible">
    <h3>Perl</h3>
    <ul>
    <li><a href="http://www.activestate.com/community">ActiveState Community</a></li>
    <li><a href="http://e-p-i-c.sourceforge.net/">EPIC Perl IDE</a></li>
    <li><a href="http://www.perl.org/">Perl</a> [<a href="http://perldoc.perl.org/" title="Perl Documentation">Documentation</a>]</li>
    <li><a href="http://www.pm.org/">Perl Mongers</a></li>
    <li><a href="http://www.perlmonks.org">Perl Monks</a></li>
    <li><a href="http://rakudo.org/">Rakudo Perl 6</a></li>
    </ul>
    </li>

    <li id="computing-languages-python" class="collapsible">
    <h3>Python</h3>
    <ul>
    <li><a href="http://diveintopython.org">Dive Into Python</a></li>
    <li><a href="http://www.ironpython.com/">IronPython</a></li>
    <li><a href="http://www.rmi.net/~lutz/">Mark Lutz's Book Support Site</a></li>
    <li><a href="http://pypy.org/">PyPy</a></li>
    <li><a href="http://www.python.org/">Python</a> [<a href="http://docs.python.org/" title="Python Documentation">Documentation</a> <a href="http://www.python.org/pypi/" title="Python Cheese Shop">Modules</a>]</li>
    <li><a href="http://pyvideo.org/speaker/138/raymond-hettinger">Raymond Hettinger's talks on pyvideo.org</a></li>
    <li><a href="http://www.stackless.com/">Stackless Python</a></li>
    </ul>
    </li>

    <li id="computing-languages-ruby" class="collapsible">
    <h3>Ruby</h3>
    <ul>
    <li><a href="http://www.ruby-lang.org/">Ruby</a></li>
    <li><a href="http://www.ruby-doc.org/">Ruby-Doc</a> [<a href="http://www.ruby-doc.org/core/" title="Ruby Core Docs">1.9 Core Docs</a> <a href="http://www.ruby-doc.org/core-1.8.7/" title="Ruby Core 1.8.7 Docs">1.8 Core Docs</a>]</li>
    <li><a href="http://www.rubyonrails.org/">Ruby on Rails</a></li>
    </ul>
    </li>

    <li id="computing-spam" class="collapsible">
    <h3>Spam</h3>
    <ul>
    <li><a href="http://www.paulgraham.com/spam.html">A Plan For Spam</a></li>
    <li><a href="http://www.cauce.org/"><acronym title="Coalition Against Unsolicited Commercial Email">CAUCE</acronym></a></li>
    <li><a href="http://www.cloudmark.com/">Cloudmark</a></li>
    <li><a href="http://www.dnsbl.info/">DNSbl Information</a></li>
    <li><a href="http://www.dkim.org/">DomainKeys Identified Mail</a></li>
    <li><a href="http://dspam.nuclearelephant.com/">DSPAM</a></li>
    <li><a href="http://getpopfile.org/">POPFile</a></li>
    <li><a href="http://www.openspf.org/">Sender Policy Framework</a></li>
    <li><a href="http://www.au.sorbs.net/">SORBS</a></li>
    <li><a href="http://spamassassin.apache.org/">SpamAssassin</a></li>
    <li><a href="http://www.spamcop.net/">SpamCop</a></li>
    </ul>
    </li>

    <li id="computing-testing" class="collapsible">
    <h3>Testing</h3>
    <ul>
    <li><a href="http://www.junit.org/">JUnit</a></li>
    <li><a href="http://www.nunit.org/">NUnit</a></li>
    <li><a href="http://www.voidspace.org.uk/python/mock/">Python Mock</a> [<a href="http://www.voidspace.org.uk/python/mock/mock.html" title="The Mock Class">Mock Class</a>]</li>
    <li><a href="http://pyunit.sourceforge.net/pyunit.html">PyUnit Documentation</a></li>
    </ul>
    </li>

    <li id="computing-unix" class="collapsible">
    <h3>UNIX</h3>
    <ul>

        <li id="computing-unix-bsd" class="collapsible">
        <h4>BSD</h4>
        <ul>
        <li><a href="http://docs.freebsd.org/44doc/"><abbr title="Berkeley Software Distribution">BSD</abbr> Documentation</a></li>
        <li><a href="http://www.freebsd.org/">FreeBSD</a> [<a href="http://www.freebsd.org/doc/en_US.ISO8859-1/books/developers-handbook/index.html" title="FreeBSD Developers' Handbook">Developers' Handbook</a> <a href="http://www.freebsd.org/cgi/man.cgi" title="FreeBSD Manual Pages">Manual Pages</a>]</li>
        <li>FreeBSD User Groups [<a href="http://www.vicfug.au.freebsd.org/" title="Victorian FreeBSD Users Group">VicFUG</a>]</li>
        <li><a href="http://www.netbsd.org/">NetBSD</a></li>
        <li><a href="http://www.openbsd.org/">OpenBSD</a></li>
        </ul>
        </li>

        <li id="computing-unix-cygwin" class="collapsible">
        <h4>Cygwin</h4>
        <ul>
        <li><a href="http://www.cygwin.com/">Cygwin</a></li>
        </ul>
        </li>

        <li id="computing-unix-forums" class="collapsible">
        <h4>Forums</h4>
        <ul>
        <li><a href="http://unix.stackexchange.com/">Unix and Linux StackExchange</a></li>
        <li><a href="http://serverfault.com/">ServerFault</a></li>
        </ul>
        </li>

        <li id="computing-unix-gnu" class="collapsible">
        <h4>GNU/Linux</h4>
        <ul>
        <li><a href="http://www.debian.org/">Debian</a> [<a href="http://bugs.debian.org/" title="Debian Bug Tracking System">BTS</a> <a href="http://packages.debian.org/" title="Debian Packages">Packages</a>]</li>
        <li><a href="http://www.distrowatch.com/">DistroWatch</a></li>
        <li><a href="http://fedoraproject.org/">Fedora</a> [<a href="http://www.fedoraproject.org/" title="Fedora Project">Project</a> <a href="http://www.fedoratracker.org/" title="Fedora Tracker">Tracker</a>]</li>
        <li><a href="http://www.gnu.org/"><abbr title="GNU's not UNIX">GNU</abbr></a> [<!--<a href="http://gcc.gnu.org/onlinedocs/gcc/" title="Using the GNU Compiler Collection">Compiler Manual</a> --><a href="http://www.gnu.org/manual/" title="GNU Manuals">Manuals</a> <a href="http://directory.fsf.org/" title="Free Software Directory">Software Directory</a>]</li>
        <li><a href="http://www.kernelnewbies.org/">KernelNewbies</a></li>
        <li><a href="http://lxr.linux.no/source/">Linux Cross Reference</a></li>
        <li><a href="http://www.kernel.org/">Linux Kernel Archives</a></li>
        <li>Linux User Groups [<a href="http://www.linuxsa.org.au/">Linux SA</a> <a href="http://www.luv.asn.au/" title="Linux Users of Victoria">LUV</a>]</li>
        <li><a href="http://www.osdir.com/">OSDir.com</a></li>
        <li><a href="http://www.redhat.com/">Red Hat</a> [<a href="http://www.redhat.com/docs/manuals/" title="Red Hat Manuals">Manuals</a>]</li>
        <li><a href="http://www.ubuntu.com/">Ubuntu Linux</a> [<a href="http://bugzilla.ubuntu.com/" title="Ubuntu Bugzilla">Bugzilla</a> <a href="http://www.ubuntuforums.org/" title="Ubuntu Forums">Forums</a>]</li>
        </ul>
        </li>

        <li id="computing-unix-hp" class="collapsible">
        <h4>HP</h4>
        <ul>
        <li><a href="http://www.hp.com/"><abbr title="Hewlett Packard">HP</abbr></a> [<a href="http://software.hp.com/" title="HP Software Depot">Software Depot</a> <a href="http://docs.hp.com/" title="HP Technical Documentation">Technical Documentation</a>]</li>
        </ul>
        </li>

        <li id="computing-unix-minix" class="collapsible">
        <h4>MINIX</h4>
        <ul>
        <li><a href="http://www.minix3.org/">MINIX 3</a></li>
        </ul>
        </li>

        <li id="computing-unix-reference" class="collapsible">
        <h4>Reference</h4>
        <ul>
        <li><a href="http://www.gnu.org/"><abbr title="GNU's not UNIX">GNU</abbr></a> [<!--<a href="http://gcc.gnu.org/onlinedocs/gcc/" title="Using the GNU Compiler Collection">Compiler Manual</a> --><a href="http://www.gnu.org/manual/" title="GNU Manuals">Manuals</a> <a href="http://directory.fsf.org/" title="Free Software Directory">Software Directory</a>]</li>
        <li><a href="http://www.faqs.org/">Internet <acronym title="Frequently Asked Questions">FAQ</acronym> Archives</a></li>
        <li><a href="http://www.kernel.org/doc/man-pages/">Linux Man Pages Project</a></li>
        <li><a href="http://man.cx/">man.cx</a></li>
        <li><a href="http://www.ietf.org/rfc.html">Requests for Comments (RFCs)"</a></li>
        <li><a href="http://www.bhami.com/rosetta.html">Rosetta Stone for Unix</a></li>
        <li><a href="http://www.sgi.com/">SGI</a> [<a href="http://techpubs.sgi.com/" title="SGI TechPubs">TechPubs</a>]</li>
        <li><a href="http://www.unix.org/single_unix_specification/">Single UNIX Specification (incorporating POSIX)</a> [<a href="http://pubs.opengroup.org/onlinepubs/009695399/toc.htm">Issue 6/2004</a> <a href="http://pubs.opengroup.org/onlinepubs/9699919799/toc.htm">Issue 7/2008</a>]</li>
        </ul>
        </li>

        <li id="computing-unix-shells" class="collapsible">
        <h4>Shells</h4>
        <ul>
        <li><a href="http://www.gnu.org/software/bash/">Bash</a> [<a href="http://www.gnu.org/software/bash/manual/bashref.html" title="Bash Reference Manual">Manual</a> <a href="http://man.cx/bash(1)">man.cx manual</a>]</li>
        <li><a href="http://fishshell.com"><acronym title="Friendly Interactive Shell">Fish</acronym></a></li>
        <li><a href="http://www.kornshell.com/">KornShell</a> [<a href="http://www.kornshell.com/doc/" title="KornShell Documentation">Documentation</a>]</li>
        <li><a href="http://zsh.sourceforge.net/">Z Shell</a></li>
        </ul>
        </li>

        <li id="computing-unix-servers" class="collapsible">
        <h4>Servers</h4>
        <ul>
        <li><a href="http://httpd.apache.org/docs-project/">Apache HTTP Server Online Documentation</a></li>
        <li><a href="http://www.lighttpd.net/">lighttpd</a> [<a href="http://redmine.lighttpd.net/wiki/lighttpd" title="Lighttpd Wiki">Wiki</a>]</li>
        <li><a href="http://www.postfix.org/">Postfix</a></li>
        <li><a href="http://www.samba.org/">Samba</a> [<a href="http://www.samba.org/samba/docs/" title="Samba Documentation">Documentation</a>]</li>
        </ul>
        </li>
    </ul>
    </li>

    <li id="computing-versioncontrol" class="collapsible">
    <h3>Version Control</h3>
    <ul>
        <li id="computing-versioncontrol-bazaar" class="collapsible">
        <h4>Bazaar</h4>
        <ul>
            <li><a href="http://bazaar-vcs.org/">Bazaar Version Control</a></li>
        </ul>
        </li>
        <li id="computing-versioncontrol-cvs" class="collapsible">
        <h4>CVS</h4>
        <ul>
            <li><a href="https://www.cvshome.org/docs/manual/">Version Management with <abbr title="Concurrent Versions System">CVS</abbr></a></li>
        </ul>
        </li>
        <li id="computing-versioncontrol-git" class="collapsible">
        <h4>Git</h4>
        <ul>
            <li><a href="http://git-scm.com/">Git</a> [<a href="http://git-scm.com/documentation" title="Git Documentation">Documentation Links</a>]</li>
            <li><a href="http://book.git-scm.com/" title="Git Community Book">Git Community Book</a></li>
            <li><a href="http://www.kernel.org/pub/software/scm/git/docs/">Git Docs</a> [<a href="http://www.kernel.org/pub/software/scm/git/docs/gittutorial.html">Tutorial</a> <a href="http://www.kernel.org/pub/software/scm/git/docs/user-manual.html">User's Manual</a> <a href="https://git.wiki.kernel.org/index.php/GitDocumentation" title="GitDocumentation Wiki">Wiki</a>]</li>
            <li><a href="http://eagain.net/articles/git-for-computer-scientists/">Git for Computer Scientists</a></li>
            <li><a href="http://gitcasts.com/">GitCasts</a></li>
            <li><a href="https://github.com/">github</a> [<a href="http://help.github.com/">Guides</a>]</li>
            <li><a href="http://gitready.com/">git ready</a></li>
            <li><a href="http://gitref.org/">GitRef</a></li>
            <li><a href="http://progit.org/book/">Pro Git Book</a></li>
        </ul>
        </li>
        <li id="computing-versioncontrol-mercurial" class="collapsible">
        <h4>Mercurial</h4>
        <ul>
            <li><a href="http://www.selenic.com/mercurial/">Mercurial</a> [<a href="http://mercurial.selenic.com/guide/" title="Mercurial Guide">Guide</a> <a href="http://mercurial.selenic.com/wiki/">Wiki</a>]</li>
            <li><a href="http://hgbook.red-bean.com/read/">Mercurial: The Definitive Guide</a></li>
        </ul>
        </li>
        <li id="computing-versioncontrol-monotone" class="collapsible">
        <h4>Monotone</h4>
        <ul>
            <li><a href="http://monotone.ca/">monotone</a></li>
        </ul>
        </li>
        <li id="computing-versioncontrol-subversion" class="collapsible">
        <h4>Subversion</h4>
        <ul>
            <li><a href="http://svnbook.red-bean.com/">Version Control with Subversion</a></li>
        </ul>
        </li>
    </ul>
    </li>

    <li id="computing-web" class="collapsible">
    <h3>Web</h3>
    <ul>
    <li><a href="http://www.alistapart.com/">A List Apart</a></li>
    <li><a href="http://www.amazon.com/gp/aws/landing.html">Amazon Web Services</a></li>
    <li><a href="http://www.asp.net/">ASP.NET</a></li>
    <li><a href="http://www.brainjar.com/">BrainJar</a></li>
    <li><a href="http://cakephp.org/">CakePHP</a></li>
    <li><a href="http://jashkenas.github.com/coffee-script/">CoffeeScript</a></li>
    <li><a href="http://www.djangoproject.com/">django</a></li>
    <li><a href="http://dojotoolkit.org/">Dojo</a></li>
    <li><a href="http://www.google.com/chrome/intl/en/landing_chrome.html?hl=en">Google Chrome</a></li>
    <li><a href="http://www.gotdotnet.com/">GotDotNet</a></li>
    <li><a href="http://haml-lang.com/">HAML</a></li>
    <li><a href="http://www.intensivstation.ch/en/templates/">intensivstation CSS Templates</a></li>
    <li><a href="http://jquery.com/">jQuery</a></li>
    <li><a href="http://www.maxdesign.com.au/presentation/index.cfm">Max Design Presentations and Articles</a></li>
    <li><a href="http://www.maxdesign.com.au/presentation/page_layouts/index.cfm">Max Design Sample CSS Page Layouts</a></li>
    <li><a href="http://msdn.microsoft.com/library/default.asp?url=/library/en-us/dnanchor/html/anch_webdev.asp"><abbr title="Microsoft Developer Network">MSDN</abbr> Web Development</a></li>
    <li><a href="http://www.mochikit.com/">MochiKit</a></li>
    <li><a href="http://www.mozilla.org/docs/dom/domref/">Mozilla Gecko <acronym title="Document Object Model">DOM</acronym> Reference</a></li>
    <li><a href="http://www.mozilla.org/docs/web-developer/">Mozilla Web Developer Documentation</a></li>
    <li><a class="unavailable" href="http://devedge.netscape.com/library/manuals/">Netscape DevEdge Manuals</a> [<a href="http://devedge-temp.mozilla.org/index_en.html">d.m.o. mirror</a>]</li>
    <li><a href="http://www.satzansatz.de/cssd/onhavinglayout.html">On Having Layout: The concept of hasLayout in IE/Win</a></li>
    <li><a href="http://www.php.net/">PHP</a> [<a href="http://pear.php.net/">PEAR</a>]</li>
    <li><a href="http://phpsec.org/">PHP Security Consortium</a></li>
    <li>PHP User Groups [<a href="http://melbourne.ug.php.net/">Melbourne</a>]</li>
    <li><a href="http://www.polymer-project.org/">Polymer</a></li>
    <li><a href="http://propel.phpdb.org/trac/">Propel</a></li>
    <li><a href="http://prototype.conio.net/">Prototype JavaScript Framework</a></li>
    <li><a href="http://qooxdoo.oss.schlund.de/">qooxdoo</a></li>
    <li><a href="http://www.quirksmode.org/">QuirksMode</a></li>
    <li><a href="http://www.rubyonrails.org/">Ruby on Rails</a></li>
    <li><a href="http://sass-lang.com/">Sass</a></li>
    <li><a href="http://www.sitepoint.com/">SitePoint</a></li>
    <li><a href="http://www.stopdesign.com/">stopdesign</a></li>
    <li><a href="http://blog.teamtreehouse.com/">Treehouse</a></li>
    <li><a href="http://userscripts.org/">Userscripts.org</a></li>
    <li><a href="http://www.whatwg.org/"><acronym title="Web Hypertext Application Technology">WHAT</acronym><abbr title="Working Group">WG</abbr></a> [<a href="http://whatwg.org/specs/web-apps/current-work/">Web Apps</a> <a href="http://whatwg.org/specs/web-forms/current-work/">Web Forms</a>]</li>
    <li><a href="http://www.w3.org/MarkUp/"><abbr title="World Wide Web Consortium">W3C</abbr> Standards</a> [<a href="http://www.w3.org/TR/CSS21/"><abbr title="Cascading Style Sheets">CSS</abbr></a> <a href="http://www.w3.org/DOM/DOMTR"><abbr title="Document Object Model">DOM</abbr></a> <a href="http://www.w3.org/TR/html401/"><abbr title="HyperText Markup Language">HTML</abbr></a> <a href="http://www.w3.org/TR/xhtml1/"><abbr title="Extensible HyperText Markup Language">XHTML</abbr></a> <a href="http://www.w3.org/TR/xml11/"><abbr title="Extensible Markup Language">XML</abbr></a>]</li>
    <li><a href="http://developer.yahoo.net/">Yahoo! Developer Network</a> [<a href="http://developer.yahoo.com/yui/">YUI</a>]</li>
    <li><a href="http://zend.com/">Zend</a></li>
    </ul>
    </li>

    <li id="computing-windows" class="collapsible">
    <h3>Windows</h3>
    <ul>
    <li><a href="http://cc2e.com/">Code Complete 2</a></li>
    <li><a href="http://msdn.microsoft.com/coding4fun/">Coding4Fun</a></li>
    <li><a href="http://discuss.fogcreek.com/">Fog Creek Forums</a></li>
    <li><a href="http://www.joelonsoftware.com/">Joel on Software</a></li>
    <li><a href="http://www.microsoft.com/">Microsoft</a></li>
    <li><a href="http://msdn.microsoft.com/default.aspx"><abbr title="Microsoft Developer Network">MSDN</abbr></a></li>
    <li><a href="http://msdn.microsoft.com/library/"><abbr title="Microsoft Developer's Network">MSDN</abbr> Library</a></li>
    <li><a href="http://msdn.microsoft.com/visualc/">Microsoft Visual C++ Developer Center</a></li>
    <li><a href="http://www.research.att.com/sw/tools/uwin/">UWIN</a></li>
    <li><a href="http://www.microsoft.com/windows2000/techinfo/proddoc/default.asp">Windows 2000 Product Documentation</a></li>
    </ul>
    </li>

</ul>
</div>

<div id="eating" class="collapsible">
<h2>Eating and Dining</h2>
<ul>
    <li><a href="http://www.opentable.com/">OpenTable</a></li>
    <li><a href="http://urbanspoon.com/">Urbanspoon</a></li>
</ul>
</div>

<div id="employment" class="collapsible">
<h2>Employment</h2>
<ul>
    <li id="employment-general" class="collapsible">
    <h3>General</h3>
    <ul>
    <li><a href="http://www.jobsearch.gov.au/">Australian JobSearch</a></li>
    <li><a href="http://www.careerone.com.au/">Career One</a></li>
    <li><a href="http://www.glassdoor.com/">Glassdoor</a></li>
    <li><a href="https://www.linkedin.com/">LinkedIn</a></li>
    <li><a href="http://www.mycareer.com.au/">MyCareer</a></li>
    <li><a href="http://www.seek.com.au/">Seek Australia</a></li>
    </ul>
    </li>
    <li id="employment-companies" class="collapsible">
    <h3>Company-Specific Listings</h3>
    <ul>
    <li><a href="http://www.aconex.com/company/careers">Aconex Careers</a></li>
    <li><a href="http://www.amazon.com/gp/jobs">Amazon Jobs</a></li>
    <li><a href="https://www.atlassian.com/company/careers">Atlassian Careers</a></li>
    <li><a href="http://www.facebook.com/careers/">Facebook Careers</a></li>
    <li><a href="http://www.galileoutah.com/openjobs">Galileo Jobs</a></li>
    <li><a href="http://www.google.com/intl/en/jobs/index.html">Google Jobs</a> [<a href="http://www.google.com.au/intl/en/jobs/index.html" title="Google Australia - Let's Work Together">Australia</a>]</li>
    <li><a href="http://www.linkedin.com/job/">LinkedIn Jobs</a></li>
    <li><a href="http://www.lonelyplanet.com/jobs/">Lonely Planet Jobs</a></li>
    <li><a href="http://careers.microsoft.com/">Microsoft Careers</a></li>
    <li><a href="http://jobs.netflix.com/">Netflix Jobs</a></li>
    <li><a href="http://careers.realestate.com.au/">RealEstate.com.au Careers</a></li>
    <li><a href="http://jobs.redhat.com/">Red Hat Jobs</a></li>
    <li><a href="https://www.spotify.com/us/jobs/">Spotify Jobs</a></li>
    <li><a href="https://about.twitter.com/careers">Working at Twitter</a></li>
    <li><a href="https://careers.yahoo.com/us/">Yahoo Careers</a></li>
    </ul>
    </li>
</ul>
</div>

<div id="entertainment" class="collapsible">
<h2>Entertainment</h2>
<ul>
    <li><a href="http://www.theage.com.au/entertainment/">The Age Entertainment</a></li>
    <li><a href="http://melbourne.citysearch.com.au/">CitySearch Melbourne</a></li>
</ul>
</div>

<div id="finance" class="collapsible">
<h2>Finance</h2>
<ul>
    <li id="finance-au" class="collapsible">
    <h3>Australia</h3>
    <ul>
        <li><a href="http://www.anz.com/">ANZ Bank</a></li>
        <li><a href="http://www.afr.com/">Australian Financial Review</a></li>
        <li><a href="http://www.ato.gov.au/">Australian Taxation Office</a></li>
        <li><a href="http://www.bankwest.com.au/">BankWest</a></li>
        <li><a href="http://www.colonialfirststate.com.au/">Colonial First State</a></li>
        <li><a href="http://www.commbank.com.au/">Commonwealth Bank</a></li>
        <li><a href="http://www.ethicalinvestor.com.au/">Ethical Investor</a></li>
        <li><a href="http://www.ingdirect.com.au/">ING Direct Australia</a></li>
        <li><a href="http://moneymanager.smh.com.au/">moneymanager.com.au</a></li>
        <li><a href="http://www.nab.com.au/">NAB</a></li>
        <li><a href="http://money.ninemsn.com.au/">NineMSN Money</a></li>
        <li><a href="http://www.onepath.com.au/">OnePath</a></li>
        <li><a href="http://www.stgeorge.com.au/">St George Bank</a></li>
        <li><a href="http://www.westpac.com.au/">Westpac</a></li>
    </ul>
    </li>
    <li id="finance-us" class="collapsible">
    <h3>United States</h3>
    <ul>
        <li><a href="http://www.ally.com/">Ally</a></li>
        <li><a href="https://www.bankofamerica.com/">Bank of America</a></li>
        <li><a href="https://www.capitalone.com/">Capital One</a></li>
        <li><a href="https://www.chase.com/">Chase</a></li>
        <li><a href="https://www.discover.com/">Discover</a></li>
        <li><a href="http://www.nerdwallet.com/">Nerd Wallet</a></li>
    </ul>
    </li>
</ul>
</div>

<div id="fitness" class="collapsible">
<h2>Fitness</h2>
<ul>
    <li><a href="http://www.6degreessouth.com.au/">6 Degrees South</a></li>
    <li><a href="http://www.eqhf.com.au/">Equilibrium Health and Fitness</a></li>
    <li><a href="http://www.fitnessfirst.com.au/">Fitness First</a></li>
    <li><a href="http://www.fitnessvictoria.com.au/">Fitness Victoria</a></li>
    <li><a href="http://www.genesisfitness.com.au/">Genesis Fitness</a></li>
    <li><a href="http://www.goodgymguide.com.au/">Good Gym Guide</a></li>
    <li><a href="http://www.gymlink.com.au/">Gymlink Australia</a></li>
</ul>
</div>

<div id="gadgets" class="collapsible">
<h2>Gadgets</h2>
<ul>
<li><a href="http://www.engadget.com/">Engadget</a></li>
<li><a href="http://www.gizmodo.com/">Gizmodo</a></li>
<li><a href="http://www.tomshardware.com/">Tom's Hardware Guide</a></li>
</ul>
</div>

<div id="games" class="collapsible">
<h2>Games</h2>
<ul>
    <li><a href="http://www.fileplanet.com/">FilePlanet</a></li>
    <li><a href="http://www.firaxis.com/">Firaxis Games</a></li>
    <li><a href="http://www.games4win.com/">games4win</a></li>
    <li><a href="http://www.gamespot.com/">GameSpot</a></li>
    <li><a href="http://www.gamespy.com/">GameSpy</a></li>
    <li><a href="http://www.gametap.com/">GameTap</a></li>
    <li><a href="http://www.idsoftware.com/">id Software</a></li>
    <li><a href="http://www.ign.com/">IGN</a></li>
    <li><a href="http://www.megagames.com/">MegaGames</a></li>
    <li><a href="http://www.mobygames.com/">MobyGames</a></li>
    <li><a href="http://www.telltalegames.com/">Telltale Games</a></li>
    <li><a href="http://videogames.yahoo.com/">Yahoo! Video Games</a></li>
</ul>
</div>

<div id="humor" class="collapsible">
<h2>Humor</h2>
<ul>
    <li><a href="http://www.abc.net.au/tv/chaser/war/">The Chaser's War on Everything</a></li>
    <li><a href="http://www.dilbert.com/">Dilbert</a></li>
    <li><a href="http://www.theonion.com/">The Onion</a></li>
	<li><a href="http://www.nbc.com/Saturday_Night_Live/">Saturday Night Live</a></li>
	<li><a href="http://www.xkcd.com/">xkcd</a></li>
</ul>
</div>

<div id="internet" class="collapsible">
<h2>Internet</h2>
<ul>
    <li id="internet-dns" class="collapsible">
    <h2>DNS and Domains</h2>
    <ul>
        <li><a href="http://www.no-ip.com/">No-IP</a></li>
        <li><a href="http://www.dnsstuff.com/">DNS Stuff</a></li>
        <li><a href="http://dnsbl.toolbot.com/">Toolbot <abbr title="Domain Name System Blacklist">DNSBL</abbr> Search</a></li>
        <li><a href="http://www.dyndns.com/">DynDNS</a></li>
        <li><a href="http://www.easydns.com/">easyDNS</a></li>
        <li><a href="http://www.godaddy.com/">GoDaddy.com</a></li>
        <li><a href="http://www.kloth.net/services/">Kloth.Net Internet Services</a></li>
        <li><a href="http://uptime.netcraft.com/up/">Netcraft What's That Site Running</a></li>
        <li><a href="http://www.netregistry.com.au/">NetRegistry</a></li>
        <li><a href="http://www.opendns.com/">OpenDNS</a></li>
        <li><a href="http://zoneedit.com/">zoneedit</a></li>
    </ul>
    </li>

    <li id="internet-hosting" class="collapsible">
    <h2>Hosting</h2>
    <ul>
        <li><a href="http://aws.amazon.com/ec2/">Amazon EC2</a></li>
        <li><a href="https://www.digitalocean.com/">DigitalOcean</a>A/li>
        <li><a href="http://www.dreamhost.com/">Dreamhost</a></li>
        <li><a href="https://cloud.google.com/products/compute-engine/">Google Compute Engine</a></li>
        <li><a href="https://www.linode.com/">Linode</a></li>
    </ul>
    </li>

    <li id="internet-isps" class="collapsible">
    <h2>ISPs</h2>
    <ul>
        <li><a href="http://go.bigpond.com/home/index.jsp">BigPond</a></li>
        <li><a href="http://www.iinet.net.au/">iiNet</a></li>
        <li><a href="http://www.internode.on.net/">Internode</a></li>
        <li><a href="http://www.optus.com.au/shop/broadband">Optus Broadband</a></li>
        <li><a href="http://www.tpg.com.au/">TPG</a></li>
    </ul>
    </li>

    <li id="internet-voip" class="collapsible">
    <h2>VoIP</h2>
    <ul>
        <li><a href="https://www.google.com/hangouts/">Google Hangouts</a></li>
        <li><a href="http://www.skype.com/">Skype</a></li>
    </ul>
    </li>
</ul>
</div>

<div id="issues" class="collapsible">
<h2>Issues</h2>
<ul>
    <li><a href="http://www.abc.net.au/7.30/">The 7.30 Report</a></li>
    <li><a href="http://www.amnesty.org.au/">Amnesty International Australia</a></li>
    <li><a href="http://www.arena.org.au/">Arena</a></li>
    <li><a href="http://www.tai.org.au/">The Australia Institute</a></li>
    <li><a href="http://www.acfonline.org.au/">Australian Conservation Foundation</a></li>
    <li><a href="http://www.apo.org.au/">Australian Policy Online</a></li>
    <li><a href="http://www.redcross.org.au/">Australian Red Cross</a></li>
    <li><a href="http://bulletin.ninemsn.com.au/">The Bulletin</a></li>
    <li><a href="http://www.cato.org/">The Cato Institute</a></li>
    <li><a href="http://www.cis.org.au/">Centre for Independent Studies</a></li>
    <li><a href="http://www.csmonitor.com/">Christian Science Monitor</a></li>
    <li><a href="http://www.commondreams.org/">Common Dreams</a></li>
    <li><a href="http://www.crikey.com.au/">Crikey</a></li>
    <li><a href="http://www.crooksandliars.com/">Crooks and Liars</a></li>
    <li><a href="http://www.economist.com/">The Economist</a></li>
    <li><a href="http://www.etalkinghead.com">eTalkinghead</a></li>
    <li><a href="http://www.efa.org.au/">Electronic Frontiers Australia</a></li>
    <li><a href="http://www.eff.org/">Electronic Frontiers Foundation</a></li>
    <li><a href="http://www.forbes.com/">Forbes</a></li>
    <li><a href="http://www.freerepublic.com/">FreeRepublic</a></li>
    <li><a href="http://www.getup.org.au/">GetUp</a></li>
    <li><a href="http://www.groklaw.net/">Groklaw</a></li>
    <li><a href="http://www.independenceinstitute.org/">Independence Institute</a></li>
    <li><a href="http://www.indymedia.org/">Independent Media Center</a></li>
    <li><a href="http://www.ipa.org.au/">Institute of Public Affairs</a></li>
    <li><a href="http://www.kuro5hin.org/">Kuro5hin</a></li>
    <li><a href="http://www.motherjones.com/">MotherJones</a></li>
    <li><a href="http://www.thenation.com/">The Nation</a></li>
    <li><a href="http://www.nationalreview.com/">National Review</a></li>
    <li><a href="http://www.newamericancentury.org/">New American Century</a></li>
    <li><a href="http://www.objectivistcenter.org/">Objectivist Center</a></li>
    <li><a href="http://www.onlineopinion.com.au/">On Line Opinion</a></li>
    <li><a href="http://www.caa.org.au/">Oxfam Community Aid Abroad</a></li>
    <li><a href="http://www.reason.com/">Reason Online</a></li>
    <li><a href="http://www.salon.com/">Salon</a></li>
    <li><a href="http://slate.msn.com/">Slate Magazine</a></li>
    <li><a href="http://www.smh.com.au/news/opinion/">Sydney Morning Herald Opinion</a></li>
    <li><a href="http://www.time.com/">Time</a></li>
    <li><a href="http://www.usnews.com/">USNews</a></li>
</ul>
</div>

<div id="language" class="top collapsible">
<h2>Language</h2>
<ul>
    <li id="language-english" class="collapsible">
      <h3>English</h3>
      <ul>
        <li><a href="http://www.barnsdle.demon.co.uk/spell/">English Spelling Reform by David Barnsdale</a></li>
        <li><a href="http://www.spellingsociety.org/index.php">Spelling Society</a></li>
        <li><a href="http://www.valerieyule.com.au/spelling.htm">Valerie Yule's Spelling</a></li>
      </ul>
    </li>
    <li id="language-translation" class="collapsible">
      <h3>Translation</h3>
      <ul>
        <li><a href="http://babelfish.altavista.com/">Babel Fish</a></li>
        <li><a href="http://dict.leo.org/">LEO German-English Dictionary</a></li>
        <li><a href="https://translate.google.com/">Google Translate</a></li>
        <li><a href="http://dict.tu-chemnitz.de/">TU Chemnitz German-English Dictionary</a></li>
        <li><a href="http://www.wordreference.com/">WordReference.com</a></li>
      </ul>
    </li>
</ul>
</div>

<div id="learning" class="top collapsible">
<h2>Learning</h2>
<ul>
    <li><a href="http://ocw.mit.edu/">MIT OpenCourseWare</a></li>
    <li><a href="http://www.monash.edu.au/">Monash University</a></li>
    <li><a href="http://www.unimelb.edu.au/">University of Melbourne</a></li>
</ul>
</div>

<div id="libraries" class="collapsible">
<h2>Libraries</h2>
<ul>
    <li><a href="http://www.gleneira.vic.gov.au/Library/Catalogue/catalogueSearch.asp">Glen Eira Library &amp; Information Service</a></li>
    <li><a href="http://www.portphillip.vic.gov.au/library.html">Port Phillip Library</a></li>
    <li><a href="http://www.slv.vic.gov.au/">State Library of Victoria</a></li>
    <li><a href="http://www.stonnington.vic.gov.au/library/">Stonnington Library &amp; Information Service</a></li>
    <li><a href="http://www.ymrl.org.au/">Yarra-Melbourne Regional Library</a></li>
</ul>
</div>

<div id="links" class="collapsible">
<h2>Links</h2>
<ul>
    <li><a href="http://del.icio.us/mbwardle/">My del.icio.us favorites</a></li>
</ul>
</div>

<div id="mail" class="collapsible">
<h2>Mail</h2>
<ul>
    <li><a href="http://www.fastmail.fm/">FastMail</a></li>
    <li><a href="http://www.gmail.com/">Gmail</a></li>
    <li><a href="http://www.mail2web.com/">mail2web</a></li>
    <li><a href="http://www.hotmail.com/">Hotmail</a></li>
    <li><a href="http://www.outlook.com/">Outlook</a></li>
    <li><a href="http://www.runbox.com/">runbox</a></li>
    <li><a href="http://mail.yahoo.com/">Yahoo! Mail</a></li>
</ul>
</div>

<div id="maps" class="collapsible">
<h2>Maps</h2>
<ul>
    <li><a href="http://www.bing.com/maps/">Bing Maps</a></li>
    <li><a href="http://maps.google.com.au/">Google Maps</a></li>
    <li><a href="http://here.com/">Here</a></li>
    <li><a href="http://www.mapquest.com/">MapQuest</a></li>
    <li><a href="http://www.whereis.com/">Whereis</a></li>
    <li><a href="https://maps.yahoo.com/">Yahoo Maps</a></li>
</ul>
</div>

<div id="mobiles" class="collapsible">
<h2>Mobiles</h2>
<ul>
    <li><a href="http://www.att.com/shop/wireless.html">AT&T Wireless</a></li>
    <li><a href="http://www.optus.com.au/">Optus</a></li>
    <li><a href="http://www.telstra.com/">Telstra</a></li>
    <li><a href="http://www.t-mobile.com/">T-Mobile USA</a></li>
    <li><a href="http://www.verizonwireless.com/">Verizon Wireless</a></li>
    <li><a href="http://www.vodafone.com.au/">Vodafone Australia</a></li>
</ul>
</div>

<div id="movies" class="collapsible">
<h2>Movies</h2>
<ul>
    <li><a href="http://www.cinemanova.com.au/">Cinema Nova</a></li>
    <li><a href="http://www.imdb.com/">Internet Movie Database</a></li>
    <li><a href="http://www.metacritic.com/">metacritic</a></li>
    <li><a href="http://www.rottentomatoes.com/">Rotten Tomatoes</a></li>
    <li><a href="http://www.sbs.com.au/movieshow/">The Movie Show</a></li>
    <li><a href="http://www.yourmovies.com.au/">yourMovies</a></li>
</ul>
</div>

<div id="music" class="collapsible">
<h2>Music</h2>
<ul>
    <li><a href="http://www.allmusic.com/">All Music Guide</a></li>
    <li><a href="http://www.amo.org.au/">Australian Music Online</a></li>
    <li><a href="http://www.beat.com.au/">Beat Magazine</a></li>
    <li><a href="http://cdbaby.com">CD Baby</a></li>
    <li><a href="http://www.cmj.com/">CMJ</a></li>
    <li><a href="http://www.cornerhotel.com/">The Corner Hotel</a></li>
    <li><a href="http://www.salon.com/tech/feature/2000/06/14/love/">Courtney Love Does The Math</a></li>
    <li><a href="http://www.downhillbattle.org/">Downhill Battle</a></li>
    <li><a href="http://www.emusic.com/">eMusic</a></li>
    <li><a href="http://www.epitonic.com/">Epitonic.com</a></li>
    <li><a href="http://theesplanadehotel.com.au/espygigs/">The Esplanade Hotel</a></li>
    <li><a href="http://www.etn.fm/">ETN.fm</a></li>
    <li><a href="http://www.fasterlouder.com.au/">FasterLouder</a> [<a href="http://www.fasterlouder.com.au/index.php?city=2">Melbourne</a>]</li>
    <li><a href="http://gnoosic.com">gnoosic</a></li>
    <li><a href="http://www.indieinitiative.com/">Indie Initiative</a></li>
    <li><a href="http://www.inthemix.com.au/">inthemix.com.au</a></li>
    <li><a href="http://www.archive.org/audio/etreelisting-browse.php">Internet Archive Live Music</a></li>
    <li><a href="http://www.apple.com/itunes/">iTunes</a></li>
    <li><a href="http://www.jageruprising.com/">J&auml;ger Uprising</a></li>
    <li><a href="http://www.kcrw.com/">KCRW</a></li>
    <li><a href="http://www.last.fm/">last.fm</a></li>
    <li><a href="http://www.eff.org/share/">Let The Music Play</a></li>
    <li><a href="http://www.lyricsfreak.com/">LyricsFreak</a></li>
    <li><a href="http://www.lyricstime.com/">Lyrics Time</a></li>
    <li><a href="http://www.magnatune.com/">Magnatune</a></li>
    <li><a href="http://www.music-map.com/">Music Map</a></li>
    <li><a href="http://musicmobs.com/">musicmobs</a></li>
    <li><a href="http://www.mp3.com.au/">MP3.com.au</a></li>
    <li><a href="http://entertainment.msn.com/"><abbr title="Microsoft Network">MSN</abbr> Entertainment</a></li>
    <li><a href="http://www.musicbrainz.org/">MusicBrainz</a></li>
    <li><a href="http://www.musicmoz.org/">MusicMoz</a></li>
    <li><a href="http://www.nakeddwarf.com.au/">Naked Dwarf</a></li>
    <li><a href="http://www.nme.com/" title="New Musical Express">NME</a></li>
    <li><a href="http://www.nova100.com.au/">Nova</a></li>
    <li><a href="http://pandora.com/">Pandora</a></li>
    <li><a href="http://www.pbsfm.org.au/">PBS FM</a></li>
    <li><a href="http://www.negativland.com/albini.html">The Problem With Music</a></li>
	<li><a href="https://www.radioparadise.com/">Radio Paradise</a></li>
    <li><a href="http://www.the-breaks.com">The Rap Sample FAQ</a></li>
    <li><a href="http://music.guide.real.com/">Real Music Guide</a></li>
    <li><a href="http://www.shoutcast.com/">SHOUTcast</a></li>
    <li><a href="http://www.towerrecords.com/">Tower Records</a></li>
    <li><a href="http://www.triplej.abc.net.au/">triple j radio</a></li>
    <li><a href="http://www.pbs.org/wgbh/pages/frontline/shows/music/">The Way The Music Died</a></li>
    <li><a href="http://www.toad.com/gnu/whatswrong.html">What's Wrong With Copy Protection</a></li>
    <li><a href="http://www.woxy.com/">WOXY</a></li>
    <li><a href="http://www.xrmradio.com/">XRM Radio</a></li>
    <li><a href="http://music.yahoo.com/">Yahoo! Music</a></li>
    <li><a href="http://www.yourgigs.com.au/">yourGigs</a></li>
</ul>
</div>

<div id="news" class="collapsible">
<h2>News</h2>
<ul>
    <li><a href="http://www.abc.net.au/news/"><abbr title="Australian Broadcasting Corporation">ABC</abbr> News</a></li>
    <li><a href="http://www.theage.com.au/">The Age</a> [<a href="http://www.theage.com.au/technology/">Technology</a>]</li>
    <li><a href="http://www.ard.de/">ARD</a></li>
    <li><a href="http://theaustralian.news.com.au/">The Australian</a> [<a href="http://australianit.news.com.au/" title="Australian IT">IT</a>]</li>
    <li><a href="http://news.bbc.co.uk/"><abbr title="British Broadcasting Corporation">BBC</abbr> News</a> [<a href="http://news.bbc.co.uk/2/hi/technology/default.stm" title="BBC Technology News">Technology</a>]</li>
    <!--<li><a href="http://www.cnn.com/"><abbr title="Cable News Network">CNN</abbr></a> <a href="http://www.cnn.com/TECH/" title="CNN Technology News">Technology</a>]</li>-->
    <li><a href="http://www.dw-world.de/dw/">Deutsche Welle Aktuelles</a></li>
    <li><a href="http://www.digg.com/">digg</a></li>
    <li><a href="http://digitizor.com/">digitizor</a></li>
    <!--<li><a href="http://www.distrowatch.com/">DistroWatch</a></li>-->
    <li><a href="http://www.eweek.com/">eWeek</a></li>
    <!--<li><a href="http://news.fairfax.com.au/">Fairfax Digital News</a></li>-->
    <li><a href="http://www.faz.net/">Frankfurter Allegemeine Zeitung</a></li>
    <!--<li><a href="http://www.theglobeandmail.com/">Globe and Mail</a></li>-->
    <li><a href="http://news.google.com.au/">Google News Australia</a> [<a href="http://news.google.com.au/?ned=au&amp;topic=t" title="Google News Australia - Sci/Tech">Sci/Tech</a>]</li>
    <li><a href="http://news.google.de/">Google News Deutschland</a></li>
    <!--<li><a href="http://www.groklaw.net/">GrokLaw</a></li>-->
    <!--<li><a href="http://www.guardian.co.uk/worldlatest/">Guardian World</a></li>-->
    <li><a href="http://news.ycombinator.com/">Hacker News</a></li>
    <!--<li><a href="http://www.independent.co.uk/">Independent</a></li>-->
    <li><a href="http://www.itwire.com.au/">iTWire</a></li>
    <!--<li><a href="http://www.msnbc.msn.com/id/3032118/">MSNBC Technology/Science News</a></li>-->
    <li><a href="http://www.nytimes.com/">New York Times</a> [<a href="http://www.nytimes.com/pages/technology/" title="New York Times Technology">Technology</a>]</li>
    <li><a href="http://www.news.com/">News.com</a></li>
    <li><a href="http://www.news.com.au/">NEWS.com.au</a></li>
    <!--<li><a href="http://newsbreak.com.au/">NewsBreak</a></li>-->
    <!--<li><a href="http://neowin.net/">Neowin</a></li>-->
    <li><a href="http://www.newsforge.com/">NewsForge</a></li>
    <li><a href="http://www.osnews.com/"><abbr title="Operating System">OS</abbr>News</a></li>
    <li><a href="http://www.theregister.co.uk/">The Register</a></li>
    <!--<li><a href="http://www.securityfocus.com/">SecurityFocus</a></li>-->
    <li><a href="http://www.skynews.com.au/">Sky News Australia</a></li>
    <li><a href="http://www.slashdot.org/">Slashdot</a></li>
    <li><a href="http://www.spiegel.de/">Spiegel</a></li>
    <li><a href="http://www.stuttgarter-nachrichten.de/">Stuttgarter Nachrichten</a></li>
    <li><a href="http://www.sueddeutsche.de/">Sueddeutsche</a></li>
    <li><a href="http://www.smh.com.au/">Sydney Morning Herald</a></li>
    <li><a href="http://www.techcrunch.com/">TechCrunch</a></li>
    <!--<li><a href="http://www.techdirt.com/">Techdirt</a></li>-->
    <!--<li><a href="http://www.technewsworld.com/">TechNewsWorld.com</a></li>-->
    <!--<li><a href="http://www.thetimes.co.uk/">Times Online</a></li>-->
    <li><a href="http://venturebeat.com/">VentureBeat</a></li>
    <li><a href="http://www.washingtonpost.com/">The Washington Post</a> [<a href="http://www.washingtonpost.com/wp-dyn/technology/" title="Washington Post Technology">Technology</a>]</li>
    <li><a href="http://www.welt.de/">Die Welt</a></li>
    <li><a href="http://www.whirlpool.net.au/">Whirlpool</a></li>
</ul>
</div>

<div id="photos" class="collapsible">
<h2>Photos</h2>
<ul>
    <li><a href="http://www.23hq.com/">23</a></li>
    <li><a href="http://www.flickr.com/">Flickr</a></li>
    <li><a href="http://myphotoalbum.com/">MyPhotoAlbum</a></li>
    <li><a href="http://photos.yahoo.com/">Yahoo! Photos</a></li>
    <li><a href="http://www.zoto.com/">Zoto</a></li>
</ul>
</div>

<div id="politics" class="collapsible">
<h2>Politics</h2>
<ul>
    <li id="politics-au" class="collapsible">
    <h3>Australia</h3>
    <ul>
    <li><a href="http://www.democrats.org.au/">Australian Democrats</a></li>
    <li><a href="http://www.greens.org.au/">Australian Greens</a></li>
    <li><a href="http://www.alp.org.au/">Australian Labor Party</a></li>
    <li><a href="http://www.gravett.org/yobbo/quiz/quiz.htm">Australian Political Quiz</a></li>
    <li><a href="http://www.progressivealliance.org.au/">Australian Progressive Alliance</a></li>
	<li><a href="http://www.dlp.org.au/">Democratic Labor Party of Australia</a></li>
    <li><a href="http://www.familyfirst.org.au/">Family First</a></li>
	<li><a href="http://www.abc.net.au/insiders/">Insiders</a></li>
    <li><a href="http://www.ldp.org.au/">Liberty and Democracy Party</a></li>
    <li><a href="http://www.liberal.org.au/">Liberal Party of Australia</a></li>
    <li><a href="http://www.ozpolitics.info/fun/partyprf.htm">Political Party Preference Indicator</a></li>
    </ul>
    </li>

    <li id="politics-uk" class="collapsible">
    <h3>Britain</h3>
    <ul>
    <li><a href="http://www.conservative-party.org.uk/">Conservatives</a></li>
    <li><a href="http://www.greenparty.org.uk/">Greens</a></li>
    <li><a href="http://www.labour.org.uk/">Labour</a></li>
    <li><a href="http://www.libdems.org.uk/">Liberal Democrats</a></li>
    <li><a href="http://www.socialistparty.org.uk/">Socialists</a></li>
    </ul>
    </li>

    <li id="politics-us" class="collapsible">
    <h3>United States</h3>
    <ul>
    <li><a href="http://www.democrats.org/">Democratic National Committee</a></li>
    <li><a href="http://www.gp.org/">Green Party</a></li>
    <li><a href="http://www.lp.org/">Libertarian Party</a></li>
    <li><a href="http://www.moral-politics.com/xpolitics.aspx">Moral Politics Test</a></li>
    <li><a href="http://www.reformparty.org/">Reform Party</a></li>
    <li><a href="http://www.rnc.org/">Republican National Committee</a></li>
    <li><a href="http://www.lp.org/quiz/">World's Smallest Political Quiz</a></li>
    </ul>
    </li>
</ul>
</div>

<div id="portals" class="collapsible">
<h2>Portals</h2>
<ul>
    <li><a href="http://my.msn.com/">My MSN</a></li>
    <li><a href="http://my.yahoo.com/">My Yahoo!</a></li>
    <li><a href="http://www.news.com.au/">News Interactive</a></li>
</ul>
</div>

<div id="property" class="collapsible">
<h2>Property</h2>
<ul>
    <li><a href="http://www.domain.com.au/">Domain</a></li>
    <li><a href="http://www.flatmatefinders.com.au/">Flatmate Finders</a></li>
    <li><a href="http://www.realestate.com.au/">RealEstate.com.au</a></li>
    <li><a href="http://www.realestateview.com.au/">RealEstateView.com.au</a></li>
</ul>
</div>

<div id="quotes" class="collapsible">
<h2>Quotes</h2>
<ul>
    <li><a href="http://www.brainyquote.com/">BrainyQuote</a></li>
    <li><a href="http://www.bartleby.com/100/">Familiar Quotes</a></li>
    <li><a href="http://www.quotationspage.com/">Quotations Page</a></li>
    <li><a href="http://www.quoteland.com/">Quoteland</a></li>
    <li><a href="http://home.att.net/~jrhsc/jeff.html">Thomas Jefferson</a></li>
    <li><a href="http://www.wikiquote.org/">Wikiquote</a></li>
    <li><a href="http://www.wisdomquotes.com/">Wisdom Quotes</a></li>
</ul>
</div>

<div id="productivity" class="collapsible">
<h2>Productivity</h2>
<ul>
    <li><a href="http://www.43folders.com/">43 Folders</a></li>
    <li><a href="http://www.43places.com/">43 Places</a></li>
    <li><a href="http://www.43things.com/">43 Things</a></li>
    <li><a href="http://www.davidco.com/">Getting Things Done</a></li>
    <li><a href="http://www.lifehacker.com/">Lifehacker</a></li>
</ul>
</div>

<div id="relationships" class="collapsible">
<h2>Relationships</h2>
<ul>
    <li><a href="http://www.43things.com/">43 Things</a></li>
    <li><a href="http://www.craigslist.com/">craigslist</a></li>
    <li><a href="http://www.lavalife.com/">LavaLife</a></li>
    <li><a href="http://au.match.com/">Match.com Australia</a></li>
    <li><a href="http://www.meetup.com/">Meetup</a></li>
    <li><a href="http://www.okcupid.com/">Ok! Cupid</a></li>
    <li><a href="http://www.orkut.com/">Orkut</a></li>
    <li><a href="http://www.plentyoffish.com/">PlentyofFish.com</a></li>
    <li><a href="http://www.rsvp.com.au/">RSVP</a></li>
    <li><a href="http://web.tickle.com/">Tickle</a></li>
    <li><a href="http://au.personals.yahoo.com/">Yahoo! Australia Personals</a></li>
</ul>
</div>

<div id="reference" class="collapsible">
<h2>Reference</h2>
<ul>
    <li><a href="http://portal.acm.org/"><abbr title="Association for Computing Machinery">ACM</abbr> Digital Library</a></li>
    <li><a href="http://www.answers.com/">Answers.com</a></li>
    <li><a href="http://www.cia.gov/cia/publications/factbook/">CIA World Fact Book</a></li>
    <li><a href="http://citeseer.ist.psu.edu/cs">CiteSeer Scientific Literature Digital Library</a></li>
    <li><a href="http://www.dictionary.com/">Dictionary.com</a></li>
    <li><a href="http://www.everything2.com/">Everything<sub>2</sub></a></li>
    <li><a href="http://www.gleneira.vic.gov.au/library/">Glen Eira City Library</a></li>
    <li><a href="http://gmane.org/" title="Mail to News and Back Again">Gmane Mail to News Gateway</a></li>
    <li><a href="http://www.catb.org/jargon/" title="The Jargon File (also known as The New Hacker's Dictionary">The Jargon File</a></li>
    <li><a href="http://dict.leo.org/?lang=en"><acronym title="Link Everything Online">LEO</acronym> English-German Dictionary</a></li>
    <li><a href="http://safari.oreilly.com/">Safari Bookshelf</a> [<a href="http://proquest.safaribooksonline.com.ezproxy.lib.monash.edu.au/">Monash</a>]</li>
    <li><a href="http://www.wikipedia.org/">Wikipedia</a></li>
    <li><a href="http://www.wordiq.com/">wordIQ</a></li>
    <li><a href="http://www.wordreference.com/">WordReference.com</a></li>
    <li><a href="http://www.whitepages.com.au/worldtime/callwiz">World Time &amp; Dialling Codes</a></li>
    <li><a href="http://www.ymrl.org.au/">Yarra-Melbourne Regional Library</a></li>
</ul>
</div>

<div id="science" class="collapsible">
<h2>Science</h2>
<ul>
    <li><a href="http://www.nasa.gov/"><acronym title="National Aeronautics and Space Administration">NASA</acronym></a></li>
    <li><a href="http://www.newscientist.com/">New Scientist</a></li>
    <li><a href="http://www.pbs.org/science/"><abbr title="Public Broadcasting Service">PBS</abbr> Science</a></li>
    <li><a href="http://www.sciam.com/">Scientific American</a></li>
    <li><a href="http://www.spectrum.ieee.org/">Spectrum</a></li>
</ul>
</div>

<div id="searching" class="collapsible">
<h2>Search</h2>
<ul>
    <li><a href="http://www.a9.com/">A9</a></li>
    <li><a href="http://www.alltheweb.com/">AlltheWeb.com</a></li>
    <li><a href="http://www.bing.com/">Bing</a></li>
    <li><a href="http://www.google.com/">Google</a> [<a href="http://groups.google.com/">Groups</a>]</li>
    <li><a href="http://www.whitepages.com.au/">White Pages Australia</a></li>
    <li><a href="http://search.yahoo.com/">Yahoo Search</a></li>
</ul>
</div>

<div id="shopping" class="collapsible">
<h2>Shopping</h2>
<ul>
    <li><a href="http://www.pc.net.au/">A.i. TECH</a></li>
    <li><a href="http://www.amazon.com/">Amazon.com</a></li>
    <li><a href="http://atlanticdvd.com.au/">Atlantic DVD</a></li>
    <li><a href="http://www.bookdepository.co.uk/">Book Depository</a></li>
    <li><a href="http://www.cd-wow.biz/">CD WOW!</a></li>
    <li><a href="http://www.chaosmusic.com/">chaosmusic</a></li>
    <li><a href="http://www.citysoftware.com.au/">City Software</a></li>
    <li><a href="http://www.cpl.net.au/">Computers &amp; Parts Land</a></li>
    <li><a href="http://www.cworld.com.au/">Computer World Australia</a></li>
    <li><a href="http://www.dse.com.au/">Dick Smith Electronics</a></li>
    <li><a href="http://www.ebay.com.au/">eBay Australia</a></li>
    <li><a href="http://www.elx.com.au/" title="ELX Australia (formerly EverythingLinux Australia)">ELX Australia</a></li>
    <li><a href="http://www.ezydvd.com.au/">ezyDVD.com.au</a></li>
    <li><a href="http://www.getonce.com.au/">GetOnce Australia</a></li>
    <li><a href="http://www.gnupress.org/">GNU Press</a></li>
    <li><a href="http://www.ht.com.au/">Harris Technology</a></li>
    <li><a href="http://www.jbhifionline.com.au/">JB Hi-Fi</a></li>
    <li><a href="http://www.mcgills.com.au/">McGill's Bookstore</a></li>
    <li><a href="http://www.sanity.com.au/">Sanity</a></li>
    <li><a href="http://www.scorptec.com.au/">Scorpion Technology</a></li>
    <li><a href="http://www.shopbot.com.au/">Shopbot.com.au</a></li>
    <li><a href="http://www.shopferret.com.au/">ShopFerret</a></li>
    <li><a href="http://www.thinkgeek.com/">ThinkGeek</a></li>
</ul>
</div>

<div id="sports" class="collapsible">
<h2>Sports</h2>
<ul>
    <li><a href="http://www.theage.com.au/sport/">The Age Sport</a></li>
    <li><a href="http://www.abc.net.au/sport/"><abbr title="Australian Broadcasting Corporation">ABC</abbr> Sport</a></li>
    <li><a href="http://www.afl.com.au/"><abbr title="Australian Footballl League">AFL</abbr></a></li>
    <li><a href="http://www.baggygreen.com.au/">BaggyGreen</a></li>
    <li><a href="http://news.bbc.co.uk/sport/"><abbr title="British Broadcasting Corporation">BBC</abbr> Sport</a></li>
    <li><a href="http://www.soccernet.com/"><abbr title="Entertainment and Sports Programming Network">ESPN</abbr> Soccernet</a></li>
    <li><a href="http://www.fifa.com/" title="International Association Football Federation">FIFA</a></li>
    <li><a href="http://www.fifaworldcup.com/">FIFA World Cup</a></li>
    <li><a href="http://www.footballaustralia.com.au/">Football Australia</a></li>
	<li><a href="http://au.fourfourtwo.com/">FourFourTwo Australia</a></li>
    <li><a href="http://foxsports.news.com.au/">Fox Sports Australia</a></li>
    <li><a href="http://www.mvfc.com.au/">Melbourne Victory</a></li>
    <li><a href="http://www.realfooty.com.au/">Realfooty</a></li>
    <li><a href="http://www.rugby.com.au/">Rugby Australia</a></li>
    <li><a href="http://www.skysports.com/">Sky Sports</a></li>
    <li><a href="http://www.sportal.com.au/">Sportal</a></li>
    <li><a href="http://www.uefa.com/" title="European Association Football Union">UEFA</a></li>
    <li><a href="http://twg.sbs.com.au/">The World Game</a></li>
</ul>
</div>

<div id="start" class="collapsible">
<h2>Start</h2>
<ul>
    <li><a href="http://www.google.com.au/">Google Australia</a></li>
    <li><a href="http://www.netvibes.com/">NetVibes</a></li>
    <li><a href="http://www.ninemsn.com.au/">NineMSN</a></li>
    <li><a href="http://www.protopage.com/">Protopage</a></li>
    <li><a href="http://www.start.com/1/">Start.com</a></li>
    <li><a href="http://www.live.com/">Windows Live</a></li>
    <li><a href="http://www.yahoo.com.au/">Yahoo! Australia</a></li>
</ul>
</div>

<div id="television" class="collapsible">
<h2>Television</h2>
<ul>
    <li><a href="http://www.abc.net.au/iview/">ABC iView</a> [<a href="http://www.iinet.net.au/my/media/abc/index.html">iiNet iView</a>]</li>
    <li><a href="http://www.yourtv.com.au/">your<abbr title="Television">TV</abbr></a></li>
</ul>
</div>

<div id="travel" class="collapsible">
<h2>Travel</h2>
<ul>
    <li><a href="http://www.hihostels.com/">Hostelling International</a></li>
    <li><a href="http://www.lonelyplanet.com/">Lonely Planet</a></li>
    <li><a href="http://www.metlinkmelbourne.com.au/">Metlink</a></li>
    <li><a href="http://australia.laborotech.com/">Nomad Australia</a></li>
    <li><a href="http://www.qantas.com.au/">Qantas</a></li>
    <li><a href="http://www.statravel.com.au/">STA Travel</a></li>
    <li><a href="http://www.vicroads.vic.gov.au/">VicRoads</a></li>
    <li><a href="http://www.virginblue.com.au/">Virgin Blue</a></li>
    <li><a href="http://www.visitvictoria.com/">Visit Victoria</a></li>
    <li><a href="http://www.webjet.com.au/">Webjet</a></li>
</ul>
</div>

<div id="weather" class="collapsible">
<h2>Weather</h2>
<ul>
    <li><a href="http://www.bom.gov.au/">Bureau of Meteorology</a> [<a href="http://www.bom.gov.au/products/IDV10450.shtml">Melbourne</a>]</li>
    <li><a href="http://weather.ninemsn.com.au/">NineMSN Weather</a> [<a href="http://weather.ninemsn.com.au/weather/national/VIC.asp?location=Melbourne">Melbourne</a>]</li>
    <li><a href="http://www.weather.com/">Weather.com</a> [<a href="http://www.weather.com/weather/local/ASXX0075">Melbourne</a>]</li>
    <li><a href="http://www.weatherzone.com.au/">Weatherzone</a> [<a href="http://www.weatherzone.com.au/forecasts/district.jsp?district=V00">Melbourne</a>]</li>
    <li><a href="http://au.weather.yahoo.com/">Yahoo! Australia Weather</a> [<a href="http://au.weather.yahoo.com/ASXX/ASXX0075/index_c.html">Melbourne</a>]</li>
</ul>
</div>

</div>

<hr class="hide" />

<div id="footer">
<?php include "footer.php"; ?>
</div>
</body>
</html>
<!-- vi: set sw=4 ts=4: -->
