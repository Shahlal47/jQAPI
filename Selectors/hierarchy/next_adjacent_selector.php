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



    </style>


</head>
<body>

<form>
    <label for="name">Name:</label>
    <input name="name" id="name">
    <fieldset>
        <label for="newsletter">Newsletter:</label>
        <input name="newsletter" id="newsletter">
    </fieldset>
</form>
<input name="none">

<script>
    $( "label + input" ).css( "color", "blue" ).val( "Labeled!" );
</script>


</body>
</html>