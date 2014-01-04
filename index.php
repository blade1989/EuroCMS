<?php include '../admin/admin.php'; 
define('DS',  TRUE);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php $title ?> - <?php $sitename ?></title>
<?php include './include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

<?php include './include/fancybox.php'; ?>

<?php include './include/ie.php'; ?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include './include/js.php'; ?>

</head>

<body>

<div id="wrap">

<div id="content">

  <?php include './include/menu.php'; ?>

<article>

<?php //include './include/meta.php'; ?>


<h1 class="header">EuroCMS</h1>

<p id="intro">
  Welcome to the pre-alpha version of EuroCMS.
</p>


<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>


<h2>Lorem</h2>

<p>
<b>Lorem</b> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud <a href="https://www.google.nl/" title="Google" target="_blank">exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<a href="https://www.google.nl/" title="Google" target="_blank">
  <img src="http://www.eurobytes.nl/favicon.png" style="width:50px;">
</a>

</article>

<?php include './include/comment.php';  ?>

<div id="np">


  <a id="newposts" title="Next" href="old-posts">NEXT</a>

  <a title="Home" id="prev-home-next" href="/"></a>

  <a id="oldposts" title="Previous" href="old-posts">PREVIOUS</a>

</div>

<div id="asideblock"></div>

</div> <!-- content -->

<?php include './include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
