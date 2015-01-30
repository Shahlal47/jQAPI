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
    <span>Corey,</span>
    <span>Yehuda,</span>
    <span>Adam,</span>
    <span>Todd</span>
</div>
<div>
    <span>Jörn,</span>
    <span>Scott,</span>
    <span>Timo,</span>
    <b>Nobody</b>
</div>

<script>
    $( "span:last-of-type" )
        .css({ color:"red", fontSize:"80%" })
        .hover(function() {
            $( this ).addClass( "solast" );
        }, function() {
            $( this ).removeClass( "solast" );
        });
</script>


</body>
</html>