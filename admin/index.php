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

<link rel="stylesheet" type="text/css" href="css/admin.css">
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
<div id="admin-bar"><a href="/admin/index.php" id="login-image"></a>

<a href="http://www.eurobytes.nl/" title="homepage" style="color:#454545;margin-left:5px;">Eurobytes</a>
<b id="userloggedin"><?=$_SESSION['username']?></b>  

<ul id="admin-bar-menu">
	<li><a href="/admin/dashboard" title="The Dash" style="text-decoration:underline;">DASHBOARD</a></li>
	<li><a href="/admin/articles" title="Manage Articles">Articles</a></li>
</ul>


<a id="logout-image" href="?logout=1"></a></div>

</div>
<?php endif; ?>

<div id="wrap">

<div id="content">

<div class="validator">
<iframe id="validatorframe" title="w3c validator" src="w3c-validator/index.html#w3cvalid"></iframe>
</div>

</div>
</div>


<div id="footer">

<p id="name">Eurobytes - your video/text tutorial</p>


</div>
</body>
</html>
