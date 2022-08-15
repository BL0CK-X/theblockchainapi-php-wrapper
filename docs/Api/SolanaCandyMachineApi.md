# OpenAPI\Client\SolanaCandyMachineApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaGetAllNFTsFromCandyMachine()**](SolanaCandyMachineApi.md#solanaGetAllNFTsFromCandyMachine) | **GET** /solana/nft/candy_machine/{network}/{candy_machine_id}/nfts | Get CM&#39;s NFTs
[**solanaGetCandyMachineMetadata()**](SolanaCandyMachineApi.md#solanaGetCandyMachineMetadata) | **POST** /solana/nft/candy_machine/metadata | Get a CM&#39;s metadata
[**solanaListAllCandyMachines()**](SolanaCandyMachineApi.md#solanaListAllCandyMachines) | **GET** /solana/nft/candy_machine/list | List all CMs
[**solanaSearchCandyMachines()**](SolanaCandyMachineApi.md#solanaSearchCandyMachines) | **POST** /solana/nft/candy_machine/search | Search CMs


## `solanaGetAllNFTsFromCandyMachine()`

```php
solanaGetAllNFTsFromCandyMachine($network, $candy_machine_id): \OpenAPI\Client\Model\GetAllNFTsResponse
```

Get CM's NFTs

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-all-nfts\" target=\"_blank\"> See examples (Python, JavaScript)</a>.  Use this endpoint to get the list of all NFTs (minted and unminted) from a Solana Candy Machine.  This works for `v1` and `v2` candy machines.   *However*, for `v2` only the value for `all_nfts` is provided. To determine which are minted and unminted follow this example.  You do not need to specify `v1` or `v2` for this endpoint as it will automatically determine it from the candy machine ID.  See example for how to get the list of NFT hashes <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-hash-table\" target=\"_blank\">here</a>.    `Cost: 2 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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
$network = mainnet-beta; // string | The network ID
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
 **network** | **string**| The network ID |
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

## `solanaGetCandyMachineMetadata()`

```php
solanaGetCandyMachineMetadata($get_candy_metadata_request): \OpenAPI\Client\Model\GetCandyMetadataResponse
```

Get a CM's metadata

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/get-candy-machine-metadata\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to get metadata about a Metaplex candy machine. This includes the goLiveDate, itemsAvailable, and itemsRedeemed. To see what is included, expand the green successful response below.  NOTE: Supply exactly one of `candy_machine_id`, `config_address`, or `uuid`. If you provide more than one, you will receive a `400` error.   `Cost: 2 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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
$get_candy_metadata_request = new \OpenAPI\Client\Model\GetCandyMetadataRequest(); // \OpenAPI\Client\Model\GetCandyMetadataRequest

try {
    $result = $apiInstance->solanaGetCandyMachineMetadata($get_candy_metadata_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaGetCandyMachineMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_candy_metadata_request** | [**\OpenAPI\Client\Model\GetCandyMetadataRequest**](../Model/GetCandyMetadataRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetCandyMetadataResponse**](../Model/GetCandyMetadataResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaListAllCandyMachines()`

```php
solanaListAllCandyMachines(): object
```

List all CMs

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/list-all-candy-machines\" target=\"_blank\">See examples (Python, JavaScript)</a>.  With this endpoint, you can list all candy machines published to Solana mainnet.  We update this data every 15 minutes.  The output is a list of config addresses, currently about 17000 in length.  `Cost: 2 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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

try {
    $result = $apiInstance->solanaListAllCandyMachines();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaListAllCandyMachines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaSearchCandyMachines()`

```php
solanaSearchCandyMachines($candy_machine_search_request): string[]
```

Search CMs

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-candy-machine/search-candy-machines\" target=\"_blank\">See examples (Python, JavaScript)</a>.  With this endpoint, you can search candy machines by their symbol, name of NFTs, uuid, configuration address, and update authority.  The output is a list of config addresses.  You can also provide multiple search clauses, such as the update authority (`update_authority=\"G17UmNGnMJ851x3M1JXocgpft1afcYedjPuFpo1ohhCk\"`) and symbol begins with \"Sol\" (`symbol=\"Sol\", symbol_search_method='begins_with'`).  `Cost: 2 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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
$candy_machine_search_request = new \OpenAPI\Client\Model\CandyMachineSearchRequest(); // \OpenAPI\Client\Model\CandyMachineSearchRequest

try {
    $result = $apiInstance->solanaSearchCandyMachines($candy_machine_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaCandyMachineApi->solanaSearchCandyMachines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **candy_machine_search_request** | [**\OpenAPI\Client\Model\CandyMachineSearchRequest**](../Model/CandyMachineSearchRequest.md)|  | [optional]

### Return type

**string[]**

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
