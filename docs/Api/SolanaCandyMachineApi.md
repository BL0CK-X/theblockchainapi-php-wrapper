# OpenAPI\Client\SolanaCandyMachineApi

All URIs are relative to https://api.theblockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaCreateTestCandyMachine()**](SolanaCandyMachineApi.md#solanaCreateTestCandyMachine) | **POST** /solana/nft/candy_machine | Create a test candy machine
[**solanaGetAllNFTsFromCandyMachine()**](SolanaCandyMachineApi.md#solanaGetAllNFTsFromCandyMachine) | **GET** /solana/nft/candy_machine/{network}/{candy_machine_id}/nfts | Get the list of all NFTs (minted and unminted) from a Solana Candy Machine
[**solanaGetCandyMachineConfigurationDetails()**](SolanaCandyMachineApi.md#solanaGetCandyMachineConfigurationDetails) | **POST** /solana/nft/candy_machine/config/info | Get the details of a Solana Candy Machine configuration
[**solanaGetCandyMachineDetails()**](SolanaCandyMachineApi.md#solanaGetCandyMachineDetails) | **POST** /solana/nft/candy_machine/info | Get a Metaplex candy machine&#39;s details
[**solanaGetNFTsMintedFromCandyMachine()**](SolanaCandyMachineApi.md#solanaGetNFTsMintedFromCandyMachine) | **POST** /solana/nft/candy_machine/nfts | Get the list of NFTs minted from a Solana Candy Machine
[**solanaMintFromCandyMachine()**](SolanaCandyMachineApi.md#solanaMintFromCandyMachine) | **POST** /solana/nft/candy_machine/mint | Mint an NFT from a Metaplex candy machine


## `solanaCreateTestCandyMachine()`

```php
solanaCreateTestCandyMachine($create_test_candy_machine_request): \OpenAPI\Client\Model\CreateTestCandyMachineResponse
```

Create a test candy machine

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/create-test-candy-machine\" target=\"_blank\">See examples (Python, JavaScript)</a>.   Use this endpoint to create a test candy machine so that you can test your minting bot.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaCandyMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_test_candy_machine_request = new \OpenAPI\Client\Model\CreateTestCandyMachineRequest(); // \OpenAPI\Client\Model\CreateTestCandyMachineRequest

try {
    $result = $apiInstance->solanaCreateTestCandyMachine($create_test_candy_machine_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaCreateTestCandyMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_test_candy_machine_request** | [**\OpenAPI\Client\Model\CreateTestCandyMachineRequest**](../Model/CreateTestCandyMachineRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateTestCandyMachineResponse**](../Model/CreateTestCandyMachineResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetAllNFTsFromCandyMachine()`

```php
solanaGetAllNFTsFromCandyMachine($network, $candy_machine_id): \OpenAPI\Client\Model\GetAllNFTsResponse
```

Get the list of all NFTs (minted and unminted) from a Solana Candy Machine

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-all-nfts\" target=\"_blank\"> See examples (Python, JavaScript)</a>.  Use this endpoint to get the list of all NFTs (minted and unminted) from a Solana Candy Machine.  `Cost: 3 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaCandyMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID (devnet, mainnet-beta)
$candy_machine_id = FmkrvXRenCGtwBHw3VtBcExp8eTdnau97upaewF4GUEX; // string | The ID of the candy machine

try {
    $result = $apiInstance->solanaGetAllNFTsFromCandyMachine($network, $candy_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaGetAllNFTsFromCandyMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID (devnet, mainnet-beta) |
 **candy_machine_id** | **string**| The ID of the candy machine |

### Return type

[**\OpenAPI\Client\Model\GetAllNFTsResponse**](../Model/GetAllNFTsResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetCandyMachineConfigurationDetails()`

```php
solanaGetCandyMachineConfigurationDetails($get_config_info_request): \OpenAPI\Client\Model\GetConfigInfoResponse
```

Get the details of a Solana Candy Machine configuration

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-config-info\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to get the details of a Solana Candy Machine configuration.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaCandyMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_config_info_request = new \OpenAPI\Client\Model\GetConfigInfoRequest(); // \OpenAPI\Client\Model\GetConfigInfoRequest

try {
    $result = $apiInstance->solanaGetCandyMachineConfigurationDetails($get_config_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaGetCandyMachineConfigurationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_config_info_request** | [**\OpenAPI\Client\Model\GetConfigInfoRequest**](../Model/GetConfigInfoRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetConfigInfoResponse**](../Model/GetConfigInfoResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetCandyMachineDetails()`

```php
solanaGetCandyMachineDetails($get_candy_details_request): \OpenAPI\Client\Model\GetCandyDetailsResponse
```

Get a Metaplex candy machine's details

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-info\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to get the following details about a Metaplex candy machine: uuid, go live date, items in the collection, and the cost to mint.  `Cost: 2 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaCandyMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_candy_details_request = new \OpenAPI\Client\Model\GetCandyDetailsRequest(); // \OpenAPI\Client\Model\GetCandyDetailsRequest

try {
    $result = $apiInstance->solanaGetCandyMachineDetails($get_candy_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaGetCandyMachineDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_candy_details_request** | [**\OpenAPI\Client\Model\GetCandyDetailsRequest**](../Model/GetCandyDetailsRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetCandyDetailsResponse**](../Model/GetCandyDetailsResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTsMintedFromCandyMachine()`

```php
solanaGetNFTsMintedFromCandyMachine($get_minted_nfts_request): \OpenAPI\Client\Model\GetMintedNFTsResponse[]
```

Get the list of NFTs minted from a Solana Candy Machine

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-minted-nfts\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to get the list of NFTs minted from a Solana Candy Machine.  See example for how to get the list of NFT hashes <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-hash-table\" target=\"_blank\">here</a>.  `Cost: 2 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaCandyMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_minted_nfts_request = new \OpenAPI\Client\Model\GetMintedNFTsRequest(); // \OpenAPI\Client\Model\GetMintedNFTsRequest

try {
    $result = $apiInstance->solanaGetNFTsMintedFromCandyMachine($get_minted_nfts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaGetNFTsMintedFromCandyMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_minted_nfts_request** | [**\OpenAPI\Client\Model\GetMintedNFTsRequest**](../Model/GetMintedNFTsRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetMintedNFTsResponse[]**](../Model/GetMintedNFTsResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaMintFromCandyMachine()`

```php
solanaMintFromCandyMachine($mint_nft_request): \OpenAPI\Client\Model\MintNFTResponse
```

Mint an NFT from a Metaplex candy machine

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/mint-from-candy-machine\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to mint an NFT from a metaplex candy machine as soon as it drops.  `Cost: 10 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaCandyMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mint_nft_request = new \OpenAPI\Client\Model\MintNFTRequest(); // \OpenAPI\Client\Model\MintNFTRequest

try {
    $result = $apiInstance->solanaMintFromCandyMachine($mint_nft_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaMintFromCandyMachine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mint_nft_request** | [**\OpenAPI\Client\Model\MintNFTRequest**](../Model/MintNFTRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MintNFTResponse**](../Model/MintNFTResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
