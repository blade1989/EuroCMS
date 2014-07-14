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

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include '../include/js.php'; ?>

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet prefetch">
  <script type="text/javascript" src="html5/js/inline.js"></script>
  <script type="text/javascript" src="html5/bootstrap/js/bootstrap.min.js"></script>

<style>

#editControls a {
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    color: #454545;
    height: 10px;
    margin: 0;
    padding: 5px;
    width: 10px;
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
    margin-top: 20px;
    max-height: 100%;
    min-height: 250px;
    overflow-y: auto;
    padding: 1em;
    resize: none;
}
</style>
 <script>
/*
Big Thanks To:
https://developer.mozilla.org/en-US/docs/Rich-Text_Editing_in_Mozilla#Executing_Commands
*/

$('#editControls a').click(function(e) {
  switch($(this).data('role')) {
    case 'h1':
    case 'h2':
    case 'p':
      document.execCommand('formatBlock', false, $(this).data('role'));
      break;
    default:
      document.execCommand($(this).data('role'), false, null);
      break;
    }
})
  </script>
</head>

<body>

  <?php include '../include/menu.php'; ?>

<div id="wrap">

<aside>

<div>
  <b>Latest Articles</b>
     <hr>
    <ul>
      <li>
        <a href="#" title="Article name1">Nagios or Icinga</a>
      </li>  
      <li>
        <a href="#" title="Article name2">0 A.D. Alpha 14 Naukratis</a>
      </li>  
      <li>
        <a href="#" title="Article name3">Privacy &amp; Security</a>
      </li>  
      <li>
        <a href="#" title="Article name4">Native Viber for Linux</a>
      </li>   
      <li>
        <a href="#" title="Article name5">League of Legends under Ubuntu</a>
      </li>  
    </ul> 
</div>
  

<div>
  <b>Analytics</b>
    <hr>

<p>
  Most viewed pages
</p>

    <ol>
      <li>
        <a href="#" title="Article name1">Nagios or Icinga</a>
      </li>  
      <li>
        <a href="#" title="Article name2">0 A.D. Alpha 14 Naukratis</a>
      </li>  
      <li>
        <a href="#" title="Article name3">Privacy &amp; Security</a>
      </li>  
      <li>
        <a href="#" title="Article name4">Native Viber for Linux</a>
      </li>   
      <li>
        <a href="#" title="Article name5">League of Legends under Ubuntu</a>
      </li> 
    </ol>

</div>
  
  <div id="recentcomments" class="dsq-widget align">

  <b class ="dsq-widget-title">Recent comments</b>
  <script type="text/javascript" src="http://eurobytes.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=32&amp;excerpt_length=200"></script>
   
  </div>
</aside>


<div id="content">

<article>

<h1 style="margin: 0 auto; text-align: center; width: 100%;">EuroEditor</h1>


  <div>
  <div>
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
    <div id='editor' contenteditable contextmenu="mymenu">
      <h1>This is a title!</h1>
      <p>This is just some example text to start us off</p>
    </div>
  </div>
</div>

<menu type="context" id="mymenu">
  <menuitem label="Edit Post" onclick=""></menuitem>
  <menuitem label="Refresh Post" onclick="window.location.reload();" icon="/images/refresh-icon.png"></menuitem>
  <menuitem label="Skip to Comments" onclick="window.location='#comments';" icon="/images/comment_icon.gif"></menuitem>
  <menu label="Share on..." icon="/images/share_icon.gif">
  <menuitem label="Twitter" icon="/images/twitter_icon.gif" onclick="goTo('//twitter.com/intent/tweet?text=' + document.title + ':  ' + window.location.href);"></menuitem>
  <menuitem label="Facebook" icon="/images/facebook_icon16x16.gif" onclick="goTo('//facebook.com/sharer/sharer.php?u=' + window.location.href);"></menuitem>
  </menu>
</menu>




</article>

</div> <!-- content -->

<div style="    display: inline-block;
    visibility: hidden;
    width: 100%;height: 450px;"></div>

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
