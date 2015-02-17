<?php
//$url = "http://www.eurobytes.nl/";
//$num = "date('s')";
//$tagName = 'time'; 

$dom = new DOMDocument;
$dom->preserveWhiteSpace = true;
@$dom->loadHTMLFile("$url");

$time = getTags($dom, $tagName, $num);
//echo $numb;
?>
<?php
function getTags($dom, $tagName, $num) {
     $time = '';
     $domxpath = new DOMXPath($dom);
     $newDom = new DOMDocument;
     $newDom->formatOutput = false;

     $filtered = $domxpath->query("//$tagName");
     $i = 0;
     while( $myItem = $filtered->item($i++) ){
         $node = $newDom->importNode( $myItem, true );
         $newDom->appendChild($node);                
     }
     $time = $newDom->saveHTML();
//     return "<b>$html</b>";     

     echo "$time";
}
?>

<?php 

echo "

<style>
time  {
    border: 1px solid #cccccc;
    display: block;
    font-size: 12px;
    margin: 5px;
    padding: 5px;
    width: 150px;

}
</style>

";


 ?>
<?php //echo date("s"); ?>
<?php
// $google_plusones = function ( $url ) {
 
//     $api = file_get_contents( 'https://plusone.google.com/_/+1/fastbutton?url=' . $url );
 
//     $count = json_decode( $api );
 
//     return $count->result->views;


// echo "\n<li class=\"google_plusones\">\n";
// echo $google_plusones('http://www.eurobytes.nl/tutorials/howto-install-whatsapp-and-viber-in-ubuntu-13.04');
// echo "\n</li>\n";
// }

// function shinra_gplus_get_count( $url ) {
//     $contents = file_get_contents( 
//         'https://plusone.google.com/_/+1/fastbutton?url=' 
//         . urlencode( $url ) 
//     );

//     preg_match( '/window\.__SSR = {c: ([\d]+)/', $contents, $matches );

//     if( isset( $matches[0] ) ) 
//         return (int) str_replace( 'window.__SSR = {c: ', '', $matches[0] );
//     return 0;
// }
?>