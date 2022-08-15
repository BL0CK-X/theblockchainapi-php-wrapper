# OpenAPI\Client\CCWebhookApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCCWebhook()**](CCWebhookApi.md#getCCWebhook) | **POST** /webhook/v1/project/{project_id}/webhook/{webhook_identifier} | Get a webhook
[**listCCProjectWebhooks()**](CCWebhookApi.md#listCCProjectWebhooks) | **POST** /webhook/v1/project/{project_id}/webhooks | List project&#39;s webhooks
[**validateCCWebhook()**](CCWebhookApi.md#validateCCWebhook) | **POST** /webhook/v1/project/{project_id}/webhook/{webhook_identifier}/validate | Validate a webhook


## `getCCWebhook()`

```php
getCCWebhook($project_id, $webhook_identifier): \OpenAPI\Client\Model\CCWebhook
```

Get a webhook

Retrieve the details of a webhook sent to you.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\CCWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = project_WDQskRIfHQxj53N5mk5K; // string | The ID of the project. Created and returned when a project is created.
$webhook_identifier = webhook/payment.received/payment_EyfDL6CsvFinpUnXgBXaUuqq3hCXa0; // string | The ID of the webhook. Created and returned when a webhook is sent.

try {
    $result = $apiInstance->getCCWebhook($project_id, $webhook_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CCWebhookApi->getCCWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| The ID of the project. Created and returned when a project is created. |
 **webhook_identifier** | **string**| The ID of the webhook. Created and returned when a webhook is sent. |

### Return type

[**\OpenAPI\Client\Model\CCWebhook**](../Model/CCWebhook.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCCProjectWebhooks()`

```php
listCCProjectWebhooks($project_id): \OpenAPI\Client\Model\CCWebhook[]
```

List project's webhooks

List all webhooks sent to you and their respective responses from your server.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\CCWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = project_WDQskRIfHQxj53N5mk5K; // string | The ID of the project. Created and returned when a project is created.

try {
    $result = $apiInstance->listCCProjectWebhooks($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CCWebhookApi->listCCProjectWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| The ID of the project. Created and returned when a project is created. |

### Return type

[**\OpenAPI\Client\Model\CCWebhook[]**](../Model/CCWebhook.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateCCWebhook()`

```php
validateCCWebhook($project_id, $webhook_identifier, $cc_webhook_validate_request)
```

Validate a webhook

Validate whether a webhook you received was actually sent from us.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\CCWebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = project_WDQskRIfHQxj53N5mk5K; // string | The ID of the project. Created and returned when a project is created.
$webhook_identifier = webhook/payment.received/payment_EyfDL6CsvFinpUnXgBXaUuqq3hCXa0; // string | The ID of the webhook. Created and returned when a webhook is sent.
$cc_webhook_validate_request = new \OpenAPI\Client\Model\CCWebhookValidateRequest(); // \OpenAPI\Client\Model\CCWebhookValidateRequest

try {
    $apiInstance->validateCCWebhook($project_id, $webhook_identifier, $cc_webhook_validate_request);
} catch (Exception $e) {
    echo 'Exception when calling CCWebhookApi->validateCCWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| The ID of the project. Created and returned when a project is created. |
 **webhook_identifier** | **string**| The ID of the webhook. Created and returned when a webhook is sent. |
 **cc_webhook_validate_request** | [**\OpenAPI\Client\Model\CCWebhookValidateRequest**](../Model/CCWebhookValidateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
