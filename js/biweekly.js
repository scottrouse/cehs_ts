jQuery(document).ready(function($){
  $('#edit-field-r01-und-0-value,#edit-field-a01-und-0-value,#edit-field-s01-und-0-value').change(function() {
    var r = Number($('#edit-field-r01-und-0-value').val());
    var a = Number($('#edit-field-a01-und-0-value').val());
    var s = Number($('#edit-field-s01-und-0-value').val());
    $('#edit-field-t01-und-0-value').val(r+a+s);
    /* @todo - How do I handle NaN values? */
  });
  $('#edit-field-r02-und-0-value,#edit-field-a02-und-0-value,#edit-field-s02-und-0-value').change(function() {
    var r = Number($('#edit-field-r02-und-0-value').val());
    var a = Number($('#edit-field-a02-und-0-value').val());
    var s = Number($('#edit-field-s02-und-0-value').val());
    $('#edit-field-t02-und-0-value').val(r+a+s);
  });
  $('#edit-field-r03-und-0-value,#edit-field-a03-und-0-value,#edit-field-s03-und-0-value').change(function() {
    var r = Number($('#edit-field-r03-und-0-value').val());
    var a = Number($('#edit-field-a03-und-0-value').val());
    var s = Number($('#edit-field-s03-und-0-value').val());
    $('#edit-field-t03-und-0-value').val(r+a+s);
  });
  $('#edit-field-r04-und-0-value,#edit-field-a04-und-0-value,#edit-field-s04-und-0-value').change(function() {
    var r = Number($('#edit-field-r04-und-0-value').val());
    var a = Number($('#edit-field-a04-und-0-value').val());
    var s = Number($('#edit-field-s04-und-0-value').val());
    $('#edit-field-t04-und-0-value').val(r+a+s);
  });
  $('#edit-field-r05-und-0-value,#edit-field-a05-und-0-value,#edit-field-s05-und-0-value').change(function() {
    var r = Number($('#edit-field-r05-und-0-value').val());
    var a = Number($('#edit-field-a05-und-0-value').val());
    var s = Number($('#edit-field-s05-und-0-value').val());
    $('#edit-field-t05-und-0-value').val(r+a+s);
  });
  $('#edit-field-r06-und-0-value,#edit-field-a06-und-0-value,#edit-field-s06-und-0-value').change(function() {
    var r = Number($('#edit-field-r06-und-0-value').val());
    var a = Number($('#edit-field-a06-und-0-value').val());
    var s = Number($('#edit-field-s06-und-0-value').val());
    $('#edit-field-t06-und-0-value').val(r+a+s);
  });
  $('#edit-field-r07-und-0-value,#edit-field-a07-und-0-value,#edit-field-s07-und-0-value').change(function() {
    var r = Number($('#edit-field-r07-und-0-value').val());
    var a = Number($('#edit-field-a07-und-0-value').val());
    var s = Number($('#edit-field-s07-und-0-value').val());
    $('#edit-field-t07-und-0-value').val(r+a+s);
  });
});