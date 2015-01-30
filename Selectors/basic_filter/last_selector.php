
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

<table>
    <tr><td>First Row</td></tr>
    <tr><td>Middle Row</td></tr>
    <tr><td>Last Row</td></tr>
</table>

<script>
    $( "tr:last" ).css({ backgroundColor: "yellow", fontWeight: "bolder" });
</script>


</body>
</html>