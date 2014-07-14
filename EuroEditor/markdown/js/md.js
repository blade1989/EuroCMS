var mdconverter;
var state = 'edit';

$(document).ready(function() {
    //create the showdown object
    mdconverter = new Showdown.converter();

    //toggle Edit/Preview modes
    $('#toggler').on('click', function(e) {
        if (state == 'edit') {
            //change to preview mode

            //fill our preview pane with the formatted html
            $('#preview').html(mdconverter.makeHtml($('#editor').val()));

            //hide the edit pane
            $('#editor').hide();

            //show the preview
            $('#preview').show();

            //set the buttom text
            $('#toggler').html('Edit');

            //set our new state
            state = 'preview';
        } else {
            //change to edit mode

            //hide the preview pane
            $('#preview').hide();

            //show the edit pane
            $('#editor').show();

            //set the buttom text
            $('#toggler').html('Preview');

            //set our new state
            state = 'edit';
        }
    })
})