<?php // include './admin/index.php'; 
session_start(); 

define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );

if (!USERNAME or isset($_GET['logout']))
 include('admin.php');

// everything below will show after correct login 

?>
<?php
echo "<!DOCTYPE html>\n";
//include('defines.php');
include('define.php');
?>
<?php

//echo '<!--';

//echo "Your os is:";

/*echo os_info("$uagent");

echo("\n\n") ;

print( $ua['name']);*/
/*echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$browser = get_browser(null, true);
print_r($browser);*/

//echo '-->';

//echo os_info("$uagent");

?>
<?php

$keywords = "CMS, FOSS, Cool";
echo "
<html lang=\"en\">
<head>
  <title>$sitename - $siteintro</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"$framworkcss\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheets.php\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">
    <meta name=\"description\" content=\"Free tutorials, as in free speech, not free beer.\">
    <meta name=\"keywords\" content=\"$keywords\">
    <meta name=\"author\" content=\"$author\">
</head>
<body>
  $adminlink

  <p>
    $intro
  </p>

<article>

<h1 class=\"header\">EuroCMS</h1>

<p id=\"intro\">
  Welcome to the <b>pre-alpha</b> version of EuroCMS: <strong>Your free, easy to use, and customizable Content Management System</strong>
</p>

<br>

<hr>
<p>
  <b>This is ALPHA software! Meaning an unfinished product!</b> 
</p>


<h2>Current parts</h2>

<ul>
  <li>framework.css</li>
  <li>framework.js</li>
</ul>


<h2>README.MD</h2>

<h2>Features</h2>

<p>
  For the time being, 
  <b>none</b>.
</p>

<h2>Current roadmap</h2>

<ol>
  <li>CSS framework, css style.</li>
  <li>css framework</li>
  <ul>
    <li>
      <s>Reasonably stable</s> <b>check</b></li>
    <li>
      <s>Deeper testing</s> - <b>check</b></li>
  </ul>
  <li>- css style</li>
  <ol>
    <li>visual glitches when being responsive</li>
    <li>Final testing: CSS framework, and style</li>
  </ol> 
  <li>framework.js </li>
  <ol>
    <li>Polyfils</li>
    <li>Convergence</li>
  </ol>  
 <li>Secure login</li>
 <li>Variables, and such.</li>
 <li>Dashboard</li>
 <li>EuroEditor</li>
 <li>A homemade server side analytics software.</li>
 <li>Sidebar for information about the current page</li>
 <li>Code validator for js, php, css, html,(w3c and such).</li>
 <li>Image gallery(imgur, later on, homemade.)</li>
 <li>Customizable.</li>
</ol>

<h2>Future functionalities</h2>

<ul>
 <li>Hased passwords</li>
 <li>Hased articles</li>
 <li>Dashboard</li>
 <li>Replacement for Google analytics(php!)</li>
 <li>EuroEditor (Inline/MD/source/preview)</li>
 <li>Add custom scripts/Functionality </li>
 <li>High Level encryption </li>
 <li>Image galley. At first powered by imgur. latter on a homemade one</li>
 <li>Spelling feature</li>
 <li><cite>themes</cite> folder.</li>
 <li>EuroEditor - <cite>smileys</cite> for smileys(that will automatically appear in the `smiley's tab in the editor`)</li>
 <li>EuroEditor - <cite>custom</cite> folders. For some custom functionality.</li>
 <li>Advanced search engine.</li>
 <li>Country support. </li>
 <li>Multy language articles</li>
 <li>Reference module.</li>
    <ul>
      <li>Makes a unique screenshot of a reference link. supports `http://example.com/article#intro`.</li>
      <li>Favicon support</li>
    </ul>
  <li> Revision controle.</li>
  <li> Polyfill where needed:</li>
  <li><a href=\"http://remysharp.com/2010/10/08/what-is-a-polyfill/\" title=\"\">What is a Polyfill?</a></li>
</ul>

<h2>Dependencies</h2>


<ul>
  <li>PHP</li>
  <li>JS(will rely mostly on php)</li>
  <li>Cheese sandwich</li>
</ul>


<h2>Howto</h2>

<b>Currently fiction:</b>

<ol>
  <li>Extract in your server.</li>
  <li>Done.</li>
</ol>

<h2>Licensing </h2>

<p>
  looking at this one: <a href=\"http://www.gnu.org/licenses/agpl-3.0.txt\">Affero GPL</a>. 
  <b>But</b>, not yet implemented. Currently on the:
