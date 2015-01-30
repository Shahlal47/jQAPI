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
        body {
            font-size: 14px;
        }
    </style>
</head>
<body>

<ul class="topnav">
    <li>Item 1</li>
    <li>Item 2
        <ul>
            <li>Nested item 1</li>
            <li>Nested item 2</li>
            <li>Nested item 3</li>
        </ul>
    </li>
    <li>Item 3</li>
</ul>

<script>
    $( "ul.topnav > li" ).css( "border", "3px double red" );
</script>


</body>
</html>