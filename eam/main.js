$(document).ready(function(){
    $('[data-toggle="popover"]').popover({html:true});
});

$(document).on('click', function (e) {
    $('[data-toggle="popover"],[data-original-title]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false;
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
                    window.location = "index.php?login";
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
        document.getElementById("myEmail-reg").classList.remove("successRegField");
    }
    else if( re.test($email)){ //if email is ok put a success class and remove error message
        document.getElementById("myEmail-reg").classList.add("successRegField");
        var msg = "";
        $(".error-email-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid Email form!";
        $(".error-email-reg").html(msg);
        document.getElementById("myEmail-reg").classList.remove("successRegField");
    }
    checkToEnable();
}

function valPassword() {
    var $password = $("#myPassword-reg").val();
    re = /^[0-9]*$/;
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{8,})");
    var weakRegex = new RegExp("^(((?=.*[a-z]))|((?=.*[0-9]))|((?=.*[A-Z])))(?=.{8,})");
    if ($password.length == 0) {

        //replace all classes with only error
        document.getElementById("myPasswordStrength").className = "col-6 error-pass-reg";

        var msg = "Please enter a password! Password is a required field";
        $(".error-pass-reg").html(msg);
        document.getElementById("myPassword-reg").classList.remove('successRegField');
    }
    else if ( strongRegex.test($password) || $password.length > 15){
        document.getElementById("myPassword-reg").classList.add('successRegField');

        //replace all classes with success and strong
        document.getElementById("myPasswordStrength").className = "col-6 successRegField strongPass";

        var msg = "Strong";
        $(".strongPass").html(msg);
    }
    else if ( mediumRegex.test($password) || $password.length > 10) {
        document.getElementById("myPassword-reg").classList.add('successRegField');

        //replace all classes with success and medium
        document.getElementById("myPasswordStrength").className = "col-6 successRegField mediumPass";

        var msg = "Medium";
        $(".mediumPass").html(msg);
    }
    else if ( weakRegex.test($password)) {
        document.getElementById("myPassword-reg").classList.add('successRegField');

        //replace all classes with success and weak
        document.getElementById("myPasswordStrength").className = "col-6 successRegField weakPass";

        var msg = "Weak";
        $(".weakPass").html(msg);
    }
    else{ //write error message

        //replace all classes with only error
        document.getElementById("myPasswordStrength").className = "col-6 error-pass-reg";

        var msg = "Invalid Password!";
        $(".error-pass-reg").html(msg);
        document.getElementById("myPassword-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valPassConf() {
    var $passConf = $("#myPasswordConfirm-reg").val();
    var $pass = $("#myPassword-reg").val();
    if ( $passConf.length == 0) {
        var msg = "This field is required!";
        $(".error-conf-pass-reg").html(msg);
        document.getElementById("myPasswordConfirm-reg").classList.remove('successRegField');
    }
    else if( $passConf == $pass ){
        document.getElementById("myPasswordConfirm-reg").classList.add('successRegField');
        var msg = "";
        $(".error-conf-pass-reg").html(msg);
    }
    else{ //write error message
        var msg = "Passwords don't match!";
        $(".error-conf-pass-reg").html(msg);
        document.getElementById("myPasswordConfirm-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valFirstName() {
    var $firstName = $("#myFirstName-reg").val();
    re =/^[α-ωάέήίόύώ ,.'-]|[a-z ,.'-]+$/i;
    if ($firstName.length == 0) {
        var msg = "Please insert a first name! First name is a required field!";
        $(".error-first-name-reg").html(msg);
        document.getElementById("myFirstName-reg").classList.remove('successRegField');
    }
    else if( re.test($firstName) ){
        document.getElementById("myFirstName-reg").classList.add('successRegField');
        var msg = "";
        $(".error-first-name-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid first name";
        $(".error-first-name-reg").html(msg);
        document.getElementById("myFirstName-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valLastName() {
    var $lastName = $("#myLastName-reg").val();
    re =/^[α-ωάέήίόύώ ,.'-]|[a-z ,.'-]+$/i;
    // re =/^[a-z ,.'-]+$/i;
    if ($lastName.length == 0) {
        var msg = "Please insert a last name! Last name is a required field";
        $(".error-last-name-reg").html(msg);
        document.getElementById("myLastName-reg").classList.remove('successRegField');
    }
    else if ( re.test($lastName)) {
        document.getElementById("myLastName-reg").classList.add('successRegField');
        var msg = "";
        $(".error-last-name-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid last name";
        $(".error-last-name-reg").html(msg);
        document.getElementById("myLastName-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valBirthDate() {
    var $date = $("#myBirthDate-reg").val();
    if( $date == 10 ){
        document.getElementById("myBirthDate-reg").classList.add('successRegField');
        var msg = "";
        $(".error-date-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid date of birth";
        $(".error-date-reg").html(msg);
        document.getElementById("myBirthDate-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valIdNumber() {
    var $id = $("#myIdNumber-reg").val();
    re = /^Α[Α-Ω]?[0-9]*$/;
    if ($id.length == 0) {
        var msg = "Please insert an ID number! ID number is a required field";
        $(".error-id-reg").html(msg);
        document.getElementById("myIdNumber-reg").classList.remove('successRegField');
    }
    else if( $id.length == 9 && re.test($id)){
        document.getElementById("myIdNumber-reg").classList.add('successRegField');
        var msg = "";
        $(".error-id-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invlaid ID number";
        $(".error-id-reg").html(msg);
        document.getElementById("myIdNumber-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valTaxNumber() {
    var $tax = $("#myTaxNumber-reg").val();
    re = /^[0-9]*$/;
    if ($tax.length == 0) {
        var msg = "Please insert a tax number! Tax number is a required field";
        $(".error-tax-reg").html(msg);
        document.getElementById("myTaxNumber-reg").classList.remove('successRegField');
    }
    else if( $tax.length == 10 && re.test($tax)){
        document.getElementById("myTaxNumber-reg").classList.add('successRegField');
        var msg = "";
        $(".error-tax-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid tax number";
        $(".error-tax-reg").html(msg);
        document.getElementById("myTaxNumber-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valAmkaNumber() {
    var $amka = $("#myAmkaNumber-reg").val();
    re = /^[0-9]*$/;
    if ($amka.length == 0) {
        var msg = "Please insert an amka number! Amka number is a required field";
        $(".error-amka-reg").html(msg);
        document.getElementById("myAmkaNumber-reg").classList.remove('successRegField');
    }
    else if( $amka.length == 10 && re.test($amka)){
        document.getElementById("myAmkaNumber-reg").classList.add('successRegField');
        var msg = "";
        $(".error-amka-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid amka";
        $(".error-amka-reg").html(msg);
        document.getElementById("myAmkaNumber-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valPhoneNumber() {
    var $phone = $("#myPhoneNumber-reg").val();
    re = /^2[0-9]+|69[0-9]+$/;
    if ($phone.length == 0) {
        document.getElementById("myPhoneNumber-reg").classList.add('successRegField');
        var msg = "";
        $(".error-phone-reg").html(msg);
    }
    else if( $phone.length == 10 && re.test($phone)){
        document.getElementById("myPhoneNumber-reg").classList.add('successRegField');
        var msg = "";
        $(".error-phone-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid phone number";
        $(".error-phone-reg").html(msg);
        document.getElementById("myPhoneNumber-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valAddress() {
    var $address = $("#myAddress-reg").val();
    re = /^[Α-Ωα-ω]+ *$/;
    if ($address.length == 0) {
        document.getElementById("myAddress-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddress-reg").html(msg);
    }
    else if( re.test($address) ){
        document.getElementById("myAddress-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddress-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid address";
        $(".error-myAddress-reg").html(msg);
        document.getElementById("myAddress-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valAddressNumber() {
    var $addressNum = $("#myAddressNum-reg").val();
    re = /^[0-9]+$/;
    if ($addressNum.length == 0) {
        document.getElementById("myAddressNum-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddressΝum-reg").html(msg);
    }
    else if (re.test($addressNum)) {
        document.getElementById("myAddressNum-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddressΝum-reg").html(msg);
    } else {
        var msg = "Invalid";
        $(".error-myAddressΝum-reg").html(msg);
        document.getElementById("myAddressNum-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valMunicipality() {
    var $municipality = $("#myAddressDimos-reg").val();
    re = /^[Α-Ωα-ω]+ */;
    if ($municipality.length == 0) {
        document.getElementById("myAddressDimos-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddressDimos-reg").html(msg);
    }
    else if (re.test($municipality)) {
        document.getElementById("myAddressDimos-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddressDimos-reg").html(msg);
    } else {
        var msg = "Invalid Municipality";
        $(".error-myAddressDimos-reg").html(msg);
        document.getElementById("myAddressDimos-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valTK() {
    var $TK = $("#myAddressTK-reg").val();
    re = /^[0-9]+$/;
    if ($TK.length == 0) {
        document.getElementById("myAddressTK-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddressTK-reg").html(msg);
    }
    else if (re.test($TK) && $TK.length == 5) {
        document.getElementById("myAddressTK-reg").classList.add('successRegField');
        var msg = "";
        $(".error-myAddressTK-reg").html(msg);
    } else {
        var msg = "Invalid TK";
        $(".error-myAddressTK-reg").html(msg);
        document.getElementById("myAddressTK-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valUniv() {
    var $uni = $("#myUniv-reg").val();
    re = /^[Α-Ωα-ω]+ */;
    if ($uni.length == 0) {
        document.getElementById("myUniv-reg").classList.remove('successRegField');
        var msg = "This field is required!";
        $(".error-univ-reg").html(msg);
    }
    else if( re.test($uni) ){
        document.getElementById("myUniv-reg").classList.add('successRegField');
        var msg = "";
        $(".error-univ-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid university name";
        $(".error-univ-reg").html(msg);
        document.getElementById("myUniv-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valDep() {
    var $dep = $("#myDepart-reg").val();
    re = /^[Α-Ωα-ω]+ */;
    if ($dep.length == 0) {
        document.getElementById("myDepart-reg").classList.remove('successRegField');
        var msg = "This field is required!";
        $(".error-dep-reg").html(msg);
    }
    else if( re.test($dep) ){
        document.getElementById("myDepart-reg").classList.add('successRegField');
        var msg = "";
        $(".error-dep-reg").html(msg);
    }
    else{ //write error message
        var msg = "Invalid department name";
        $(".error-dep-reg").html(msg);
        document.getElementById("myDepart-reg").classList.remove('successRegField');
    }
    checkToEnable();
}

function valAm() {
    var $am = $("#myAm-reg").val();
    re = /^[0-9]*$/;
    if ($am.length == 0) {
        document.getElementById("myAm-reg").classList.remove('successRegField');
        var msg = "This field is required";
        $(".error-am-reg").html(msg);
    } else if ( re.test($am) && $am.length >= 8 && $am.length <= 14) {
        document.getElementById("myAm-reg").classList.add('successRegField');
        var msg = "";
        $(".error-am-reg").html(msg);
    }
    else {
        document.getElementById("myAm-reg").classList.remove('successRegField');
        var msg = "invalid AM";
        $(".error-am-reg").html(msg);
    }
    checkToEnable();
}

function checkToEnable() {

    //find which elements exist
    fields = [];

    var myEle = document.getElementById("myEmail-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myPassword-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myPasswordConfirm-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myFirstName-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myLastName-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myBirthDate-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myIdNumber-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myTaxNumber-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myAmkaNumber-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myPhoneNumber-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myAddress-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myUniv-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myDepart-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myAm-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myAddressNum-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myAddressDimos-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    myEle = document.getElementById("myAddressTK-reg");
    if(myEle){
        fields[fields.length] = myEle.classList.contains("successRegField");
    }

    for (var i = 0; i < fields.length; i++) {
        if( fields[i] == false ){
            break;
        }
    }

    if( i == fields.length && (document.getElementById("reg-checkbox").checked == true) ){ //all field are ok
        //enable button
        document.getElementById("submit-reg-button").disabled = false;
    }
    else{
        //disable button
        document.getElementById("submit-reg-button").disabled = true;
    }
}

$(document).on('change', '#reg-checkbox', function() {
    checkToEnable();
});

$(document).ready(function() {
    $('#myUniv-reg').select2({ width: '100%' });

    $('#myDepart-reg').select2({ width: '100%' });

    $('#home-page-search-select').select2({ width: '100%' });

    $('#home-page-search-select2').select2({ width: '100%' });

    $('#home-page-search-select3').select2({ width: '100%' });

    $('#home-page-search-select4').select2({ width: '100%' });

    $('#home-page-search-select5').select2({ width: '100%' });

    $('#home-page-search-select6').select2({ width: '100%' });
});

function myDepartmentOptionsDisplay(str) {

    $('#myDepart-reg').prop("disabled", false);

    document.getElementById("myUniv-reg").classList.add('successRegField');
    document.getElementById("myDepart-reg").classList.remove('successRegField');

    if (str == "") {
        document.getElementById("myDepart-reg").innerHTML += "";
        return;
    }
    else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("myDepart-reg").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getDepartments.php?q="+str,true);
        xmlhttp.send();
    }
    checkToEnable();
}

function myDepartmentChoose() {
    document.getElementById("myDepart-reg").classList.add('successRegField');
    checkToEnable();
}

function mySearchBookFind(){

    var $url = "./searchBooks.php";
    var $isFirst = '?';

    var $searchTerm = $("#mySearchBookTerm").val();
    if( $searchTerm != "" ){
        $url += $isFirst + "q=" + $searchTerm;
        $isFirst = '&';
    }

    var $univFilter = $("#myUniv-filter").val();
    if( $univFilter != "" ){
        $url += $isFirst + "u=" + $univFilter;
        $isFirst = '&';
    }

    var $depFilter = $("#myDep-filter").val();
    if( $depFilter != "" ){
        $url += $isFirst + "d=" + $depFilter;
        $isFirst = '&';
    }

    var $semFilter = $("#mySem-filter").val();
    if( $semFilter != "" ){
        $url += $isFirst + "s=" + $semFilter;
        $isFirst = '&';
    }

    var $subjFilter = $("#mySubj-filter").val();
    if( $subjFilter != "" ){
        $url += $isFirst + "su=" + $subjFilter;
        $isFirst = '&';
    }

    var $publFilter = $("#myPubl-filter").val();
    if( $publFilter != "" ){
        $url += $isFirst + "p=" + $publFilter;
        $isFirst = '&';
    }

    var $authorFilter = $("#myAuthor-filter").val();
    if( $authorFilter != "" ){
        $url += $isFirst + "a=" + $authorFilter;
        $isFirst = '&';
    }

    var $isbnFilter = $("#myIsbn-filter").val();
    if( $isbnFilter != "" ){
        $url += $isFirst + "i=" + $isbnFilter;
        $isFirst = '&';
    }

    var $yearFilter = $("#myYear-filter").val();
    if( $yearFilter != "" ){
        $url += $isFirst + "y=" + $yearFilter;
        $isFirst = '&';
    }

    window.location.replace($url);
}

function BookSearchFilterToggle(){
    $("#filterButtonContainer").toggleClass("openFilters");
    $("#myFiltersInput").toggleClass("myHiddenClass");
    if ( document.getElementById("filterButtonContainer").classList.contains('openFilters') ){
        //angle up
        document.getElementById("filterButtonIcon").classList.remove('fa-angle-down');
        document.getElementById("filterButtonIcon").classList.add('fa-angle-up');
    }
    else{
        //angle down
        document.getElementById("filterButtonIcon").classList.remove('fa-angle-up');
        document.getElementById("filterButtonIcon").classList.add('fa-angle-down');
    }
}

$(document).ready(function() {

    $(document).on("click", "#myEmail-edit-icon-content .fa.fa-pencil-alt", function (e) {

        var currentEmail = document.getElementById("myEmail-edit-content-value").value;
        document.getElementById("myEmail-edit-content").innerHTML =
        '<input id="myEmail-editable-content-value" type="text" name="email" value="'
         + currentEmail.trim() + '" id="myEmail-edit-profile" class="form-control" >';

        document.getElementById("myEmail-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#myEmail-edit-icon-content .fa.fa-check", function (e) {

        var newEmail = document.getElementById("myEmail-editable-content-value").value;

        document.getElementById("myEmail-edit-content").innerHTML =
        '<input id="myEmail-edit-content-value" type=text value="' +
         document.getElementById("myEmail-editable-content-value").value  + '" disabled/>';

        document.getElementById("myEmail-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newEmail=" + newEmail;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditΕmail();
                }
                else{
                    alert("Something went wrong!");
                }
            }
        });


    });

    $(document).on("click", "#myPassword-edit-icon-content .fa.fa-pencil-alt", function (e) {
        var currentPassword = document.getElementById("myPassword-edit-content-value").value;
        document.getElementById("myPassword-edit-content").innerHTML =
        `<div class="input-group" id="show_hide_password_edit">
          <input id="myPassword-editable-content-value" class="form-control" name="password" value="` + currentPassword.trim() + `" type="password"
          <div class="input-group-addon">
            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
          </div>
         </div>`;

        document.getElementById("myPassword-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#show_hide_password_edit a", function (event) {
        event.preventDefault();
        if($('#show_hide_password_edit input').attr("type") == "text"){
            $('#show_hide_password_edit input').attr('type', 'password');
            $('#show_hide_password_edit i').addClass( "fa-eye-slash" );
            $('#show_hide_password_edit i').removeClass( "fa-eye" );
        }else if($('#show_hide_password_edit input').attr("type") == "password"){
            $('#show_hide_password_edit input').attr('type', 'text');
            $('#show_hide_password_edit i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_edit i').addClass( "fa-eye" );
        }
    });

    $(document).on("click", "#myPassword-edit-icon-content .fa.fa-check", function (e) {

        var newPassword = document.getElementById("myPassword-editable-content-value").value;

        document.getElementById("myPassword-edit-content").innerHTML =
        '<input id="myPassword-edit-content-value" type=password value=' +
         document.getElementById("myPassword-editable-content-value").value  + '" disabled/>';

        document.getElementById("myPassword-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newPassword=" + newPassword;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditPassword();
                }else{
                    alert("Something went wrong!");
                }
            }
        });

    });

    $(document).on("click", "#myPhone-edit-icon-content .fa.fa-pencil-alt", function (e) {

        var currentEmail = document.getElementById("myPhone-edit-content-value").value;
        document.getElementById("myPhone-edit-content").innerHTML =
        '<input id="myPhone-editable-content-value" type="text" name="myPhone" value="'
         + currentEmail.trim() + '" id="myPhone-edit-profile" class="form-control" >';

        document.getElementById("myPhone-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#myPhone-edit-icon-content .fa.fa-check", function (e) {

        var newPhone = document.getElementById("myPhone-editable-content-value").value;

        document.getElementById("myPhone-edit-content").innerHTML =
        '<input id="myEmail-edit-content-value" type=text value="' +
         document.getElementById("myPhone-editable-content-value").value  + '" disabled/>';

        document.getElementById("myPhone-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newPhone=" + newPhone;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditPhone();
                }else{
                    alert("Something went wrong!");
                }
            }
        });


    });

    $(document).on("click", "#myAddress-edit-icon-content .fa.fa-pencil-alt", function (e) {

        var currentEmail = document.getElementById("myAddress-edit-content-value").value;
        document.getElementById("myAddress-edit-content").innerHTML =
        '<input id="myAddress-editable-content-value" type="text" name="myAddress" value="'
         + currentEmail.trim() + '" id="myAddress-edit-profile" class="form-control" >';

        document.getElementById("myAddress-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#myAddress-edit-icon-content .fa.fa-check", function (e) {

        var newAddress = document.getElementById("myAddress-editable-content-value").value;

        document.getElementById("myAddress-edit-content").innerHTML =
        '<input id="myEmail-edit-content-value" type=text value="' +
         document.getElementById("myAddress-editable-content-value").value  + '" disabled/>';

        document.getElementById("myAddress-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newAddress=" + newAddress;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditAddress();
                }else{
                    alert("Something went wrong!");
                }
            }
        });


    });

    $(document).on("click", "#myAddressNum-edit-icon-content .fa.fa-pencil-alt", function (e) {

        var currentEmail = document.getElementById("myAddressNum-edit-content-value").value;
        document.getElementById("myAddressNum-edit-content").innerHTML =
        '<input id="myAddressNum-editable-content-value" type="text" name="myAddressNum" value="'
         + currentEmail.trim() + '" id="myAddressNum-edit-profile" class="form-control" >';

        document.getElementById("myAddressNum-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#myAddressNum-edit-icon-content .fa.fa-check", function (e) {

        var newAddressNum = document.getElementById("myAddressNum-editable-content-value").value;

        document.getElementById("myAddressNum-edit-content").innerHTML =
        '<input id="myEmail-edit-content-value" type=text value="' +
         document.getElementById("myAddressNum-editable-content-value").value  + '" disabled/>';

        document.getElementById("myAddressNum-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newAddressNum=" + newAddressNum;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditAddress();
                }
                else{
                    alert("Something went wrong!");
                }
            }
        });


    });

    $(document).on("click", "#myDimos-edit-icon-content .fa.fa-pencil-alt", function (e) {

        var currentEmail = document.getElementById("myDimos-edit-content-value").value;
        document.getElementById("myDimos-edit-content").innerHTML =
        '<input id="myDimos-editable-content-value" type="text" name="myDimos" value="'
         + currentEmail.trim() + '" id="myDimos-edit-profile" class="form-control" >';

        document.getElementById("myDimos-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#myDimos-edit-icon-content .fa.fa-check", function (e) {

        var newDimos = document.getElementById("myDimos-editable-content-value").value;

        document.getElementById("myDimos-edit-content").innerHTML =
        '<input id="myEmail-edit-content-value" type=text value="' +
         document.getElementById("myDimos-editable-content-value").value  + '" disabled/>';

        document.getElementById("myDimos-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newDimos=" + newDimos;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditAddress();
                }
                else{
                    alert("Something went wrong!");
                }
            }
        });


    });

    $(document).on("click", "#myAddressTK-edit-icon-content .fa.fa-pencil-alt", function (e) {

        var currentEmail = document.getElementById("myAddressTK-edit-content-value").value;
        document.getElementById("myAddressTK-edit-content").innerHTML =
        '<input id="myAddressTK-editable-content-value" type="text" name="myAddressTK" value="'
         + currentEmail.trim() + '" id="myAddressTK-edit-profile" class="form-control" >';

        document.getElementById("myAddressTK-edit-icon-content").innerHTML =
        '<i class="fa fa-check" aria-hidden="true"></i>';
    });

    $(document).on("click", "#myAddressTK-edit-icon-content .fa.fa-check", function (e) {

        var newPostalCode = document.getElementById("myAddressTK-editable-content-value").value;

        document.getElementById("myAddressTK-edit-content").innerHTML =
        '<input id="myEmail-edit-content-value" type=text value="' +
         document.getElementById("myAddressTK-editable-content-value").value  + '" disabled/>';

        document.getElementById("myAddressTK-edit-icon-content").innerHTML =
        '<i class="fa fa-pencil-alt" aria-hidden="true"></i>';

        var urlToUpdate = "updateProfile.php?&newPostalCode=" + newPostalCode;

        $.ajax({
            url:urlToUpdate,
            type:'post',
            success:function(response){
                console.log(response);
                if(response == 1){
                    successEditAddress();
                }
                else{
                    alert("Something went wrong!");
                }
            }
        });


    });

});



$(document).ready(function(){
    $('#mySearchBookTerm').keypress(function(e){
      if(e.keyCode==13){
          mySearchBookFind();
      }
    });

    $(document).on("keyup", "#myUniv-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#myPubl-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#myDep-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#myAuthor-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#mySem-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#myIsbn-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#mySubj-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

    $(document).on("keyup", "#myYear-filter", function (e) {
        if(e.keyCode==13){
            mySearchBookFind();
        }
    });

});

function loginPopup(){
    $('#loginModal').modal();
}

function logoutPopup(){
    $('#logoutModal').modal();
}

function successEditΕmail(){
    $('#successEdit-email').modal();
}

function successEditPassword(){
    $('#successEdit-password').modal();
}

function successEditPhone(){
    $('#successEdit-phone').modal();
}

function successEditAddress(){
    $('#successEdit-address').modal();
}

$(document).ready(function(){

    $(document).on("keyup", "#login-password", function (e) {
        if(e.keyCode==13){
            document.getElementById("login-submit-button").click();
        }
    });

    $(document).on("keyup", "#login-email", function (e) {
        if(e.keyCode==13){
            document.getElementById("login-submit-button").click();
        }
    });

    $(document).on("click", "#user-options-whole-area-icon", function (e) {

        if ( document.getElementById("user-options-icon").classList.contains('fa-angle-down') ){
            //angle up
            document.getElementById("user-options-icon").classList.remove('fa-angle-down');
            document.getElementById("user-options-icon").classList.add('fa-angle-up');
        }
        else{
            //angle down
            document.getElementById("user-options-icon").classList.remove('fa-angle-up');
            document.getElementById("user-options-icon").classList.add('fa-angle-down');
        }

    });

});

$(function() {
    $("#mySearchBookTerm").autocomplete({
        source: "search.php",
    });
});

$(function() {
    $("#mySearchBookTerm").autocomplete({
        source: "autoCompleteSearchBook.php",
        select: function( event, ui ) {
            event.preventDefault();
            $("#mySearchBookTerm").val(ui.item.id);
        }
    });
});

$(document).ready(function(){
    $(document).on("click", "#more-button-pagination-id", function (e) {

        var $currentPage = document.getElementById('paginationCurrentPage').innerHTML;
        var $pageLimit = document.getElementById('paginationPageLimit').innerHTML;
        var $totalPages = document.getElementById('paginationTotalPages').innerHTML;

        var urlPagination = "./paginationExecute.php" + window.location.search;

        urlPagination += "&currentPage=" + $currentPage +
        '&totalPages=' + $totalPages + "&pageLimit=" + $pageLimit ;

        $.ajax({
            url:urlPagination,
            type:'post',
            beforeSend: function() {
                document.getElementById("overlay").style.display = "block";
            },
            complete: function(){
                document.getElementById("overlay").style.display = "none";
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("error");
            },
            success: function(response) {
                for(var i = 0; i < response.totalNum; i += 1){
                    document.getElementById('searchResults-pagination-container-id').innerHTML +=
                    `<div class="mySearchBookOneResult">
                        <div class="book-image">
                            <img src="./150.png" alt="Image Placeholder">
                        </div>
                        <div class="book-title">` + response.entriesArray[i].Name +
                        `</div>
                        <div class="book-authors">` + response.entriesArray[i].Author +
                        `</div>
                        <div class="book-publisher">
                            Εκδόσεις: ` + response.entriesArray[i].Publisher +
                        `</div>
                        <div class="book-isbn">
                            ISBN: ` + response.entriesArray[i].ISBN +
                        `</div>
                        <div class="book-comments">
                            <a href="#">Σχόλια(5)</a>
                        </div>
                        <div class="book-page">
                            <a href="./under_construction.php"> Σελίδα του Βιβλίου <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>`;
                }


            }
        });

        if( $currentPage == $totalPages ){ //hide more button
            var x = document.getElementById("more-button-pagination-div-id");
            x.style.display = "none";
        }
        else{ //do currentPage ++
            document.getElementById('paginationCurrentPage').innerHTML = parseInt($currentPage) + 1;
        }

    });
});

function myDepartmentOptionsDisplayHomePage(str) {

    $('#myDepart-reg').prop("disabled", false);

    if (str == "") {
        document.getElementById("myDepart-reg").innerHTML += "";
        return;
    }
    else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("myDepart-reg").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getDepartments.php?q="+str,true);
        xmlhttp.send();
    }

}

function homePageSearchSelect(str) {

    if (str == "book") {
        enableBook();
        disableStore();
        //disablePublisher();
    }
    else if (str == "store"){
        enableStore();
        disableBook();
        //disablePublisher();
    }
    else if (str == "publisher"){
        // enablePublisher();
        disableBook();
        disableStore();
    }

    var element = document.getElementById("home-page-search-select-arrow");
    element.classList.add("fa-angle-down");
    element.classList.remove("fa-angle-up");

}

function enableBook() {
    $('#myFiltersInputBook').prop("hidden", false);
}

function enableStore() {
    $('#myFiltersInputStore').prop("hidden", false);
}

function enablePublisher() {
    $('#myFiltersInputPublisher').prop("hidden", false);
}

function disableStore() {
    $('#myFiltersInputStore').prop("hidden", true);
}

function disablePublisher() {
    $('#myFiltersInputPublisher').prop("hidden", true);
}

function disableBook() {
    $('#myFiltersInputBook').prop("hidden", true);
}

$(document).ready(function(){

    if ($(".home-page-search .inner-form").length){
        $('.home-page-search .inner-form b[role="presentation"]').hide();
        $('.home-page-search .inner-form .select2-selection__arrow').append('<i id="home-page-search-select-arrow" class="fa fa-angle-down"></i>');
    }



    $(document).on("click", ".home-page-search .inner-form .select2-container--focus", function () {
        var element = document.getElementById("home-page-search-select-arrow");
        element.classList.add("fa-angle-down");
        element.classList.remove("fa-angle-up");

        // alert("HA");
    });

    $(document).on("click", ".home-page-search .inner-form .select2-container--open", function () {
        var element = document.getElementById("home-page-search-select-arrow");
        element.classList.remove("fa-angle-down");
        element.classList.add("fa-angle-up");
        // alert("HO");
    });

    $('#home-page-search-select').on('select2-open', function() {
        $('.select2-results .info').on('mouseup', function(e) {
            alert("LOLOLO");
        });
    });

    // $(document).on("click", ".home-page-search .inner-form .select2-results__option", function () {
    //     var element = document.getElementById("home-page-search-select-arrow");
    //     element.classList.remove("fa-angle-down");
    //     element.classList.add("fa-angle-up");
    //     // alert("HO");
    // });



});
