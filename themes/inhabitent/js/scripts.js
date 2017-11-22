(function ($) {
 
  $( "#search-field" ).hide();

  $( "#search-submit" ).click(function(event) {
    event.preventDefault();
    $( "#search-field" ).focus();
    $( "#search-field" ).show( 2000 );
    $( "#target" ).blur();
});


})(jQuery);

