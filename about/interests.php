<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$num = 0;
function startElement ($parser, $name, $attrs)
{
    global $artist;
    global $num;
    global $tag;
    global $value;

    if ($name == "ARTIST")
    {
        $num++;
    }
    else
    {
        $tag = $name;
        $value = "";
    }
}

function endElement ($parser, $name)
{
    global $artist;
    global $tag;
    global $num;
    global $value;

    if ($name == "ARTIST")
    {
    }
    else
    {
        $artist[$num][$tag] = $value;
    }
}

function characterData ($parser, $data)
{
    global $value;

    $value .= $data;
}

$xml_parser = xml_parser_create ();
xml_set_element_handler ($xml_parser, "startElement", "endElement");
xml_set_character_data_handler ($xml_parser, "characterData");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Mikel Ward's Interests</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Mikel Ward" />
    <meta name="date" content="<?php print gmdate("Y-m-d", getlastmod()); ?>" />
    <meta name="description" content="Mikel Ward's Interests" />
    <meta name="keywords" content="Mikel Ward, Michael Wardle, personality, life, interests" />
<?php include "style.php"; ?>
<style type="text/css">
  #lastfm div { border: none }
  #lastfm table { border: none }
  .title { font-style: normal }
</style>
<script type="text/javascript" src="/scripts/util.js"></script>
<script type="text/javascript" src="/scripts/tree.js"></script>
  </head>
<?php include "functions.inc" ?>
<?php
require_once 'propel/Propel.php';
include_once 'propel/util/Criteria.php';
Propel::init(getcwd() . "/../library/runtime-conf.php");
include_once 'library/Book.php';
?>
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
    <h1>Interests</h1>
<div id="crumb">
    <?php include "crumb.php"?>
</div>
    </div>

    <div id="content">

    <div id="computing" class="collapsible">
    <h2>Computing</h2>
    <p>
      I use computers at work and at home as a tool and to learn.
      I use Windows and Linux on a daily basis.
      I can program in languages including C, C++, Java, JavaScript,
      and Perl and have developed various web sites including this one.
    </p>
    <p>
      As well as my <a href="/work">paid work</a>,
      I am currently contributing to some open source projects
      and writing some <a href="/software/firefox">Mozilla Firefox extensions</a>.
    </p>
    </div>

    <div id="food" class="collapsible">
    <h2>Food</h2>
    <p>
      I like to dine out at restaurants when I can afford it.
      I enjoy lots of different foods, including Italian, Australian,
      Indian, Japanese, Chinese, Thai, German, and Hungarian.
    </p>
    <p>
      When I cook for myself, I cook a whole lot of different things,
	  but my favorite things are stir fry, pizza, fish, and steak,
      because they're so quick and tasty.
    </p>
    </div>

    <div id="language" class="collapsible">
    <h2>Language</h2>
    <p>
      I learned German on a student exchange in Austria when I was 14.
    </p>
    <p>
      I went back to Germany recently for the
      <a href="http://fifaworldcup.yahoo.com/" title="FIFA World Cup 2006">soccer world cup</a>
      and it came back fairly quickly.
      I can now speak German almost fluently again.
    </p>
    <p>
      In the next few years, I'd like to learn Spanish or Chinese.
    </p>
    </div>

    <div id="learning" class="collapsible">
    <h2>Learning</h2>
    <p>
      I really like learning and keeping myself mentally alert.
      I am focusing most of my attention on improving my programming and
      systems administration skills to help my job.
    </p>
    <p>
      One day I'd like to take a course in economics or linguistics.
    </p>
    </div>

    <div id="movies" class="collapsible">
    <h2>Movies</h2>
    <p>
      I enjoy movies of most genres, but I really like dramas that make
      me think or empathize with the characters.  I also like action and
      comedy.  Some of my favorite movies are
      <span class="title">American Beauty</span>,
      <span class="title">The English Patient</span>,
      <span class="title">Fight Club</span>,
      <span class="title">Life is Beautiful</span>,
      <span class="title">Office Space</span>,
      and <span class="title">The Shawshank Redemption</span>.
    </p>
<!--
    <p>
      The movies I&#39;ve seen recently include:
    </p>
    <ul>
    </ul>
-->
    </div>

    <div id="music" class="collapsible">
    <h2>Music</h2>
    <p>
      I really enjoy listening to music.  Music has helped me thru some
      bad times, and entertained me on many a long trip.
    </p>
    <p>
      I particularly like alternative and rock music.
    </p>
    <p>
      My favorite bands include The Beatles, The Chemical Brothers,
      Fatboy Slim, Foo Fighters, Magic Dirt, Marilyn Manson, Metallica,
      Muse, Nirvana, Placebo, Powderfinger, Queens of the Stone Age,
      Radiohead, The Red Hot Chili Peppers, Silverchair, U2, and
      The Whitlams.
    </p>
    <div id="lastfm">
    <p>
      The bands I've been listening to most this week are:
    </p>
