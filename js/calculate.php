<div class="calculation">

    <script>
        /*TODO:
           -nächste Zahl herunterholen und die operation Wiederholen
           -ausgabe schön machen
        */
        /**
         result -> ergebnis, wird stück für stück aufgebaut.....1.....12.....123
         resMul -> die zahl die unter der gerade geteilten hergeschreiben wird sie wird zur berechung er nächsten gebraucht, (teilergebnis von der division * divisor)
         resSub -> die zahl die heraus kommt wenn man resSub calc von dem substring abzieht (für nächste division)
         */
        var divisor = "<?php echo($_POST["divisor"])?>";
        var dividend = "<?php echo($_POST["dividend"])?>";
        var result, resMul, resSub, counterSString = 0, newNumber;
        document.getElementById("calculation_field").innerHTML = "<?php echo($_POST["dividend"] . " : " . $_POST["divisor"])?>" + " = ";

        calculate(counterSString, dividend);

        function calculate(counterSString, dividend) {
            for (counterSString; counterSString < dividend.length; counterSString++){       //solange durchlaufen bis die zahl fertig ist --> wir suchen den substring die durch den divisor teilbar ist
                result = dividend.substr(0, counterSString + 1) / divisor;                  //substring durch divisor teilen
                if(result >= 1){                                                            //wenn das ergebnis größer 1 ist haben wir den ersten substring der hinein geht
                    result = Math.floor(result);                                             //runden 1.023 --> 1, 2,99999 --> 2
                    resMul = result * divisor;                                               //divisor mit ergebnis multiplizieren
                    resSub = dividend.substr(0, counterSString + 1) - resMul;               //den substring - das ergebnis der multiplikation
                    newNumber = dividend.substring(counterSString + 1, counterSString + 2);   //neue ziffer herunterholen
                    newNumber = resSub.toString() + newNumber;                                //und neben dem ergebnis der subtraktion schreiben bzw. vereinen 3(erg sub)   4(heruntergeholt) --> 34
                    document.getElementById("calculation_field").innerHTML += "<br>" + resMul + "<br>" + newNumber;
                    dividend = newNumber;
                    break;
                }
            }
        }

    </script>
</div>