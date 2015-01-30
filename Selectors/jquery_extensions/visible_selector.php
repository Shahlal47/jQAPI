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
            width: 50px;
            height: 40px;
            margin: 5px;
            border: 3px outset green;
            float: left;
        }
        .starthidden {
            display: none;
        }
    </style>

</head>

<body>

<button>Show hidden to see they don't change</button>
<div></div>
<div class="starthidden"></div>
<div></div>
<div></div>
<div style="display:none;"></div>

<script>
    $( "div:visible" ).click(function() {
        $( this ).css( "background", "yellow" );
    });
    $( "button" ).click(function() {
        $( "div:hidden" ).show( "fast" );
    });
</script>

</body>
</html>
