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
        <label>Cupcake Flavors :</label><br>
        <input type="checkbox" value="grasshopper" name="flavors[]">The Grasshopper<br>
        <input type="checkbox" value="maple" name="flavors[]">Whiskey Maple Bacon<br>
        <input type="checkbox" value="carrot" name="flavors[]">Carrot Walnut<br>
        <input type="checkbox" value="salted" name="flavors[]">Salted Caramel<br>
        <input type="checkbox" value="velvet" name="flavors[]">Red Velvet<br>
        <input type="checkbox" value="lemon" name="flavors[]">Lemon Drop<br>
        <input type="checkbox" value="tiramisu" name="flavors[]">Tiramisu<br>
    </fieldset>
</form>


