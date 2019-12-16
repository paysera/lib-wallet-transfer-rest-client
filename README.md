
## paysera-transfers-client

Provides methods to manipulate `Transfers` API.
It automatically authenticates all requests and maps required data structure for you.

#### Usage

This library provides `ClientFactory` class, which you should use to get the API client itself:

```php
use Paysera\Client\TransfersClient\ClientFactory;

$clientFactory = new ClientFactory([
    'base_url' => 'https://wallet.paysera.com/transfer/rest/v1/', // optional, in case you need a custom one.
    'basic' => [                                        // use this, it API requires Basic authentication.
        'username' => 'username',
        'password' => 'password',
    ],
    'oauth' => [                                        // use this, it API requires OAuth v2 authentication.
        'token' => [
            'access_token' => 'my-access-token',
            'refresh_token' => 'my-refresh-token',
        ],
    ],
    // other configuration options, if needed
]);

$transfersClient = $clientFactory->getTransfersClient();
```

Please use only one authentication mechanism, provided by `Paysera`.

Now, that you have instance of `TransfersClient`, you can use following methods
### Methods

    
It reserves funds for transfer and makes it &quot;reserved&quot;. It&#039;s enough for transfer to be processed. If there are not enough funds, any limits are reached etc., transfer will be still &quot;new&quot; and no action will take place. Returns error if no funds available.


```php
use Paysera\Client\TransfersClient\Entity as Entities;

$transferRegistrationParameters = new Entities\TransferRegistrationParameters();

$transferRegistrationParameters->setConvertCurrency($convertCurrency);
$transferRegistrationParameters->setUserIp($userIp);
    
$result = $transfersClient->reserveTransfer($id, $transferRegistrationParameters);
```
---


Provide password for transfer with status `waiting_password`. If operation is successful, transfer status becomes `done`. Available only for internal transfers. Returns error if password provided is invalid.


```php
use Paysera\Client\TransfersClient\Entity as Entities;

$transferPassword = new Entities\TransferPassword();

$transferPassword->setValue($value);
    
$result = $transfersClient->provideTransferPassword($id, $transferPassword);
```
---


Make transfer visible in frontend for signing. If currency convert operations are related to transfer, they are done when transfer becomes `reserved`. If there are expectations in currency convert requests, transfer becomes `failed` together with related conversion request(s) if those expectations fails. This only makes transfer &quot;reserved&quot;, so it&#039;s visible in our Web UI for signing


```php
use Paysera\Client\TransfersClient\Entity as Entities;

$transferRegistrationParameters = new Entities\TransferRegistrationParameters();

$transferRegistrationParameters->setConvertCurrency($convertCurrency);
$transferRegistrationParameters->setUserIp($userIp);
    
$result = $transfersClient->registerTransfer($id, $transferRegistrationParameters);
```
---


Signs the transfer


```php
use Paysera\Client\TransfersClient\Entity as Entities;

$transferRegistrationParameters = new Entities\TransferRegistrationParameters();

$transferRegistrationParameters->setConvertCurrency($convertCurrency);
$transferRegistrationParameters->setUserIp($userIp);
    
$result = $transfersClient->signTransfer($id, $transferRegistrationParameters);
```
---


Get transfer.


```php

$result = $transfersClient->getTransfer($id);
```
---

Revoke transfer.


```php

$result = $transfersClient->deleteTransfer($id);
```
---


Create transfer in the system. Created transfer is invisible and will be deleted if no more actions are performed.



```php
use Paysera\Client\TransfersClient\Entity as Entities;

$transferInput = new Entities\TransferInput();

$transferInput->setAmount($amount);
$transferInput->setBeneficiary($beneficiary);
$transferInput->setPayer($payer);
$transferInput->setFinalBeneficiary($finalBeneficiary);
$transferInput->setPerformAt($performAt);
$transferInput->setChargeType($chargeType);
$transferInput->setUrgency($urgency);
$transferInput->setNotifications($notifications);
$transferInput->setPurpose($purpose);
$transferInput->setPassword($password);
$transferInput->setCancelable($cancelable);
$transferInput->setAutoCurrencyConvert($autoCurrencyConvert);
$transferInput->setAutoChargeRelatedCard($autoChargeRelatedCard);
$transferInput->setAutoProcessToDone($autoProcessToDone);
$transferInput->setReserveUntil($reserveUntil);
$transferInput->setCallback($callback);
    
$result = $transfersClient->createTransfer($transferInput);
```
---

Standard SQL-style Result filtering


```php
use Paysera\Client\TransfersClient\Entity as Entities;

$transfersFilter = new Entities\TransfersFilter();

$transfersFilter->setCreatedDateFrom($createdDateFrom);
$transfersFilter->setCreatedDateTo($createdDateTo);
$transfersFilter->setCreditAccountNumber($creditAccountNumber);
$transfersFilter->setDebitAccountNumber($debitAccountNumber);
$transfersFilter->setStatuses($statuses);
    
$result = $transfersClient->getTransfers($transfersFilter);
```
---

