

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
        div {
            width: 70px;
            height: 40px;
            background: #e7f;
            margin: 5px;
            float: left;
        }
        span {
            display: block;
            clear: left;
            color: red;
        }
        .starthidden {
            display: none;
        }
    </style>
</head>
<body>

<span></span>
<div></div>
<div style="display:none;">Hider!</div>
<div></div>
<div class="starthidden">Hider!</div>
<div></div>
<form>
    <input type="hidden">
    <input type="hidden">
    <input type="hidden">
</form>
<span></span>


<script>
    // In some browsers :hidden includes head, title, script, etc...
    var hiddenElements = $( "body" ).find( ":hidden" ).not( "script" );
    $( "span:first" ).text( "Found " + hiddenElements.length + " hidden elements total." );
    $( "div:hidden" ).show( 3000 );
    $( "span:last" ).text( "Found " + $( "input:hidden" ).length + " hidden inputs." );
</script>


</body>
</html>