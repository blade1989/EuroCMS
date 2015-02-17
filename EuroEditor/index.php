<?php 

// read this, before implementing further code:
// http://security.stackexchange.com/questions/45034/how-to-secure-a-login-php-file
//
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('admin.php');

// everything below will show after correct login 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EuroEditor by imri Paloja</title>
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

	<link rel="stylesheet" href="eeditor.css">

<link rel="stylesheet" type="text/css" href="http://www.eurobytes.nl/css/class.css">
  <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">

<style>
article {
	background-color: #F9F9F9;
	border: 1px solid #CCCCCC;
	padding: 20px;
	margin: 20px auto;
	width: 750px;
}

.active {
	border: 1px solid #008000;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.75) inset;
    background: linear-gradient(to bottom, #F9F9F9, #FFFFFF) repeat scroll 0 0 rgba(0, 0, 0, 0.75);
    cursor: pointer;
}

.hidden {
	display: none;
    height: 750px;
    width: 100%;
}

#closetoc {
	display: none;
}


</style>


</head>
<body>

<?php include('../admin/admin-bar/boss-bar.php'); ?>


<!-- <a href="http://www.eurobytes.nl/" onclick="window.open(this.href,'targetWindow','toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=250'); return false;">Popup link</a>
 -->


 <article>

<div id="eeditor">

	<div id="eebuttons">

		<button onclick="new()" id="new"></button>
		<button onclick="open()" id="open"></button>

		<span class="spacer"></span>

		<button onclick="save()" id="save"></button>
		<button onclick="mail()" id="mail"></button>

		<span class="spacer"></span>

		<button onclick="edit()" id="edit" class="active"></button>

		<button onclick="pdf()" id="expdf"></button>
		<button onclick="print()" id="print"></button>
		<button onclick="printpreview()" id="printpreview"></button>

		<span class="spacer"></span>

		<button onclick="spellcheckon()" id="spellcheck" class="active" ></button>
		<button onclick="spellcheckoff()" id="spellcheckoff"></button>

		<span class="spacer"></span>

		<button onclick="cut()" id="cut"></button>
		<button onclick="paste()" id="paste"></button>
		<button onclick="copyToClipboard()" id="cp"></button>

		<span class="spacer"></span>

		<button onclick="revert()" id="revert"></button>
		<button onclick="apply()" id="apply"></button>


		<span class="spacer"></span>

		<button onclick="link()" id="link"></button>
		<button onclick="img()" id="img"></button>

		<span class="spacer"></span>

		<button onclick="table()" id="table"></button>


		<button onclick="ucharachters()" id="ucharachters"></button>

		<span class="spacer"></span>


		<button onclick="fullscreen()" id="fullscreen">F</button>


		<!-- <button onclick="toc()" id="toc" title="Table Of Contents">TC</button> -->
		<button onclick="index()" id="toc" title="Table Of Contents">[+]</button>
		<button onclick="source()" id="source" title="Surce Code">S</button>

		<button onclick="help()" id="help">?</button>

	</div>
	
	<div id="eebuttons2">

		<select title="style">
		  <option value="paragraph">parargraph</option>
		  <option value="H1">header 1</option>
		  <option value="H2">header 2</option>
		  <option value="H3">header 3</option>
		  <option value="blockquote" id="blockquote" onclick="blockquote()">blockquote</option>
		  <option value="code" id="code" onclick="code()">code</option>
		  <option value="more" id="more" onclick="more()">More...</option>
		</select>

		<select title="font-family">
		  <option value="liberation-serif">Liberation Serif</option>
		  <option value="serif">serif</option>
		  <option value="sans-serif" id="sans-serif">sans-serif</option>
		  <option value="times-new-roman">Times New Roman</option>
		</select>

		<select title="font-size">
		  <option value="onepx">1px</option>
		  <option value="twopx">2px</option>
		  <option value="fourpx">4px</option>
		  <option value="eightpx">8px</option>
		  <option value="sixteenpx" selected>96px</option>
		  <option value="twentyeightpx">28px</option>
		</select>


		<button id="bold" title="Bold selected text">B</button>
		<button id="italic" title="Italic selected text">I</button>
		<button id="underline" title="Underlin selected text">U</button>

		<span class="spacer"></span>

		<button id="textleft" title="Align text to the left"></button>
		<button id="textcenter" title="Align text to the center"></button>
		<button id="textright" title="Align text to the right"></button>
		<button id="textjustified" title="Align text to the justified"></button>

		<span class="spacer"></span>

		<button id="ol" title="Make an ordered list">OL</button>
		<button id="ul" title="Make an unorderd list">UL</button>

		<button id="tabtoleft" title="tab to the left"> &lt; </button>
		<button id="tabtoright" title="tab to the right"> &gt; </button>

		<span class="spacer"></span>

<!-- 		<button id="textcolor" title="Change text color" style="background-color: #454545;">A</button>
		<button id="mark" title="mark the selected text" style="background-color: #CC0000;">A</button>

 -->

		<select title="Emjicons" style="width: 45px;">
			<option style="background-image: url(/images/ubuntu-smileys/icon_biggrin.png); background-size: 55% 100%;background-repeat: no-repeat;" selected>&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_confused.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_cool.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_eek.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_mad.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_neutral.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_razz.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_sad.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_smile.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_surprised.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
			<option style="background-image: url(/images/ubuntu-smileys/icon_wink.png); background-size: 55% 100%;background-repeat: no-repeat;">&nbsp;</option>
		</select>

	</div> <!-- eebuttons2 -->

<!-- onClick="this.contentEditable='true';"  -->

<form action="saveme.php" method="post">

<div id="eetextarea" class="word_count" spellcheck="true" contenteditable="true">

          <h1>Dynamic Table Of Content</h1>
          
          <p>
            Lorem ipsum dolor sit amet, Imri idiotus est consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>  
          

          <h2>Jquery script</h2>
          
            <p> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h3>How do many licks does a giraffe?</h3>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h4>Which Frank is?</h4>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h5>Is fourteen enough?</h5>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h6>Is a circle an oval y/n?</h6>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
 
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h3>Many mongerals manifest mountains</h3>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h3>How would you like a soda drink?</h3>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h3>I would very much like a soda drink.</h3>
          
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          
          <h3>Please Header Script work</h3>
          
            <p>   
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            

</div> <!-- eetextarea -->

<textarea id="output" name="output" class="hidden">

</textarea>

<input type="text" name="author" class="hidden" value="<?=$_SESSION['username']?>" placeholder="">

<input type="submit" class="submit" value="Publish">
</form>


      
            <span class="counter"></span>  
           <!--  <input type="text" name="field1" id="field1" class="word_count" />  --> 
          
 		| 
			<span class="misspelledwords" title="Number of misspeled words">5*</span>  


</div> <!-- eeditor -->




</article>

</body>
</html>