<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EuroEditor - <?php $sitename ?></title>
	<link rel="stylesheet" href="ee.css">
<?php include '../../include/css.php'; ?>
	<link rel="stylesheet" href="../admin-bar/admin-bar.css">
</head>
<body>

	<?php if($_SESSION['username']): ?>
<div id="admin-bar"><a href="/admin/index.php" id="login-image"></a>

<b id="userloggedin"><?=$_SESSION['username']?></b>  

<ul id="admin-bar-menu">
			<li><a href="dashboard" title="dashboard">dashboard</a></li>
			<li><a href="Site" title="Site">Site</a></li>
			<li><a href="archive" title="archive">archive</a></li>
			<li><a href="Editor" title="Editor">Editor</a></li>
			<li><a href="Analytics" title="Analytics">Analytics</a></li>
			<li style="float:right;"><a href="logout" title="logout">logout</a></li>
</ul>


<a id="logout-image" href="?logout=1"></a></div><?php endif; ?>

</div>


<div id="wrap">

<div id="content">

<ul id="admin-bar-menu">
			<li><a href="dashboard" title="dashboard">dashboard</a></li>
			<li><a href="Site" title="Site">Site</a></li>
			<li><a href="archive" title="archive">archive</a></li>
			<li><a href="Editor" title="Editor">Editor</a></li>
			<li><a href="Analytics" title="Analytics">Analytics</a></li>
			<li style="float:right;"><a href="logout" title="logout">logout</a></li>
</ul>

<br>
<br>
<br>

<form action="new.php" method="post" id="eeform">

<textarea name="editor" id="ee">
	&lt;p class=&quot;intro&quot;&gt;Intro.&lt;/p&gt;
</textarea>


<input type="file" name="file" value="file" placeholder="file"><br><br>

<input type="image" name="image" value="image" placeholder="image"><br><br>

<input type="reset" name="reset" value="reset"><br><br>

<input type="submit" name="submit" value="submit">


    </form>



</div>



</div>
</div>
	
</body>
</html>