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
<?php include '../include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php echo "$description"; ?>">
    <meta name="author" content="<?php "$author"; ?>">

<?php include '../include/fancybox.php'; ?>

<?php
    $user_agent_data = strtolower($_SERVER['HTTP_USER_AGENT']);

if(ereg("msie 6.0", $user_agent_data)) {

    include("../include/ie7.php");

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
  by <a class="author" rel="author" title="author" href="/about" target="_blank">Imri Paloja</a> Posted 

   <time datetime="2013-05" title="May. 2013">May. 2013</time>

</div>




<?php

if (!empty($_POST))
{
	foreach ( $_POST as $key => $value )
	{
		if ( ( !is_string($value) && !is_numeric($value) ) || !is_string($key) )
			continue;

?>
		<?php //echo htmlspecialchars( (string)$key ); ?>
			<?php echo "$value"; ?>

<!-- 	<hr><b title="author"><?php //echo "$author"; ?></b>

		<h1 class="header" title="header"><?php // echo "$header"; ?></h1>

			<p id="intro"  title="description">
				<?php //echo "$description"; ?>
			</p> -->

	<?php
	}
}
?>

</article>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>