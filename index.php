<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes-R-Us!</title>
    <!--
    <link href="styles/Assn3a.css" rel="stylesheet">
    -->
</head>
<body>
<h1>Let them eat (cup)cake!!!</h1>

<form id="cupcakeform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
        <legend>Cupcake Fundraiser</legend>
        <label>Your Name :</label><br>
        <input type="text" size="20" maxlength="20"
               name="name" id="name">
    </fieldset>
    <fieldset>
        <label>Cupcake Flavors :</label>

    </fieldset>
</form>


