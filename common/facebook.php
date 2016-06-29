<?php

// initialize a new curl resource
$ch = curl_init();

// set the url to fetch
curl_setopt($ch, CURLOPT_URL, 'http://www.facebook.com/feeds/status.php?id=513600208&viewer=513600208&key=AWjF-gQ75XZg2Ikp&format=rss20');

// don't give me the headers just the content
curl_setopt($ch, CURLOPT_HEADER, 0);

// return the value instead of printing the response to browser
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// use a user agent to mimic a browser
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0');

// execute the curl command
$xml = curl_exec($ch);

//close the connection
curl_close($ch);

//load the result into a simplexml resource
$sxml = simplexml_load_string($xml);
$guid = $sxml->channel->item->guid;
$guid = str_replace("&","&amp;",$guid);
$title = $sxml->channel->item->title;
$title = str_replace("&","&amp;",$title);
$title = str_replace("'","&apos;",$title);
$title = str_replace("<","&lt;",$title);
$title = str_replace(">","&gt;",$title);
$link = $sxml->channel->item->link;
$link = str_replace("&","&amp;",$link);
$description = $sxml->channel->item->description;
$description = str_replace("&","&amp;",$description);
$description = str_replace("'","&apos;",$description);
$description = str_replace("<","&lt;",$description);
$description = str_replace(">","&gt;",$description);
$pubDate = $sxml->channel->item->pubDate;

//Output the result
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";
echo '<rss version="2.0"' . "\n";
echo '      xmlns:media="http://search.yahoo.com/mrss/"' . "\n";
echo '      xmlns:dc="http://purl.org/dc/elements/1.1/"' . "\n";
echo '    >' . "\n";
echo '  <channel>' . "\n";
echo '    <title>Warren Shea&apos;s Facebook Status Updates</title>' . "\n";
echo '    <link>http://www.facebook.com/minifeed.php?status&amp;id=513600208</link>' . "\n";
echo '    <description>Warren Shea&apos;s Facebook Status Updates</description>' . "\n";
echo '    <language>en-us</language>' . "\n";
echo '    <category domain="Facebook">StatusSyndicationFeed</category>' . "\n";
echo '    <generator>Facebook Syndication</generator><docs>http://www.rssboard.org/rss-specification</docs>' . "\n";
echo '    <lastBuildDate>Sat, 14 Jan 2012 00:56:10 -0500</lastBuildDate>' . "\n";
echo '    <webMaster>webmaster@facebook.com</webMaster>' . "\n";
echo '    <item>' . "\n";
echo '      <guid>' . $guid . '</guid>' . "\n";
echo '      <title>' . $title . '</title>' . "\n";
echo '      <link>' . $link . '</link>' . "\n";
echo '      <description>' . $description . '</description>' . "\n";
echo '      <pubDate>' . $pubDate . '</pubDate>' . "\n";
echo '      <author>Warren Shea</author>' . "\n";
echo '      <dc:creator>Warren Shea</dc:creator>' . "\n";
echo '    </item>' . "\n";
echo '  </channel>' . "\n";
echo '  <access:restriction relationship="deny" xmlns:access="http://www.bloglines.com/about/specs/fac-1.0" />' . "\n";
echo '</rss>' . "\n";
?>