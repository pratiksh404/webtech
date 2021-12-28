var a = 5; // statement 1
var b = 10; // statement 1
var c = add(a,b); // a and b is arguement
const PI = 3.14;
var firstname = "John";
var lastname = "Doe";
var x = true;
var y = false;
console.log(!y);
console.log(a++);
console.log(a); // statement 1
console.log(b); // statement 1
console.log(c); // statement 1
console.log(name(firstname, lastname));

function add(a, b) { // a and b here is parameter
   var sum; // variable declaration
   sum = a + b; // expression
   var ten = 10;
   return sum;
}

function name(firstname, lastname) {
    return firstname + " " + lastname;
}



// AND (&&)
// a   b  output
// 1   1  1
// 1   0  0
// 0   1  0
// 0   0  0

// OR (||)
// a   b  output
// 1   1  1
// 1   0  1
// 0   1  1
// 0   0  0

// NOT (!)
// a   output
// 1   0
// 0   1
