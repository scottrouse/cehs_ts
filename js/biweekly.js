jQuery(document).ready(function($){
  $('#edit-field-r02-und-0-value').change(function() {
    var r02 = Number($('#edit-field-r02-und-0-value').val());
    var a02 = Number($('#edit-field-a02-und-0-value').val());
    var s02 = Number($('#edit-field-s02-und-0-value').val());
    $('#edit-field-t02-und-0-value').val(r02+a02+s02);
    /* How do I handle NaN values? */
  });
});