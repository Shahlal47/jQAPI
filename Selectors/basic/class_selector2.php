
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
        div, span {
            width: 120px;
            height: 40px;
            float: left;
            padding: 10px;
            margin: 10px;
            background-color: #EEEEEE;
        }
    </style>


</head>

<body>

<div class="myclass">div class="notMe"</div>
<div class="myclass otherclass">div class="myClass"</div>
<span class="myclass otherclass">span class="myClass"</span>



<script>
    $( ".myclass.otherclass" ).css( "border", "13px solid red" );
</script>


</body>
</html>