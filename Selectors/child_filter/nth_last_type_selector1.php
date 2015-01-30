
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
        <li>Adam</li>
    </ul>
</div>
<div>
    <ul>
        <li>Dan</li>
    </ul>
</div>
<div>
    <ul>
        <li>Dave</li>
        <li>Rick</li>
        <li>Timmy</li>
        <li>Gibson</li>
    </ul>
</div>


<script>
    $( "ul li:nth-last-of-type(2)" ).append( " - 2nd to last!" );
</script>


</body>
</html>