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
        .foo {
            color: blue;
            background-color: yellow;
        }
    </style>

</head>

<body>

<table border="1">
    <ul class="nav">
        <li>List 1, item 1</li>
        <li>List 1, item 2</li>
        <li>List 1, item 3</li>
    </ul>
    <ul class="nav">
        <li>List 2, item 1</li>
        <li>List 2, item 2</li>
        <li>List 2, item 3</li>
    </ul>
</table>

<script>
    $( "li:eq(-2)" ).addClass( "foo" )
</script>

</body>
</html>
