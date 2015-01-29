
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
            width: 100px;
            height: 80px;
            margin: 5px;
            float: left;
            background: #b9e;
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
    <button>Sibling!</button>
    <button>Sibling!</button>
</div>
<div>
    <button>Sibling!</button>
</div>


<script>
    $( "div button:only-child" ).text( "Alone" ).css( "border", "2px blue solid" );
</script>


</body>
</html>