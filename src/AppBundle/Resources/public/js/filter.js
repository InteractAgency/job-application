$(document).ready(function() {
  $('#taxRates').change(function() {
    var toggle = $("#taxRates option:selected").data('toggle');
    if ('price-with-vat' === toggle) {
      $('.price-with-vat').show();
    } else {
      $('.price-with-vat.' + toggle).show();
      $('.price-with-vat').not('.' + toggle).hide();
    }
  });
});
