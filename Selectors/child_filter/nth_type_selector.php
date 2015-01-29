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
        .nth {
            color: red;
        }
        </style>
</head>
<body>

<div>
    <span>John</span>,
    <b>Kim</b>,
    <span>Adam</span>,
    <b>Rafael</b>,
    <span>Oleg</span>
</div>
<div>
    <b>Dave</b>,
    <span>Ann</span>
</div>
<div>
    <i><span>Maurice</span></i>,
    <span>Richard</span>,
    <span>Ralph</span>,
    <span>Jason</span>
</div>


<script>
     $( "span:nth-of-type(2)" )
        .append( " is 2nd sibling span" )
        .addClass( "nth" );
</script>


</body>
</html>