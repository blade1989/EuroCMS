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
$doc->loadHTML(file_get_contents('$hope')); // Don't know how to make it use the loaded document

$xpath = new DOMXpath($doc);
$nodes = $xpath->query('//*');

// Source: http://stackoverflow.com/a/26168332/1148529

foreach ($nodes as $node) {

    // skip html and body - disabled
    if($node->nodeName === 'head' or $node->nodeName === 'meta' or $node->nodeName === 'title' or $node->nodeName === 'link' or $node->nodeName === 'style' or $node->nodeName === 'script') {        
    	continue;
    }

    // insert everything else
    $names[] = $node->nodeName;
}

$css = '	
    -webkit-box-sizing: border-box; 
    -moz-box-sizing: border-box; 
    box-sizing: border-box;
    color: #454545;
    border: 0 none;
    font-family: "Times New Roman",Georgia,Serif;
    font-size: 100%;
    font-size-adjust: inherit;
    font-stretch: inherit;
    font-style: inherit;
    font-variant: inherit;
    font-weight: inherit;
    text-indent: 0;
    letter-spacing: 0;
    line-height:1.5em;
    vertical-align: baseline;
    margin: 0;
    padding: 0;
    word-spacing: normal;
';

echo join(', ', array_unique($names)) . " {\n" . $css . "\n}\n";

if ($doc->getElementById('#content')->tagName) {
echo "/* Found: tags with id */ \n" . $doc->getElementById('#content')->tagName . "#content" . " {\n border: 1px solid #454545; \n }";
} else {
echo "\n /* Nada */ \n";
}


if ($doc->getElementById('topnav')->tagName) {
    echo "/* Found: tags with id */ \n" . $doc->getElementById('#topnav')->tagName . "#topnav" . " {\n border: 1px solid #454545; \n }";
} else {
    echo "\n /* Nada */ \n";
}

if ($doc->getElementById('content')->tagName) {
    echo "/* Found: tags with id */ \n" . $doc->getElementById('#content')->tagName . "#content" . " {\n 

    background-color: #F9F9F9;
    background-image: url(\"http://www.eurobytes.nl/images/line.png\");
    box-shadow: 2px 2px 2px 0 #000000;
    height: 100%;
    margin: 0px;
    padding: 15px;
    text-align: center;
    width: 100%;



     \n }";
} else {
    echo "\n /* Nada */ \n";
}

if ($doc->getElementById('content')->tagName) {
echo "/* Found: tags with id */ \n" . $doc->getElementById('intro')->tagName . "#intro" . " {\n border: 1px solid #454545; \n }";
} else {
    echo "\n /* Nada */ \n";
}


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

/*
#content {
    background-color: #F9F9F9;
    background-image: url("http://www.eurobytes.nl/images/line.png");
    box-shadow: 2px 2px 2px 0 #000000;
    height: 100%;
    margin: 0px;
    padding: 15px;
    text-align: center;
    width: 100%;
}*/

aside {
    background-color: #f9f9f9;
    border-top: 1px solid #CCCCCC;
    border-left: 0px none;
    border-right: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    float: right;
    /*padding: 15px 15px 15px 45px;*/
    height: 100%;
    padding-bottom: 15px;
    margin-top: 0px;
    width: 28%;
}

aside .align {
    margin-bottom: 5%;
    margin-left: 2%;
    margin-top: 5%;
}


aside .ad1 {
    background-color: #EEEEEE;
    border: 1px solid #CCCCCC;
    width: 250px;
    height: 250px;
}

.ad1 {
    background-color: #EEEEEE;
    border: 1px solid #CCCCCC;
    height: 250px;
    width: 250px;
}

.ads {
    z-index: 400;
}

.adblock {
    background-image: url("/favicon.png");
    background-position: 183px 5px;
    background-repeat: no-repeat;
    background-size: 52px auto;
    margin-top: 50px;
    padding: 40px 56px 10px;
    position: absolute;
}

.adblock p {
    background-color: #FFFFFF;
    border: 1px solid #000000;
    border-radius: 10px 0px 10px 10px;
    margin-left: -45px;
    margin-top: 15px;
    padding: 5px;
    width: 173px;
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
