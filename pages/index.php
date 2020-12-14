<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Schriftliche Division</title>

    <style>
        .input {
            width: 100%;
            height: 100px;
        }

        .input_form {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
            justify-content: center;
        }
        .input_form label {
            margin: 5px 10px 5px 0;
        }
        .input_form input {
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .input_form button {
            padding: 10px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            cursor: pointer;
        }
        .input_form button:hover {
            background-color: royalblue;
        }

        .calculation_field {
            width: 500px;
            height: 500px;
            background-color: #7fffd4;
            margin: 0 auto;
        }

        .dividendTemp {
            margin-left: 170px;
        }

        .rechenweg {
            margin-left: 170px;
        }

    </style>

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

        <script src="../js/calculate.js"></script>
        <div class="rechenweg" id="rechenweg"></div>
    </div>
</div>
</body>
</html>