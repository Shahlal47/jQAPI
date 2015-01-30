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
        p {
            margin: 4px;
            font-size: 16px;
            font-weight: bolder;
            cursor: pointer;
        }
        .blue {
            color: blue;
        }
        .highlight {
            background: red;
        }
    </style>
</head>
<body>
<p class="blue">Click to toggle (<span>clicks: 0</span>)</p>
<p class="blue highlight">highlight (<span>clicks: 0</span>)</p>
<p class="blue">on these (<span>clicks: 0</span>)</p>
<p class="blue">paragraphs (<span>clicks: 0</span>)</p>



<script>
    var count = 0;
    $( "p" ).each(function() {
        var $thisParagraph = $( this );
        var count = 0;
        $thisParagraph.click(function() {
            count++;
            $thisParagraph.find( "span" ).text( "clicks: " + count );
            $thisParagraph.toggleClass( "highlight", count % 3 === 0 );
        });
    });
</script>


</body>
</html>