<?php
/*
 * As of September 20, 2006, the current Last.fm artist chart is returning a 404 error.
 * I have notified RJ of this problem, but have not received any estimated time to fix.
 * Until then, I first fetch the list of historic weekly charts from
 * http://ws.audioscrobbler.com/1.0/user/MichaelWard/weeklychartlist.xml
 * then show the most recent one, but the data there is pretty old and that would take
 * time to implement, so rather just let it show an error and hope it's fixed soon.
 */
#$file = "weeklyartistchart.xml";
$feed = "http://ws.audioscrobbler.com/1.0/user/MichaelWard/weeklyartistchart.xml";
#$feed = "http://ws.audioscrobbler.com/1.0/user/MichaelWard/recenttracks.xml";
$date = date ("Ymd");
$last = strrpos ($feed, "/");
$file = substr ($feed, $last+1);
$cache = "cache/" . $file . "." . $date;
if (!file_exists ($cache)) {

    // Remove any stale cache files
    $files = glob ("cache/$file*");
    foreach ($files as $file) {
        if (unlink ($file)) {
            error_log ("Removed stale file $file");
        }
        else {
            error_log ("Error removing $file");
        }
    }

    // Open the remote feed and local cache
    $start_time = microtime (true);
    $data = "";
    $in = fopen ($feed, "rb");
    if ($in) {
        $out = fopen ($cache, "wb");
        if ($out) {
            // Copy the feed into the cache
            while ($data = fread ($in, 8192)) {
                if (!fwrite ($out, $data)) {
                    error_log ("Error writing to $cache: " . posix_strerror (posix_get_last_error ()));
                    unlink ($cache);
                    break;
                }
            }
            $end_time = microtime (true);
            error_log ("Downloaded $file in " . ($end_time - $start_time) . " seconds");
            fclose ($out);
        }
        else {
            error_log ("Cannot open $cache");
        }
        fclose ($in);
    }
    else {
        error_log ("Cannot open $feed");
    }
}

if ($fp = fopen ($cache, "r")) {
    error_log ("Opened $cache");
    $start_time = microtime (true);
    while ($data = fread ($fp, 8192)) {
        if (!xml_parse ($xml_parser, $data, feof ($fp))) {
            error_log (sprintf ("XML error: %s at line %d",
                                xml_error_string (xml_get_error_code ($xml_parser)),
                                xml_get_current_line_number ($xml_parser)));
        }
    }
    $count = 0;
    printf ("<ul>\n");
    foreach ($artist as $a)
    {
        if ($count > 9) break;
        if ($a['PLAYCOUNT'] < 2) break;

        printf ("<li><a href=\"%s\">%s</a></li>\n", $a['URL'], $a['NAME']);
        $count++;
    }
    if ($count == 0)
    {
    	printf("<li>No recent bands</li>");
    }
    printf ("</ul>\n");
    $end_time = microtime (true);
    error_log ("Parsed $file in " . ($end_time - $start_time) . " seconds");
}
else {
   printf ('<p class="error">Could not download information</p>');
}
xml_parser_free ($xml_parser);
?>
    <!--<script src="http://imagegen.last.fm/chartjs/minimalLight/artists/MichaelWard.js" /></script>-->
    </div>
<!--
    <p>
      The bands I've seen live lately are:
    </p>
    <ul>
	  <li>We Are Scientists</li>
	  <li>Bluejuice</li>
	  <li>The Whitlams</li>
	  <li><s>The Bravery</s></li>
	  <li>Smashing Pumpkins</li>
	  <li>Hot Hot Heat</li>
	  <li>Queens of the Stone Age</li>
	  <li>Modest Mouse</li>
    </ul>
-->
    <p>
      I played the piano for several years, but have fallen out of
      practise lately, as I no longer own a piano.
      I also like the guitar and drums.
    </p>
    </div>

    <div id="outdoors" class="collapsible">
    <h2>Outdoors</h2>
    <p>
      I spent much of my youth in the Scouts, where we did a lot of
      camping.  Unfortunately, I've not been camping much since.
    </p>
    </div>

    <div id="politics" class="collapsible">
    <h2>Politics</h2>
    <p>
      I was The Greens candidate for the seat of Indi in the 2001
      Australian Federal Election.  It was a great experience that
      enabled me to learn more about myself, meet lots of people, and
      improve my public speaking skills.
    </p>
    <p>
      A few years ago, I started to disagree with the Greens on some issues,
	  particularly economics. <!--I am also not yet convinced that climate change
	  is caused by humans, and thus whether focussing on carbon dioxide
	  emissions is the best way to fix it.  (I have spent some time reading Al
	  Gore and Tim Flannery and found them unconvincing.  I have also read the
	  <a href="http://www.ipcc.ch/" title="Intergovernmental Panel on Climate Change">IPCC</a>
	  reports and they make it clear that they themselves are uncertain.
	  I intend to study this area when I finish my degree in November.)-->
	</p>
	<p>
	  My current views seem to be closest to what the
      <a href="http://www.liberal.org.au/">Liberal Party</a> should be
      and what the <a href="http://www.democrats.org.au/">Australian Democrats</a>
	  could be.  I feel that the Liberal Party are moving too far to the right,
	  and the Democrats are moving too far to the left!
	</p>
	<p>
      The
      <a href="http://www.theadvocates.org/quiz.html">World's Smallest Political Quiz</a>
      says I&#39;m a libertarian.  This has lead me to find out more about the
	  <a href="http://www.ldp.org.au/">Liberty and Democracy Party</a>.
    </p>
    </div>

