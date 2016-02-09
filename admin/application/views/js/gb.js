$(window).ready(
  function (){
    var URL = 'http://wsz.grabondeals.com/';
    $('.editor').wysihtml5();
    $('.action').tooltip(); 

    $('#pagelink').on('change', function( ){
      $('#link').val ($('#pagelink').val() );
    })

    $('#products a:first').tab('show');

    
var greenfield = $('#greenfield');
var brownfield = $('#brownfield');
$('#dealtype').on('change', function(){
    var t = $(this);
    var tv = t.val();
        if (tv == 1){
          greenfield.show();
          brownfield.hide();
        }else if (tv == 2){
          brownfield.show();
          greenfield.hide();
        }else if (tv == 3){
          brownfield.show();
          greenfield.show();
        }
  })
  });