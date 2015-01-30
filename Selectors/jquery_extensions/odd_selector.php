<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> jQuery practice</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

    <style>
        table {
            background: #f3f7f5;
        }
    </style>


</head>
<body>

<table border="1">
    <tr><td>Row with Index #0</td></tr>
    <tr><td>Row with Index #1</td></tr>
    <tr><td>Row with Index #2</td></tr>
    <tr><td>Row with Index #3</td></tr>
</table>

<script>
    $( "tr:odd" ).css( "background-color", "#bbbbff" );
</script>


</body>
</html>
