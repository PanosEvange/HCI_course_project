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
    // if( $email == 10 ){ //if email is ok put a success class and remove error message
    if( re.test($email)){ //if email is ok put a success class and remove error message
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
    re = /^[0-9]*$/i;
    if( $password.length > 8 && re.text($password) ){
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
    if( $firstName == 10 ){
        document.getElementById("myFirstName-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-first-name-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-first-name-reg").html(msg);
    }

}

function valLastName() {
    var $lastName = $("#myLastName-reg").val();
    if( $lastName == 10 ){
        document.getElementById("myLastName-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-last-name-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
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
        var msg = "Passwords don't match!";
        $(".error-date-reg").html(msg);
    }

}

function valIdNumber() {
    var $id = $("#myIdNumber-reg").val();
    if( $id == 10 ){
        document.getElementById("myIdNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-id-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-id-reg").html(msg);
    }

}

function valTaxNumber() {
    var $tax = $("#myTaxNumber-reg").val();
    if( $tax == 10 ){
        document.getElementById("myTaxNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-tax-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-tax-reg").html(msg);
    }

}

function valAmkaNumber() {
    var $amka = $("#myAmkaNumber-reg").val();
    if( $amka == 10 ){
        document.getElementById("myAmkaNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-amka-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-amka-reg").html(msg);
    }

}

function valPhoneNumber() {
    var $phone = $("#myPhoneNumber-reg").val();
    if( $phone == 10 ){
        document.getElementById("myPhoneNumber-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-phone-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-phone-reg").html(msg);
    }

}

function valAddress() {
    var $address = $("#myAddress-reg").val();
    if( $address == 10 ){
        document.getElementById("myAddress-reg").setAttribute("class", "successRegField form-control");
        var msg = "";
        $(".error-myAddress-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-myAddress-reg").html(msg);
    }

}
