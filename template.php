<?php
echo "<!DOCTYPE html>\n";
//include('defines.php');


    $author         = "Imri Paloja";
    $sitename       = "League of Legends under Ubuntu";
    $siteintro      = "EuroCMS";



include('define.php');


$articlecontent = '<h1 class="header">
  League of Legends under Ubuntu
</h1>

<p id="intro">
 <a href="http://beta.na.leagueoflegends.com/" title="leagueoflegends.com" target="_blank">League of Legends</a> is a Free to Play, <a href="http://en.wikipedia.org/wiki/Multiplayer_online_battle_arena" title="wikipedia.org/Multiplayer_online_battle_arena" target="_blank">Multiplayer online battle arena</a>, that is - on a daily basis - actively played by 12 million people, a playerbase of 32 miljoen, makes it the most played videogame in the world<sup><a style="margin:0px;" href="http://majorleagueoflegends.s3.amazonaws.com/lol_infographic.png" title="majorleagueoflegends.s3.amazonaws.com/lol_infographic.png" target="_blank">[1]</a></sup>. And I&apos;m gonna show you guys how to install it in Ubuntu.
</p>

<p>
  We will install <a href="http://www.winehq.org/" title="www.winehq.org" target="_blank">wine</a>, <a href="http://www.playonlinux.com/en" title="www.playonlinux.com" target="_blank">PlayOnLinux</a> , <a href="http://www.mono-project.com/Main_Page" title="www.mono-project.com" target="_blank">mono</a>. One requires wine, mono, PlayOnLinux to get League of Legends to work<sup><a href="http://www.reddit.com/r/leagueoflegends/comments/1knv9m/for_linux_users_i_just_installed_lol_on_an/" title="www.reddit.com/r/for_linux_users_i_just_installed_lol_on_an/" target="_blank">[2]</a></sup>. Install mono like so: <code>sudo apt-get install mono-runtime </code>
</p>

<p>
    For wine, copy/paste the code below. Don&apos;t know what wine is?
    <i>
    Wine (originally an acronym for "Wine Is Not an Emulator") is a compatibility layer capable of running Windows applications on several POSIX-compliant operating systems, such as Linux, Mac OSX, &amp; BSD. Instead of simulating internal Windows logic like a virtual machine or emulator, Wine translates Windows API calls into POSIX calls on-the-fly, eliminating the performance and memory penalties of other methods and allowing you to cleanly integrate Windows applications into your desktop.
  </i>
</p>

  <h2 id="wine">wine</h2>

<div class="codeswrapper">

<div class="codes-cli">
  <a href="/ppa/" class="fancybox fancybox.iframe ppad" title="Personal Package Archive" target="_blank"></a>
</div>

  <ol class="codes">
      <li>sudo add-apt-repository -y ppa:ubuntu-wine/ppa</li>
      <li>sudo apt-get update</li>
      <li>sudo apt-get -y install wine</li>
  </ol>

    <div class="coderef">
<select class="supported2" title="Supported Ubuntu distros">
<!--   <option value="supports" selected="selected" style="border-bottom: 1px solid #454545">Supports</option>
 -->  <option value="trusty">Trusty (14.04)</option>
  <option value="saucy">Saucy (13.10)</option>
  <option value="raring">Raring (13.04)</option>
  <option value="quantal">Quantal (12.10)</option>
  <option value="precise">Precise (12.04)</option>
  <option value="oneiric">Oneiric (11.10)</option>
  <option value="natty">Natty (11.04)</option>
  <option value="maverick">Maverick (10.10)</option>
  <option value="lucid">Lucid (10.04)</option>
  <option value="karmic">Karmic (9.10)</option>
  <option value="jaunty">Jaunty (9.04)</option>
  <option value="intrepid">Intrepid (8.10)</option>
  <option value="hardy">Hardy (8.04)</option>
  <option value="gutsy">Gutsy (7.10)</option>
  <option value="feisty">Feisty (7.04)</option>
  <option value="edgy">Edgy (6.10)</option>
  <option value="dapper">Dapper (6.06)</option>
</select>

        <a href="http://www.winehq.org/download/ubuntu" title="WineHQ - Installing the latest Wine on Ubuntu" target="_blank">source</a>
    </div>

</div>

<p>
  <i>
    PlayOnLinux is a piece of software which allows you to easily install and use numerous games and apps designed to run with Microsoft® Windows®.
     Few games are compatible with GNU/Linux at the moment and it certainly is a factor preventing the migration to this system. PlayOnLinux brings a cost-free, accessible and efficient solution to this problem.
  </i>
