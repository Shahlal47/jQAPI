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
        div, span {
            width: 60px;
            height: 60px;
            float: left;
            padding: 10px;
            margin: 10px;
            background-color: #eee;
        }
    </style>
</head>
<body>


<div>DIV1</div>
<div>DIV2</div>
<span>SPAN</span>

<script>
    $( "div" ).css( "border", "9px solid red" );
</script>


</body>
</html>