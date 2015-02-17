<?php
 
 // Heavy testing this:
 
ini_set('memory_limit', '400M');
 
$doc = new DOMDocument();
$doc->loadHTML(file_get_contents('*')); // Don't know how to make it use the loaded comment
 
$xpath = new DOMXpath($doc);
$nodes = $xpath->query('//*');
 
$names = array();
foreach ($nodes as $node) {
	$names[] = $node->nodeName;
}
 
echo join(PHP_EOL, array_unique($names));

// ^ Still testing
// Source: https://gist.github.com/kwoodfriend/9669711
?>
