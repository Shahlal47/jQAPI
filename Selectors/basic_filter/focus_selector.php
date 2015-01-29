
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
        .focused {
            background: #abcdef;
        }
    </style>

</head>

<body>

<div id="content">
    <input tabIndex="1">
    <input tabIndex="2">
    <select tabIndex="3">
        <option>select menu</option>
    </select>
    <div tabIndex="4">
        a div
    </div>
</div>


<script>
    $( "#content" ).delegate( "*", "focus blur", function() {
        var elem = $( this );
        setTimeout(function() {
            elem.toggleClass( "focused", elem.is( ":focus" ) );
        }, 0 );
    });
</script>


</body>
</html>