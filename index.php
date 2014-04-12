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
  <title>Admin - EuroCMS</title>
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
  Welcome to the <b>pre</b>-<b>alpha</b> version of EuroCMS. <strong>Your free, easy to use, and customizable Content Management System</strong>
</p>

<form style="margin: 0px auto;">
  
    <input id="keyboard" type="text">
        <img id="icon" src="http://mottie.github.com/Keyboard/demo/keyboard.png" style="width: 25px;">

</form>







</article>

</div> <!-- content -->

<div style="    display: inline-block;
    visibility: hidden;
    width: 100%;height: 450px;"></div>

<?php include './include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
