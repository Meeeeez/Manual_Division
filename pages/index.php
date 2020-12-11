<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Schriftliche Division</title>
    <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="main_container">
    <div class="input">
        <div class="input_form">
            <input type="text" id="dividend" placeholder="Dividend" name="dividend">
            <label for="divisor">:</label>
            <input type="text" id="divisor" placeholder="Divisor" name="divisor">
            <button id="submit">Berechnen</button>
        </div>
    </div>
    <div id="calculation_field" class="calculation_field">
        <span class="dividendTemp" id="dividendTemp"></span>
        <span id="divideSign"></span>
        <span id="divisorTemp"></span>
        <span id="equals"></span>
        <span id="solution"></span>
        <br>
        <div class="rechenweg" id="rechenweg"></div>
    </div>
</div>

<script src="../js/calculate.js"></script>

</body>

</html>