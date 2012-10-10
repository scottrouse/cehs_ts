jQuery(document).ready(function($){
  $('#edit-field-r01-und-0-value,#edit-field-a01-und-0-value,#edit-field-s01-und-0-value,#edit-field-t01-und-0-value').change(function() {
    var r = Number($('#edit-field-r01-und-0-value').val());
    var a = Number($('#edit-field-a01-und-0-value').val());
    var s = Number($('#edit-field-s01-und-0-value').val());
    $('#edit-field-t01-und-0-value').val(r+a+s);
    /* @todo - How do I handle NaN values? */
  });
  $('#edit-field-r02-und-0-value,#edit-field-a02-und-0-value,#edit-field-s02-und-0-value,#edit-field-t02-und-0-value').change(function() {
    var r = Number($('#edit-field-r02-und-0-value').val());
    var a = Number($('#edit-field-a02-und-0-value').val());
    var s = Number($('#edit-field-s02-und-0-value').val());
    $('#edit-field-t02-und-0-value').val(r+a+s);
  });
  $('#edit-field-r03-und-0-value,#edit-field-a03-und-0-value,#edit-field-s03-und-0-value,#edit-field-t03-und-0-value').change(function() {
    var r = Number($('#edit-field-r03-und-0-value').val());
    var a = Number($('#edit-field-a03-und-0-value').val());
    var s = Number($('#edit-field-s03-und-0-value').val());
    $('#edit-field-t03-und-0-value').val(r+a+s);
  });
  $('#edit-field-r04-und-0-value,#edit-field-a04-und-0-value,#edit-field-s04-und-0-value,#edit-field-t04-und-0-value').change(function() {
    var r = Number($('#edit-field-r04-und-0-value').val());
    var a = Number($('#edit-field-a04-und-0-value').val());
    var s = Number($('#edit-field-s04-und-0-value').val());
    $('#edit-field-t04-und-0-value').val(r+a+s);
  });
  $('#edit-field-r05-und-0-value,#edit-field-a05-und-0-value,#edit-field-s05-und-0-value,#edit-field-t05-und-0-value').change(function() {
    var r = Number($('#edit-field-r05-und-0-value').val());
    var a = Number($('#edit-field-a05-und-0-value').val());
    var s = Number($('#edit-field-s05-und-0-value').val());
    $('#edit-field-t05-und-0-value').val(r+a+s);
  });
  $('#edit-field-r06-und-0-value,#edit-field-a06-und-0-value,#edit-field-s06-und-0-value,#edit-field-t06-und-0-value').change(function() {
    var r = Number($('#edit-field-r06-und-0-value').val());
    var a = Number($('#edit-field-a06-und-0-value').val());
    var s = Number($('#edit-field-s06-und-0-value').val());
    $('#edit-field-t06-und-0-value').val(r+a+s);
  });
  $('#edit-field-r07-und-0-value,#edit-field-a07-und-0-value,#edit-field-s07-und-0-value,#edit-field-t07-und-0-value').change(function() {
    var r = Number($('#edit-field-r07-und-0-value').val());
    var a = Number($('#edit-field-a07-und-0-value').val());
    var s = Number($('#edit-field-s07-und-0-value').val());
    $('#edit-field-t07-und-0-value').val(r+a+s);
  });
  /* @todo - BRAD - Copy the 6 lines above (from $('#edit-field... to the }); right above this comment). Paste and change the
  relevant parts through field 31. */
  
  var $day01 = $('#day01').text();
  var $day02 = $('#day02').text();
  /* @todo - BRAD - copy the variable above and paste to make through $day31. */
  
  $('#ts-biweekly-node-form').validate({
    errorLabelContainer: '#errorMessages',
    wrapper: 'li',
    rules: {
      "field_r01[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_a01[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_s01[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_t01[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_r02[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_a02[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_s02[und][0][value]": {
        number: true,
        range: [0,8]
      },
      "field_t02[und][0][value]": {
        number: true,
        range: [0,8]
      },
    },
    messages: {
      "field_r01[und][0][value]": "You may only record between {0} and {1} <em>Regular</em> hours on <em>"+ $day01 +"</em>.",
      "field_a01[und][0][value]": "You may only record between {0} and {1} <em>Annual Leave</em> hours on <em>"+ $day01 +"</em>.",
      "field_s01[und][0][value]": "You may only record between {0} and {1} <em>Sick Leave</em> hours on <em>"+ $day01 +"</em>.",
      "field_t01[und][0][value]": "Your Total Hours may not exceed {1} on <em>"+ $day01 +"</em>.",
      "field_r02[und][0][value]": "You may only record between {0} and {1} <em>Regular</em> hours on <em>"+ $day02 +"</em>.",
      "field_a02[und][0][value]": "You may only record between {0} and {1} <em>Annual Leave</em> hours on <em>"+ $day02 +"</em>.",
      "field_s02[und][0][value]": "You may only record between {0} and {1} <em>Sick Leave</em> hours on <em>"+ $day02 +"</em>.",
      "field_t02[und][0][value]": "Your Total Hours may not exceed {1} on <em>"+ $day02 +"</em>.",
      /* @todo - BRAD - copy the four lines above this comment (starting with "field_r02...). Paste them here
      (above this comment is fine) and change the field name (field_r02, field_a02, field_s02, etc) to field_r03, field_a03, etc
      and change the $day02 variable to $day03. Repeat through all 31 fields. */
    }
  });
  
});