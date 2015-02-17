<?php
$zip = new ZipArchive;
$res = $zip->open('uploadtest.odt');
if ($res === TRUE) {
  $zip->extractTo('extracted/');
  $zip->close();



// //$url = "http://esdmenu/beheer_van_lanschot/Menustructuur%20Van%20Lanschot_bestanden/sheet001.htm";
// $tagName = 'img';
// $articlimageclass = "article-image";

// $dom = new DOMDocument;
// $dom->preserveWhiteSpace = true;
// @$dom->loadHTMLFile("$url");

// $time = getTags($dom, $tagName);
// //echo $numb;
// 
// function getTags($dom, $tagName) {
//      $time = get_class($articlimageclass);

//      $domxpath = new DOMXPath($dom);
//      $newDom = new DOMDocument;
//      $newDom->formatOutput = false;

//      $filtered = $domxpath->query("//$tagName");
//      $i = 0;
//      while( $myItem = $filtered->item($i++) ){
//          $node = $newDom->importNode( $myItem, true );
//          $newDom->appendChild($node);                
//      }
//      $time = $newDom->saveHTML();
// //     return "<b>$html</b>";     

//      echo "$time";
// }




} else {
  echo 'doh!';
}





?>