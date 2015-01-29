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
    p {
    margin: 20px 0 0;
    }
    b {
    color: blue;
    }
    </style>
</head>
<body>
<input id="check1" type="checkbox" checked="checked">
<label for="check1">Check me</label>
<p></p>



<script>
    $( "input" )
        .change(function() {
            var $input = $( this );
            $( "p" ).html( ".attr( 'checked' ): " + $input.attr( "checked" ) + "" +
            ".prop( 'checked' ): " + $input.prop( "checked" ) + "" +
            ".is( ':checked' ): " + $input.is( ":checked" ) + "" );
        })
        .change();
</script>


</body>
</html>