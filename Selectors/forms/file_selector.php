<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery practice</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <style>
        textarea {
            height: 45px;
        }
    </style>
</head>
<body>

<form>
    <input type="button" value="Input Button">
    <input type="checkbox">
    <input type="file">
    <input type="hidden">
    <input type="image">
    <input type="password">
    <input type="radio">
    <input type="reset">
    <input type="submit">
    <input type="text">
    <select><option>Option</option></select>
    <textarea></textarea>
    <button>Button</button>
</form>
<div></div>

<script>
    var input = $( "input:file" ).css({
        background: "yellow",
        border: "3px red solid"
    });
    $( "div" )
        .text( "For this type jQuery found " + input.length + "." )
        .css( "color", "red" );
    $( "form" ).submit(function( event ) {
        event.preventDefault();
    });
</script>


</body>
</html>