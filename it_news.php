
<?php
echo '<link rel="stylesheet" type="text/css" href="site.css">';
echo '<div class="box"><b></b></div>';
$feed=simplexml_load_file ("https://www.heise.de/newsticker/heise-atom.xml");
#$feed=simplexml_load_file ("http://192.168.21.72:5000/recent.atom");
foreach ($feed->entry as $entry)
{
	print "<h3>";
	print ($entry->title);
	print "</h3>";
	
	
	print "<p>";
	print ($entry->summary);
	print "</p>";
	
	print "<P>";
	print ($entry->author);
	print "</P>";
	
	print "<p>";
	$link = $entry->content->div->a->img['src'];
	echo "<img src='$link' />";
	print "</p>";
	

}
?>
