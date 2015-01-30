<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery practice</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">


</head>
<body>

<div>
    <input type="checkbox" name="a">
    <span>Mary</span>
</div>
<div>
    <input type="checkbox" name="b">
    <span>lcm</span>
</div>
<div>
    <input type="checkbox" name="c" checked="checked">
    <span>Peter</span>
</div>

<script>
    $( "input:not(:checked) + span" ).css( "background-color", "yellow" );
    $( "input").attr( "disabled", "disabled" );
</script>


</body>
</html>