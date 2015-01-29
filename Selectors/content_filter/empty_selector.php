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
        td {
            text-align: center;
        }
    </style>

</head>
<body>

<table border="1">
    <tr><td>TD #0</td><td></td></tr>
    <tr><td>TD #2</td><td></td></tr>
    <tr><td></td><td>TD#5</td></tr>
</table>


<script>
    $( "td:empty" )
        .text( "Was empty!" )
        .css( "background", "rgb(255,220,200)" );
</script>


</body>
</html>
