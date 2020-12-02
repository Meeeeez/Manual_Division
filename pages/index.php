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
        <form class="input_form" action="index.php?content=solution" method="post">
            <input type="text" id="dividend" placeholder="Dividend" name="dividend">
            <label for="divisor">:</label>
            <input type="text" id="divisor" placeholder="Divisor" name="divisor">
            <button type="submit">Berechnen</button>
        </form>
    </div>
    <div id="calculation_field" class="calculation_field">
        <?php
        if(!empty($_GET['content'])){
            if($_GET['content'] == 'solution') {
                include("../js/calculate.php");
            }
        }
        ?>
    </div>
</div>

</body>

</html>