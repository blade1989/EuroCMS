<?php
// Source: http://php.net/manual/en/function.get-browser.php#101125

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'Linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'Mac OS X';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'Windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        //'pattern'    => $pattern
    );
}

// now try it

echo "<!-- \n\n";
$ua=getBrowser();
$yourbrowser= "Your browser:" . $ua['name'] . " " . $ua['version'] . "\n\nYour OS: " .$ua['platform'];
print_r($yourbrowser);

echo "\n\n-->";
?>

<?php
    // Some variables 

    $framworkcss    = "";
    $adminlink      = "<a href=\"/admin/index.php#formpost\" class=\"fancybox fancybox.iframe\" id=\"logon\" style=\"position: absolute;top:0px; right:0px;\">LOGIN</a>";
    $sitename       = "EuroCMS";
    $siteintro      = "Your free, easy to use, and customizable Content Management System";

    // The site template
    $eurotemplate = "<html lang=\"en\">
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

<div id=\"wrap\">
<article>
";

?>