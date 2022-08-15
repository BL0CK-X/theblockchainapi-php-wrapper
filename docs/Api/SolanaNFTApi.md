# OpenAPI\Client\SolanaNFTApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaCreateNFT()**](SolanaNFTApi.md#solanaCreateNFT) | **POST** /solana/nft | Create an NFT on Solana
[**solanaGetNFT()**](SolanaNFTApi.md#solanaGetNFT) | **GET** /solana/nft/{network}/{mint_address} | Get an NFT&#39;s metadata
[**solanaGetNFTMintFee()**](SolanaNFTApi.md#solanaGetNFTMintFee) | **GET** /solana/nft/mint/fee | Get the NFT mint fee
[**solanaGetNFTOwner()**](SolanaNFTApi.md#solanaGetNFTOwner) | **GET** /solana/nft/{network}/{mint_address}/owner | Get owner of an NFT
[**solanaGetNFTOwnerAdvanced()**](SolanaNFTApi.md#solanaGetNFTOwnerAdvanced) | **GET** /solana/nft/{network}/{mint_address}/owner_advanced | Get owner of an NFT (advanced)
[**solanaGetNFTsCandyMachineId()**](SolanaNFTApi.md#solanaGetNFTsCandyMachineId) | **POST** /solana/nft/candy_machine_id | Get the ID of the candy machine of an NFT
[**solanaSearchNFTs()**](SolanaNFTApi.md#solanaSearchNFTs) | **POST** /solana/nft/search | Search NFTs on Solana


## `solanaCreateNFT()`

```php
solanaCreateNFT($nft_mint_request): \OpenAPI\Client\Model\NFT
```

Create an NFT on Solana

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/create-an-nft\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Create a Metaplex NFT on Solana.   Read more on this <a href=\"https://blog.blockchainapi.com/2021/11/16/a-note-on-nfts.html\" target=\"_blank\">here</a>.  Note: Please see <a href=\"https://blog.blockchainapi.com/2022/01/18/how-to-format-off-chain-nft-metadata.html\" target=\"_blank\">this article</a> to learn more about what `nft_upload_method` means and how storing the metadata of an NFT works.  If you're using `nft_upload_method = \"LINK\"`, then to add attributes to the NFT or an image, add them to a JSON file and upload that to Arweave/IPFS/Filecoin. See the JSON format <a href=\"https://blog.blockchainapi.com/2022/01/18/how-to-format-off-chain-nft-metadata.html\">here</a>.  Then supply the link to the JSON file in `nft_url`.   NOTE: Don't use `nft_metadata`. Values provided here do not do anything at the moment. We are fixing this soon.  `Cost: 5 Credits` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nft_mint_request = new \OpenAPI\Client\Model\NFTMintRequest(); // \OpenAPI\Client\Model\NFTMintRequest

try {
    $result = $apiInstance->solanaCreateNFT($nft_mint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaCreateNFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nft_mint_request** | [**\OpenAPI\Client\Model\NFTMintRequest**](../Model/NFTMintRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\NFT**](../Model/NFT.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFT()`

```php
solanaGetNFT($network, $mint_address): \OpenAPI\Client\Model\NFT
```

Get an NFT's metadata

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/get-nft-metadata\" target=\"_blank\">See examples (Python, JavaScript)</a>.       Get the metadata of an NFT.  If you're looking for metadata such as attributes and others, you can retrieve them from the link in the URI field of the NFT metadata returned. See the example on the right. The URI is an Arweave URL. That contains the attributes and other information about the NFT. That URL is stored on the Solana blockchain.  `Cost: 0.25 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID
$mint_address = EEr5yQpNXf7Bru6Rt5podx56HGW9CEehXqgRGh2wa71w; // string | The mint address of the NFT

try {
    $result = $apiInstance->solanaGetNFT($network, $mint_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaGetNFT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **mint_address** | **string**| The mint address of the NFT |

### Return type

[**\OpenAPI\Client\Model\NFT**](../Model/NFT.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTMintFee()`

```php
solanaGetNFTMintFee(): \OpenAPI\Client\Model\NFTMintFee
```

Get the NFT mint fee

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/get-nft-mint-fee\" target=\"_blank\">See examples (Python, JavaScript)</a>.      Get the estimated fee for minting an NFT on the Solana blockchain using the Metaplex protocol.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->solanaGetNFTMintFee();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaGetNFTMintFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NFTMintFee**](../Model/NFTMintFee.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTOwner()`

```php
solanaGetNFTOwner($network, $mint_address): \OpenAPI\Client\Model\NFTOwnerResponse
```

Get owner of an NFT

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/get-nft-owner\" target=\"_blank\">See examples (Python, JavaScript)</a>.       Get the owner of an NFT. This returns the public key of the wallet that owns the associated token account that owns the NFT.  If you want to get the associated token account that literally owns the NFT, derive the associated token account address from the public key returned and the NFT mint address using <a href=\"#operation/solanaDeriveAssociatedTokenAccountAddress\">this endpoint</a>.  `Cost: 0.25 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | The network ID
$mint_address = 4zH3Rwm1QXdfTSUqsYmeUBY4QqQmQEXJVbv4ErSK736Q; // string | The mint address of the NFT

try {
    $result = $apiInstance->solanaGetNFTOwner($network, $mint_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaGetNFTOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **mint_address** | **string**| The mint address of the NFT |

### Return type

[**\OpenAPI\Client\Model\NFTOwnerResponse**](../Model/NFTOwnerResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTOwnerAdvanced()`

```php
solanaGetNFTOwnerAdvanced($network, $mint_address): \OpenAPI\Client\Model\NFTOwnerAdvancedResponse
```

Get owner of an NFT (advanced)

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/get-nft-owner\" target=\"_blank\">See examples (Python, JavaScript)</a>.       Get the owner, state, listed price, and listed marketplace (if any) of an NFT.   Here's are a couple of example responses: ``` {     'contract': {         'contract_blockchain_identifier': 'M2mx93ekt1fmXSVkTrUL9xVFHkmME8HTUi5Cyc5aF7K',          'contract_id': 'magic-eden-v2',          'contract_name': 'Magic Eden v2',          'contract_type': 'marketplace'     },      'owner': '25UJMR3FiMM6noQtPEaCJ6eDU2YQ7myDhikVQXmMuSRW',      'price': 50000000,      'state': 'listing' } ```  ``` {     'contract': null,      'owner': 'C37PJiJU8WTgoUoFqmB1Maw8hkuENDZoGDQA1pm54Fdd',      'price': null,      'state': 'holding' } ```  This function will return whether the NFT is `listed`, `loaned` (Yawww NFT loans), `otc`, `staked`, `burned`, or `held`.  If listed, it will return the contract, the readable name of the contract (e.g., Magic Eden, OpenSea), the contract ID (if any; e.g., open-sea), the owner, and the listed price. From this, you can get the floor of a collection. We currently support Magic Eden (v1, v2), Exchange.Art (auction, singles), CoralCube, Solanart (v1, v2), Yawww Loans, Yawww OTC, OpenSea, Fractal, SolSea, and AlphaArt.   If loaned, it will return the loan requester as the owner, the loan amount, and the loan contract. We only support the Yawww loaning contract.  If listed on an OTC marketplace, it will return the same information as `listed`. OTC is used to distinguish between marketplaces that respect royalties (OTC) and those that don't (normal ones). The only `OTC` contract we track is Yawwww, at the moment. We do not yet track Solanart v3.  If staked, it will return the owner and the staking contract public key.  If burned, it will return the `burner` as the `owner`.  If held, it will simply return the owner.  If you want to get the literal owner, which may or may not be the same as the owner returned here, call the simplified [get NFT owner function](/#tag/Solana-NFT/operation/solanaGetNFTOwner). For example, Bob might own the NFT, but if it is listed on Magic Eden, then the NFT is held in escrow and \"owned\" by Magic Eden. The simplified function will return Magic Eden as the owner (the literal owner). This advanced function will tell you the implied owner, which would be Bob.  `Cost: 1.0 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = devnet; // string | The network ID
$mint_address = 4zH3Rwm1QXdfTSUqsYmeUBY4QqQmQEXJVbv4ErSK736Q; // string | The mint address of the NFT

try {
    $result = $apiInstance->solanaGetNFTOwnerAdvanced($network, $mint_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaGetNFTOwnerAdvanced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID |
 **mint_address** | **string**| The mint address of the NFT |

### Return type

[**\OpenAPI\Client\Model\NFTOwnerAdvancedResponse**](../Model/NFTOwnerAdvancedResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTsCandyMachineId()`

```php
solanaGetNFTsCandyMachineId($get_candy_machine_id_request): \OpenAPI\Client\Model\GetCandyMachineIDResponse
```

Get the ID of the candy machine of an NFT

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/get-nft-candy-machine-id\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Get the candy machine ID from where the NFT came, if any. NFTs can also be minted without a candy machine.  It's also possible that we return \"Not Found\" when the NFT actually did come from a version of a candy machine. We check for the most popular versions of candy machine, but it is possible that someone creates their own candy machine version and mints NFTs from it.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_candy_machine_id_request = new \OpenAPI\Client\Model\GetCandyMachineIDRequest(); // \OpenAPI\Client\Model\GetCandyMachineIDRequest

try {
    $result = $apiInstance->solanaGetNFTsCandyMachineId($get_candy_machine_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaGetNFTsCandyMachineId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_candy_machine_id_request** | [**\OpenAPI\Client\Model\GetCandyMachineIDRequest**](../Model/GetCandyMachineIDRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetCandyMachineIDResponse**](../Model/GetCandyMachineIDResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaSearchNFTs()`

```php
solanaSearchNFTs($nft_search_request): \OpenAPI\Client\Model\NFTSearchResponse[]
```

Search NFTs on Solana

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-nft/search-nfts\" target=\"_blank\">See examples (Python, JavaScript)</a>.  With this endpoint, you can search for NFTs by their symbol, name of NFTs, uuid, configuration address, and update authority.  The output is a list of NFTs that match your query.  You can also provide multiple search clauses, such as the update authority (`update_authority=\"G17UmNGnMJ851x3M1JXocgpft1afcYedjPuFpo1ohhCk\"`) and symbol begins with \"Sol\" (`symbol=\"Sol\", symbol_search_method='begins_with'`).  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaNFTApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nft_search_request = new \OpenAPI\Client\Model\NFTSearchRequest(); // \OpenAPI\Client\Model\NFTSearchRequest

try {
    $result = $apiInstance->solanaSearchNFTs($nft_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaNFTApi->solanaSearchNFTs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nft_search_request** | [**\OpenAPI\Client\Model\NFTSearchRequest**](../Model/NFTSearchRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\NFTSearchResponse[]**](../Model/NFTSearchResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
