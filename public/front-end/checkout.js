Stripe.setPublishableKey('pk_test_fHzJVW9xkeyLI2ViQhsvxMUX');


var $form = $('#checkout-form');

$form.submit(function(event){
     $form.find('button').prop('disabled', true);
    $('#charge-error').addClass('hidden'),
    
    Stripe.card.createToken($form, {
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val(),
        
}, stripeResponseHandler);
return false;

});

function stripeResponseHandler(status, response) {

  if (response.error) { 
      $('#charge-error').removeClass('hidden'),
    $form.find('#charge-error').text(response.error.message);
    $form.find('button').prop('disabled', false); // Re-enable submission
  } else {
    var token = response.id;
    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
    $form.get(0).submit();

  }
}
