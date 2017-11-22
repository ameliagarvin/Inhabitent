(function ($) {
 
$( "#search-submit" ).on('click', function(e) {
  e.preventDefault();

  $( "#search-field" ).toggle().focus();

  $(document).keypress(function(){
      if(event.which == 13){
       
          if($("#search-field").val() != ''){
            $( ".search-form" ).submit();
          }
        
      }
  });

});

$( "#search-field" ).on('blur', function(){
  $( "#search-field" ).toggle();
});

// add toggle function
})(jQuery);

// $( "#search-field" ).show( 2000 )
  // $( "#search-field" ).hide();

//   $( "#search-submit" ).click(function(event) {
//     event.preventDefault();
//     $( "#search-field" ).focus();
//     $( "#search-field" ).blur();
// });