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
<?php include '../../include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php echo "$description"; ?>">
    <meta name="author" content="<?php "$author"; ?>">

<?php include '../../include/fancybox.php'; ?>

<?php
    $user_agent_data = strtolower($_SERVER['HTTP_USER_AGENT']);

if(ereg("msie 6.0", $user_agent_data)) {

    include("../../include/ie7.php");

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
   <a class="author" rel="author" title="author" href="/about" target="_blank"><?php echo $_POST["author"]; ?></a> 

   <time datetime="<?php echo $_POST["datetime"]; ?>" title="<?php echo $_POST["datetime"]; ?>"><?php echo $_POST["datetime"]; ?></time>

</div> 

<h1><?php echo $_POST["header"]; ?></h1>

<p>
  <?php echo $_POST["description"]; ?>
</p>



    <div class="tags">

      <span> <?php echo $_POST["tag1"]; ?> </span>
      <span> <?php echo $_POST["tag2"]; ?> </span>
      <span> <?php echo $_POST["tag3"]; ?> </span>

    </div>  

</article>

</div> <!-- content -->

<?php include '../../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>