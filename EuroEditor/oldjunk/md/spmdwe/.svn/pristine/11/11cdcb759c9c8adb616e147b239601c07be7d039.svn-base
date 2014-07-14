<?php

# spmdwe.php
# copyleft sdaau, 2012
# additions to use directly the Markdown parser via this single file
# callable online with: spmdwe.php?file=readme.txt
# see readme.txt for more information
#
# test with php-cli:
# QUERY_STRING="file=readme.txt" php spmdwe.php



// errors:
//~ ini_set('display_errors', '1');


// ## MAIN ## /////////

include_once "./php-markdown/markdown.php";

//http://people.w3.org/~dom/archives/2004/07/testing-php-pages-with-query_string/
if (empty($_GET)) {
  //~ parse_str($_ENV['QUERY_STRING'],$_GET); //nowork
  parse_str(getenv('QUERY_STRING'),$_GET); //OK
}
if (empty($_REQUEST)) {
  parse_str(getenv('QUERY_STRING'),$_REQUEST);
}

//~ echo print_r($_GET);

$fname="";
$fmode=""; # "view" (implied default); "edit", "save"

$saveenabled = true; # set to false to disable saving ("demo mode")

if(isset($_REQUEST['file']))
  $fname=$_REQUEST['file'];
if(isset($_REQUEST['mode']))
  $fmode=$_REQUEST['mode'];

$my_text = "";
$my_html = "";
$my_rept = "";
$my_name = basename($_SERVER['PHP_SELF']);

if (empty($fmode)) {
  $fmode = "view";
  $my_rept .= "No mode specified; opening in view mode\n";
}
if (empty($fname)) {
  $fname = "readme.txt";
  $fmode = "edit";
  $my_rept .= "No file specified - opening readme in edit mode\n";
}

if (!empty($fname)) {
  if (!file_exists($fname)) {

    //~ echo "LoL\n";
    $my_rept .= "Cannot find filename $fname!\n";
    $my_rept .= "Attempting to create new file $fname ... \n";
    if ($saveenabled) {
      if (file_put_contents($fname, "") >= 0) {
        $my_rept .= "Saved empty $fname. \n";
        $my_rept .= "Restoring edit mode.\n";
        $fmode = "edit";
      } else {
        $my_rept .= "failed, cannot create file.\n";
        $my_rept .= "Restoring readme in view mode.\n";
        $fmode =="view";
        $fname = "readme.txt";
      }
    } else {
        $my_rept .= "Demo mode - failed, cannot create file.\n";
        $my_rept .= "Restoring readme in view mode.\n";
        $fmode =="view";
        $fname = "readme.txt";
    }
  }

  //echo "File Exists\n";
  $my_text = file_get_contents('./'.$fname);
  $my_html = Markdown($my_text);
  $my_rept .= "Opened $fname in $fmode mode\n";
  if ($fmode == "save") {
    $my_rept .= "Save request: ";
    if(isset($_REQUEST['form-input-ta'])) {

      $new_content = $_REQUEST['form-input-ta'];

      if ($saveenabled) {

        // calculate backup filename
        $nowtime = time();
        $nfilename = substr($fname, 0, strrpos($fname, '.'));
        $nextension = substr($fname, strrpos($fname, '.') + 1);
        $nfilename .= "_" . $nowtime;
        $nfname = $nfilename . "." . $nextension;

        //save backup
        if (file_put_contents($nfname, $my_text))
          $my_rept .= "Saved old backup to $nfname.\n";

        // save (new) contents of textarea to original filename
        if (file_put_contents($fname, $new_content))
          $my_rept .= "Saved new content to $fname.\n"; //

        $my_rept .= "Performed save; ";
      } else {
        $my_rept .= "Save cannot be performed (demo mode);\n";
      }

      $my_rept .= "restoring view mode\n";
      $fmode = "view";
      // refresh content to be displayed too!
      $my_text = $new_content;
      $my_html = Markdown($my_text);
    } else {
      $my_rept .= "Something's wrong - new content didn't arrive.
Aborting save; restoring edit mode.\n";
      $fmode =="edit";
    }
  }

}



// for unicode output: (http://stackoverflow.com/questions/713293)
header('Content-Type: text/html; charset=utf-8');
// to disable caching and force a reload each time page is read:
// (http://www.codingforums.com/archive/index.php/t-120638.html)
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');


echo "
<html>
  <head>
    <title>$fname</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"./pagedown/demo/browser/demo.css\" />

    <script type=\"text/javascript\" src=\"./pagedown/Markdown.Converter.js\"></script>
    <script type=\"text/javascript\" src=\"./pagedown/Markdown.Sanitizer.js\"></script>
    <script type=\"text/javascript\" src=\"./pagedown/Markdown.Editor.js\"></script>

    <style type=\"text/css\">
      .myrept {
        font-size: small;
        color: red;
      }
      pre.myrept {
        width: 60%;
        overflow:auto;
        border-style:solid;
        border-width:1px;
      }
      .valgntop {
        vertical-align:top;
        margin-top:0;
      }
    </style>
  </head>

  <body>
";

if ($fmode=="edit") {
  echo "
    <noscript>
      JavaScript not detected; JavaScript is required for editing parts of the application.
    </noscript>
";
}


  // output report - when in view mode, just as HTML comment
//~ if (($fmode=="edit") or (!$saveenabled)) { // naah...
if ($fmode=="edit") {
  echo "
  <table id=\"myrept\" >
    <tr class='valgntop'>
      <td>
      <button class=\"myrept\" onClick=\"var tob = document.getElementById('myrept');  tob.parentNode.removeChild(tob);\">(hide)</button>
      </td>
      <td><pre class=\"myrept\">
";
} else {
  echo "
  <!--
";
}
echo "$my_rept
";
if ($fmode=="edit") {
  echo "
      </pre>
      </td>
    </tr>
  </table>
";
} else {
  echo "
  -->
";
}


echo "
<div id='headertitle' class='wmd-panel'>
  <h1>$fname</h1>
</div>
";

echo "
  <div id=\"wmd-preview-second\" class=\"wmd-panel wmd-preview\">
  $my_html
  </div>
";


if ($fmode=="edit") {
  echo "
  <form method=\"post\" action=\"$my_name?file=$fname\">
    <div class=\"wmd-panel\">
      <div id=\"wmd-button-bar-second\"></div>
      <textarea name=\"form-input-ta\" class=\"wmd-input\" id=\"wmd-input-second\">
$my_text
      </textarea>
      <input type=\"hidden\" name=\"mode\" value=\"save\">
    </div>
";
}

  echo "
  <div id=\"buttonholder\" class=\"wmd-panel\">
";

switch ($fmode) {
  case "edit":
    echo "
    <button type='submit' name='mode' value='save'>Save</button> &nbsp; <a style=\"font-size: small;\" href=\"$my_name?file=$fname\">Discard</a>
  </div>
  </form>
";
    break;
  case "view":
    echo "
    <button onclick='location.href=\"$my_name?file=$fname&mode=edit\"'>Edit</button>
  </div>
";
    break;
}



if ($fmode=="edit") {
  echo "
  <script type=\"text/javascript\">
      (function () {
          var converter2 = new Markdown.Converter();

          var help = function () { alert(\"Do you need help? Try http://stackoverflow.com/editing-help\"); }

          var editor2 = new Markdown.Editor(converter2, \"-second\", { handler: help });

          editor2.run();
      })();
  </script>

";
}

"
  </body>
</html>
"

?>