</p>

<h3>
  No License
</h3>

<ul>
  <li>Required</li>
  <ul>
    <li>License and copyright notice</li>
  </ul>
    <li>Permitted</li>
    <ul>
      <li>Commercial Use</li>
      <li>Private Use</li>
    </ul>
      <li>Forbidden</li>
    <ul>
      <li>Distribution</li>
      <li>Modification</li>
      <li>Sublicensing</li>
    </ul>
</ul>

<h2>links.md</h2>

<h1>Links</h1>
<h2>Interesting features</h2>
<ul>
<li>
<p><a href=\"http://www.elated.com/articles/add-article-categories-to-your-cms/\">How to Add Article Categories to Your CMS</a></p>
</li>
<li>
<p><a href=\"http://perishablepress.com/dynamic-body-class-id-php-wordpress/\">9 Ways to Set Dynamic Body IDs via PHP and WordPress | Perishable Press</a>.</p>
</li>
<li><a href=\"http://perishablepress.com/5-easy-ways-to-display-syntax-highlighted-php-code/\">5 Easy Ways to Display Syntax Highlighted PHP Code</a></li>
<li><a href=\"http://www.hesido.com/web.php?page=customscrollbar\">fleXcroll: Cross Browser Custom ScrollBar script by Hesido</a></li>
<li><a href=\"http://www.cygnet-infotech.com/41-websites-every-java-developer-should-bookmark\">41 Websites Every Java Developer Should Bookmark</a> </li>
<li>when one needs Java</li>
<li><a href=\"http://developer.ubuntu.com/web/\">Ubuntu unity's webapps</a></li>
<li><a href=\"http://jqueryui.com/\">jQuery UI</a></li>
<li>Allot of them can make it to EuroCMS</li>
<li><a href=\"http://mmenu.frebsite.nl/\">jQuery.mmenu, app look-alike menus with sliding submenus</a></li>
<li><a href=\"http://alvarotrigo.com/fullPage/\">fullPage.js One Page Scroll Site Plugin</a></li>
<li><a href=\"http://www.uicorner.com/\">UICorner-User interface design resources,articles and tutorials</a></li>
<li><a href=\"http://www.10stripe.com/articles/automatically-generate-table-of-contents-php.php\">Automatically generate a Table of Contents using PHP  - 10stripe</a></li>
</ul>

<h2>Privacy and Security</h2>
<ul>
  <li>
  <p><a href=\"http://www.eurobytes.nl/tutorials/privacy-and-security\">Privacy &amp; Security - EuroBytes</a></p>
  </li>
  <li>
  <p><a href=\"http://security.stackexchange.com/questions/46569/is-it-bad-practice-to-use-your-real-name-online\">Is it bad practice to use your real name online?</a></p>
  </li>
</ul>

<h2>CSS</h2>
<ul>
  <li><a href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Mozilla_Extensions\">Mozilla CSS Extensions - CSS | MDN</a></li>
  <li><a href=\"https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Webkit_Extensions\">WebKit extensions - CSS | MDN</a></li>
</ul>

<h2>EuroEditor</h2>
<ul>
  <li><a href=\"http://www.fernapp.com/\">fernapp</a></li>
  <li><a href=\"http://arstechnica.com/business/2012/02/libreoffice-developer-shows-prototype-android-and-html5-ports/\">LibreOffice developer shows prototype Android and HTML5 ports | Ars Technica</a></li>
  <li><a href=\"http://htmlhint.com/\">HTMLHint</a><ul>
  <li><a href=\"https://github.com/yaniswang/HTMLHint\">yaniswang/HTMLHint</a></li>
  </ul>
  </li>
</ul>

<h2>Programming languages</h2>
<ul>
  <li>PHP, server side scripting language:</li>
  <li><a href=\"http://php.net/\">PHP: Hypertext Preprocessor</a></li>
  <li><a href=\"http://www.w3schools.com/php/default.asp\">w3schools.com: PHP 5 Tutorial</a></li>
  <li><a href=\"http://en.wikibooks.org/wiki/PHP_Programming\">PHP Programming - Wikibooks, open books for an open world</a></li>
  <li>JavaScript</li>
  <li><a href=\"http://www.w3schools.com/js/default.asp\">w3schools.com: JavaScript Tutorial</a></li>
  <li><a href=\"http://en.wikibooks.org/wiki/JavaScript\">JavaScript - Wikibooks, open books for an open world</a></li>
</ul>


</article>

</body>
</html>";

?>