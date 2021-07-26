    @extends('layouts.app')

    @section('title')
        - pagamento
    @endsection

    {{-- @section('styles')
        <!-- Additional Styles -->
        <style>
            body {
                margin: 24px 0;
            }
            .spacer {
                margin-bottom: 24px;
            }
            #card-number, #cvv, #expiration-date {
                background: white;
                height: 38px;
                border: 1px solid #CED4DA;
                padding: .375rem .75rem;
                border-radius: .25rem;
            }
        </style>
    @endsection --}}
 
    @section('braintree-content')
        <div class="braintree-form-container">
            <div class="container-fluid">
                <h1>Pagamento</h1>
                <div class="spacer"></div>
 
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif
 
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
 
                {{-- Payment Form --}}
                <form action="{{ route('admin.braintree-checkout') }}" method="POST" id="payment-form">
                    @csrf
                    @method('POST')

                    {{-- Hidden Sponsorship ID and Apartment ID --}}
                    <input type="hidden" id="sponsorshipId" name="sponsorshipId" value="{{ $sponsorship->id }}">
                    <input type="hidden" id="thisApartmentId" name="thisApartmentId" value="{{ $thisApartmentId }}">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{$email}}" name="email" required>
                    </div>
 
                    <div class="form-group">
                        <label for="name_on_card">Nome sulla carta</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" required>
                    </div>
 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Indirizzo</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="city">Città</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="province">Provincia</label>
                                <input type="text" class="form-control" id="province" name="province" required>
                            </div>
                        </div>
 
                    </div>
 
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="postalcode">Codice postale</label>
                                <input type="text" class="form-control" id="postalcode" name="postalcode" required>
                            </div>
                        </div>
 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country">Paese</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>
                        </div>
 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Telefono</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
 
                    </div>
 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="amount">Prezzo</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="{{$sponsorship->price}}" readonly>
                            </div>
                        </div>
                    </div>
 
                    {{-- <div class="row">
                        <div class="hidden">
                            <div class="form-group">
                                <label for="cc_number">Credit Card Number</label>
                                <input type="text" class="form-control" id="cc_number" name="cc_number">
                            </div>
                        </div>
 
                        <div class="hidden">
                            <div class="form-group">
                                <label for="expiry">Expiry</label>
                                <input type="text" class="form-control" id="expiry" name="expiry">
                            </div>
                        </div>
 
                        <div class="hidden">
                            <div class="form-group">
                                <label for="cvc">CVV</label>
                                <input type="text" class="form-control" id="cvc" name="cvc">
                            </div>
                        </div>
 
                    </div> --}}
 
                    <div class="row">
                        <div class="col-md-6">
                            <label for="cc_number">Numero carta di credito</label>
 
                            <div class="form-group" id="card-number">
 
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <label for="expiry">Scadenza</label>
 
                            <div class="form-group" id="expiration-date">
 
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <label for="cvv">CVC</label>
 
                            <div class="form-group" id="cvv">
 
                            </div>
                        </div>
 
                    </div>
 
                    <div class="spacer"></div>
 
                    <div id="paypal-button"></div>
 
                    <div class="spacer"></div>
 
                    <input id="nonce" name="payment_method_nonce" type="hidden" />
                    <button type="submit" class="btn btn-success">Invia pagamento</button>
                </form>
                {{-- End Payment Form --}}
            </div>
        </div>        
    @endsection

    @section('footer-scripts')
    <script src="https://js.braintreegateway.com/web/3.38.1/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.38.1/js/hosted-fields.min.js"></script>
 
    <!-- Load PayPal's checkout.js Library -->
    <script src="https://www.paypalobjects.com/api/checkout.js" data-version-4 log-level="warn"></script>
 
    <!-- Load the PayPal Checkout component -->
    <script src="https://js.braintreegateway.com/web/3.38.1/js/paypal-checkout.min.js"></script>
 
    <!-- Hosted Js Script -->
    <script>
        var form = document.querySelector('#payment-form');
        var submit = document.querySelector('input[type="submit"]');
        
        braintree.client.create({
            authorization: '{{ $token }}'
        }, function (clientErr, clientInstance) {
            if (clientErr) {
                console.error(clientErr);
                return;
            }
            // This example shows Hosted Fields, but you can also use this
            // client instance to create additional components here, such as
            // PayPal or Data Collector.
            braintree.hostedFields.create({
                client: clientInstance,
                styles: {
                    'input': {
                        'font-size': '14px'
                    },
                    'input.invalid': {
                        'color': 'red'
                    },
                    'input.valid': {
                        'color': 'green'
                    }
                },
                fields: {
                    number: {
                        selector: '#card-number',
                        placeholder: '4111 1111 1111 1111',
                        name: 'cc_number'
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123',
                        name: 'cvc'
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: '10/2025',
                        name: 'expiry'
                    }
                }
            }, function (hostedFieldsErr, hostedFieldsInstance) {
                if (hostedFieldsErr) {
                    console.error(hostedFieldsErr);
                    return;
                }
                // submit.removeAttribute('disabled');
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    hostedFieldsInstance.tokenize(function (tokenizeErr, payload) {
                        if (tokenizeErr) {
                            console.error(tokenizeErr);
                            return;
                        }
                        // If this was a real integration, this is where you would
                        // send the nonce to your server.
                        // console.log('Got a nonce: ' + payload.nonce);
                        document.querySelector('#nonce').value = payload.nonce;
                        form.submit();
                    });
                }, false);
            });
            // Create a PayPal Checkout component.
            braintree.paypalCheckout.create({
                client: clientInstance
            }, function (paypalCheckoutErr, paypalCheckoutInstance) {
                // Stop if there was a problem creating PayPal Checkout.
                // This could happen if there was a network error or if it's incorrectly
                // configured.
                if (paypalCheckoutErr) {
                    console.error('Error creating PayPal Checkout:', paypalCheckoutErr);
                    return;
                }
                // Set up PayPal with the checkout.js library
                paypal.Button.render({
                    env: 'sandbox', // or 'production'
                    commit: true,
                    payment: function () {
                        return paypalCheckoutInstance.createPayment({
                            // Your PayPal options here. For available options, see
                            // http://braintree.github.io/braintree-web/current/PayPalCheckout.html#createPayment
                            flow: 'checkout', // Required
                            amount: document.getElementById('amount').value, // Required
                            currency: 'EUR', // Required
                        });
                    },
                    onAuthorize: function (data, actions) {
                        return paypalCheckoutInstance.tokenizePayment(data, function (err, payload) {
                            // Submit `payload.nonce` to your server.
                            document.querySelector('#nonce').value = payload.nonce;
                            form.submit();
                        });
                    },
                    onCancel: function (data) {
                        console.log('checkout.js payment cancelled', JSON.stringify(data, 0, 2));
                    },
                    onError: function (err) {
                        console.error('checkout.js error', err);
                    }
                }, '#paypal-button').then(function () {
                    // The PayPal button will be rendered in an html element with the id
                    // `paypal-button`. This function will be called when the PayPal button
                    // is set up and ready to be used.
                });
            });
        });
    </script>
    @endsection