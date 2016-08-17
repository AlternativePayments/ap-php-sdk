# PHP SDK for Alternative Payments RESTful API

## Installation

### Requirements

PHP 5.3.3 and later.
cURL extension.

### Developer Documentation
[Official Alternative Payments RESTful API Reference](http://www.alternativepayments.com/support/api/)

### Composer

It's recommended to use [composer](http://getcomposer.org) or you can download the latest release.

```
composer require alternativepayments/alternativepayments
```
## Usage
To load the Alternative Payments PHP SDK you have to include autoloader:
```
require_once '/path/to/your-project/vendor/autoload.php';
```
To use Alternative Payments PHP SDK you need to setup your secret integration key:
```
use AlternativePayments\Config;
Config :: setApiKey("sk_test_rHErfsdjgfk9.....lFbfdsgh3mv0M");
```
Create SEPA transaction request example:
```
require_once '../vendor/autoload.php';

use AlternativePayments\Config;
Config :: setApiKey("sk_test_rHErfsdjgfk9.....lFbfdsgh3mv0M");

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("john.doe@example.com");
$customer->setCountry("BE");
$customer->setFirstName("John");
$customer->setLastName("Doe");
$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("BE88271080782541");
$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setDescription("test sepa php sdk");
$transaction->setMerchantPassThruData("test_sepa_123");
$transaction->setIPAddress("127.0.0.1");
$res = \AlternativePayments\Transaction :: post($transaction);
```

For more examples check [samples](https://github.com/AlternativePayments/ap-php-sdk/tree/master/samples) folder.

## License

Read [License](https://github.com/AlternativePayments/ap-php-sdk/blob/master/LICENSE) for more licensing information.