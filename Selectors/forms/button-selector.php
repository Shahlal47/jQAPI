<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Datepicker - Format date</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <style>
        textarea {
            height: 35px;
        }
        div {
            color: red;
        }
        fieldset {
            margin: 0;
            padding: 0;
            border-width: 0;
        }
        .marked {
            background-color: yellow;
            border: 3px red solid;
        }
    </style>


</head>
<body>

<form>
    <fieldset>
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
    </fieldset>
</form>
<div></div>

<script>
    var input = $( ":button" ).addClass( "marked" );
    $( "div" ).text( "For this type jQuery found " + input.length + "." );
    // Prevent the form from submitting
    $( "form" ).submit(function( event ) {
        event.preventDefault();
    });
</script>


</body>
</html>
