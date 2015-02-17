<?php // include './admin/index.php'; 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('../admin/admin.php');

// everything below will show after correct login 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EuroEditor - EuroBytes</title>
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
    <link rel="shortcut icon" href="http://www.eurobytes.nl/favicon.ico" type="image/x-icon">
    <meta name="description" content="EuroEditor, Your free, easy to use, and customizable web based editor">
    <meta name="keywords" content="Editor, advanced, customizable">
    <meta name="author" content="Imri Paloja">

  <!-- html5.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- css3-mediaqueries.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="eeditor.js"></script>
    <script type="text/javascript" src="toc.js"></script>



  <link rel="stylesheet" href="eeditor.css">

<link rel="stylesheet" type="text/css" href="http://www.eurobytes.nl/css/class.css">

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include '../include/js.php'; ?>

</head>

<body>
  <?php include '../include/menu.php'; ?>

<div id="wrap">

<div id="content">

  <article style="width: 100%;">

  <div class="article-meta">
    <p>
    By 
    <a target="_blank" href="/about" title="Author" rel="author" class="author">Imri Paloja</a>

    Posted: <time datetime="<?php echo date('Y-m-d');?>" title="<?php  echo date('Y-m-d');?>"><?php echo date('Y-m-d');?></time>,

    Comments: <a rel="nofollow" href="#comments" title="Comments on this page">26</a>,

    Views: 2.259 -

    <a rel="nofollow" href="?improve" class="feedback" title="Improve this post">Feedback</a>
    </p>
  </div> 



<?php echo $_POST["output"]; ?>

</article>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>