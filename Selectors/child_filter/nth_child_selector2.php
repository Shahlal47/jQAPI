
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
        button {
            display: block;
            font-size: 12px;
            width: 100px;
        }
        div {
            float: left;
            margin: 10px;
            font-size: 10px;
            border: 1px solid black;
        }
        span {
            color: blue;
            font-size: 18px;
        }
        #inner {
            color: red;
        }
        td {
            width: 50px;
            text-align: center;
        }
    </style>

</head>

<body>
<div>
    <button>:nth-child(even)</button>
    <button>:nth-child(odd)</button>
    <button>:nth-child(3n)</button>
    <button>:nth-child(2)</button>
</div>
<div>
    <button>:nth-child(3n+1)</button>
    <button>:nth-child(3n+2)</button>
    <button>:even</button>
    <button>:odd</button>
</div>
<div>
    <table>
        <tr><td>John</td></tr>
        <tr><td>Karl</td></tr>
        <tr><td>Brandon</td></tr>
        <tr><td>Benjamin</td></tr>
    </table>
</div>
<div>
    <table>
        <tr><td>Sam</td></tr>
    </table>
</div>
<div>
    <table>
        <tr><td>Glen</td></tr>
        <tr><td>Tane</td></tr>
        <tr><td>Ralph</td></tr>
        <tr><td>David</td></tr>
        <tr><td>Mike</td></tr>
        <tr><td>Dan</td></tr>
    </table>
</div>
<span>tr<span id="inner"></span></span>

<script>
    $( "button" ).click(function() {
        var str = $( this ).text();
        $( "tr" ).css( "background", "white" );
        $( "tr" + str ).css( "background", "#ff0000" );
        $( "#inner" ).text( str );
    });
</script>


</body>
</html>