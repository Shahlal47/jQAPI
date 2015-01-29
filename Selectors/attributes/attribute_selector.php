<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Datepicker - Format date</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">


</head>
<body>


<div>no id</div>
<div id="hey">with id</div>
<div id="there">has an id</div>
<div>nope</div>



<script>
    $( "div[id]" ).one( "click", function() {
        var idString = $( this ).text() + " = " + $( this ).attr( "id" );
        $( this ).text( idString );
    });
</script>


</body>
</html>