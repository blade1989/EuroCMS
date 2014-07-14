<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <title>Inline editor</title>

  <link rel="stylesheet" href="css/inline.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">


    <script type="text/javascript" src="js/inline.js"></script>

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet prefetch">

    <script src="js/prefixfree.min.js"></script>

  <script>

  </script>
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

<body onload="_l='t';" style="background-color:#F9F9F9;">
<!-- Source: http://www.barneyparker.com/world-simplest-html5-wysisyg-inline-editor/ -->

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
        <a data-role='source' href='javascript:void(0)'><i class='fa fa-source'><small>SOURCE</small></i></a>
      </div>
    </div>

<!-- 

  The way I have been using it is to have a hidden textarea. If you add an event handler for the 'input' event, and copy the contents of the #editor div in to it's value, you have the exact HTML code available as form input.

 -->

 <?php

$html ="<!DOCTYPE html>\n
      <html>\n
      <head>\n
        <meta charset='utf-8'>\n
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>\n
        <title></title>\n
        <link rel='stylesheet' href=''>\n
      </head>\n
      <body>\n
        
      </body>\n
      </html>\n"

echo "$html";

 ?>


  <form action="save.php" method="post" name="article">

      <input type="text" name="html" value="<?php echo "$html"; ?>" placeholder="Author" style="display: none;visibility: hidden;">

      <input type="text" name="author" value="" placeholder="Author">
      <input type="text" name="header" value="" placeholder="header">
      <input type="datetime" name="datetime" value="" placeholder="datetime">
<br>

  <textarea style="display: none;visibility: hidden;" id='editor' contenteditable contextmenu="mymenu" name="description" placeholder="description"></textarea>

<!--     <div id='editor' contenteditable contextmenu="mymenu" name="description" placeholder="description">
      <p>This is just some example text to start us off</p>
    </div> -->

    <div class="tags">

      <input type="text" name="tag1" value="" placeholder="tag">
      <input type="text" name="tag2" value="" placeholder="tag">
      <input type="text" name="tag3" value="" placeholder="tag">

    </div>


    <input type="submit" value="Submit" style="    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) outset;
    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;">
  </form>


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
</body>

</html>