
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
            float: left;
        }
        span {
            color: blue;
        }
    </style>

</head>

<body>

<div>
    <ul>
        <li>John</li>
        <li>Karl</li>
        <li>Brandon</li>
    </ul>
</div>
<div>
    <ul>
        <li>Sam</li>
    </ul>
</div>
<div>
    <ul>
        <li>Glen</li>
        <li>Tane</li>
        <li>Ralph</li>
        <li>David</li>
    </ul>
</div>


<script>
    $( "ul li:nth-child(2)" ).append( " - 2nd!" );
</script>


</body>
</html>