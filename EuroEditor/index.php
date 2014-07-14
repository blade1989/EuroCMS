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
  <title>EuroEditor - EuroCMS</title>
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

  <script type="text/javascript" src="euroeditor.js"></script>

  <link rel="stylesheet" type="text/css" href="euroeditor.css">

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include '../include/js.php'; ?>

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- html5 libraries -->
    <script type="text/javascript" src="html5/js/inline.js"></script>
  <link rel="stylesheet" href="html5/css/inline.css">


<!-- markdown libraries -->
  <script type="text/javascript" src="markdown/js/md.js"></script>
  <script type="text/javascript" src="http://cachedcommons.org/cache/showdown/1.0.0/javascripts/showdown.js"></script>


<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet prefetch">

<style>

#editControls a {
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    border-radius: 0;
    color: #454545;
    height: 10px;
    margin: 0;
    padding: 5px;
    width: 10px;
}

button#toggler {
    border-radius: 0;
    color: #454545;
    display: block;
    float: right;
    height: 31px;
    margin-top: -48px;
    padding: 0;
    text-align: center;
    width: 50px;
}

#editControls a:hover {
    text-decoration: none;
    background-color: #EEEEEE;
}

#editor {
    background-color: #FFFFFF;
    border: 1px solid #C0C0C0;
    box-shadow: 0 0 10px #C0C0C0 inset;
    height: 125px;
    border-radius: 0;
    margin-top: 20px;
    max-height: 100%;
    min-height: 250px;
    overflow-y: auto;
    padding: 1em;
    resize: none;
}
</style>

</head>

<body>

  <?php include '../include/menu.php'; ?>

<div id="wrap">

<!-- aside iclulde php -->


<div id="content">

<article>

<h1 style="margin: 0 auto; text-align: center; width: 100%;">Editor</h1>

<!-- <iframe  style="border: 0 none; height: 360px; max-height: 100%; min-height: 275px; width: 100%;overflow:hidden;"
src="html5/inline.php">
</iframe>
 -->

<!-- <h2>MarkDown editor</h2>

<iframe style="border: 0 none; height: 345px; max-height: 100%; min-height: 275px; width: 100%;overflow:hidden;"
src="markdown/md.php">
</iframe> -->


  <div id='container'>
    <div id='editControls'>
      <!-- <h1>New article</h1> -->
      <div>
        <a data-role='undo' href='javascript:void(0)'><i class='fa fa-undo'></i></a>
        <a data-role='redo' href='javascript:void(0)'><i class='fa fa-repeat'></i></a>
        <a data-role='bold' href='javascript:void(0)'><i class='fa fa-bold'></i></a>
        <a data-role='italic' href='javascript:void(0)'><i class='fa fa-italic'></i></a>
        <a data-role='underline' href='javascript:void(0)'><i class='fa fa-underline'></i></a>
        <a data-role='strikeThrough' href='javascript:void(0)'><i class='fa fa-strikethrough'></i></a>
        <a data-role='justifyLeft' href='javascript:void(0)'><i class='fa fa-align-left'></i></a>
        <a data-role='justifyCenter' href='javascript:void(0)'><i class='fa fa-align-center'></i></a>
        <a data-role='justifyRight' href='javascript:void(0)'><i class='fa fa-align-right'></i></a>
        <a data-role='justifyFull' href='javascript:void(0)'><i class='fa fa-align-justify'></i></a>
        <a data-role='indent' href='javascript:void(0)'><i class='fa fa-indent'></i></a>
        <a data-role='outdent' href='javascript:void(0)'><i class='fa fa-outdent'></i></a>
        <a data-role='insertUnorderedList' href='javascript:void(0)'><i class='fa fa-list-ul'></i></a>
        <a data-role='insertOrderedList' href='javascript:void(0)'><i class='fa fa-list-ol'></i></a>
        <a data-role='h1' href='javascript:void(0)'>h<sup>1</sup></a>
        <a data-role='h2' href='javascript:void(0)'>h<sup>2</sup></a>
        <a data-role='p' href='javascript:void(0)'>p</a>
        <a data-role='subscript' href='javascript:void(0)'><i class='fa fa-subscript'></i></a>
        <a data-role='superscript' href='javascript:void(0)'><i class='fa fa-superscript'></i></a>
      </div>
    </div>

        <button id='toggler'>source</button>
<!--     <div class='clearfix'>
 -->

  <form action="save.php" method="post" name="article">

      <input type="text" name="author" value="" placeholder="Author">
      <input type="text" name="header" value="" placeholder="header">
      <input type="text" name="datetime" value="" placeholder="datetime">
<br>
<!--   <textarea id="editor" placeholder="description" name="description" style="display:block;margin:1%;width:97%;height:250px;">**This is just some example text to start us off**</textarea> -->

    <div id='editor' contenteditable contextmenu="mymenu" name='editor'>
      <p>This is just some example text to start us off</p>
    </div>

  <div id='preview'></div>

    <div class="tags">
      <input type="text" name="tag1" value="" placeholder="tag">
      <input type="text" name="tag2" value="" placeholder="tag">
      <input type="text" name="tag3" value="" placeholder="tag">
    </div>

    <input type="submit" value="Submit" style="display:block;margin:1%;color:#454545;">
  </form>

</div>


</article>

</div> <!-- content -->

<div style="    display: inline-block;
    visibility: hidden;
    width: 100%;height: 450px;"></div>

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->




</body>
</html>
