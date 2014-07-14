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
<?php include '../../include/css.php'; ?>

    <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

<?php include '../../include/fancybox.php'; ?>

<?php
    $user_agent_data = strtolower($_SERVER['HTTP_USER_AGENT']);

if(ereg("msie 6.0", $user_agent_data)) {

    include("include/ie7.php");

    exit;
}
?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include '../../include/js.php'; ?>

</head>

<body>


  <?php include '../../include/menu.php'; ?>

<div id="wrap">

<div id="content">

<article>
<div class="article-meta">
  By <a class="author" rel="author" title="author" href="/about" target="_blank">Imri Paloja</a> Posted 

   <time datetime="<?php echo date('Y-m-d');?>" title="<?php echo date('Y-m-d');?>"><?php echo date('Y-m-d');?></time>

<ul id="share">

    <li id="gplus"><!-- Plaats deze tag bovenaan of vlak voor je laatste inhoudstag. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<!-- Plaats deze tag waar je de +1 knop wilt weergeven. -->
<div class="g-plusone" data-size="medium"></div>
    </li>

    <li id="twitter"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a></li>

    <li id="fb"><div class="fb-like share-button fbbutton" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    </li>

    <li id="linkedin"><script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-counter="right"></script>
    </li>
<!--     <li id="reddit"><script type="text/javascript" src="http://nl.reddit.com/static/button/button1.js"></script> </a>
 -->
</ul>


</div>

<h1 class="header">Template</h1>

<p id="intro">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<a title="Nemo the file manager" class="article-image" href="http://i.imgur.com/JhV2NR5.png/nemo-the-file-manager.png">
    <img alt="Nemo the file manager" src="http://i.imgur.com/JhV2NR5.png/nemo-the-file-manager.png">
</a>

<p id="intro">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

</article>

</div> <!-- content -->

<?php include '../../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
