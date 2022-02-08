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

/* Jquery Effects */
$('#square').click(function(){
    $(this).hide(3000);
});

$('#hide-button').click(function(){
    $('#square').hide(3000);
});
$('#show-button').click(function(){
    $('#square').show(3000);
});
$('#toggle-button').on('click',function(){
    $('#square').toggle(3000);
});

$('#circle-fadein-button').click(function(){
    $('#circle').fadeIn(3000);
});
$('#circle-fadeout-button').click(function(){
    $('#circle').fadeOut(3000);
});
$('#circle-fadeToggle-button').on('click',function(){
    $('#circle').fadeToggle(3000);
});

$('#ghost').click(function(){
    $('#boo').slideToggle(3000);
});

$('#animate-square').click(function(){
    $('#animate').animate({
        height: '300px',
        width: '300px',
        backgroundColor: 'red'
    },6000);
});

$('#animate-circle').click(function(){
    $('#animate').animate({
        height: '300px',
        width: '300px',
        borderRadius: '50%',
        backgroundColor: 'blue'
    },6000);
});

$('#stop-animation').click(function(){
    $('#animate').stop();
});

$('#animate-slideupdown').click(function(){
    $('#animate').slideUp(3000).slideDown(3000);
});

$('#addPrimary').click(function(){
    $('#abc').removeClass('bg-warning').addClass('bg-primary');
});

$('#addWarning').click(function(){
     $('#abc').removeClass('bg-primary').addClass('bg-warning');
});

$('#toggleDanger').click(function(){
    $('#abc').toggleClass('bg-danger');
});