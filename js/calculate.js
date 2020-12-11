document.getElementById("dividend").addEventListener("keyup", function () {
    document.getElementById("dividendTemp").innerHTML = document.getElementById("dividend").value;
});
document.getElementById("dividend").addEventListener("blur", function () {
    if (document.getElementById("dividend").value === "") {
        document.getElementById("divideSign").innerHTML = "";
    } else {
        document.getElementById("divideSign").innerHTML = ":";
    }
});

document.getElementById("divisor").addEventListener("keyup", function () {
    document.getElementById("divisorTemp").innerHTML = document.getElementById("divisor").value;
});
document.getElementById("divisor").addEventListener("blur", function () {
    if (document.getElementById("divisor").value === "") {
        document.getElementById("equals").innerHTML = "";
    } else {
        document.getElementById("equals").innerHTML = "=";
    }
});

document.getElementById("submit").addEventListener("click", function () {
    /*TODO:
      -überprüfen textfeld != leer
      - schaen was der fehler ist bei zb 2002:2 oder 900/3
      - wenn ergebnis von division kleiner als 1 soll 0 geschrieben werden
   */
    /**
     result -> ergebnis, wird stück für stück aufgebaut.....1.....12.....123
     resMul -> die zahl die unter der gerade geteilten hergeschreiben wird sie wird zur berechung er nächsten gebraucht, (teilergebnis von der division * divisor)
     resSub -> die zahl die heraus kommt wenn man resSub calc von dem substring abzieht (für nächste division)
     */
    document.getElementById("solution").innerHTML = "";
    document.getElementById("rechenweg").innerHTML = "";

    let divisor = document.getElementById("divisor").value;
    let dividend = document.getElementById("dividend").value;
    let dividendInit = dividend;
    let counterSString = {
        counter: 0,
        marginLeft: 0
    };

    if(parseInt(divisor) === 0){
        alert("Divisor can't be 0");
        return;
    }

    var i = 0;
    while (counterSString.counter <= dividendInit.length) {
        //alert("Oben: " + counterSString.counter);
        dividend = calculate(counterSString, dividend, divisor, dividendInit);
        i++;
    }
});

function calculate(counterSString, dividend, divisor, dividendInit) {
    let nextNumber, result, resMul, resSub, dividendString = "" + dividend;

    while (counterSString.counter <= dividendInit.length) {
        counterSString.counter++;
        //alert("Unten: " + counterSString.counter);
        result = dividendString.substr(0, counterSString.counter + 1) / divisor;                  //substring durch divisor teilen
        if (result >= 1) {                                                            //wenn das ergebnis größer 1 ist haben wir den ersten substring der hinein geht
            result = Math.floor(result);                                             //runden 1.023 --> 1, 2,99999 --> 2
            resMul = result * divisor;                                               //divisor mit ergebnis multiplizieren
            resSub = dividendString.substr(0, counterSString.counter + 1) - resMul;               //den substring - das ergebnis der multiplikation
            nextNumber = dividendInit.substring(counterSString.counter + 1, counterSString.counter + 2);   //neue ziffer herunterholen
            nextNumber = resSub.toString() + nextNumber;                                //und neben dem ergebnis der subtraktion schreiben bzw. vereinen 3(erg sub)   4(heruntergeholt) --> 34
            //alert(nextNumber);

            document.getElementById("solution").innerHTML += result.toString();
            let textRow1 = document.createElement("p");
            let textRow2 = document.createElement("p");

            let margin = 0;
            for(var i = 0; i <= dividendInit.length; i++){
                if(counterSString.counter === i) {
                    textRow1.style.margin = "0px 0px 0px " + margin + "px";
                    margin += 10;
                    textRow2.style.margin = "0px 0px 0px " + margin + "px";
                }else if(counterSString.counter === 1){
                    textRow1.style.margin = "0px 0px 0px 0px";
                    textRow2.style.margin = "0px 0px 0px 10px";
                }
                else {
                    margin += 10;
                }
            }

            textRow1.innerHTML = resMul;
            textRow2.innerHTML = nextNumber;
            document.getElementById("rechenweg").appendChild(textRow1);
            document.getElementById("rechenweg").appendChild(textRow2);

            return nextNumber;
        }
        counterSString.counter++;
    }
}