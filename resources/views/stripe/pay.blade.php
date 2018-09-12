<html>
<head></head>
<body>
<form action="{{url('process')}}" method="POST">
    @csrf()
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_fHzJVW9xkeyLI2ViQhsvxMUX"
    data-amount="1000"
    data-name="Stripe.com"
    data-description="Example charge"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-zip-code="false">
  </script>
</form>
</body>
</html>