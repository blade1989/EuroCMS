/**
 * Edit.js
 * Provides controls to enable editing a web page with optional publishing.
 *
 * @author www.thebrentc.net
 * @version 1.00
 * @licence CC BY NC SA
 */

function addEditjs() {
    var editjs_controls = '<div style = "float: right;">';
    editjs_controls += '<input type = "button" onclick = "editjs_edit();" value = "edit" id="editjs_edit"  title="Switch between editing or viewing" />';
    editjs_controls += '&nbsp;';
    editjs_controls += '<span id = "editjs_editing" style="display: none;">';

    controls += '&nbsp;';
    controls += '<input type = "button" onclick = "create();" value = "create" id = "create" />';

    editjs_controls += '&nbsp;';
    editjs_controls += '<input type = "button" onclick = "editjs_html();" value = "html" id = "editjs_html" title="Switch between text or html editing" />';
    editjs_controls += '&nbsp;';
    editjs_controls += '<input type = "button" onclick = "editjs_headers();" value = "head" id = "editjs_head" title="Edit header information" />';
    editjs_controls += '&nbsp;';
    editjs_controls += '<input type = "button" onclick = "editjs_store();" value = "store" id = "editjs_store" title="Store with this browser" />';
    editjs_controls += '&nbsp;';
    editjs_controls += '<input type = "button" onclick = "editjs_restore();" value = "restore" id = "editjs_restore" title="Restore the version stored with this browser" />';
    editjs_controls += '&nbsp;';
    editjs_controls += '<form id = "editjs_saveform" name = "editjs_saveform" action = "http://brentc.net/save.php" method = "post" target="_blank" style="display: inline;">';
    editjs_controls += '<input type = "hidden" value = "" id = "editjs_saveform_content" name = "editjs_saveform_content" />';
    editjs_controls += '<input type = "button" onclick = "editjs_sav();" value = "download" id = "editjs_save" title="Save to your computer" />';
    editjs_controls += '</form>';
    editjs_controls += '&nbsp;';

    controls += '<input type="button" value = "upload" name="file" id="file" ';
    controls += ' onclick = "document.getElementById(\'upload_frame\').src = \'/edit/upload.php\'; document.getElementById(\'uploader\').style.visibility = \'visible\';" />';
    controls += '	<div id = "uploader" style="width: 50%; height: 50%; position: absolute; z-index: 99; top: 25%; left: 25%; padding: 1em; background-color: #FFFFCC; visibility: hidden; border: solid 1px gray;">';
    controls += '	<span style="float:right;"><a href="#" onclick = "javascript: this.parentNode.parentNode.style.visibility = \'hidden\'; event.returnValue=false; return false;">X</a></span>';
    controls += '	<iframe src = "" style="width: 100%; height: 100%; border: none;" id = "upload_frame"></iframe>';
    controls += '	</div>	';

    editjs_controls += '</div>';
    document.body.innerHTML = editjs_controls + '<div id = "editjs_main">' + document.body.innerHTML + '</div>';

    addEditjsCSS();
}
window.onload = function() {
    addEditjs();
}

function addEditjsCSS() {
    var css = '#editjs_main *:focus { border: solid 1px silver; }';
    var style = document.createElement('style');
    style.innerHTML = css;
    document.body.appendChild(style);
}

function editjs_edit() {
    if (document.getElementById('editjs_edit').value == "edit") {
        document.getElementById('editjs_edit').value = "view"
        document.getElementById('editjs_main').contentEditable = "true";
        document.getElementById('editjs_main').focus();
        document.getElementById('editjs_editing').style.display = "inline";

    } else if (document.getElementById('editjs_edit').value == "view") {
        document.getElementById('editjs_edit').value = "edit"
        document.getElementById('editjs_editing').style.display = "none";
        if (document.getElementById('editjs_html').value == "text") html();
        document.getElementById('editjs_main').contentEditable = "false";
    }
}

function editjs_html() {
    if (document.getElementById('editjs_html').value == "html") {
        document.getElementById('editjs_main').innerHTML = '<textarea id = "editjs_code" style = "height: 90%; width: 100%; min-height: 800px;">' + document.getElementById('editjs_main').innerHTML + '</textarea>';
        document.getElementById('editjs_html').value = "text";
    } else if (document.getElementById('editjs_html').value == "text") {
        document.getElementById('editjs_main').innerHTML = document.getElementById('editjs_code').value;
        document.getElementById('editjs_html').value = "html";
    }
}

function editjs_headers() {
    try {
        var metas = document.getElementsByTagName('head')[0].innerHTML;
        var div = document.createElement('div');
        div.setAttribute('id', 'xprompt');
        div.innerHTML = '<textarea id = "xprompt_value" style="width: 100%; height: 85%;">' + metas + '</textarea>';
        div.innerHTML += '<br/><input type = "button" value = "Ok" onclick ="document.getElementsByTagName(\'head\')[0].innerHTML = document.getElementById(\'xprompt_value\').value; document.body.removeChild(document.getElementById(\'xprompt\'));" style="margin-left: 48%;"/>';
        div.style.width = "33%";
        div.style.height = "33%";
        div.style.position = "absolute";
        div.style.left = "36%";
        div.style.top = "25%";
        div.style.backgroundColor = "#FFC";
        div.style.border = "solid 1px black";
        div.style.padding = "0.5em";
        document.body.appendChild(div);
    } catch (err) {
        alert("Problem modifying document headers");
    }
}

function editjs_sav() {
    if (document.getElementById('editjs_html').value == "text") editjs_html();
    var post = '<!DOCTYPE html><html>' + '<head>' + document.getElementsByTagName('head')[0].innerHTML + '</head>' + '<body>' + document.getElementById('editjs_main').innerHTML + '</body>' + '</html>';
    document.getElementById('editjs_saveform_content').value = post;
    document.forms['editjs_saveform'].submit();
}

function editjs_store() {
    if (document.getElementById('editjs_html').value == "text") editjs_html();
    var filename = document.location.href.substr(document.location.href.lastIndexOf('/') + 1);
    var content = '<!DOCTYPE html><html>' + '<head>' + document.getElementsByTagName('head')[0].innerHTML + '</head>' + '<body>' + document.getElementById('editjs_main').innerHTML + '</body>' + '</html>';
    localStorage.setItem(filename, content);
    alert("Stored.");
}

function editjs_restore() {
    if (!window.confirm("Are you sure? This will overwrite the current content.")) return;
    if (document.getElementById('editjs_html').value == "text") editjs_html();
    var filename = document.location.href.substr(document.location.href.lastIndexOf('/') + 1);
    var content = localStorage.getItem(filename);
    if (content == null) {
        alert("No stored content found.");
        return;
    }
    var head = content.substr(content.indexOf('<head>') + 6);
    head = head.substr(0, head.lastIndexOf('</head>') - 1);
    document.getElementsByTagName('head')[0].innerHTML = head;
    var body = content.substr(content.indexOf('<body') + 6);
    body = body.substr(0, body.lastIndexOf('</body>') - 1);
    document.getElementById('editjs_main').innerHTML = body;
}