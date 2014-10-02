<?php

	header('Content-type: text/css; charset:UTF-8');
	$url_color = "#3465A4";
	$body_html_background_color = "#F9F9F9"

?>
/*
-----------------------------------------------
Author	    :   Imri Paloja
Email	    :	imri.paloja@gmail.com
HomePage    :   www.eurobytes.nl
Version	    :   0.0.1
Name        :   framework.css

----------------------------------------------- 
*/


<?php
ini_set('memory_limit', '400M');

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents('index.php')); // Don't know how to make it use the loaded document

$xpath = new DOMXpath($doc);
$nodes = $xpath->query('//*');

// Source: http://stackoverflow.com/a/26168332/1148529

foreach ($nodes as $node) {

    // skip html and body
    if($node->nodeName === 'html' or $node->nodeName === 'body') {
        continue;
    }

    // insert everything else
    $names[] = $node->nodeName;
}

$css = '	color:#454545;';

echo join(', ', array_unique($names)) . " {\n" . $css . "\n}\n";



?>





a {
    color: <?php echo "$url_color"; ?>;
    text-decoration: none;
    outline: none;
}

body,html {
	background-color: <?php echo "$body_html_background_color";?>;	
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

#wrap {
	margin: 20px auto;
	width: 80%;
}

article {
	border: 1px solid #CCCCCC;
	background-color: #FFFFFF;
	padding: 25px;
}

img {
	min-width:50%;
	max-width: 100%;
	width: 450px;
	margin: 0px auto;
}


.header {
    margin: 1%;
    padding: 0;
    text-align: center;
    width: 100%;
    text-transform: capitalize;
}

?>