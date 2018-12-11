$(function() {

    $('.fa.fa-calendar').daterangepicker({
        locale: {format: 'DD/MM/YYYY'},
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1951,
        maxYear: 2000,
        autoUpdateInput: false
    }, function(chosen_date) {
      $('input[name="date"]').val(chosen_date.format('DD/MM/YYYY'));
    });


});
