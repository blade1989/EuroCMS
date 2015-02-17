function link() {
    var link = prompt("Insert hyperlink", "http://");
    var title = prompt("Insert hyperlink title", "title");
    var name = prompt("Insert hyperlink name", "name");

    if (link != null) {
        document.getElementById("eetextarea").innerHTML =
            "\n\<a href=\"" + link + "\" title=\"" + title + "\">" + name + "</a>\n";
    }
}

$('#eetextarea').on('keydown', function(e) {
    //Check if it was CTRL-L
    if (e.keyCode == 101 && e.ctrlKey) {
        var link = prompt("Enter a link : ");
    }
});


function img() {
    var link = prompt("Insert img link", "http://example.com/example.jpg");
    var title = prompt("Insert img title", "title");
    //var name = prompt("Insert hyperlink name", "name");

    if (img != null) {
        document.getElementById("eetextarea").innerHTML =
            "\n\<a href=\"" + link + "\" title=\" " + title + " \">\n<img src=\"" + link + "\" alt=\"" + title + "\">\n</a>\n";
    }
}



function blockquote() {
    var quote = prompt("Insert quote", "Quotation, n: The act of repeating erroneously the words of another.");
    var name = prompt("Who said it?", "Author name");
    var namelink = prompt("Link to the author", "Author homepage");
    var work = prompt("Which work?", "name of the work");
    var worklink = prompt("Link to work?", "link to the cited work");

    if (blockquote != null) {
        document.getElementById("eetextarea").innerHTML =
            "<blockquote>\n<i>\n " + quote + " \n</i> - \n <p style=\"display: inline;\"> \n<a title=\" " + name + " \" href=\" " + namelink + " \">" + name + "</a> from \n<a title=\" " + worklink + " : " + work + " \" href=\" " + worklink + " \"> " + work + " </a>\n</p>\n</blockquote>";
    }
}



function index() {
    var index =
        "<ul id=\"EuroTOC\" style=\"display: block;\" class=\"slidingDiv\">" +
        "<li id=\"tocid\">Table of Content <button id=\"closetoc\" onclick=\"closetoc()\">[-]</button>";

    var newLine, el, title, link, hid;

    // searches every tag you put in here
    $("h1, h2, h3, h4, h5, h6").each(function() {

        el = $(this);
        title = el.text();
        link = "#" + el.attr("id");
        id = "#" + el.text().replace(/\s/g, "");
        hid = el.text().replace(/\s/g, "");
        el.attr('id', "" + hid + "");


        // Works Fine:

        newLine =
            "<li>\n" +
            "<a href='" + id + "' title='" + title + "' >" + title +
            "</a>\n" +
            "</li>\n";

        index += newLine;

    });

    index +=
        "</li>" +
        "</ul>";

    $("#eetextarea").prepend(index);

    $('#toc').attr('style', 'display: none;');

}

function closetoc() {
    $('#EuroTOC').attr('style', 'display: none;');
    $('#toc').attr('style', 'display: block;');
}

function source() {
    $('#eetextarea').attr('style', 'display: none;');
    $('#output').attr('style', 'display: block;');
}


/* show/hide  */
$(document).ready(function() {


    $(".slidingDiv").hide();
    $(".show_hide").show();

    $('.show_hide').click(function() {
        $(".slidingDiv").slideToggle();
    });

});




function help() {
    //var link = prompt("Insert img link", "http://example.com/example.jpg");
    //var name = prompt("Insert hyperlink name", "name");

    // window.open(this.href,'targetWindow','toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=250');
    //  return false;

    window.open('http://www.eurobytes.nl', 'targetWindow', 'toolbar=no, location=no, status=yes, menubar=no, scrollbars=yes, resizable=yes, width=700, height=250');
    return false;


    // if (link != null) {
    //     document.getElementById("eetextarea").innerHTML =
    //         "If you want help, seek it!";
    // }
}

function fullscreen() {
    $("#eeditor").attr("class", "fullscreen")
}


function edit() {
    $('#eetextarea').attr('contentEditable', 'true');
}


function spellcheckon() {
    $('#eetextarea').attr('spellcheck', 'true');
}

function spellcheckoff() {
    $('#eetextarea').attr('spellcheck', 'false');
}


$(document).ready(function() {

    $("#bold").click(function() {
        // get the selected range
        var range = window.getSelection().getRangeAt(0);

        // create a new DOM node and set it's style property to red 
        var newNode = document.createElement('b');
        //newNode.style.color = "green";

        // surround the selection with the new span tag 
        range.surroundContents(newNode);
        return false;
    });



    $("#italic").click(function() {
        // get the selected range
        var range = window.getSelection().getRangeAt(0);

        // create a new DOM node and set it's style property to red 
        var newNode = document.createElement('i');
        //newNode.style.color = "green";

        // surround the selection with the new span tag 
        range.surroundContents(newNode);
        return false;
    });



    $("#underline").click(function() {
        // get the selected range
        var range = window.getSelection().getRangeAt(0);

        // create a new DOM node and set it's style property to red 
        var newNode = document.createElement('u');
        //newNode.style.color = "green";

        // surround the selection with the new span tag 
        range.surroundContents(newNode);
        return false;
    });


    $("#textleft").click(function() {
        // get the selected range
        var range = window.getSelection().getRangeAt(0);

        // create a new DOM node and set it's style property to red 
        var newNode = document.createElement('span');
        newNode.style = "text-align: right;";

        // surround the selection with the new span tag 
        range.surroundContents(newNode);
        return false;
    });




    $("#sans-serif").click(function() {
        // get the selected range
        var range = window.getSelection().getRangeAt(0);

        // create a new DOM node and set it's style property to red 
        var newNode = document.createElement('span');
        newNode.style = "font-family: sans-serif;";

        // surround the selection with the new span tag 
        range.surroundContents(newNode);
        return false;
    });


});


// function word_count(field) {
//     var number = 0;
//     var matches = $(field).val().split(" ");
//     var original_num = parseInt($('#finalcount').val());

//     number = matches.filter( function(word) { return word.length > 0}).length;

//     $('#finalcount').val(number);
// }  

// $(function() {
//     $("input[type='text']:not(:disabled)").each(function() {
//         var input = '#' + this.id;
//         word_count(input);

//         $(this).keyup(function() {
//             word_count(input);
//         })

//     });

// })







//https://forum.jquery.com/topic/how-to-count-the-words-of-textbox

$(document).ready(function() {

    /*
     * Character Counter for inputs and text areas
     */

    $('#output').each(function() {

        // get current number of words  
        var length = $(this).val().split(/\b[\s,\.-:;]*/).length;
        // update characters  
        $(this).parent().find('.counter').html(length + ' words');
        // bind on key up event  
        $(this).keyup(function() {

            // get new length of words  
            var new_length = $(this).val().split(/\b[\s,\.-:;]*/).length;
            // update  
            $(this).parent().find('.counter').html(new_length + ' words');
        });
    });

});


$(document).ready(function() {
    $("#output").click(function() {
        var html = $('#eetextarea').html();
        $('#output').html(html);
    });
});