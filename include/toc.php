<?php
  function TableOfContents($depth)
  /*AutoTOC function written by Alex Freeman
  * Released under CC-by-sa 3.0 license
  * http://www.10stripe.com/  */
  {
  $filename = __FILE__;
  //read in the file
  $file = fopen($filename,"r");
  $html_string = fread($file, filesize($filename));
  fclose($file);
 
  //get the headings down to the specified depth
  $pattern = '/<h[2-'.$depth.']*[^>]*>.*?<\/h[2-'.$depth.']>/';
  $whocares = preg_match_all($pattern,$html_string,$winners);
 
  //reformat the results to be more usable
  $heads = implode("\n",$winners[0]);
  $heads = str_replace('<h2><a name="','<a href="#',$heads);
  $heads = str_replace('</a></h2>','',$heads);
  $heads = preg_replace('/<h([1-'.$depth.'])>/','<li class="toc$1">',$heads);
  $heads = preg_replace('/<\/h[1-'.$depth.']>/','</a></li>',$heads);
 
  //plug the results into appropriate HTML tags
  $contents = '

  <div class="table-of-contents"> 
  <p id="toc-header">Table Of Content</p>
  <ul>
  '.$heads.'
  </ul>
  </div>

  ';
  echo $contents;
  }
 ?>

<?php TableOfContents(3); ?>