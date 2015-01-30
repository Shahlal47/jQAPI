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
            height: 25px;
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
    <select>
        <option>Option</option>
    </select>
    <textarea></textarea>
    <button>Button</button>
</form>
<div id="messages"></div>

<script>
    var allInputs = $( ":input" );
    var formChildren = $( "form > *" );
    $( "#messages" ).text( "Found " + allInputs.length + " inputs and the form has " +
    formChildren.length + " children." );
    $( "form" ).submit(function( event ) {
        event.preventDefault();
    });
</script>

</body>
</html>
