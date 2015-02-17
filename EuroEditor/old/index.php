<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EuroEditor</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="Free tutorials, as in free speech, not free beer.">
    <meta name="keywords" content="Tutorials, Editorials, Freedom">
    <meta name="author" content="Imri Paloja">

	<link rel="stylesheet" href="eeditor.css">
	<link rel="stylesheet" type="text/css" href="http://localhost//css/class.css">

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="eeditor.js"></script>

</head>
<body>
	
<article style="margin: 20px auto; border: 1px solid;width: 750px;">

<div id="EuroEditor">

	<div id="EuroButtons">

		<ul>
			<li>
				<a href="javascript:void(0)" title="#" class="EuroButton" id="bold">B</a>
			</li>

			<li>
				<a href="javascript:void(0)" title="#" class="EuroButton" id="italic">I</a>
			</li>

			<li>
				<a href="javascript:void(0)" title="#" class="EuroButton" id="underline">U</a>
			</li>
		</ul>


		<ul>
			<li>
				<a href="javascript:void(0)" class="EuroButton" id="mark">mark</a>
				<!-- <a href="javascript:void(0)" title="#" class="EuroButton" id="mark">mark</a> -->
			</li>

			<li>
				
			</li>

			<li>
				
			</li>
		</ul>


<!-- removes if there were previous content in the editor -->
		<button onclick="link()" id="link">Link</button> 
		<button onclick="img()" id="img">IMG</button>





	</div>


	  <form action="save.php" method="post" name="article">

<!-- 	      <input type="text" name="author" value="" placeholder="Author">
	      <input type="text" name="header" value="" placeholder="header">
	      <input type="text" name="datetime" value="" placeholder="datetime">
	<br> -->


	<div onClick="this.contentEditable='true';" id="editor" spellcheck="false" contextmenu="mymenu">
	</div>
	    <div class="tags">
	      <input type="text" name="tag1" value="" placeholder="tag">
	      <input type="text" name="tag2" value="" placeholder="tag">
	      <input type="text" name="tag3" value="" placeholder="tag">
	    </div>

	    <input type="submit" value="Submit" style="display:block;margin:1%;color:#454545;">
		<input type="hidden" name="" value="">

	  </form>



</div> <!-- EuroEditor -->

</article>

</body>
</html>