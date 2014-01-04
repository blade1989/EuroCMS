<?php include '../admin/admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php $title ?> - <?php $sitename ?></title>
<?php include './include/css.php'; ?>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php $description ?>">
    <meta name="author" content="<?php $author ?>">

<?php include './include/fancybox.php'; ?>

<?php include './include/ie.php'; ?>

  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <?php include './include/js.php'; ?>

</head>

<body>

<div id="wrap">

<?php include './include/nav.php'; ?>


<?php include './include/navwrapper.php'; ?>


<div id="content">

<?php include './include/flexslider.php'; ?>


<?php include './include/aside.php'; ?>

<article>

  <?php include '../include/meta.php'; ?>

<h1 class="header">EuroCMS</h1>

<p id="intro">
  Welcome to the pre-alpha version of EuroCMS.
</p>

<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>


<h2>Lorem</h2>

<p>
<b>Lorem</b> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud <a href="https://www.google.nl/" title="Google" target="_blank">exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<a href="https://www.google.nl/" title="Google" target="_blank">
  <img src="http://www.eurobytes.nl/favicon.png" style="width:50px;">
</a>

</article>


<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'eurobytes'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a> 

<div id="np">


  <a id="newposts" title="Next" href="old-posts">NEXT</a>

  <a title="Home" id="prev-home-next" href="/"></a>

  <a id="oldposts" title="Previous" href="old-posts">PREVIOUS</a>

</div>

<div id="asideblock"></div>

</div> <!-- content -->

<?php include '../include/footer.php'; ?>

</div> <!-- wrap -->

</body>
</html>
