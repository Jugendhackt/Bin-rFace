
<?php
echo '<link rel="stylesheet" type="text/css" href="site.css">';
#$feed=simplexml_load_file ("https://www.heise.de/newsticker/heise-atom.xml");
$feed=simplexml_load_file ("http://192.168.21.72:5000/recent.atom");
foreach ($feed->entry as $entry)
{
	print "<h3>";
	print ($entry->title);
	print "</h3>";
	
	
	print "<p>";
	print ($entry->summary);
	print "</p>";
	
	print "<p>";
	print ($entry->author->name);
	print "</p>";
	
	print "<p>";
	print ($entry->content);
	print "</p>";
	

}
?>
