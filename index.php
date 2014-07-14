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

<?php //include './include/fancybox.php'; ?>

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

<h2>Editor</h2>

<!-- <iframe style="border: 0 none; height: 345px; max-height: 100%; min-height: 275px; width: 100%;overflow:hidden;"
src="EuroEditor/html5/inline.php">
</iframe> -->

<iframe style="border: 0 none; height: 345px; max-height: 100%; min-height: 275px; width: 100%;overflow:hidden;"
src="EuroEditor/markdown/md.php">
</iframe>


<p>
  <b>This is very <u>alpha!</u></b> don't run it on a <mark>production server</mark>! Best to run it on a machine which you don not care if a re install is needed.  
</p>




</article>

</div> <!-- content -->

<div style="    display: inline-block;
    visibility: hidden;
    width: 100%;height: 450px;"></div>

<?php include './include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
