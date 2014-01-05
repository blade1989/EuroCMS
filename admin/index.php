<?php 
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
<title>Masters House - Imri Paloja</title>
<link rel="stylesheet" type="text/css" href="css/framework.css">
<link rel="stylesheet" type="text/css" href="/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<meta name="description" content="Admin panel">
<meta name="keywords" content="Masters House, Bow down.">
<meta name="author" content="Imri Paloja" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen">
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen">
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

<!-- scripts -->
<script type="text/javascript" src="/js/scripts.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36882486-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

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
