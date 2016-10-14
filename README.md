# alipay-sdk-laravel

---
Avoid conflict of 'encrypt' function.

---
Config `config/app.php` 
```
'providers' => [
    ...
   Wsjmnh\Alipay\AlipayServiceProvider::class,
]
```

Run `php artisan vendor:publish` 

`config/alipay.php` will be generated.
