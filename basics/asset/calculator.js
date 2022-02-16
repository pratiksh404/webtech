function calculate(){
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var operation = document.getElementById("operation").value;
    var result = 0;

  /*   if (operation == 1) {
        result = a + b;
    } else if (operation == 2) {
        result = a - b;
    } else if (operation == 3) {
        result = a * b;
    } else if(operation == 4) {
        result = a / b;
    } else {
        result = "Error";
    } */
    switch(parseInt(operation)){
        case 1:
            result = a + b;
            break;
        case 2:
            result = a - b;
            break;
        case 3:
            result = a * b;
            break;
        case 4:
            result = a / b;
            break;
        default:
            result = "Error";
    }

    document.getElementById("result").innerHTML = result;
    console.log(result);
}
