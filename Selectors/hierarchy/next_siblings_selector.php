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
        div, span {
            display: block;
            width: 80px;
            height: 80px;
            margin: 5px;
            background: #bfa;
            float: left;
            font-size: 14px;
        }
        div#small {
            width: 60px;
            height: 25px;
            font-size: 12px;
            background: #fab;
        }
    </style>
</head>
<body>

<div>div (doesn't match since before #prev)</div>
<span id="prev">span#prev</span>
<div>div sibling</div>
<div>div sibling <div id="small">div niece</div></div>
<span>span sibling (not div)</span>
<div>div sibling</div>

<script>
    $( "#prev ~ div" ).css( "border", "3px groove blue" );
</script>


</body>
</html>