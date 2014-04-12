<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inputs</title>
    <link rel="stylesheet" href="inputs.css">

        <!-- Needed for Forms Feature Detection
        <script type="text/javascript" src="html5Forms.js-master/shared/js/modernizr.com/Modernizr-2.5.3.forms.js">
        </script> -->
        
        <!-- Needed for Validation
        <script type="text/javascript" src="html5Forms.js-master/shared/js/html5Forms.js" data-webforms2-support="color" data-webforms2-force-js-validation="true">
        </script> --> 



<script src='spectrum.js'></script>
<link rel='stylesheet' href='spectrum.css' />

<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
    $(".basic").spectrum({
    color: "#f00",
    change: function(color) {
        $("#basic-log").text("change called: " + color.toHexString());
    }
});

$("#full").spectrum({
    color: "#ECC",
    showInput: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: true,
    showSelectionPalette: true,
    maxPaletteSize: 10,
    preferredFormat: "hex",
    localStorageKey: "spectrum.demo",
    move: function (color) {
        
    },
    show: function () {
    
    },
    beforeShow: function () {
    
    },
    hide: function () {
    
    },
    change: function() {
        
    },
    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
    ]
});

</script>

<style type="text/css">
    .full-spectrum .sp-palette {
max-width: 200px;
}

</style>

</head>


<body>


<label>button:
    <input type="button" name="" value="button">
</label>
<br><br>

<label>checkbox:
    <input type="checkbox" name="" value="">
</label>
<br><br>

<label>color:
    <input type="color" name="" value="" placeholder="color">
</label>
<br><br>

<hr>
<h2>Spectrum</h2>


<b>Basic Usage</b>
<input type='text' class="basic"/>
<em id='basic-log'></em>

<br>
<br>

<b>Full Example</b>
<input type='text' id="full"/>



<!-- 
<label>date:
    <input type="date" name="" value="" placeholder="date">
</label>
<br><br>

<label>datetime:
    <input type="datetime" name="" value="" placeholder="datetime">
</label><input type="reset" onclick="return showCalendar('sel1', '%Y-%m-%d [%W] %H:%M', '24', true);" value=" ... ">
<br><br>
 
<label>email:
    <input type="email" name="" value="" placeholder="email">
</label>
<br><br>

<label>file:
    <input type="file" name="" value="" placeholder="file">
</label>
<br><br>

<label>hidden:
    <input type="hidden" name="" value="">
</label>
<br><br>

<label>image:
    <input type="image" name="" value="image" placeholder="image">
</label>
<br><br>

<label>month:
    <input type="month" name="" value="" placeholder="month">
</label>
<br><br>

<label>number
    <input type="number" name="" value="" placeholder="number">
</label>
<br><br>


<label>password:
    <input type="password" name="" value="" placeholder="password">
</label>
<br><br>

<label>radio:
    <input type="radio" name="" value="" placeholder="radio">
</label>
<br><br>

<label>range:
    <input type="range" name="" value="" placeholder="range">
</label>
<br><br>

<label>reset:
    <input type="reset" name="reset" value="reset">
</label>
<br><br>

Search 
<label>submit:
    <input type="submit" name="" value="submit">
</label>
<br><br>

<label>tel:
    <input type="tel" name="" value="" placeholder="tel">
</label>
<br><br>

<label>text:
    <input type="text" name="" value="" placeholder="text">
</label>
<br><br>

<label>time:
    <input type="time" name="" value="" placeholder="time">
</label>
<br><br>

<label>url:
    <input type="url" name="" value="" placeholder="url">
</label>
<br><br>

<label>week:
    <input type="week" name="" value="" placeholder="week">
</label>
<br><br>

<label>datetime-local:
    <input type="datetime-local" name="" value="" placeholder="datetime-local">
</label> -->
<br><br>


</body>
</html>