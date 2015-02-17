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
		<a href="/admin/dashboard" title="The Dash">DASHBOARD</a>
	</li>

	<li>
		<a href="/EuroEditor" title="Manage Articles">Articles</a>
	</li>

</ul>

<a id="logout-image" href="/admin/admin.php?logout=1" style="float: right;">LogOut</a>

</div>

<?php endif; ?>