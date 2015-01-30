
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
        span {
            color: #008;
        }
        span.sogreen {
            color: green;
            font-weight: bolder;
        }
    </style>

</head>

<body>

<div>
    <span>John,</span>
    <span>Karl,</span>
    <span>Brandon</span>
</div>
<div>
    <span>Glen,</span>
    <span>Tane,</span>
    <span>Ralph</span>
</div>


<script>
    $( "div span:first-child" )
        .css( "text-decoration", "underline" )
        .hover(function() {
            $( this ).addClass( "sogreen" );
        }, function() {
            $( this ).removeClass( "sogreen" );
        });
</script>


</body>
</html>