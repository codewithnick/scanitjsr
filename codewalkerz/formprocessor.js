/* $("#reg-form").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});
 */

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#fname").val();
    var email = $("#email").val();
    var year_of_passing = $("#yPassing").val();
    var course = $("#course").val();
    var college = $("#college").val();

    $.ajax({
        type: "POST",
        url: "register.php",
        data: "name=" + name + "&email=" + email + "&yPassing=" + year_of_passing
         + "&course=" +course+ "&college=" +college,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                //formError();
                //submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#reg-form")[0].reset();
    //submitMSG(true, "Message Submitted!")
}
/*
function formError(){
    $("#reg-form").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
} */

