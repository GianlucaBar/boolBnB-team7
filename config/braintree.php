<?php
    return [
        // Faccio echo dall'env per non mostrare pubblicamente le mie credenziali
        'environment' => env('BRAINTREE_ENV'),
        'merchantId'=> env('BRAINTREE_MERCHANT_ID'),
        'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
        'privateKey' => env('BRAINTREE_PRIVATE_KEY')
    ];