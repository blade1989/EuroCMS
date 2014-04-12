<?php // include './admin/index.php'; 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('admin.php');

// everything below will show after correct login 


$author = 'Imri Paloja';

$description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$header = 'Skeleton';

$articleimage = 'favicon.png';

$articleimagename = 'Are you scared?';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo "$header";?> - EuroCMS</title>
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<?php include '../include/css.php'; ?>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <meta name="description" content="<?php echo "$description";?>">
  <meta name="author" content="<?php echo "$author";?>">

  <?php include '../include/fancybox.php'; ?>

<?php
    $user_agent_data = strtolower($_SERVER['HTTP_USER_AGENT']);

if(ereg("msie 6.0", $user_agent_data)) {

    include("include/ie7.php");

    exit;
}
?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../include/js.php'; ?>

</head>

<body>

  <?php include '../include/menu.php'; ?>

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

<div class="article-meta">
  by <a class="author" rel="author" data-title="author" href="http://www.eurobytes.nl/" target="_blank"><?php echo "$author"; ?></a> Posted 

   <time datetime="<?php $date = date_create(); echo date_format($date, 'Y-m-d'); ?>" title="<?php $date = date_create();echo date_format($date, 'Y-m-d'); ?>"><?php echo date('F Y'); ?></time> <b>(Updated)</b>

<?php include '../include/share.php'; ?>

</div>

<h1 class="header">
  How do I install OpenMW
</h1>

<a class="article-image" href="http://imgur.com/oIJImwT.png/openmw-launcher.png" data-title="OpenMW Launcher">
  <img src="http://imgur.com/oIJImwT.png/openmw-launcher.png" alt="OpenMW Launcher">
</a>

<p id="intro">
  Lorem ipsum dolor sit <i>amet</i>, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud <b>exercitation</b> ullamco laboris nisi ut aliquip ex ea commodo
  consequat. <s>Duis</s> aute irure <mark>dolor</mark> in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui <u>officia</u> deserunt mollit anim id est laborum.<sup>[1]</sup>
</p>



</article>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
