<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EuroEditor</title>
	<link rel="stylesheet" href="effe.css">
</head>
<body>
	

  <form action="save.php" method="post" name="article">

      <input type="text" name="author" value="author" placeholder="Author">
      <input type="text" name="header" value="" placeholder="header">
      <input type="datetime" name="datetime" value="" placeholder="datetime">
<br>
	<textarea style="width:450px;resize:none;" placeholder="description" name="description">
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




<!-- <form action="save.php" method="post">
Name: <input type="text" name="author"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form> -->



</body>
</html>