# OpenAPI\Client\SolanaAccountApi

All URIs are relative to https://api.theblockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaGetAccount()**](SolanaAccountApi.md#solanaGetAccount) | **GET** /solana/account/{network}/{public_key} | Get the details of an account on Solana
[**solanaGetAccountIsCandyMachine()**](SolanaAccountApi.md#solanaGetAccountIsCandyMachine) | **GET** /solana/account/{network}/{public_key}/is_candy_machine | Get if account is candy machine
[**solanaGetAccountIsNFT()**](SolanaAccountApi.md#solanaGetAccountIsNFT) | **GET** /solana/account/{network}/{public_key}/is_nft | Get if account is NFT


## `solanaGetAccount()`

```php
solanaGetAccount($network, $public_key): \OpenAPI\Client\Model\Account
```

Get the details of an account on Solana

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-account/get-account\" target=\"_blank\">See examples (Python, JavaScript)</a>.      Get the details of an account on Solana. Learn more about accounts <a href=\"https://docs.solana.com/developing/programming-model/accounts\" target=\"_blank\">here</a>.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID (devnet, mainnet-beta)
$public_key = EEr5yQpNXf7Bru6Rt5podx56HGW9CEehXqgRGh2wa71w; // string | The public key of the account

try {
    $result = $apiInstance->solanaGetAccount($network, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaAccountApi->solanaGetAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID (devnet, mainnet-beta) |
 **public_key** | **string**| The public key of the account |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetAccountIsCandyMachine()`

```php
solanaGetAccountIsCandyMachine($network, $public_key): \OpenAPI\Client\Model\AccountIsCandyMachine
```

Get if account is candy machine

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-account/get-is-candy-machine\" target=\"_blank\">See examples (Python, JavaScript)</a>.      Determine whether or not a public key address corresponds to a candy machine ID or candy machine configuration.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID (devnet, mainnet-beta)
$public_key = EEr5yQpNXf7Bru6Rt5podx56HGW9CEehXqgRGh2wa71w; // string | The public key of the account

try {
    $result = $apiInstance->solanaGetAccountIsCandyMachine($network, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaAccountApi->solanaGetAccountIsCandyMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID (devnet, mainnet-beta) |
 **public_key** | **string**| The public key of the account |

### Return type

[**\OpenAPI\Client\Model\AccountIsCandyMachine**](../Model/AccountIsCandyMachine.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetAccountIsNFT()`

```php
solanaGetAccountIsNFT($network, $public_key): \OpenAPI\Client\Model\AccountIsNFT
```

Get if account is NFT

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-account/get-is-nft\" target=\"_blank\">See examples (Python, JavaScript)</a>.      Determine whether or not a public key is an NFT `mint address`  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID (devnet, mainnet-beta)
$public_key = EEr5yQpNXf7Bru6Rt5podx56HGW9CEehXqgRGh2wa71w; // string | The public key of the account

try {
    $result = $apiInstance->solanaGetAccountIsNFT($network, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaAccountApi->solanaGetAccountIsNFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID (devnet, mainnet-beta) |
 **public_key** | **string**| The public key of the account |

### Return type

[**\OpenAPI\Client\Model\AccountIsNFT**](../Model/AccountIsNFT.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
