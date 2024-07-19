# FoxyPay PHP SDK

Best SDK for best payment system.

## Installation

Use the package manager [Composer](https://getcomposer.org/) to install SDK.

```bash
composer require twileck/foxypay-sdk
```

## Usage

```php
<?php

require_once("vendor/autoload.php");

use Twileck\FoxyPay;

$foxypay = new FoxyPay("FOXYPAY_API_TOKEN");

$paymentUrl = $foxypay->setAmount(10)
    ->setDescription("Test payment")
    ->setSuccessUrl("https://site.net/success")
    ->setFailUrl("https://site.net/fail")
    ->setWebHookUrl("https://site.net/foxypay_webhook.php")
    ->setInfo("123")
    ->getPayUrl();

echo $paymentUrl; //https://foxypay.net/payment/4xQH1JdBNhb0
```

## Developer

[LokaDoka](https://t.me/LokaDoka)

## License

[MIT](https://choosealicense.com/licenses/mit/)