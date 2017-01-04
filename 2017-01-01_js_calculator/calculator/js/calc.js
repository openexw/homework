keyCalc = function(key){
    var formula = document.getElementById("formula").getElementsByTagName("p")[0];
    var result = document.getElementById("result").getElementsByTagName("p")[0];
    var lastfla = formula.innerHTML.charAt(formula.innerHTML.length - 1);

    if(formula.innerHTML.indexOf("=") >= 0)
    {
        formula.innerHTML = "";
        if(!isNaN(key) || key == ".") result.innerHTML = "0";
    }

    if(key == ")")
    {
        var fma = formula.innerHTML;
        if(fma.split("(").length - fma.split(")").length <= 0) return false;
    }
    if(key == "(")
    {
        if(formula.innerHTML.length > 0 && formula.innerHTML.charAt(formula.innerHTML.length - 1) == ")" )
            formula.innerHTML = "";
    }

    if(key == "CL")
    {
        formula.innerHTML = "";
        result.innerHTML = "0";
    }
    else if(key == "CE")
    {
        result.innerHTML = "0";
    }
    else if(key == "SQRT")
    {
        formula.innerHTML = formula.innerHTML + "sqrt(" + result.innerHTML + ")";
        result.innerHTML = "0";
    }
    else if(key == "1/x")
    {
        if(result.innerHTML != "0") formula.innerHTML = formula.innerHTML + "1/" + result.innerHTML;
        result.innerHTML = "0";
    }
    else if(key == "←")
    {
        if(result.innerHTML.length > 1) result.innerHTML = result.innerHTML.substr(0, result.innerHTML.length - 1);
        else result.innerHTML = "0";
    }
    else if(key == "=")
    {
        if(result.innerHTML.length > 0 && result.innerHTML.charAt(result.innerHTML.length - 1) == "." )
            result.innerHTML = result.innerHTML.substr(0, result.innerHTML.length - 1);
        formula.innerHTML = formula.innerHTML +
            ((isNaN(lastfla) && lastfla != ")") || formula.innerHTML.length <= 0
                ? result.innerHTML : "");
        try
        {
            result.innerHTML = eval(formula.innerHTML.replace(/sqrt/, "Math.sqrt"));
        }
        catch(err)
        {
            result.innerHTML = "错误的算式!!!";
        }
        formula.innerHTML = formula.innerHTML + key;
    }
    else if(key == "±")
    {
        if(result.innerHTML.charAt(0) != "-" )
            result.innerHTML = "-" + result.innerHTML;
        else
            result.innerHTML = result.innerHTML.substr(1, result.innerHTML.length - 1);
    }
    else if(key == ".")
    {
        if(result.innerHTML.indexOf(".") < 0)
            result.innerHTML = result.innerHTML + key;

    }
    else if(key == "(")
    {
        if(formula.innerHTML == "") result.innerHTML = "0";
        formula.innerHTML = formula.innerHTML + key;
    }
    else if(!isNaN(key))
    {
        if((key != "0" && parseInt(result.innerHTML) != 0) || (key == 0 && parseInt(result.innerHTML) != 0) || result.innerHTML.indexOf(".") >= 0)
        {
            result.innerHTML = result.innerHTML + key;
        }
        else
        {
            result.innerHTML = key;
        }
    }
    else
    {
        if(result.innerHTML.length > 0 && result.innerHTML.charAt(result.innerHTML.length - 1) == "." )
            result.innerHTML = result.innerHTML.substr(0, result.innerHTML.length - 1);
        formula.innerHTML = formula.innerHTML +
            ((isNaN(lastfla) && lastfla != ")") || formula.innerHTML.length <= 0
                ? result.innerHTML : "") + key;
        result.innerHTML = "0";
    }
}

window.onload = function(){
    var body = document.getElementsByTagName("html")[0];
    var KeyEvent = function(ev){
        ev = ev || window.event;
        switch(ev.keyCode)
        {
            case 96:
            case 97:
            case 98:
            case 99:
            case 100:
            case 101:
            case 102:
            case 103:
            case 104:
            case 105: keyCalc(ev.keyCode - 96); break; // 0-9
            case 111: keyCalc("/"); break;
            case 106: keyCalc("*"); break;
            case 109: keyCalc("-"); break;
            case 107: keyCalc("+"); break;
            case 189: keyCalc("±"); break;
            case 110: keyCalc("."); break;
            case 187: if(ev.shiftKey == 1) keyCalc("+"); else keyCalc("="); break; // + or =
            case 48: if(ev.shiftKey == 1) { keyCalc(")"); break;} // 0 or )
            case 49:
            case 50:
            case 51:
            case 52: if(ev.shiftKey == 1) break; // 0-4
            case 53: if(ev.shiftKey == 1) { keyCalc("%"); break;} // 5 or %
            case 54:
            case 55: if(ev.shiftKey == 1) break; // 6-7
            case 56: if(ev.shiftKey == 1) { keyCalc("*"); break;} // 8 or *
            case 57: if(ev.shiftKey == 1) { keyCalc("("); break;} else keyCalc(ev.keyCode - 48); break; // 9 or (
            case 219: keyCalc("("); break; // [
            case 221: keyCalc(")"); break; // ]
            case 13: keyCalc("="); break; // enter
            case 27: keyCalc("CL"); break; // Esc
            case 46: keyCalc("CE"); break; // Delete
            case 8: keyCalc("←"); return false; // backspace
            default: console.log(ev.keyCode);
        }
    };
    if(body.addEventListener != null)
        body.addEventListener('keydown', KeyEvent, false);
    else
        body.attachEvent('onkeydown', KeyEvent);

    var ClickEvent = function(ev){
        ev = ev || window.event;
        var target = ev.target || ev.srcElement;
        switch(target.id)
        {
            case "num0": keyCalc("0"); break;
            case "num1": keyCalc("1"); break;
            case "num2": keyCalc("2"); break;
            case "num3": keyCalc("3"); break;
            case "num4": keyCalc("4"); break;
            case "num5": keyCalc("5"); break;
            case "num6": keyCalc("6"); break;
            case "num7": keyCalc("7"); break;
            case "num8": keyCalc("8"); break;
            case "num9": keyCalc("9"); break;
            case "point": keyCalc("."); break;
            case "except": keyCalc("/"); break;
            case "multiply": keyCalc("*"); break;
            case "minus": keyCalc("-"); break;
            case "plus": keyCalc("+"); break;
            case "negative": keyCalc("±"); break;
            case "surplus": keyCalc("%"); break;
            case "equal": keyCalc("="); break;
            case "backspace": keyCalc("←"); break;
            case "cancel": keyCalc("CE"); break;
            case "clear": keyCalc("CL"); break;
            case "Lbrackets": keyCalc("("); break;
            case "Rbrackets": keyCalc(")"); break;
        }
    };
    if(body.addEventListener != null)
        body.addEventListener('click', ClickEvent, false);
    else
        body.attachEvent('onclick', ClickEvent);
}