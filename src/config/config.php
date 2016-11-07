<?php
return [

    //app id
    'appId' => '2016xxxxxxxxxxxx',

    //private key path
    'rsaPrivateKeyFilePath' => storage_path('app/alipay/rsa_private_key.pem'),

    //gateway
    'gatewayUrl' => 'https://openapi.alipay.com/gateway.do',

    //return data format
    'format' => 'json',

    //api version
    'apiVersion' => '1.0',

    'postCharset' => "utf-8",

    'alipayPublicKey' => storage_path('app/alipay/rsa_public_key.pem'),

    'debugInfo' => false,

    'fileCharset' => "utf-8",

    'RESPONSE_SUFFIX' => "_response",

    'ERROR_RESPONSE' => "error_response",

    'SIGN_NODE_NAME' => "sign",


    'ENCRYPT_XML_NODE_NAME' => "response_encrypted",

    'needEncrypt' => false,


    'signType' => "RSA",


    'encryptKey',

    'encryptType' => "AES",

    'alipaySdkVersion' => "alipay-sdk-php-20160411",


    // for Alipay.php only
    'sign_type' => "RSA",
    'transport' => 'http',
    'cacert' => null,
    'public_key_path' => null,
    'private_key_path' => null,


    'input_charset' => 'utf-8',

    'service' => null,
    'partner' => '2088xxxxxx',
    "seller_id" => '2088xxxxxx',
    "payment_type" => 1,
    'notify_url' => null,
    'return_url' => null,
    'anti_phishing_key' => null,
    'exter_invoke_ip' => null,
];
