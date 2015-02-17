<?php 

// read this, before implementing further code:
// http://security.stackexchange.com/questions/45034/how-to-secure-a-login-php-file
//
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
<title><?php $title ?> - <?php $sitename ?></title>

<?php include './include/css.php'; ?>

<link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<link rel="stylesheet" type="text/css" href="http://localhost/css/class.css">

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<meta name="description" content="<?php $description ?>">
<meta name="keywords" content="<?php $keywords ?>">
<meta name="author" content="<?php $author ?>" >
<meta charset="utf-8">

<?php include './include/fancybox.php'; ?>

<?php include './include/ie.php'; ?>

<?php include './include/js.php'; ?>

</head>

<body>

<?php if($_SESSION['username']): ?>
<div id="admin-bar">

<ul id="admin-bar-menu">
	
	<li>
		<a href="/admin/index.php" id="login-image"></a>
	</li>

	<li>
		<a href="http://www.eurobytes.nl/" title="homepage" style="color:#454545;margin-left:5px;">Eurobytes</a>
	</li>

	<li>
		<b id="userloggedin"><?=$_SESSION['username']?></b> 
	</li>

	<li>
		<a href="/admin/dashboard" title="The Dash" style="text-decoration:underline;">DASHBOARD</a>
	</li>

	<li>
		<a href="/EuroEditor" title="Manage Articles">Articles</a>
	</li>

</ul>

<a id="logout-image" href="/admin/admin.php?logout=1" style="float: right;">LogOut</a>

</div>

<?php endif; ?>

<div id="wrap">

<div id="content">

	<article style="width: 100%;">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</article>

</div>
</div>


<footer>

	<p id="name">Eurobytes - your video/text tutorial</p>

</footer>
</body>
</html>
