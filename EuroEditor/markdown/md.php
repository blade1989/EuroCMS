<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mark Down</title>
	<link rel="stylesheet" href="css/md.css">
<!-- 	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/class.css"> -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/md.js"></script>
	<script type="text/javascript" src="http://cachedcommons.org/cache/showdown/1.0.0/javascripts/showdown.js"></script>

</head>
<body>


<!-- 
	Source:

	http://www.barneyparker.com/worlds-simplest-html-markdown-editor/
 -->


	<div id='container'>
		<button id='toggler'>Preview</button>
		<div class='clearfix'>

	<div id='preview'></div>


  <form action="save.php" method="post" name="article">

      <input type="text" name="author" value="author" placeholder="Author">
      <input type="text" name="header" value="" placeholder="header">
      <input type="datetime" name="datetime" value="" placeholder="datetime">
<br>
	<textarea id="editor" placeholder="description" name="description">
	</textarea>

<!--     <div id='editor' contenteditable contextmenu="mymenu" name='editor'>
      <p>This is just some example text to start us off</p>
    </div> -->


    <div class="tags">

      <input type="text" name="tag1" value="" placeholder="tag">
      <input type="text" name="tag2" value="" placeholder="tag">
      <input type="text" name="tag3" value="" placeholder="tag">

    </div>


    <input type="submit" value="Submit">
  </form>

</div>

</body>
</html>