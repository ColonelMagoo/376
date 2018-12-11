function circle() {
    var radius = parseInt(document.getElementById("radius").value);
    
    var result = Math.pow(radius, 2) * Math.PI ;

    document.getElementById("result").innerHTML = result;
}

function rectangle() {
    var value1 = parseInt(document.getElementById("value1").value);
    var value2 = parseInt(document.getElementById("value2").value);

    var result2 = value1 * value2;

    document.getElementById("result2").innerHTML = result2;
}
function triangle() {
    var value3 = parseInt(document.getElementById("value3").value);
    var value4 = parseInt(document.getElementById("value4").value);

    var result3 = value3 * value4 / 2;

    document.getElementById("result3").innerHTML = result3;
}