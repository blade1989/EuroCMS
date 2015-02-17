<?php // include './admin/index.php'; 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('/admin/admin.php');

// everything below will show after correct login 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EuroEditor - EuroBytes</title>
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
    <link rel="shortcut icon" href="http://www.eurobytes.nl/favicon.ico" type="image/x-icon">
    <meta name="description" content="EuroEditor, Your free, easy to use, and customizable web based editor">
    <meta name="keywords" content="Editor, advanced, customizable">
    <meta name="author" content="Imri Paloja">

  <!-- html5.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- css3-mediaqueries.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="eeditor.js"></script>
    <script type="text/javascript" src="toc.js"></script>


  <link rel="stylesheet" href="eeditor.css">

<link rel="stylesheet" type="text/css" href="http://www.eurobytes.nl/css/class.css">

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

</head>

<body>

<div id="wrap">

<div id="content">

  <article style="width: 100%;">


<?php
    // Some variables 

    $framworkcss    = "";
    $adminlink      = "<a href=\"/admin/index.php#formpost\" class=\"fancybox fancybox.iframe\" id=\"logon\" style=\"position: absolute;top:0px; right:0px;\">LOGIN</a>";
    $sitename       = "EuroCMS";
    $siteintro      = "Your free, easy to use, and customizable Content Management System";

    // The site template
    $eurotemplate = "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>$sitename - $siteintro</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"$framworkcss\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/stylesheets.php\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"Free tutorials, as in free speech, not free beer.\">
    <meta name=\"keywords\" content=\"$keywords\">
    <meta name=\"author\" content=\"$author\">
</head>
<body>
  $adminlink

<div id=\"wrap\">
<div id=\"content\">

";

$aside = '
  <aside>

    <a id="goTop"></a>


  <div id="widget" onclick="window.open(\'http://www.ubuntu.com/\',\'_newtab\');">
      <div id="countdown">

    <script type="text/javascript" src="../js/countdown.js"></script>

  </div>


      <span id="version">Trusty Tahr 14.04 LTS</span>
      
      <div id="widgetimage"></div>
  </div>


    <div class="ad1 align">

  <div class="ads">
  <div class="adblock">
      <p>
        This website is ad-supported. If you find it useful, please consider disabling adblock. Thank you!
      </p>
  </div>

    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-0774686362891460";
    /* Vierkant */
    google_ad_slot = "6852265790";
    google_ad_width = 250;
    google_ad_height = 250;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
  </div>
    </div>

    <div id="recentcomments" class="dsq-widget align">
      <br>
    <b class ="dsq-widget-title">Recent comments</b>

    <script type="text/javascript" src="http://eurobytes.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=32&amp;excerpt_length=200"></script>
     
    </div>

    <div class="ad1 align">

  <div class="adblock">
      <p>
        This website is ad-supported. If you find it useful, please consider disabling adblock. Thank you!
      </p>
  </div>

  <div class="ads">    
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-0774686362891460";
      /* Vierkant */
      google_ad_slot = "6852265790";
      google_ad_width = 250;
      google_ad_height = 250;
      //-->
      </script>
      <script type="text/javascript"
      src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>
    </div>
    </div>

    <div id="accounts">

      <!-- Place this code where you want the badge to render. -->
      <a id="googleplus" href="https://plus.google.com/+ImriPaloja/posts" title="plus.google.com/Imri.Paloja" rel="author"></a>

      <a id="yt" href="http://www.youtube.com/user/blade19899" title="YouTube.com/blade19899"></a>

      <a id="ask" href="http://askubuntu.com/users/36315/blade19899" title="Askubuntu.com/blade19899"></a>
   
      <a id="EuroG" href="https://plus.google.com/b/118295573003800218471/+EurobytesNl/posts" title="plus.google.com/+EurobytesNL"></a>

     <a id="github" href="https://github.com/blade1989" title="github.com: blade1989"></a>

    </div>



  </aside> <!-- aside -->

';




$articlemeta = "
<article>
<div class=\"article-meta\">
    <p>
    By 
    <a target=\"_blank\" href=\"/about\" title=\"Author\" rel=\"author\" class=\"author\">$_SESSION[username]</a>

    Posted:    <time datetime=\"<?php echo date('Y-m-d');?>\" title=\"<?php echo date('Y-m-d');?>\"><?php echo date('Y-m-d');?></time>,


    Comments: <a class=\"comments\" href=\"#disqus_thread\" title=\"Comments on this page\" style=\"float: inherit;\">0 Comments</a>,

    Views: <b id=\"pageviews\">x</b> -

    <a rel=\"nofollow\" href=\"?improve\" class=\"feedback\" title=\"Improve this post\">Feedback</a>
    </p>
  </div>";

echo "$articlemeta";

echo " $_POST[output]";

?>

<?php

$eeditorcontent = "\n\n$_POST[output]</article>\n\n";

$footer ="
<div id=\"asideblock\"></div>
</div> <!-- content -->

<footer>
  <p>EuroCMS By Imri Paloja</p>
</footer>

</div> <!-- wrap -->

</body>
</html>
";

$hope = "$eurotemplate $aside $articlemeta $eeditorcontent $footer";

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/stylesheets.php\">";

//include '/stylesheets.php';


// $var_str = var_export($articlemeta, true);

// $var = "$var_str";

// file_put_contents("filename.php", $var);

file_put_contents("filename.php", $hope);
// file_put_contents("filename.php", $articlemeta);
// file_put_contents("filename.php", $eurotemplate);


// $var_str = var_export($eeditorcontent, true);
// file_put_contents('filename.php', $var);

// Retrieving it again:

// include 'filename.php';
// echo $eeditorcontent;
?>

</article>



</div> <!-- content -->

</div> <!-- wrap -->

</body>
</html>