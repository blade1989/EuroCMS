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
  <title><?php $title ?> - <?php $sitename ?></title>
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<?php include './include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

<?php include './include/fancybox.php'; ?>

<!--[if lt IE 7]> 
  <?php include './include/ie7.php'; ?>
<![endif]--> 



  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include './include/js.php'; ?>

</head>

<body>

  <?php include './include/menu.php'; ?>

<div id="wrap">

<div id="content">


<article>

<?php //include './include/meta.php'; ?>


<h1 class="header">EuroCMS</h1>

<p id="intro">
  Welcome to the pre-alpha version of EuroCMS.
</p>




</article>

</div> <!-- content -->

<?php include './include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
