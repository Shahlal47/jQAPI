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
        div, span, p {
            width: 126px;
            height: 60px;
            float: left;
            padding: 3px;
            margin: 2px;
            background-color: #eee;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div>div</div>
<p class="myClass">p class="myClass"</p>
<p class="notMyClass">p class="notMyClass"</p>
<span>span</span>



<script>
    $( "div, span, p.myClass" ).css( "border", "3px solid red" );
</script>


</body>
</html>