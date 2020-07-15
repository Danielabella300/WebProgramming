function add() {
    var x = document.getElementById("numberOne").value;
    var y = document.getElementById("numberTwo").value;
    var intx = parseInt(x);
    var inty = parseInt(y);

    if (x == "" || y == "") {
        alert("Missing Numbers in Field(s)");
    } else {
        var result = intx + inty;
        document.getElementById("result").innerHTML = result;
    }
}

function subtract() {
    var x = document.getElementById("numberOne").value;
    var y = document.getElementById("numberTwo").value;
    var intx = parseInt(x);
    var inty = parseInt(y);

    if (x == "" || y == "") {
        alert("Missing Numbers in Field(s)");
    } else {
        var result = x - y;
        document.getElementById("result").innerHTML = result;
    }
}

function multiply() {
    var x = document.getElementById("numberOne").value;
    var y = document.getElementById("numberTwo").value;
    var intx = parseInt(x);
    var inty = parseInt(y);

    if (x == "" || y == "") {
        alert("Missing Numbers in Field(s)");
    } else {
        var result = x * y;
        document.getElementById("result").innerHTML = result;
    }
}

function divide() {
    var x = document.getElementById("numberOne").value;
    var y = document.getElementById("numberTwo").value;
    var intx = parseInt(x);
    var inty = parseInt(y);

    if (x == '' || y == '') {
        alert("Missing Numbers in Field(s)");
    } else {
        var result = x / y;
        document.getElementById("result").innerHTML = result;
    }
}