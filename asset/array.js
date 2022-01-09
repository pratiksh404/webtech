let color = ["red","Yellow","blue","purple","Orange"];
let fruits = ["Apple","Banana","Mango","Orange","Pineapple"];

let combined_array = color.concat(fruits);

color.push("golden");

console.log(Array.isArray(color));

/* color.forEach(function(value){
    console.log(value);
}); */

color.unshift("black");

combined_array.forEach(function(value){
    console.log(value);
});