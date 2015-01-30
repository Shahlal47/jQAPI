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

    </style>

</head>

<body>

<table border="1">
    <tr><td>TD #0</td><td>TD #1</td><td>TD #2</td></tr>
    <tr><td>TD #3</td><td>TD #4</td><td>TD #5</td></tr>
    <tr><td>TD #6</td><td>TD #7</td><td>TD #8</td></tr>
</table>

<script>
    $( "td:lt(4)" ).css( "backgroundColor", "yellow" );
    $( "td:lt(-2)" ).css( "color", "red" );
</script>

</body>
</html>
