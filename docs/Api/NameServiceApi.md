# OpenAPI\Client\NameServiceApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlockchainIdentifierFromName()**](NameServiceApi.md#getBlockchainIdentifierFromName) | **POST** /{blockchain}/{network}/name_service/name_to_blockchain_identifier | Get the identifier
[**getNameForBlockchainIdentifier()**](NameServiceApi.md#getNameForBlockchainIdentifier) | **POST** /{blockchain}/{network}/name_service/blockchain_identifier_to_name | Get the name


## `getBlockchainIdentifierFromName()`

```php
getBlockchainIdentifierFromName($blockchain, $network, $input_name): \OpenAPI\Client\Model\InputBlockchainIdentifier
```

Get the identifier

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/name-service/name-to-blockchain-identifier\" target=\"_blank\">See examples (Python, JavaScript) [Coming Soon]</a>.      Get the blockchain identifier from a name.  e.g., Input `vitalik.eth` and output `0xd8dA6BF26964aF9D7eEd9e03E53415D37aA96045`  `Cost: 0.25 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\NameServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$network = ropsten; // string | The network of the blockchain you selected  - Solana: `devnet`, `mainnet-beta` - Ethereum: `ropsten`, `mainnet`  Defaults when not provided (not applicable to path parameters): - Solana: `devnet` - Ethereum: `ropsten`
$input_name = new \OpenAPI\Client\Model\InputName(); // \OpenAPI\Client\Model\InputName

try {
    $result = $apiInstance->getBlockchainIdentifierFromName($blockchain, $network, $input_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameServiceApi->getBlockchainIdentifierFromName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **network** | **string**| The network of the blockchain you selected  - Solana: &#x60;devnet&#x60;, &#x60;mainnet-beta&#x60; - Ethereum: &#x60;ropsten&#x60;, &#x60;mainnet&#x60;  Defaults when not provided (not applicable to path parameters): - Solana: &#x60;devnet&#x60; - Ethereum: &#x60;ropsten&#x60; |
 **input_name** | [**\OpenAPI\Client\Model\InputName**](../Model/InputName.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InputBlockchainIdentifier**](../Model/InputBlockchainIdentifier.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNameForBlockchainIdentifier()`

```php
getNameForBlockchainIdentifier($blockchain, $network, $input_blockchain_identifier): \OpenAPI\Client\Model\InputName
```

Get the name

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/name-service/blockchain-identifier-to-name\" target=\"_blank\">See examples (Python, JavaScript) [Coming Soon]</a>.      Get the name from a blockchain identifier.  e.g., Input `0xd8dA6BF26964aF9D7eEd9e03E53415D37aA96045` and output `vitalik.eth`  `Cost: 0.25 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\NameServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$network = ropsten; // string | The network of the blockchain you selected  - Solana: `devnet`, `mainnet-beta` - Ethereum: `ropsten`, `mainnet`  Defaults when not provided (not applicable to path parameters): - Solana: `devnet` - Ethereum: `ropsten`
$input_blockchain_identifier = new \OpenAPI\Client\Model\InputBlockchainIdentifier(); // \OpenAPI\Client\Model\InputBlockchainIdentifier

try {
    $result = $apiInstance->getNameForBlockchainIdentifier($blockchain, $network, $input_blockchain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NameServiceApi->getNameForBlockchainIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **network** | **string**| The network of the blockchain you selected  - Solana: &#x60;devnet&#x60;, &#x60;mainnet-beta&#x60; - Ethereum: &#x60;ropsten&#x60;, &#x60;mainnet&#x60;  Defaults when not provided (not applicable to path parameters): - Solana: &#x60;devnet&#x60; - Ethereum: &#x60;ropsten&#x60; |
 **input_blockchain_identifier** | [**\OpenAPI\Client\Model\InputBlockchainIdentifier**](../Model/InputBlockchainIdentifier.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InputName**](../Model/InputName.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
