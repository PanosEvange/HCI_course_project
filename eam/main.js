$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
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
