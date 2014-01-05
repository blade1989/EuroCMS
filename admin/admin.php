<?php /*defined('DS') OR die('No direct access allowed.');*/

$users = array(
 "username" => "password"
);

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($users[$_POST['username']] !== NULL && $users[$_POST['username']] == $_POST['password']) {
  $_SESSION['username'] = $_POST['username'];
  header('Location:  ' . $_SERVER['PHP_SELF']);
    }else {
        //invalid login
  echo "<h1 id=loggon-err>Error Logging in</h1>";
    }
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
<title>Masters House - Imri Paloja</title>
<link rel="stylesheet" type="text/css" href="css/framework.css">
<link rel="stylesheet" type="text/css" href="/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<meta name="description" content="Masters House">
<meta name="keywords" content="Masters House, bow down.">
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
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>

</head>

<body>

<fieldset id="loginform">
<legend>
  <a href="/images/corneillie-black-red.jpg" title="BOSS HOGG">
<img src="/images/corneillie-black-red.jpg" alt="BOSS" style="width:300px;height:250px;border:2px outset #CCCCCC;"></a>
</legend>

 <a href="http://www.eurobytes.nl/" title="Homepage" style="
    color: #454545;
    margin-top: -28px;
    padding-bottom: 0;
    position: absolute;
    text-decoration: none;
    width: 65px;">Eurobytes</a>

<form method="post" id="formpost" action="'.SELF.'">
 

 <label for="username">Username</label><br>

    <input type="text" id="username" name="username" value="" style="border:1px solid #CCCCCC;"><br>
  <label for="password">Password</label><br>

    <input type="password" id="password" name="password" value="" style="border:1px solid #CCCCCC;"><br>

  <input type="submit" name="submit" value="Login" class="button" style="border:1px solid #CCCCCC;border-top:0px none;cursor:pointer;">
  </form>

</fieldset>

</div>
</div>

</div>
</body>
</html>'
  ;
exit; 
?>