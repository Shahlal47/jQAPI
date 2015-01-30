
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

<ul class="nav">
    <li>List 1, item 1</li>
    <li>List 1, item 2</li>
    <li>List 1, item 3</li>
</ul>
<ul class="nav">
    <li>List 2, item 1</li>
    <li>List 2, item 2</li>
    <li>List 2, item 3</li>
</ul>

<script>
    // Applies yellow background color to a single
    $( "ul.nav li:eq(1)" ).css( "backgroundColor", "#ff0" );
    // Applies italics to text of the second within each
    $( "ul.nav" ).each(function( index ) {
        $( this ).find( "li:eq(1)" ).css( "fontStyle", "italic" );
    });
    // Applies red text color to descendants of
    // for each that is the second child of its parent
    $( "ul.nav li:nth-child(2)" ).css( "color", "red" );
</script>


</body>
</html>