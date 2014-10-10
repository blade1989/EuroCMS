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

    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                    === FALSE ? 'http' : 'https';
    $host     = $_SERVER['HTTP_HOST'];
    $script   = $_SERVER['SCRIPT_NAME'];
    $params   = $_SERVER['QUERY_STRING'];
    $currentUrl = $protocol . '://' . $host . $script . '?' . $params;

//echo $currentUrl;
//
// $currentUrl will replace index.php: $doc->loadHTML(file_get_contents('index.php'));
// and hopefully they will play nice. 
// ^ Source: http://www.phpf1.com/tutorial/get-current-page-url.html


ini_set('memory_limit', '400M');

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents('$currentUrl')); // Don't know how to make it use the loaded document

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

<<<<<<< HEAD
$css = '
    color: #454545;
=======
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
>>>>>>> c2c77c5b0150444ea5caca39d92a2ec9871bd74a
';

echo join(', ', array_unique($names)) . " {" . $css . "}";

echo "\n\n /* Testing */ \n\n";

<<<<<<< HEAD
// $tag_string = implode(', ', $names);
// echo $tag_string;
=======
if ($doc->getElementById('article-header')->tagName) {
	echo "/* Found: tags with id */ \n" . $doc->getElementById('article-header')->tagName . "#article-header" . " {\n border: 1px solid #454545; \n }";
} else {
	echo "";
}


>>>>>>> c2c77c5b0150444ea5caca39d92a2ec9871bd74a

?>



<?php

echo "\n <!-- \n";
$html = "index.php";

$dom = new DOMDocument;
$dom->loadHTML($html);
$books = $dom->getElementsByTagName('intro');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
}

echo "\n-->";
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
