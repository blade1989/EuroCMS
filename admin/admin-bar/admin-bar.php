<?php if($_SESSION['username']): ?>
<link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<div id="admin-bar"><a href="/admin/index.php" id="login-image"></a>

<b id="userloggedin"><?=$_SESSION['username']?></b>  

 <a href="/" title="Homepage" id="home">Eurobytes</a>

<ul id="admin-bar-menu">
  <li><a href="/admin/dashboard" title="The Dash" style="text-decoration:underline;">DASHBOARD</a></li>
  <li><a href="/admin/articles" title="Manage Articles">Articles</a></li>
</ul>

<a id="logout-image" href="/admin/index.php?logout=1"></a>
</div>
<?php endif; ?>