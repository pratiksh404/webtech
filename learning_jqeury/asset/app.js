/* Tag Selector */
/* $("p").show(); */
/* $("h1").hide(); */
/* Class Selector */
/* $(".a").hide(); */
/* ID Selector */
/* $("#b").hide(); */
/* Select all element */
/* $("*").hide(); */
/* tag with specific class and id */
/* $("p.abc").hide(); */
/* hiding first element */
/* $("p:first").hide(); */
/* hiding last element */
/* $("p:last").hide(); */
/* Children selector */
/* $("ul li:first").hide(); */
/* Even Selector */
/* $("ul li:odd").hide(); */
/* Type selector */
/* $(":button").hide();
$("input[type='checkbox']").hide(); */


/* Event in Jqeury */

/* Mouse event */
$('#a').dblclick(function(){
    alert("hello a");
});
$('#b').click(function(){
    alert("hello b");
});
$("#c").mouseenter(function(){
    alert("hello c");
});
$("#d").mouseleave(function(){
    alert("hello d");
});

/* keyboard event */
$('#keyboard').keypress(function(){
    alert("you have pressed key");
});

$('#keyboard').keyup(function(){
    alert("you have pressed key");
});

/* form input */
$("#form").change(function(){
    var value = $(this).val();
    $("#form-value").text(value);
});
