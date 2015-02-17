





$(document).ready(function() {
    $("#bold").click(function () {
       // get the selected range
       var range = window.getSelection().getRangeAt(0);
       
       // create a new DOM node and set it's style property to red 
       var newNode = document.createElement('b');
       //newNode.style.color = "green";
       
       // surround the selection with the new span tag 
       range.surroundContents(newNode);    
       return false;  
    });
    


    $("#italic").click(function () {
       // get the selected range
       var range = window.getSelection().getRangeAt(0);
       
       // create a new DOM node and set it's style property to red 
       var newNode = document.createElement('i');
       //newNode.style.color = "green";
       
       // surround the selection with the new span tag 
       range.surroundContents(newNode);    
       return false;  
    });
    

    $("#underline").click(function () {
       // get the selected range
       var range = window.getSelection().getRangeAt(0);
       
       // create a new DOM node and set it's style property to red 
       var newNode = document.createElement('u');
       //newNode.style.color = "green";
       
       // surround the selection with the new span tag 
       range.surroundContents(newNode);    
       return false;  
    });
});

    $("#mark").click(function () {
       // get the selected range
       var range = window.getSelection().getRangeAt(0);
       
       // create a new DOM node and set it's style property to red 
       var newNode = document.createElement('mark');
       //newNode.style.color = "green";
       
       // surround the selection with the new span tag 
       range.surroundContents(newNode);    
       return false;  
    });



function link() {
    var link = prompt("Insert hyperlink", "http://");
    var title = prompt("Insert hyperlink title", "title");
    var name = prompt("Insert hyperlink name", "name");
    
    if (link != null) {
        document.getElementById("editor").innerHTML =
        "\n\<a href=\"" + link + "\" title=\"" + title + "\">"+ name +"</a>\n";
    }
}


function img() {
    var link = prompt("Insert img link", "http://example.com/example.jpg");
    var title = prompt("Insert img title", "title");
    //var name = prompt("Insert hyperlink name", "name");
    
    if (link != null) {
        document.getElementById("editor").innerHTML =
        "\n\<a href=\"" + link + "\" title=\" " + title + " \">\n<img src=\"" + link + "\" alt=\"" + title + "\">\n</a>\n";
    }
}