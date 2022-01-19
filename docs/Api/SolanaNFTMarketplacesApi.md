# OpenAPI\Client\SolanaNFTMarketplacesApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaBuyNFT()**](SolanaNFTMarketplacesApi.md#solanaBuyNFT) | **POST** /solana/nft/marketplaces/{exchange}/buy/{network}/{mint_address} | Buy
[**solanaDelistNFT()**](SolanaNFTMarketplacesApi.md#solanaDelistNFT) | **POST** /solana/nft/marketplaces/{exchange}/delist/{network}/{mint_address} | Delist
[**solanaGetNFTListing()**](SolanaNFTMarketplacesApi.md#solanaGetNFTListing) | **GET** /solana/nft/marketplaces/listing/{network}/{mint_address} | Get NFT Listing
[**solanaListNFT()**](SolanaNFTMarketplacesApi.md#solanaListNFT) | **POST** /solana/nft/marketplaces/{exchange}/list/{network}/{mint_address} | List


## `solanaBuyNFT()`

```php
solanaBuyNFT($network, $exchange, $mint_address, $buy_request): \OpenAPI\Client\Model\BuyResponse
```

Buy

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/solana-nft-marketplaces/buy-nft\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Buy an NFT on a Solana Exchange.  Exchanges supported: SolSea, Magic Eden  **We are not responsible for any SOL or NFT lost.**  `Cost: 25 Credits`, `Cost: 3 Credits on Devnet`  Limited to $29/mo plans and above. (<a href=\"#section/Pricing\">See Pricing</a>)  (You are able to try on the `Free` plan as well, until you run out of credits.)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTMarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | The network ID
$exchange = solsea; // string | The NFT exchange to interact with
$mint_address = 7GA16mQup7ESJbaD6n49VCwVG9kRkyQDzWKhBSLjbYqr; // string | The mint address of the NFT you want to buy
$buy_request = new \OpenAPI\Client\Model\BuyRequest(); // \OpenAPI\Client\Model\BuyRequest

try {
    $result = $apiInstance->solanaBuyNFT($network, $exchange, $mint_address, $buy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTMarketplacesApi->solanaBuyNFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **exchange** | **string**| The NFT exchange to interact with |
 **mint_address** | **string**| The mint address of the NFT you want to buy |
 **buy_request** | [**\OpenAPI\Client\Model\BuyRequest**](../Model/BuyRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BuyResponse**](../Model/BuyResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaDelistNFT()`

```php
solanaDelistNFT($network, $exchange, $mint_address, $delist_request): \OpenAPI\Client\Model\DelistResponse
```

Delist

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/solana-nft-marketplaces/delist-nft\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Delist an NFT from a Solana Exchange.  Exchanges supported: SolSea, Magic Eden  **We are not responsible for any SOL or NFT lost.**  `Cost: 8 Credits`, `Cost: 3 Credits on Devnet`  Limited to $29/mo plans and above. (<a href=\"#section/Pricing\">See Pricing</a>)  (You are able to try on the `Free` plan as well, until you run out of credits.)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTMarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | The network ID
$exchange = solsea; // string | The NFT exchange to interact with
$mint_address = 7GA16mQup7ESJbaD6n49VCwVG9kRkyQDzWKhBSLjbYqr; // string | The mint address of the NFT you want to buy
$delist_request = new \OpenAPI\Client\Model\DelistRequest(); // \OpenAPI\Client\Model\DelistRequest

try {
    $result = $apiInstance->solanaDelistNFT($network, $exchange, $mint_address, $delist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTMarketplacesApi->solanaDelistNFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **exchange** | **string**| The NFT exchange to interact with |
 **mint_address** | **string**| The mint address of the NFT you want to buy |
 **delist_request** | [**\OpenAPI\Client\Model\DelistRequest**](../Model/DelistRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DelistResponse**](../Model/DelistResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTListing()`

```php
solanaGetNFTListing($network, $mint_address): \OpenAPI\Client\Model\GetNFTListingResponse
```

Get NFT Listing

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/solana-nft-marketplaces/get-nft-listing\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Get the Marketplace listing of a Solana NFT.  Currently checks for the following Solana NFT martketplaces: SolSea, Magic Eden  `Cost: 1 Credits`, (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTMarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | The network ID
$mint_address = 7GA16mQup7ESJbaD6n49VCwVG9kRkyQDzWKhBSLjbYqr; // string | The mint address of the NFT you want to buy

try {
    $result = $apiInstance->solanaGetNFTListing($network, $mint_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTMarketplacesApi->solanaGetNFTListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **mint_address** | **string**| The mint address of the NFT you want to buy |

### Return type

[**\OpenAPI\Client\Model\GetNFTListingResponse**](../Model/GetNFTListingResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaListNFT()`

```php
solanaListNFT($network, $exchange, $mint_address, $list_request): \OpenAPI\Client\Model\ListResponse
```

List

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/solana-nft-marketplaces/list-nft\" target=\"_blank\">See examples (Python, JavaScript)</a>.  List an NFT on a Solana Exchange.  Exchanges supported: SolSea, Magic Eden  **We are not responsible for any SOL or NFT lost.**  `Cost: 12 Credits`, `Cost: 3 Credits on Devnet`  Limited to $29/mo plans and above. (<a href=\"#section/Pricing\">See Pricing</a>)  (You are able to try on the `Free` plan as well, until you run out of credits.)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTMarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | The network ID
$exchange = solsea; // string | The NFT exchange to interact with
$mint_address = 7GA16mQup7ESJbaD6n49VCwVG9kRkyQDzWKhBSLjbYqr; // string | The mint address of the NFT you want to buy
$list_request = new \OpenAPI\Client\Model\ListRequest(); // \OpenAPI\Client\Model\ListRequest

try {
    $result = $apiInstance->solanaListNFT($network, $exchange, $mint_address, $list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTMarketplacesApi->solanaListNFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **exchange** | **string**| The NFT exchange to interact with |
 **mint_address** | **string**| The mint address of the NFT you want to buy |
 **list_request** | [**\OpenAPI\Client\Model\ListRequest**](../Model/ListRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ListResponse**](../Model/ListResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
