var fruits = ["Banana", "Orange", "Apple", "Mango", "Watermelon", "Pineapple", "Papaya", "Coconut", "Passion Fruit", "Cantaloupe", "Peach", "Pear", "Grape", "Strawberry", "Kiwi", "Tomato", "Cherry", "Lemon", "Lime", "Grapefruit", "Avocado", "Pomegranate", "Cucumber", "Onion", "Carrot", "Garlic", "Celery", "Potato", "Cabbage", "Broccoli", "Asparagus", "Mushroom", "Chili", "Peanut", "Cocoa", "Chocolate", "Strawberry", "Coffee", "Tea", "Cake", "Pie", "Donut", "Cookie", "Cupcake"];

/* For Each */
/*  var count = 0;
fruits.forEach(function(fruit) {
    count++;
    console.log(count + ": " + fruit);
    console.log(fruit);
});  */

/* For Loop */
/* for (var i = 0; i < fruits.length; i++) {
    console.log("from for loop : " + fruits[i]);
    if(fruits[i] == "Tomato"){
        console.log("For loop is stopped ar Tomato");
        break;
    }
} */

/* While Loop */
/* while(fruits.length > 0) {
    console.log("from while loop : " + fruits.shift());
} */

/* Do While */

do{
    console.log("from while loop : " + fruits.shift());
} while(fruits.length > 0);
