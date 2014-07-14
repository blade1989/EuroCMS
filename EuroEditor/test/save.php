<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>saved</title>
  <link rel="stylesheet" href="/css/framework.css">
  <link rel="stylesheet" href="/css/class.css">
</head>
<body>
  <article>


<div class="article-meta">
   <a class="author" rel="author" title="author" href="/about" target="_blank"><?php echo $_POST["author"]; ?></a> 

   <time datetime="<?php echo $_POST["datetime"]; ?>" title="<?php echo $_POST["datetime"]; ?>"><?php echo $_POST["datetime"]; ?></time>

</div> 

<h1><?php echo $_POST["header"]; ?></h1>

<p>
  <?php echo $_POST["description"]; ?>
</p>



    <div class="tags">

      <span> <?php echo $_POST["tag1"]; ?> </span>
      <span> <?php echo $_POST["tag2"]; ?> </span>
      <span> <?php echo $_POST["tag3"]; ?> </span>

    </div>  

</article>


<!-- Welcome <?php //echo $_POST["author"]; ?><br>
Your email address is: <?php //echo $_POST["email"]; ?> -->




  <?php
//   }
// }
?>
</body>
</html>