
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
        span.solast {
            text-decoration: line-through;
        }
    </style>

</head>

<body>

<div>
    <span>John,</span>
    <span>Karl,</span>
    <span>Brandon,</span>
    <span>Sam</span>
</div>
<div>
    <span>Glen,</span>
    <span>Tane,</span>
    <span>Ralph,</span>
    <span>David</span>
</div>


<script>
    $( "div span:last-child" )
        .css({ color:"red", fontSize:"80%" })
        .hover(function() {
            $( this ).addClass( "solast" );
        }, function() {
            $( this ).removeClass( "solast" );
        });
</script>


</body>
</html>