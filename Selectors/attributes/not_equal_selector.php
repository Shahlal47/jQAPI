<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery practice</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>

<body>


<div>
    <input type="radio" name="newsletter" value="Hot Fuzz">
    <span>name is newsletter</span>
</div>
<div>
    <input type="radio" value="Cold Fusion">
    <span>no name</span>
</div>
<div>
    <input type="radio" name="accept" value="Evil Plans">
    <span>name is accept</span>
</div>


<script>
    $( "input[name!='newsletter']" ).next().append( "; not newsletter" );
</script>


</body>
</html>