# OpenAPI\Client\WalletApi

All URIs are relative to https://api.blockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**derivePrivateKey()**](WalletApi.md#derivePrivateKey) | **POST** /{blockchain}/wallet/private_key | Derive private key
[**deriveWalletIdentifier()**](WalletApi.md#deriveWalletIdentifier) | **POST** /{blockchain}/wallet/identifier | Derive wallet identifier
[**generatePrivateKey()**](WalletApi.md#generatePrivateKey) | **POST** /{blockchain}/wallet/generate/private_key | Generate private key
[**generateSeedPhrase()**](WalletApi.md#generateSeedPhrase) | **POST** /{blockchain}/wallet/generate/secret_recovery_phrase | Generate seed phrase
[**getAirdrop()**](WalletApi.md#getAirdrop) | **POST** /{blockchain}/wallet/airdrop | Get an airdrop
[**getBalance()**](WalletApi.md#getBalance) | **POST** /{blockchain}/wallet/balance | Get wallet&#39;s balance of X
[**transfer()**](WalletApi.md#transfer) | **POST** /{blockchain}/wallet/transfer | Transfer crypto, a token, or an NFT to another wallet


## `derivePrivateKey()`

```php
derivePrivateKey($blockchain, $supply_wallet_request): \OpenAPI\Client\Model\GeneralGeneratePrivateKeyResponse
```

Derive private key

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/derive-private-key\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to securely derive a private key for a wallet.   For example, if you have a seed phrase and want to derive the corresponding private key, use this endpoint.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$supply_wallet_request = new \OpenAPI\Client\Model\SupplyWalletRequest(); // \OpenAPI\Client\Model\SupplyWalletRequest

try {
    $result = $apiInstance->derivePrivateKey($blockchain, $supply_wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->derivePrivateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **supply_wallet_request** | [**\OpenAPI\Client\Model\SupplyWalletRequest**](../Model/SupplyWalletRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\GeneralGeneratePrivateKeyResponse**](../Model/GeneralGeneratePrivateKeyResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deriveWalletIdentifier()`

```php
deriveWalletIdentifier($blockchain, $supply_wallet_request): \OpenAPI\Client\Model\WalletIdentifiers
```

Derive wallet identifier

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/derive-wallet-identifier\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Derive the identifier for a wallet.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$supply_wallet_request = new \OpenAPI\Client\Model\SupplyWalletRequest(); // \OpenAPI\Client\Model\SupplyWalletRequest

try {
    $result = $apiInstance->deriveWalletIdentifier($blockchain, $supply_wallet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->deriveWalletIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **supply_wallet_request** | [**\OpenAPI\Client\Model\SupplyWalletRequest**](../Model/SupplyWalletRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WalletIdentifiers**](../Model/WalletIdentifiers.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePrivateKey()`

```php
generatePrivateKey($blockchain): \OpenAPI\Client\Model\GeneralGeneratePrivateKeyResponse
```

Generate private key

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/generate-private-key\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to securely and randomly generate a private key for a wallet.   `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use

try {
    $result = $apiInstance->generatePrivateKey($blockchain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->generatePrivateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |

### Return type

[**\OpenAPI\Client\Model\GeneralGeneratePrivateKeyResponse**](../Model/GeneralGeneratePrivateKeyResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSeedPhrase()`

```php
generateSeedPhrase($blockchain, $generate_seed_phrase_request): \OpenAPI\Client\Model\GeneralSecretPhrase
```

Generate seed phrase

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/generate-secret-phrase\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to securely and randomly generate a seed phrase for a wallet.   `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$generate_seed_phrase_request = new \OpenAPI\Client\Model\GenerateSeedPhraseRequest(); // \OpenAPI\Client\Model\GenerateSeedPhraseRequest

try {
    $result = $apiInstance->generateSeedPhrase($blockchain, $generate_seed_phrase_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->generateSeedPhrase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **generate_seed_phrase_request** | [**\OpenAPI\Client\Model\GenerateSeedPhraseRequest**](../Model/GenerateSeedPhraseRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GeneralSecretPhrase**](../Model/GeneralSecretPhrase.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAirdrop()`

```php
getAirdrop($blockchain, $general_airdrop_request): \OpenAPI\Client\Model\GeneralTransactionMadeResponse
```

Get an airdrop

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/get-airdrop\" target=\"_blank\">See examples (Python, JavaScript)</a>.      - Ethereum: Receive an airdrop of 0.001 ETH on Ropsten (not real ETH).  - Solana: Use this endpoint to get an airdrop of SOL on the devnet (not real SOL). Amount of 0.015, which is the minimum amount of SOL you need to mint an NFT and then transfer it to another wallet.  `Cost: 0 Credit` (Free) (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$general_airdrop_request = new \OpenAPI\Client\Model\GeneralAirdropRequest(); // \OpenAPI\Client\Model\GeneralAirdropRequest

try {
    $result = $apiInstance->getAirdrop($blockchain, $general_airdrop_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getAirdrop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **general_airdrop_request** | [**\OpenAPI\Client\Model\GeneralAirdropRequest**](../Model/GeneralAirdropRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GeneralTransactionMadeResponse**](../Model/GeneralTransactionMadeResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalance()`

```php
getBalance($blockchain, $general_balance_request): \OpenAPI\Client\Model\GeneralBalanceResponse
```

Get wallet's balance of X

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/get-wallet-balance\" target=\"_blank\">See examples (Python, JavaScript)</a>.      See the balance of a wallet in the native blockchain currency (e.g., ETH, SOL) or any token (e.g., ERC-20, NFTs, SPL, etc.).  To get the balance of a specific token, supply the `token_blockchain_identifier` of the token.   You can also use this endpoint to see whether or not a person owns an NFT. Just supply the `token_blockchain_identifier` of the NFT. A balance of \"1\" means the person owns the NFT, and a balance of \"0\" means the person does not own the NFT.  `Cost: 0.25 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$general_balance_request = new \OpenAPI\Client\Model\GeneralBalanceRequest(); // \OpenAPI\Client\Model\GeneralBalanceRequest

try {
    $result = $apiInstance->getBalance($blockchain, $general_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **general_balance_request** | [**\OpenAPI\Client\Model\GeneralBalanceRequest**](../Model/GeneralBalanceRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GeneralBalanceResponse**](../Model/GeneralBalanceResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfer()`

```php
transfer($blockchain, $general_transfer_request): \OpenAPI\Client\Model\GeneralTransactionResponse
```

Transfer crypto, a token, or an NFT to another wallet

<a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/transfer-crypto-token-or-nft\" target=\"_blank\">See transfer ETH/SOL/crypto example (Python, JavaScript)</a>.  <a href=\"https://github.com/BL0CK-X/blockchain-api/tree/main/examples/wallet/transfer-crypto-token-or-nft\" target=\"_blank\">See transfer NFT/token example (Python, JavaScript)</a>.  This is a powerful function. It might be slightly confusing because there are several optional parameters, so take some time to review it.   This function can send - The native currency of the selected blockchain (e.g., SOL, ETH, BNB, etc.) - A token (e.g., an SPL token, ERC-20 token, etc.) - An NFT  You can sign and submit the transaction for confirmation; and you can select to simply return the compiled transaction so that you can submit it to the user for signing (e.g., via Phantom or Metamask; no private keys required in this case).  If you're transferring an NFT or a token, supply its respective `token_blockchain_identifier`.  SENDER: Note that the wallet information is used to authorize the sending of the tokens and identifies the source of the tokens. If `return_compiled_transaction = false`, we sign and submit the transaction (`wallet` is required in this case; do not provide a value for `sender_blockchain_identifier`). If `return_compiled_transaction = true`, we compile the transaction (`sender_blockchain_identifier` is required in this case; do not provide `wallet`).  RECIPIENT: `recipient_blockchain_identifier` identifies the receiver. This is entirely separate from the information used for the SENDER above. So, in this API call, there are two wallets involved, but only one (namely, the SENDER) is needed to authorize the transaction (if you want us to sign and submitting it).  FEE_PAYER (Solana only): The fee payer of the transaction defaults to `wallet` (or `sender_blockchain_identifier`). To set a different fee payer, provide a value for `fee_payer_wallet`.  `Cost: 2 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string | The blockchain you want to use
$general_transfer_request = new \OpenAPI\Client\Model\GeneralTransferRequest(); // \OpenAPI\Client\Model\GeneralTransferRequest

try {
    $result = $apiInstance->transfer($blockchain, $general_transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| The blockchain you want to use |
 **general_transfer_request** | [**\OpenAPI\Client\Model\GeneralTransferRequest**](../Model/GeneralTransferRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GeneralTransactionResponse**](../Model/GeneralTransactionResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
