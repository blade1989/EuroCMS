<?php 

define('DS',  TRUE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - EuroCMS</title>
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<?php include '../include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

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

<div id="wrap" style="margin-top:10%;">

<div id="content">


<article>

<table>
	<tr>
		<td>Title</td>
		<td>Author</td>
		<td>Description</td>
	</tr>
	<?php 

		foreach ($books as $title => $book)
		{
			echo '
			<tr>
				<td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td>
				<td>'.$book->author.'</td>
				<td>'.$book->description.'</td>
			</tr>';
		}

	?>
</table>

</article>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->


</body>
</html>