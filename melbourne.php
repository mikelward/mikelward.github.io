<?php

$threshold = 86400;	// if cache is >= $threshold seconds old, it is stale
$cachedir = "cache";
$cache = $cachedir . "/melbourne.ics";
$source = "http://www.google.com/calendar/ical/0l0a2js9npjra98g2ctcvii68c%40group.calendar.google.com/public/basic.ics";
$now = time();
header("Content-Type: text/calendar; charset=UTF-8");

// @ avoids "cannot modify header" error
$stat = @stat($cache);
if ($stat) {
	$mtime = $stat['mtime'];
}
else {
	$mtime = 0;
}

if ($now - $mtime >= $threshold) {
	$ical = file_get_contents($source);
	$temp = $cachedir . "/melbourne.tmp";
	$output = filter_ical($ical, "LOCATION", "Melbourne");

	file_put_contents($temp, $output);
	rename($temp, $cache);

	header("Last-Modified:" . date("r", $now));
	print($output);

}
else {
	$ical = file_get_contents($cache);

	header("Last-Modified:" . date("r", $mtime));
	print($ical);
}

function filter_ical($in, $key, $val)
{
	$lines = explode("\r\n", $in);
	$output = array();
	$started = false;
	$event = false;
	foreach ($lines as $line) {
		if (!$started) {
			if (strpos($line, "BEGIN:VEVENT") === 0) {
				$started = true;
			}
			else {
				// add the filter criteria to the calendar name
				if (strpos($line, "X-WR-CALNAME:") === 0) {
					$output[] = $line . " $key=$val";
				}
				else {
					// copy header lines verbatim
					$output[] = $line;
				}
				continue;
			}
		}

		if (strpos($line, "BEGIN:VEVENT") === 0) {
			$event = true;
			$match = false;
			$values = array();
		}
		else if (strpos($line, "END:VEVENT") === 0) {
			if ($event) {
				if ($match) {
					$output[] = "BEGIN:VEVENT";
					foreach ($values as $value) {
						$output[] = $value;
					}
					$output[] = "END:VEVENT";
				}
			}
			else {
				error_log("Unexpected end of event");
			}
			$event = false;
		}
		else {
			if ($event) {
				$values[] = $line;
				if (preg_match("/^$key:.*$val/", $line)) {
					$match = true;
				}
			}
			else {
				// assume this is the footer
				$output[] = $line;
			}
		}
	}

	return implode("\r\n", $output);
}

?>
