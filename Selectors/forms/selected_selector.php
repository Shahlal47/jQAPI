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
        div {
            color: red;
        }
    </style>
</head>
<body>



<select name="garden" multiple="multiple">
    <option>Flowers</option>
    <option selected="selected">Shrubs</option>
    <option>Trees</option>
    <option selected="selected">Bushes</option>
    <option>Grass</option>
    <option>Dirt</option>
</select>
<div></div>



<script>
    $( "select" )
        .change(function() {
            var str = "";
            $( "select option:selected" ).each(function() {
                str += $( this ).text() + " ";
            });
            $( "div" ).text( str );
        })
        .trigger( "change" );
</script>


</body>
</html>