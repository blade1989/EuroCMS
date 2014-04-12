<?php // include './admin/index.php'; 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('admin.php');

// everything below will show after correct login 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About - EuroCMS</title>
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<?php include './include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

<?php include './include/fancybox.php'; ?>

<?php
    $user_agent_data = strtolower($_SERVER['HTTP_USER_AGENT']);

if(ereg("msie 6.0", $user_agent_data)) {

    include("include/ie7.php");

    exit;
}
?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include './include/js.php'; ?>

<!-- KeyBoard test -->

  <!--<link href="http://code.jquery.com/ui/1.9.0/themes/ui-darkness/jquery-ui.css" rel="stylesheet">-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.min.js"></script>

<link rel="stylesheet" href="/admin/modules/keyboard/Keyboard-master/css/keyboard.css">
<script src="/admin/modules/keyboard/Keyboard-master/js/jquery.keyboard.js"></script>

<script src="/admin/modules/keyboard/Keyboard-master/js/jquery.keyboard.extension-mobile.js"></script>

<script src="/admin/modules/keyboard/Keyboard-master/js/jquery.keyboard.extension-typing.js"></script>

  <script>
    $(function(){
      $('#keyboard').keyboard();
    });
  </script>

<script>
// Typing Extension
$('#icon').click(function() {
    var kb = $('#keyboard').getkeyboard();
    // typeIn( text, delay, callback );
    kb.reveal().typeIn(simulateTyping, 500, function() {
        // do something after text is added
        // kb.accept();
    });
});
</script>


<style>
  #icon {
   width: 25px;
   margin-bottom: -3px; 
  }
</style>

</head>

<body>

  <?php include './include/menu.php'; ?>

<div id="wrap">

<aside>

<div>
  <b>Latest Articles</b>
     <hr>
    <ul>
      <li>
        <a href="#" title="Article name1">Nagios or Icinga</a>
      </li>  
      <li>
        <a href="#" title="Article name2">0 A.D. Alpha 14 Naukratis</a>
      </li>  
      <li>
        <a href="#" title="Article name3">Privacy &amp; Security</a>
      </li>  
      <li>
        <a href="#" title="Article name4">Native Viber for Linux</a>
      </li>   
      <li>
        <a href="#" title="Article name5">League of Legends under Ubuntu</a>
      </li>  
    </ul> 
</div>
  

<div>
  <b>Analytics</b>
    <hr>

<p>
  Most viewed pages
</p>

    <ol>
      <li>
        <a href="#" title="Article name1">Nagios or Icinga</a>
      </li>  
      <li>
        <a href="#" title="Article name2">0 A.D. Alpha 14 Naukratis</a>
      </li>  
      <li>
        <a href="#" title="Article name3">Privacy &amp; Security</a>
      </li>  
      <li>
        <a href="#" title="Article name4">Native Viber for Linux</a>
      </li>   
      <li>
        <a href="#" title="Article name5">League of Legends under Ubuntu</a>
      </li> 
    </ol>

</div>
  
  <div id="recentcomments" class="dsq-widget align">

  <b class ="dsq-widget-title">Recent comments</b>
  <script type="text/javascript" src="http://eurobytes.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=32&amp;excerpt_length=200"></script>
   
  </div>
</aside>


<div id="content">

<article>

<h1 class="header">EuroCMS</h1>

<p id="intro">
  Welcome to the <b>pre-alpha</b> version of EuroCMS: <strong>Your free, easy to use, and customizable Content Management System</strong>
</p>

<form style="margin-left: 25%;">
  
    <input id="keyboard" type="text">

</form>




<hr>
<p>
  <b>This is ALPHA software! Meaning an unfinished product!</b> 
</p>


<h2>Current parts</h2>

<ul>
  <li>framework.css</li>
  <li>framework.js</li>
</ul>


<!-- <h2>README.MD</h2> -->

<h2>Features</h2>

<p>
  For the time being, 
  <b>none</b>.
</p>

<h2>Current roadmap</h2>

<ol>
  <li>CSS framework, css style.</li>
  <li>css framework</li>
  <ul>
    <li>
      <s>Reasonably stable</s> <b>check</b></li>
    <li>
      <s>Deeper testing</s> - <b>check</b></li>
  </ul>
  <li>- css style</li>
  <ol>
    <li>visual glitches when being responsive</li>
    <li>Final testing: CSS framework, and style</li>
  </ol> 
  <li>framework.js </li>
  <ol>
    <li>Polyfils</li>
    <li>Convergence</li>
  </ol>  
 <li>Secure login</li>
 <li>Variables, and such.</li>
 <li>Dashboard</li>
 <li>EuroEditor</li>
 <li>A homemade server side analytics software.</li>
 <li>Sidebar for information about the current page</li>
 <li>Code validator for js, php, css, html,(w3c and such).</li>
 <li>Image gallery(imgur, later on, homemade.)</li>
 <li>Customizable.</li>
</ol>

<h2>Future functionalities</h2>

<ul>
 <li>Hased passwords</li>
 <li>Hased articles</li>
 <li>Dashboard</li>
 <li>Replacement for Google analytics(php!)</li>
 <li>EuroEditor (Inline/MD/source/preview)</li>
 <li>Add custom scripts/Functionality </li>
 <li>High Level encryption </li>
 <li>Image galley. At first powered by imgur. latter on a homemade one</li>
 <li>Spelling feature</li>
 <li><cite>themes</cite> folder.</li>
 <li>EuroEditor - <cite>smileys</cite> for smileys(that will automatically appear in the `smiley's tab in the editor`)</li>
 <li>EuroEditor - <cite>custom</cite> folders. For some custom functionality.</li>
 <li>Advanced search engine.</li>
 <li>Country support. </li>
 <li>Multy language articles</li>
 <li>Reference module.</li>
    <ul>
      <li>Makes a unique screenshot of a reference link. supports `http://example.com/article#intro`.</li>
      <li>Favicon support</li>
    </ul>
  <li> Revision controle.</li>
  <li> Polyfill where needed:</li>
  <li><a href="http://remysharp.com/2010/10/08/what-is-a-polyfill/" title="">What is a Polyfill?</a></li>
</ul>

<h2>Dependencies</h2>


<ul>
  <li>PHP</li>
  <li>JS(will rely mostly on php)</li>
  <li>Cheese sandwich</li>
</ul>


<h2>Howto</h2>

<b>Currently fiction:</b>

<ol>
  <li>Extract in your server.</li>
  <li>Done.</li>
</ol>

<h2>Licensing </h2>

<p>
  looking at this one: <a href="http://www.gnu.org/licenses/agpl-3.0.txt">Affero GPL</a>. 
  <b>But</b>, not yet implemented. Currently on the:
</p>

<h3>
  No License
</h3>

<ul>
  <li>Required</li>
  <ul>
    <li>License and copyright notice</li>
  </ul>
    <li>Permitted</li>
    <ul>
      <li>Commercial Use</li>
      <li>Private Use</li>
    </ul>
      <li>Forbidden</li>
    <ul>
      <li>Distribution</li>
      <li>Modification</li>
      <li>Sublicensing</li>
    </ul>
</ul>





</article>

</div> <!-- content -->

<?php include './include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
