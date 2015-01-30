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
        form {
            border: 2px green solid;
            padding: 2px;
            margin: 0;
            background: #efe;
        }
        div {
            color: red;
        }
        fieldset {
            margin: 1px;
            padding: 3px;
        }
    </style>


</head>
<body>

<form>
    <div>Form is surrounded by the green border.</div>
    <label for="name">Child of form:</label>
    <input name="name" id="name">
    <fieldset>
        <label for="newsletter">Grandchild of form, child of fieldset:</label>
        <input name="newsletter" id="newsletter">
    </fieldset>
</form>
Sibling to form: <input name="none">

<script>
    $( "form input" ).css( "border", "2px dotted blue" );
    $( "form fieldset input" ).css( "backgroundColor", "yellow" );
</script>


</body>
</html>
