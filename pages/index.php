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

        .btnNext {
            display: inline-block;
            margin-left: 90px;
            padding: 10px 30px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            cursor: pointer;
        }

        .btnNext:hover{
            background-color: royalblue;
        }

        .calculation_field {
            margin-left: 70px;
            display: inline-block;
            width: 500px;
            height: 1000px;
            background-color: #7fffd4;
            float: left;
        }

        .explaination_field {
            margin-right: 70px;
            display: inline-block;
            width: 700px;
            height: 1000px;
            background-color: #7fffd4;
            float: right;
        }

        .calculation_field::after{
            display: table;
            content: "";
            clear: both;
        }

        .explaination_field::after {
            display: table;
            content: "";
            clear: both;
        }

        .dividendTemp {
            margin-left: 170px;
        }

        .rechenweg {
            margin-left: 170px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .lblTS {
            margin-left: 180px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .2s;
            transition: .2s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider {
            border-radius: 34px;
        }

        .slider:before {
            border-radius: 50%;
        }

        .h3R {
            margin-top: 10px;
            margin-left: 200px;
        }
        .h3Ex{
            margin-top: 10px;
            margin-left: 290px;
        }

        .explanationText {
            margin-left: 15px;
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
        <br>
    </div>

    <div id="calculation_field" class="calculation_field">
        <h3 class="h3R">Rechnung</h3>
        <span class="dividendTemp" id="dividendTemp"></span>
        <span id="divideSign"></span>
        <span id="divisorTemp"></span>
        <span id="equals"></span>
        <span id="solution"></span>
        <script src="../js/calculate.js"></script>
        <div class="rechenweg" id="rechenweg"></div>
    </div>

    <div id="explaination_field" class="explaination_field">
        <div class="sliderDiv">
            <h3 class="h3Ex">Erklärungen</h3>
            <label class="lblTS" for="toggleSwitch">Off/On</label>
            <label class="switch">
                <input type="checkbox" id="toggleSwitch" onclick="displayExplanationText()">
                <span class="slider round"></span>
            </label>
            <button class="btnNext" id="showNextStep">Nächster Schritt</button>
        </div>
        <div>
            <p class="explanationText" id="explainationText" style="display: none"></p>
        </div>
    </div>

</div>
</body>
</html>