<?php
return [

    //app id
    'appId' => '2016xxxxxxxxxxxx',

    //private key path
    'rsaPrivateKeyFilePath' => '',

    //gateway
    'gatewayUrl' => 'https://openapi.alipay.com/gateway.do',

    //return data format
    'format' => 'json',

    //api version
    'apiVersion' => '1.0',

    'postCharset' => "UTF-8",

    'alipayPublicKey' => null,

    'debugInfo' => false,

    'fileCharset' => "UTF-8",

    'RESPONSE_SUFFIX' => "_response",

    'ERROR_RESPONSE' => "error_response",

    'SIGN_NODE_NAME' => "sign",


    'ENCRYPT_XML_NODE_NAME' => "response_encrypted",

    'needEncrypt' => false,


    'signType' => "RSA",


    'encryptKey',

    'encryptType' => "AES",

    'alipaySdkVersion' => "alipay-sdk-php-20160411",
];
