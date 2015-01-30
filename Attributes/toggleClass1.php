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
        p {
            margin: 4px;
            font-size: 16px;
            font-weight: bolder;
            cursor: pointer;
        }
        .blue {
            color: blue;
        }
        .highlight {
            background: yellow;
        }
    </style>
</head>
<body>
<p class="blue">Click to toggle</p>
<p class="blue highlight">highlight</p>
<p class="blue">on these</p>
<p class="blue">paragraphs</p>



<script>
    $( "p" ).click(function() {
        $( this ).toggleClass( "highlight" );
    });
</script>


</body>
</html>