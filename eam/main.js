$(document).ready(function(){
    $('[data-toggle="popover"]').popover({html:true});
});

$(document).on('click', function (e) {
    $('[data-toggle="popover"],[data-original-title]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false
        }

    });
});

$(document).on("click", "#login-submit-button", function () {
    var email = $("#login-email").val();
    var password = $("#login-password").val();

    if( email != "" && password != "" ){
        $.ajax({
            url:'login.php',
            type:'post',
            data:{email:email,password:password},
            success:function(response){
                var msg = "";
                if(response == 1){
                    window.location = "index.php";
                }else{
                    msg = "Invalid email or password!";
                }
                $(".error-msg-login").html(msg);
            }
        });
    }
    else{
        var msg = "Enter email and password!";
        $(".error-msg-login").html(msg);
    }
});


$(document).ready(function() {
    $("#show_hide_password_first a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password_first input').attr("type") == "text"){
            $('#show_hide_password_first input').attr('type', 'password');
            $('#show_hide_password_first i').addClass( "fa-eye-slash" );
            $('#show_hide_password_first i').removeClass( "fa-eye" );
        }else if($('#show_hide_password_first input').attr("type") == "password"){
            $('#show_hide_password_first input').attr('type', 'text');
            $('#show_hide_password_first i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_first i').addClass( "fa-eye" );
        }
    });
});

$(document).ready(function() {
    $("#show_hide_password_confirm a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password_confirm input').attr("type") == "text"){
            $('#show_hide_password_confirm input').attr('type', 'password');
            $('#show_hide_password_confirm i').addClass( "fa-eye-slash" );
            $('#show_hide_password_confirm i').removeClass( "fa-eye" );
        }else if($('#show_hide_password_confirm input').attr("type") == "password"){
            $('#show_hide_password_confirm input').attr('type', 'text');
            $('#show_hide_password_confirm i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_confirm i').addClass( "fa-eye" );
        }
    });
});

$(document).on("click", "#show_hide_password_login a", function (event) {
    event.preventDefault();
    if($('#show_hide_password_login input').attr("type") == "text"){
        $('#show_hide_password_login input').attr('type', 'password');
        $('#show_hide_password_login i').addClass( "fa-eye-slash" );
        $('#show_hide_password_login i').removeClass( "fa-eye" );
    }else if($('#show_hide_password_login input').attr("type") == "password"){
        $('#show_hide_password_login input').attr('type', 'text');
        $('#show_hide_password_login i').removeClass( "fa-eye-slash" );
        $('#show_hide_password_login i').addClass( "fa-eye" );
    }
});

function valRegEmail() {
    var $email = $("#myEmail-reg").val();
    var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if ($email.length == 0) {
        var msg = "Please enter an email! Email is a required filed!";
        $(".error-email-reg").html(msg);
    }
    else if( re.test($email)){ //if email is ok put a success class and remove error message
        document.getElementById("myEmail-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-email-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid Email form!";
        $(".error-email-reg").html(msg);
    }

}

function valPassword() {
    var $password = $("#myPassword-reg").val();
    re = /^[0-9]*$/;
    if ($password.length == 0) {
        var msg = "Please enter a password! Password is a required field";
        $(".error-pass-reg").html(msg);
    }
    else if( $password.length > 8 && re.test($password) ){
        document.getElementById("myPassword-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-pass-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid Password!";
        $(".error-pass-reg").html(msg);
    }

}

function valPassConf() {
    var $passConf = $("#myPasswordConfirm-reg").val();
    var $pass = $("#myPassword-reg").val();
    if( $passConf == $pass ){
        document.getElementById("myPasswordConfirm-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-conf-pass-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-conf-pass-reg").html(msg);
    }

}

function valFirstName() {
    var $firstName = $("#myFirstName-reg").val();
    re = /^[A-Za-z]+|[Α-Ωα-ω]+$/;
    if ($firstName.length == 0) {
        var msg = "Please insert a first name! First name is a required field!";
        $(".error-first-name-reg").html(msg);
    }
    else if( re.test($firstName) ){
        document.getElementById("myFirstName-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-first-name-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid first name";
        $(".error-first-name-reg").html(msg);
    }

}

function valLastName() {
    var $lastName = $("#myLastName-reg").val();
    re = /^[A-Za-z]+|[Α-Ωα-ω]+$/;
    if ($lastName.length == 0) {
        var msg = "Please insert a last name! Last name is a required field";
        $(".error-last-name-reg").html(msg);
    }
    else if ( re.test($lastName)) {
        document.getElementById("myLastName-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-last-name-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid last name";
        $(".error-last-name-reg").html(msg);
    }

}

function valBirthDate() {
    var $date = $("#myBirthDate-reg").val();
    if( $date == 10 ){
        document.getElementById("myBirthDate-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-date-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid date of birth";
        $(".error-date-reg").html(msg);
    }

}

function valIdNumber() {
    var $id = $("#myIdNumber-reg").val();
    re = /^Α[0-9]*$/;
    if ($id.length == 0) {
        var msg = "Please insert an ID number! ID number is a required field";
        $(".error-id-reg").html(msg);
    }
    else if( $id.length == 10 && re.test($id)){
        document.getElementById("myIdNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-id-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invlaid ID number";
        $(".error-id-reg").html(msg);
    }

}

function valTaxNumber() {
    var $tax = $("#myTaxNumber-reg").val();
    re = /^[0-9]*$/;
    if ($tax.length == 0) {
        var msg = "Please insert a tax number! Tax number is a required field";
        $(".error-tax-reg").html(msg);
    }
    else if( $tax.length == 10 && re.test($tax)){
        document.getElementById("myTaxNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-tax-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid tax number";
        $(".error-tax-reg").html(msg);
    }

}

function valAmkaNumber() {
    var $amka = $("#myAmkaNumber-reg").val();
    re = /^[0-9]*$/;
    if ($amka.length == 0) {
        var msg = "Please insert an amka number! Amka number is a required field";
        $(".error-amka-reg").html(msg);
    }
    else if( $amka.length == 10 && re.test($amka)){
        document.getElementById("myAmkaNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-amka-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid amka";
        $(".error-amka-reg").html(msg);
    }

}

function valPhoneNumber() {
    var $phone = $("#myPhoneNumber-reg").val();
    re = /^2[0-9]+|69[0-9]+$/;
    if ($phone.length == 0) {
        var msg = "";
        $(".error-phone-reg").html(msg);
    }
    else if( $phone.length == 10 && re.test($phone)){
        document.getElementById("myPhoneNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-phone-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid phone number";
        $(".error-phone-reg").html(msg);
    }

}

function valAddress() {
    var $address = $("#myAddress-reg").val();
    re = /^[A-Za-z]+ [0-9]+, [A-Za-z]+, [0-9]+$/;
    if ($address.length == 0) {
        var msg = "";
        $(".error-myAddress-reg").html(msg);
    }
    else if( re.test($address) ){
        document.getElementById("myAddress-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-myAddress-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid address";
        $(".error-myAddress-reg").html(msg);
    }

}
