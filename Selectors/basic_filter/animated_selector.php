
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
            background: yellow;
            border: 1px solid #AAA;
            width: 80px;
            height: 80px;
            margin: 0 5px;
            float: left;
        }
        div.colored {
            background: green;
        }
    </style>

</head>

<body>

<button id="run">Run</button>
<div></div>
<div id="mover"></div>
<div></div>


<script>
    $( "#run" ).click(function() {
        $( "div:animated" ).toggleClass( "colored" );
    });
    function animateIt() {
        $( "#mover" ).slideToggle( "slow", animateIt );
    }
    animateIt();
</script>


</body>
</html>