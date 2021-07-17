<!DOCTYPE html>
<html>
  <head>
    {{-- TODO: Cambiare il titolo --}}
    <title>Ciao</title>
    <link rel='stylesheet' href='/stylesheets/style.css' />
    <!-- includes jQuery -->
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="checkout-message"></div>
    <div class="form">
        {{-- Form con metodo post che invia alla route di checkout --}}
        <form id="payment-form" action="{{ route('checkout') }}" method="post">
        @csrf
        
            <label for="amount">Price</label>
            {{-- Qui come value lo passerò preimpostato dal backend --}}
            <input type="text" id="amount" name="amount">
            {{-- Il nonce viene generato da Braintree, non va pubblico, per cui lo metto hidden --}}
            <input id="nonce" name="payment_method_nonce" type="hidden" />
            <div id="dropin-wrapper">
            <div id="bt-dropin"></div>
            </div>
        <input type="submit" id="submit-button" value="Submit payment">
        </form>

</div>
<!-- includes the Braintree JS client SDK -->
<script src="https://js.braintreegateway.com/web/dropin/1.31.0/js/dropin.min.js"></script>
<script>

// Le variabili che vanno a prendere il form e richiamare il clientToken
var form = document.querySelector('#payment-form');
var client_token = "<?php echo($clientToken) ?>";

braintree.dropin.create({
  authorization: client_token,
  selector: '#bt-dropin',
  paypal: {
    flow: 'vault'
  }
}, function (createErr, instance) {
  if (createErr) {
    console.log('Create Error', createErr);
    return;
  }
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    instance.requestPaymentMethod(function (err, payload) {
      if (err) {
        console.log('Request Payment Method Error', err);
        return;
      }

      // Add the nonce to the form and submit
      document.querySelector('#nonce').value = payload.nonce;
      form.submit();
    });
  });
});
</script>

  </body>
</html>