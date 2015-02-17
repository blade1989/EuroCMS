<?php
session_start();
if(isset($_POST['username']) && ($_POST['username'] == 'w3lessons') && ($_POST['password'] == 'w3lessons'))
{
	$_SESSION['w3name'] = trim($_POST['username']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>How to check session timeout using PHP &amp; jQuery Ajax - w3lessons.info</title>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link href="jquery.alerts.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://localhost/css/class.css">

<script type="text/javascript" src="jquery.alerts.js"></script>
<style>
body { background:#fafafa; }
.outer { background:#fafafa; width:100%; }
.content { margin:0 auto; width:800px; background:#fff; height:400px; padding:20px;}
.textBox { padding:2px; height:27px; border:2px solid #ccc; width:200px;}
.alert { padding:3px; background:#ccc; font-weight:bold; }
</style>
 </head>
<?php if(!empty($_SESSION['w3name'])) { ?>
<script type="text/javascript">
var check_session;
function CheckForSession() {

		var str="chklogout=true";
		jQuery.ajax({
				type: "POST",
				url: "chk_session.php",
				data: str,
				cache: false,
				success: function(res){
					if(res == "1") {
					jAlert('You Are Logged Out', 'EuroCMS:');
					}
				}
		});
		}
check_session = setInterval(CheckForSession, 5000);
</script>
<?php } ?>
<body>
<center><script type="text/javascript"><!--
google_ad_client = "ca-pub-5104998679826243";
/* mysite_indivi */
google_ad_slot = "0527018651";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
<div class="outer">
	<div class="content">
		<h1>How to Check Session Timeout using PHP & jQuery Ajax</h1>
		<table width="100%" cellpadding="2" cellspacing="3" style="border-collapse:collapse">
		<tr>
		<td valign="top">
        <?php if(empty($_SESSION['w3name'])) { ?>
				<p class="alert">Please Provide All Details</p>
		<form action="" method="post">
        <table cellpadding="2" cellspacing="2" style="border-collapse:collapse;">
		<tr>
		<td>Username</td><td><input type="text" class="textBox" placeholder="Username" name="username" /></td>
		</tr>
		<tr>
		<td>Password :</td><td><input type="password" class="textBox" placeholder="Password" name="password" /></td>
		</tr>
		<tr>
		<td colspan="2" align="right"><input type="submit" value="Login" name="login" /></td>
		</tr>
		</table>
		</form>
        <?php } else { ?>
        <p class="alert">Welcome, <?php echo $_SESSION['w3name'];?></p>
        <?php } ?>
				</td>
		<td valign="top" width="50%">
        <?php if(empty($_SESSION['w3name'])) { ?>
		<p class="alert">Sample Login Details</p>
		<p>
		Username : w3lessons<br />
		Password : w3lessons
		</p>
          <?php } else { ?>
          <p>Now <a href="?logout.php" target="_blank">click here to logout</a> to Open this page in a new tab/window. And again come to this page.. You will see an alert saying that <b>"Your session has been expired"</b></p>
          <?php } ?>
		</td>
		</tr>
		</table>
	</div>
</div>



</body>
</html>
