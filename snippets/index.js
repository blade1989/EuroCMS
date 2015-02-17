/**************************************************
Author      : Imri Paloja
Email       : imri.paloja@gmail.com
HomePage    : www.eurobytes.nl
Version     : 0.1
Name        : index.js
Description : Automatic index
**************************************************/

/*          Notes

    1.  If a header has the same name - which is not recommended - 
        the script will apply the id's twice. Therefore clicking to 
        the second header with the same id will not work!

            Possible fix:
            setInterval(function() {
                var number = 1 + Math.floor(Math.random() * 100);
                $('id').text(number);
            });
            
    2.  The script needs a `body` not `<body onload="onLoad()">`. 
        It will not work without!


    3. You can comment out the tocstyle


*/

// When clicked on the tocbutton, the following will be excecuted: 

function index() {
    var index =
        "<ul id=\"IndexJS\" style=\"display: block;\">" +
        "<li id=\"tocid\">Table of Content <button id=\"closetoc\" onclick=\"closetoc()\">[-]</button></li>";

    // searches every tag you put in here
    $("h1, h2, h3, h4, h5, h6").each(function() {

        el = $(this);
        title = el.text();
        id = "#" + el.text().replace(/\s/g, ""); // get the content of the header tags removes spaces and puts a # in front of it.
        hid = el.text().replace(/\s/g, ""); // get the content of the header tags
        el.attr('id', "" + hid + ""); // applies the header content in the id tag.

        lHeaders =
            "<li>\n" +
            "<a href='" + id + "' title='" + title + "' >" + title +
            "</a>\n" +
            "</li>\n";

        index += lHeaders;

    });

    index +=
        "</li>" +
        "</ul>";

   $("article").prepend(index);

    //$('#toc').attr('style', 'display: none;');
    $('#toc').remove();
    $('#tocbuttonstyle').remove();

    var style =
        "<style id=\"indexstyle\">" +
        "#tocid {" +
        "border-bottom: 1px solid #454545;" +
        "list-style-type: none;" +
        "margin: 0 0 0 -26px;" +
        "padding: 0;" +
        "text-align: center;" +
        "width: 164px;" +
        "}" +

        "#IndexJS {" +
        "background-color: #f9f9f9;" +
        "border: 1px solid #cccccc;" +
        "color: #454545;" +
        "font-size: 15px;" +
        "margin: 10px 0 10px 10px;" +
        "padding: 15px 15px 15px 25px;" +
        "float: right;" +
        "right: 15px;" +
        "text-align: left;" +
        "text-decoration: none;" +
        "top: 10px;" +
        "width: 165px;" +
        "box-shadow: 0 1px 2px rgba(30, 25, 25, 0.2);" +
        "}" +

        "#IndexJS li {" +
        "white-space: normal;" +
        "word-wrap: break-word;" +
        "}" +

        "#IndexJS li a {" +
        " color: #454545;" +
        "text-decoration: none;" +
        "}" +

        "#IndexJS li a:hover {" +
        "text-decoration: underline;" +
        "}" +

        "#IndexJS {" +
        "-webkit-transition: all 500ms ease;" +
        "transition: all 500ms ease;" +
        "color: #454545;" +
        "-webkit-box-sizing: border-box;" +
        "-moz-box-sizing: border-box;" +
        "box-sizing: border-box;" +
        "}" +

        "#closetoc, #toc {" +
        "background-color: #eeeeee;" +
        "border: 1px solid #cccccc;" +
        "color: #454545;" +
        "cursor: pointer;" +
        "float: right;" +
        "font-size: 15px;" +
        "height: 25px;" +
        "margin: 9px -3px 0 10px;" +
        "padding: 2px;" +
        "width: 25px;" +
        "}" +

        "#closetoc:hover, #toc:hover {" +
        "background-color: #F9F9F9;" +
        "border: 1px solid #000000;" +
        "color: #000000;" +
        "}" +

        "#toc {" +
        "box-shadow: 0 1px 2px rgba(30, 25, 25, 0.2);" +
        "-webkit-transition: all 500ms ease;" +
        "transition: all 500ms ease;" +
        "position: fixed;" +
        "right: 15px;" +
        "top: 3px;" +
        "color: #454545;" +
        "}" +

        "#toc:active {" +
        "outline: none;" +
        "}" +

        "#IndexJS #closetoc {" +
        "margin: -16px -1px 0px 0px;" +
        "}" +

        "h1:target, h2:target, h3:target, h4:target, h4:target, h5:target, h6:target {" +
        "animation: highlight 1s ease;" +
        "}" +

        "@keyframes highlight {" +
        "from { background: yellow; }" +
        "to { background: white; }" +
        "}" +

        "</style>";

    $("head").prepend(style);

}

window.onload = index;


function closetoc() {
    $("#IndexJS").remove();

    var tocbutton =
        "<button onclick=\"index()\" id=\"toc\" title=\"Table Of Contents\">[+]</button>";
    $("article").prepend(tocbutton);

    var style =
        "<style id=\"tocbuttonstyle\">" +
        "#closetoc, #toc {" +
        "background-color: #eeeeee;" +
        "border: 1px solid #cccccc;" +
        "color: #454545;" +
        "cursor: pointer;" +
        "float: right;" +
        "font-size: 15px;" +
        "height: 25px;" +
        "margin: 9px -3px 0 10px;" +
        "padding: 2px;" +
        "width: 25px;" +
        "}" +

        "#closetoc:hover, #toc:hover {" +
        "background-color: #F9F9F9;" +
        "border: 1px solid #000000;" +
        "color: #000000;" +
        "}" +

        "#toc {" +
        "box-shadow: 0 1px 2px rgba(30, 25, 25, 0.2);" +
        "-webkit-transition: all 500ms ease;" +
        "transition: all 500ms ease;" +
        "float: right;" +
        "right: 15px;" +
        "top: 5px;" +
        "color: #454545;" +
        "}" +

        "#toc:active {" +
        "outline: none;" +
        "}" +
        "</style>"

    ;
    $("head").prepend(style)

    $('h1, h2, h3, h4, h5, h6').removeAttr('id');
    $('style#indexstyle').remove();
}

