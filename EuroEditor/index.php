<?php // include './admin/index.php'; 
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

    include("include/ie7.php");

    exit;
}
?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include '../include/js.php'; ?>

        <script src="ckeditor/ckeditor_standard/ckeditor.js"></script>


</head>

<body>




  <?php include '../include/menu.php'; ?>

<div id="wrap">

<div id="content" style="width:85%;">

<article>

<h1>EuroEditor</h1>

        <form action="effe.php" method="post">
 <!--          <input type="text" name="header" value="" placeholder="header"><br><br>
          <textarea type="text" name="description" value="" placeholder="description" style="width:80%;height:75px;"></textarea>
          <hr>
          <input type="text" name="tag1" value="" placeholder="tag1">
          <input type="text" name="tag2" value="" placeholder="tag2">
          <input type="text" name="tag3" value="" placeholder="tag3"> -->

            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>

            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1', {
    toolbar: 'Basic',
    uiColor: '#FFFFFF'
});
            </script>
            <input type="submit" value="Submit">
        </form>

</article>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
