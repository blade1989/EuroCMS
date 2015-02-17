<?php if($_SESSION['username']): ?>
<!-- <link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<div id="admin-bar"><a href="/admin/index" id="login-image"></a>

<b id="userloggedin"><?=$_SESSION['username']?></b>  

 <a href="/" title="Homepage" id="home">Eurobytes</a>

<ul id="admin-bar-menu">
  <li><a href="/admin/dashboard" title="The Dash" style="text-decoration:underline;">DASHBOARD</a></li>
  <li><a href="/EuroEditor" title="Manage Articles">Articles</a></li>
</ul>

<a id="logout-image" href="/admin/index.php?logout=1"></a>
</div> -->
<link rel="stylesheet" type="text/css" href="/admin/admin-bar/admin-bar.css">
<script src="/admin/admin-bar/admin.js" type="text/javascript"></script>


<script type="text/javascript">
/* show/hide  */
$(document).ready(function() {


    $(".sliding").hide();
    $(".dnd").show();

    $('.dnd').click(function() {
        $(".sliding").slideToggle();
    });

});
</script>

<!-- <div id="dnd" ondrop="drop(event)" ondragover="allowDrop(event)" class="dnd sliding" style="display: none;">
    <a href="#" class="dnd" style="    display: block;
    float: right;
    margin: -30px 0px 0px 100%;">x</a>  <p>

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</div> -->





<ul id="admin-bar">
  <li>
  	<a href="/admin/index" id="login-image" title="<?=$_SESSION['username']?>"></a>
  </li>

<!--   <li>
  	<i id="userloggedin"><?=$_SESSION['username']?></i>
  </li> -->

<!--   <li>
  	<a href="http://www.eurobytes.nl/" title="homepage" style="color:#454545;margin-left:5px;">Eurobytes</a>
  </li> -->

  <li>
  	<a href="/admin/dashboard" title="The Dash">DASHBOARD</a>
  </li>

  <li>
  	<a href="/EuroEditor" title="Manage Articles">Articles</a>
  </li>

  <li>
    <a href="#" class="show_hide" style="font-size: 15px;margin-top: -2px;margin-left:0px;position: relative;">Settings</a>
  </li>

  <li style="float:right;padding-right:10px;">


<a id="logout-image" href="/admin/index.php?logout=1">Logout</a>

        <div id="themechanger" class="slidingDiv">

<a href="#" class="show_hide" style="">Close</a>
<br>



          <article style="margin: 0px auto;">
          
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
          </article>

<form>
 <fieldset>
  <legend>Website background:</legend>

  <label>Background Color</label><br>
  Dark: <input type="radio" name="r" class="link" value="" id="dark"><br>
  Blue: <input type="radio" name="r" class="link" value="" id="blue"><br>

  <label for="file">Image:</label><br>
  <input type="file" name="file" id="file"><br><br>
  <input type="reset" name="r" class="link" value="reset"><br>
<hr>


<hr>



  <b>Background image:</b><br>
        <input type="radio" name="r" class="link" value="radio1" id="mblack">
        <br>
        <label class="nature"></label>
        <input type="radio" name="r" class="link" value="radio2" id="nature"><br>
        <input type="reset" name="r" class="link" value="reset">
                </form>




<!-- <input type="color" name="r" class="link" value="" placeholder="Choose Color" id="autocolor">
 -->
 </fieldset>
</form>


<form>
 <fieldset>
  <legend>Paragraph size</legend>
    <label>12px:</label>
      <input type="radio" name="r" class="link" value="radio1" id="twaalf"><br>
    <label>15px:</label>
      <input type="radio" name="r" class="link" value="radio2" id="vijf" checked><br>
  <input type="reset" name="r" class="link" value="reset">
 </fieldset>
</form>


<!-- 	<b>Background color:</b><br>
		<form>
			<label class="dark">Dark:</label>
			<input type="radio" name="r" class="link" name="dark" value="" id="dark">
				<button class="link" id="dark"></button> 
<br>
			<label class="blue">Blue:</label>
				<input type="radio" name="r" class="link" name="blue" value="" id="blue">
<br>
			<input type="reset" name="r" class="link" name="reset" value="reset">
		</form> -->

<hr>
<!--    

  <b>Background image:</b><br>
    <form>
      <label class="mblack"></label>
        <input type="radio" name="r" class="link" value="radio1" id="mblack">
        <br>
        <label class="nature"></label>
        <input type="radio" name="r" class="link" value="radio2" id="nature"><br>
        <input type="reset" name="r" class="link" name="reset" value="reset">
                </form>
            <hr>
            
         <b>Paragraph size</b><br>
            <form>
                <label>12px:</label>
                    <input type="radio" name="r" class="link" value="radio1" id="twaalf"><br>
				<label>15px:</label>
                    <input type="radio" name="r" class="link" value="radio2" id="vijf" checked><br>
					<input type="reset" name="r" class="link" name="reset" value="reset">
                </form>
                
            <hr> -->

            <b>Paragraph color</b><br>
			<form>
				<label>paars:</label>
					<input type="radio" name="r" class="link" id="paars"><br>
	                <label>black:</label>
                    <input type="radio" name="r" class="link" id="black"><br>
                    <input type="reset" name="r" class="link" value="reset">
                </form>

            <hr>
	<form>
		<b>Themes</b><br>
			<label>EuroBytes:</label>
			<input type="radio" name="r" class="link" id="Original"><br>

			<label>Minimal:</label>
			<input type="radio" name="r" class="link" id="Minimal" checked><br>
			<input type="reset" name="r" class="link" value="reset">
		</form> 
               
            <hr>

       </div>

  </li>

</ul>



<?php endif; ?>