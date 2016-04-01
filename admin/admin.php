<?php defined('DS') OR die('No direct access allowed.');

/* Actual username and password. Need to hash them. 

Official php documentation:

http://php.net/manual/en/faq.passwords.php


look further in to these: 

http://www.openwall.com/phpass/
http://www.php.net/manual/en/function.password-hash.php


$users = array(
 "$username" => "$password"
);

*/

$users = array(
 "imri" => "password",
 "user" => "password",
 "user2" => "password"
);

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
    exit();
}

if(isset($_POST['username'])) {
    if($users[$_POST['username']] !== NULL && $users[$_POST['username']] == $_POST['password']) {
  $_SESSION['username'] = $_POST['username'];
  header('Location:  ' . $_SERVER['PHP_SELF']);
     exit();
   }else {
        //invalid login
  echo "<h1 id=loggon-err>Error Logging in</h1>";
    }
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
<title><?php $title ?> - <?php $sitename ?></title>

<?php include \'./include/css.php\'; ?>

<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<meta name="description" content="<?php $description ?>">
<meta name="keywords" content="<?php $keywords ?>">
<meta name="author" content="<?php $author ?>" >
<meta charset="utf-8">

<?php include \'./include/fancybox.php\'; ?>

<?php include \'./include/ie.php\'; ?>

<?php include \'./include/js.php\'; ?>

</head>

<body>

<fieldset id="loginform">
<legend>
  <a href="http://www.eurobytes.nl/images/corneillie-black-red.jpg" title="$author">
<img src="http://www.eurobytes.nl/images/corneillie-black-red.jpg" alt="$author" style="width:300px;height:250px;border:2px outset #CCCCCC;"></a>
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
