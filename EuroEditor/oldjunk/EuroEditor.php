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
<?php include '../include/css.php'; ?>

    <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

<?php include '../include/fancybox.php'; ?>

<?php
    $user_agent_data = strtolower($_SERVER['HTTP_USER_AGENT']);

if(ereg("msie 6.0", $user_agent_data)) {

    include("include/ie7.php");

    exit;
}
?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include '../include/js.php'; ?>

</head>

<body>


  <?php include '../include/menu.php'; ?>

<div id="wrap">

<div id="content">

<article>
<div class="article-meta">
  By <a class="author" rel="author" title="author" href="/about" target="_blank">Imri Paloja</a> Posted 

   <time datetime="<?php echo date('Y-m-d');?>" title="<?php echo date('Y-m-d');?>"><?php echo date('Y-m-d');?></time>
</div>

  <form action="article.php" method="post">
    <textarea type="text" name="description" value="" placeholder="description" style="    height: 250px;
    padding: 5px;
    resize: none;
    width: 98%;"></textarea>
    <hr>
    <input type="text" name="tag1" value="" placeholder="tag1">
    <input type="text" name="tag2" value="" placeholder="tag2">
    <input type="text" name="tag3" value="" placeholder="tag3">
  
  <br><br>  <input type="submit" value="Submit">

        </form>


</article>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
