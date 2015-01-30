
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
            width: 100px;
            height: 80px;
            margin: 5px;
            float: left;
            background: #b9e;
        }
        span {
            padding: 2px;
            margin: 3px;
            line-height: 1.4;
            border: 1px solid #000;
        }
    </style>

</head>

<body>

<div>
    <button>Sibling!</button>
    <button>Sibling!</button>
</div>
<div>
    <button>Sibling!</button>
</div>
<div>
    None
</div>
<div>
    <button>Sibling!</button>
    <span>Sibling!</span>
    <span>Sibling!</span>
</div>
<div>
    <button>Sibling!</button>
</div>


<script>
    $( "button:only-of-type" ).text( "Alone" ).css( "border", "2px blue solid" );
</script>


</body>
</html>