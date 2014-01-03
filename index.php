<?php include '../admin/admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> - EuroBytes</title>
    <link rel="stylesheet" type="text/css" href="../css/class.css">
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/flexslider.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="Imri Paloja">

    <!-- Add jQuery library -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen">
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen">
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

  <!-- html5.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- css3-mediaqueries.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

 
  <!-- disable iPhone inital scale -->
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- scripts -->
  <script type="text/javascript" src="../js/js.js"></script>
  <script type="text/javascript" src="../js/jquery.flexslider.js"></script>

</head>

<body>

<div id="wrap">

<?php include '../include/nav.php'; ?>


<?php include '../include/navwrapper.php'; ?>


<div id="content">

<?php include '../include/flexslider.php'; ?>


<?php include '../include/aside.php'; ?>

<article>
<div id="article-meta">
  by <a class="author" rel="author" title="author" href="/about" target="_blank">Imri Paloja</a> Posted 
  <!-- <b class="date" title="Sep. 2013">Sep. 2013</b>
   -->
   <time datetime="2013-09-11" title="Sep. 2013">Sep. 2013</time>

<ul id="share">

    <li id="gplus"><!-- Plaats deze tag bovenaan of vlak voor je laatste inhoudstag. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<!-- Plaats deze tag waar je de +1 knop wilt weergeven. -->
<div class="g-plusone" data-size="medium"></div>
    </li>

    <li id="twitter"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a></li>

    <li id="fb"><div class="fb-like share-button fbbutton" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    </li>

    <li id="linkedin"><script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-counter="right"></script>
    </li>
<!--     <li id="reddit"><script type="text/javascript" src="http://nl.reddit.com/static/button/button1.js"></script> </a>
 -->
</ul>


</div>

<h1 class="header">EuroCMS</h1>

<p id="intro">
  Welcome to the pre-alpha version of EuroCMS.
</p>


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