<?php
    # address for books with an ISBN
    #$view_url = "http://www.getonce.com.au/BooksQuery?searchType=t&searchTerm=";
    $view_url = "http://www.amazon.com/exec/obidos/ASIN/";
    $view_tag = "/endbracket-20";
    $view_desc = "Amazon.com information";
    $view2_url = "http://www.amazon.co.uk/exec/obidos/ASIN/";
    $view2_tag = "/endbracket-20";
    $view2_desc = "Amazon.co.uk information";
    # address for books without an ISBN
    $search_url = "http://www.google.com/search?q=";
    $search_tag = "&amp;btnI=I%27m%20Feeling%20Lucky";
    $search_desc = "Google search";
?>
    <div id="reading" class="collapsible">
    <h2>Reading</h2>
    <p>
      Despite not making much time to read, I love reading.
    </p>
    <p>
      My favorite fiction genres are fantasy and comedy.  My favorite
      authors include Bryce Courtenay, Stephen King, and Terry Pratchett.
    </p>
    <p>
      I spend a lot of time reading technical books, and like reading
      non-fiction books, especially ones about history.
    </p>
<?php
	$c = new Criteria();
	$now = time();
	$then = $now - 180 * 24 * 60 * 60;	// 180 days (about 6 months) ago
	$clastused = $c->getNewCriterion(ItemPeer::LASTUSED_ON, $then, Criteria::GREATER_THAN);
	$cbooks = $c->getNewCriterion(ItemPeer::CLASS_KEY, ItemPeer::CLASSKEY_BOOK, Criteria::EQUAL);
	$clastused->addAnd($cbooks);
	$c->add($clastused);
	$c->addDescendingOrderByColumn("lastused_on");
	$books = ItemPeer::doSelect($c);

	if ($books)
	{
		print "<p>";
		print "The past few books I&#39;ve read are:";
		print "</p>";

		print "<ul>\n";
		foreach ($books as $book)
		{
			$title = $book->getTitle();
			$asin = $book->getAsin();
			$isbn = $book->getIsbn();
			print "<li>";
			if ($asin)
			{
				print "<a href=\"$view_url$asin$view_tag\" title=\"$view_desc for $title\" target=\"_new\"><span class=\"title\">$title</span></a>";
			}
			#else if ($isbn)
			#{
			#    print "<a href=\"$view2_url$isbn$view2_tag\" title=\"$view2_desc for $title\" target=\"_new\"><span class=\"title\">$title</span></a>";
			#}
			else
			{
				print "<a href=\"$search_url" . urlencode("\"$title\"") . $search_tag . "\" title=\"$search_desc for $title\" target=\"_new\">" . "<span class=\"title\">$title</span></a>";
			}
			print "</li>\n";
		}
		print "</ul>\n";
	}
	else
	{
		print "<p><em>No recent books</em></p>\n";
	}
?>
    </div>

    <div id="spelling" class="collapsible">
    <h2>Spelling</h2>
    <p>
      The English language has a very difficult spelling system.  Having seen German and Spanish,
      where spelling is much easier, I would like to make English spelling easier too.
    </p>
    <p>
	  There's lots of proposals out there, but they would be a big change.
      Maybe we could just start by spelling the weirdest
	  words the way you think they should be spelled, for example maybe just
      spell "friend" as "frend" of "Wednesday" as "Wensday"?
    </p>
    </div>

    <div id="sports" class="collapsible">
    <h2>Sports</h2>
    <p>
      I exercise regularly at the gym.
    </p>
    <p>
      I've played cricket, soccer, and tennis in the past, and plan on
      starting again when I can make the time.
    </p>
    <p>
      I like to watch sports too, particularly cricket, soccer, and
      football.
    </p>
    </div>

    <div id="travel" class="collapsible">
    <h2>Travel</h2>
    <p>
	  My most recent trip was spending a month in Hong Kong and China.<br/>
      You can <a href="http://mikelward.com/news/labels/Travel">read more about it on my blog</a>.
    </p>
    <p>
      For my next big trip, I hope to go to South Africa for the 2010 soccer world cup.
    </p>
    </div>
    </div>

    <hr class="hide" />

    <div id="footer">
<?php include "footer.php"; ?>
    </div>
  </body>
</html>

