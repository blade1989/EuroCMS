<?php

// html
$content = '<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Welcome to WPИ-XM Serverpack!</title>
    <link rel="icon" href="tools/webinterface/favicon.ico" type="image/x-icon" />
    <meta http-equiv="refresh" content="3; URL=tools/webinterface/">
</head>
<body bgcolor="E7E7E7" text="333333">
<div id="container">
    <div id="content">
        <h1>Welcome to the WPИ-XM server stack!</h1>
    </div>
    <strong>You should be redirected to the administration interface of WPN-XM in 5 seconds.</strong>
    <br>
     Click <a href="tools/webinterface/">here</a> for immediate redirection.
</div>
</body>
</html>';

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents('index.php')); // Don't know how to make it use the loaded document

$xpath = new DOMXpath($doc);
$nodes = $xpath->query('//*');

// ---- my answer ----

foreach ($nodes as $node) {

    // skip html and body
    if($node->nodeName === 'html' or $node->nodeName === 'body') {
        continue;
    }

    // insert everything else
    $names[] = $node->nodeName;
}

$css = 'color:red;';

echo join(', ', array_unique($names)) . " {\n" . $css . "\n}\n";