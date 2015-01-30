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
        }
        .blue {
            color: blue;
        }
        .under {
            text-decoration: underline;
        }
        .highlight {
            background: yellow;
        }
    </style>
</head>
<body>
<p class="blue under">Hello</p>
<p class="blue under highlight">and</p>
<p class="blue under">then</p>
<p class="blue under">Goodbye</p>


<script>
    $( "p:odd" ).removeClass( "blue under" );
</script>


</body>
</html>