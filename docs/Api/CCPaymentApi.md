# OpenAPI\Client\CCPaymentApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCCPayment()**](CCPaymentApi.md#getCCPayment) | **GET** /checkout/v1/project/{project_id}/payment/{payment_identifier} | Get a payment
[**listAllCCPayments()**](CCPaymentApi.md#listAllCCPayments) | **GET** /checkout/v1/payments | List all payments
[**listCCProjectPayments()**](CCPaymentApi.md#listCCProjectPayments) | **GET** /checkout/v1/project/{project_id}/payments | List a project&#39;s payments


## `getCCPayment()`

```php
getCCPayment($project_id, $payment_identifier): \OpenAPI\Client\Model\CCPayment
```

Get a payment

Retrieve a specific payment, either by its `payment_id` or `payment_validation_code`.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APIKeyID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKeyID', 'Bearer');

// Configure API key authorization: APISecretKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APISecretKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APISecretKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CCPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = project_WDQskRIfHQxj53N5mk5K; // string | The ID of the project. Created and returned when a project is created.
$payment_identifier = ["payment_97jA1szpVjrSI5EvOb5zxNQFq5CfrC"]; // string | You can supply either `payment_id` or `payment_validation_code`.  The `payment_id` is only visible by you and uniquely identifies a payment.  The `payment_validation_code` is shown exclusively to the customer and the owner of the project. It can be used to redeem a payment. You can verify a payment by pulling the payment with the `payment_validation_code`.

try {
    $result = $apiInstance->getCCPayment($project_id, $payment_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CCPaymentApi->getCCPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| The ID of the project. Created and returned when a project is created. |
 **payment_identifier** | **string**| You can supply either &#x60;payment_id&#x60; or &#x60;payment_validation_code&#x60;.  The &#x60;payment_id&#x60; is only visible by you and uniquely identifies a payment.  The &#x60;payment_validation_code&#x60; is shown exclusively to the customer and the owner of the project. It can be used to redeem a payment. You can verify a payment by pulling the payment with the &#x60;payment_validation_code&#x60;. |

### Return type

[**\OpenAPI\Client\Model\CCPayment**](../Model/CCPayment.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllCCPayments()`

```php
listAllCCPayments(): \OpenAPI\Client\Model\CCPayment[]
```

List all payments

List all payments associated with your account (across all projects).  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APIKeyID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKeyID', 'Bearer');

// Configure API key authorization: APISecretKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APISecretKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APISecretKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CCPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAllCCPayments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CCPaymentApi->listAllCCPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CCPayment[]**](../Model/CCPayment.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCCProjectPayments()`

```php
listCCProjectPayments($project_id, $UNKNOWN_PARAMETER_NAME): \OpenAPI\Client\Model\CCPayment[]
```

List a project's payments

List all payments associated with a project.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: APIKeyID
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APIKeyID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIKeyID', 'Bearer');

// Configure API key authorization: APISecretKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('APISecretKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APISecretKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CCPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = project_WDQskRIfHQxj53N5mk5K; // string | The ID of the project. Created and returned when a project is created.
$UNKNOWN_PARAMETER_NAME = new \OpenAPI\Client\Model\null(); //  | Filter payments by a user's wallet identifier (i.e., Solana public key)

try {
    $result = $apiInstance->listCCProjectPayments($project_id, $UNKNOWN_PARAMETER_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CCPaymentApi->listCCProjectPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| The ID of the project. Created and returned when a project is created. |
 **UNKNOWN_PARAMETER_NAME** | [****](../Model/.md)| Filter payments by a user&#39;s wallet identifier (i.e., Solana public key) | [optional]

### Return type

[**\OpenAPI\Client\Model\CCPayment[]**](../Model/CCPayment.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
