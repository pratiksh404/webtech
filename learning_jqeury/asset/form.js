// Name Field
$('#name').on('change',function(){

});

$('#email').change(function(){

});

$('#submit').click(function(){
    // Should be atleast 8 characters long and maximum 20 character
    var name = $('#name').val();
    if (name.length < 8 ) {
        $('#name-validation').empty().html("Name should be atleast 8 characters long");
    } else if(name.length > 20) {
         $('#name-validation').empty().html("Name should be maximum 20 characters long");
    } else {
           $('#name-validation').empty();
    }

    var email = $('#email').val();
    // Should contain @ 
    if(!email.includes("@")) {
        $('#email-validation').empty().html("Email should contain @");
    } else {
           $('#email-validation').empty();
    }
});