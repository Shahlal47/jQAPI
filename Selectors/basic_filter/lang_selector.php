
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
            background-color: #ccc;
        }
        h3 {
            margin: .25em 0;
        }
        div {
            line-height: 1.5em
        }
        .usa {
            background-color: #f00;
            color: #fff;
        }
        .usa .usa {
            background-color: #fff;
            color: #000;
        }
        .usa .usa .usa {
            background-color: #00f;
            color: #fff;
        }
        .spain {
            background-color: #f00;
            color: #ff0;
        }
        .spain .spain {
            background-color: #ff0;
            color: #f00;
            line-height: 3em;
        }
        .spain .spain .spain {
            background-color: #f00;
            color: #ff0;
            line-height: 1.5em;
        }
    </style>

</head>

<body>



<h3>USA</h3>
<div lang="en-us">red
    <div>white
        <div>and blue</div>
    </div>
</div>
<h3>España</h3>
<div lang="es-es">rojo
    <div>amarillo
        <div>y rojo</div>
    </div>
</div>

<script>
    $( "div:lang(en-us)" ).addClass( "usa" );
    $( "div:lang(es-es)" ).addClass( "spain" );
</script>


</body>
</html>