</p>

<h2 id="playonlinux">PlayOnLinux</h2>

<div class="codeswrapper">

<div class="codes-cli">
  <a href="/ppa/" class="fancybox fancybox.iframe ppad" title="Personal Package Archive" target="_blank"></a>
</div>

  <ol class="codes">
      <li>wget -q "http://deb.playonlinux.com/public.gpg" -O- | sudo apt-key add -</li>
      <li>sudo wget http://deb.playonlinux.com/playonlinux_precise.list -O /etc/apt/sources.list.d/playonlinux.list</li>
      <li>sudo apt-get update</li>
      <li>sudo apt-get install playonlinux</li>
  </ol>

    <div class="coderef">
        <a href="http://www.playonlinux.com/en/download.html#pres_item6" title="www.playonlinux.com/download" target="_blank">source</a>
    </div>

</div>

    <p>
     After everything is installed, run playonlinux, press the <code>install</code> button, select the <code>Testing</code> option, after that search for <strong>League of Legends</strong>, press install
    </p> 

    <a href="http://i.imgur.com/RNyX0qH.png" class="article-image" title="PlayOnLinux">
    <img src="http://i.imgur.com/RNyX0qH.png" alt="PlayOnLinux"></a>


    <p>then select <code>Download the program</code>. the installer will be downloaded and then excecuted. <b>Do not change the default location of the installation</b>.
    </p>



<div id="warning">
    <b>
        Do not launch League of Legends, after the completion of the installation. Run lol via the icon on your desktop.
    </b>
</div>

<!---->

<p>
    Here is a video of me, playing lol, keep in mind that i havent played lol in ages, ages! So, if you see me failing, don&apos;t judge me.
</p>

<!--
<div class="video">
  <iframe allowfullscreen
src="http://www.youtube.com/embed/WuBE4_Rbcqw?wmode=opaque&amp;html5=1">
  </iframe>

  <div class="videoref">From YouTube: 
  <a href="http://www.youtube.com/watch?v=WuBE4_Rbcqw" title="League of Legends under Ubuntu">League of Legends under Ubuntu</a>
  </div>
</div>
-->
<p>
    If you tried <abbr title="League of Legends">lol</abbr> on older Ubuntu versions, please let me know in the comment section below. Have fun. 
</p>


<div class="source">
<h2 id="reference">Reference</h2>
  <ol>
    <li class="cite" id="cite1">
    <a style="margin:0px;" href="http://majorleagueoflegends.s3.amazonaws.com/lol_infographic.png" title="majorleagueoflegends.s3.amazonaws.com/lol_infographic.png" target="_blank">majorleagueoflegends.s3.amazonaws.com: THE MAYOR LEAGUE [OF LEGENDS]</a>
  </li> 

    <li class="cite" id="cite2">
      <a href="http://www.reddit.com/r/leagueoflegends/comments/1knv9m/for_linux_users_i_just_installed_lol_on_an/" title="www.reddit.com/r/for_linux_users_i_just_installed_lol_on_an/" target="_blank">www.reddit.com: For Linux users: I just installed LoL on an Ubuntu-based distro, using PlayOnLinux... and it works like a charm! Infos inside </a>
    </li>
            <!-- <li><a href="" title="" target="_blank"> </a></li> -->
  </ol>
</div>

</article>';

echo "$eurotemplate";

echo "   $articlecontent

  </article>


</div> <!--  wrap -->
</body>
</html>";


?>

<?php

// $doc = new DomDocument;

// // We need to validate our document before refering to the id
// $doc->validateOnParse = true;
// $doc->Load('$articlecontent');

// echo "\n\n<!-- \n";

// echo "The element whose id is 'header' is: " . $doc->getElementById('#intro')->tagName . "\n";

// echo "-->";
?>

<?php

echo "\n <!-- \n";

// $dom = new DOMDocument();
// $html ='template.php';

// //$doc->loadHTML(file_get_contents('$eurotemplate'));

// $dom->validateOnParse = true; //<!-- this first
// $dom->loadHTML($html);        //'cause 'load' == 'parse

// $dom->preserveWhiteSpace = false;

// $belement = $dom->getElementById("intro");
// echo $belement->nodeValue;


$html = "$eurotemplate";

$dom = new DOMDocument;
$dom->loadHTML($html);
$books = $dom->getElementsByTagName('intro');
foreach ($books as $book) {
    echo $book->nodeValue, PHP_EOL;
}






echo "\n-->";
?>