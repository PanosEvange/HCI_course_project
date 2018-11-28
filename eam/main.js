$(document).ready(function(){
    $('[data-toggle="popover"]').popover({html:true});
});

$(function(){
    $('#login').popover({
        placement: 'bottom',
        title: '',
        html:true,
        content:  $('#myForm').html()
    }).on('click', function(){
      // had to put it within the on click action so it grabs the correct info on submit
      $('.btn-primary').click(function(){
       //$('#result').after("form submitted by " + $('#email').val())
        $.post('/echo/html/',  {
            email: $('#email').val(),
            password: $('#password').val()
        }, function(r){
          $('#pops').popover('hide')
        //   $('#result').html('response from server could be here' )
        })
      })
  })
})

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


$(document).ready(function() {
    $("#show_hide_password_login a").on('click', function(event) {
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
});
