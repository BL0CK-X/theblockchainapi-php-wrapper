# OpenAPI\Client\SolanaWalletApi

All URIs are relative to https://api.theblockchainapi.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**solanaDeriveAssociatedTokenAccountAddress()**](SolanaWalletApi.md#solanaDeriveAssociatedTokenAccountAddress) | **GET** /solana/wallet/{public_key}/associated_token_account/{mint_address} | Derive an associated token account address
[**solanaDerivePublicKey()**](SolanaWalletApi.md#solanaDerivePublicKey) | **POST** /solana/wallet/public_key | Derive public key
[**solanaGenerateSecretRecoveryPhrase()**](SolanaWalletApi.md#solanaGenerateSecretRecoveryPhrase) | **POST** /solana/wallet/secret_recovery_phrase | Generate secret phrase
[**solanaGetAirdrop()**](SolanaWalletApi.md#solanaGetAirdrop) | **POST** /solana/wallet/airdrop | Get an airdrop on devnet
[**solanaGetBalance()**](SolanaWalletApi.md#solanaGetBalance) | **POST** /solana/wallet/balance | Get wallet&#39;s balance in SOL or any SPL
[**solanaGetNFTsBelongingToWallet()**](SolanaWalletApi.md#solanaGetNFTsBelongingToWallet) | **GET** /solana/wallet/{network}/{public_key}/nfts | Get address&#39;s NFTs
[**solanaGetTokensBelongingToWallet()**](SolanaWalletApi.md#solanaGetTokensBelongingToWallet) | **GET** /solana/wallet/{network}/{public_key}/tokens | Get address&#39;s tokens and respective balances
[**solanaTransfer()**](SolanaWalletApi.md#solanaTransfer) | **POST** /solana/wallet/transfer | Transfer SOL, a token, or an NFT to another address


## `solanaDeriveAssociatedTokenAccountAddress()`

```php
solanaDeriveAssociatedTokenAccountAddress($public_key, $mint_address): \OpenAPI\Client\Model\ATAResponse
```

Derive an associated token account address

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/derive-associated-token-account-address\" target=\"_blank\">See example (Python, JavaScript)</a>.      *Each wallet can own tokens, but in Solana, each token is actually held by an <a href=\"https://spl.solana.com/associated-token-account\" target=\"_blank\">associated token account</a> (ATA), which is an account specific for a token owned by the wallet. When you transfer an SPL token, such as Serum, or transfer an NFT, you're transfering from an ATA you own to another person's ATA for that specific token. With this endpoint, you can derive an associated token address given a wallet and a token address.*  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_key = 31LKs39pjT5oj6fWjC3F76dHWf9489asCthmgj8wu7pj; // string | The public key of the wallet
$mint_address = 7EWJNaNYfPYMaqzdAAa4ps5kpqW95B7VHsjhW1kr18sj; // string | The mint address of the token (either SPL or NFT)

try {
    $result = $apiInstance->solanaDeriveAssociatedTokenAccountAddress($public_key, $mint_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaDeriveAssociatedTokenAccountAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_key** | **string**| The public key of the wallet |
 **mint_address** | **string**| The mint address of the token (either SPL or NFT) |

### Return type

[**\OpenAPI\Client\Model\ATAResponse**](../Model/ATAResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaDerivePublicKey()`

```php
solanaDerivePublicKey($get_public_key_request): \OpenAPI\Client\Model\PublicKey
```

Derive public key

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/derive-public-key\" target=\"_blank\">See examples (Python, JavaScript)</a>.      Returns a public key given a secret recovery phrase and optionally a passphrase and a derivation path.  A wallet is defined by a public key. A public key is derived from a combination of seed phrase, derivation path, and passphrase. Changing any *one* of these three will change the public key output.  *You can generate a unique public key with each combination of secret recovery phrase, passphrase, and derivation path. Thus, with a single secret recovery phrase, you can generate many public keys. If you are just starting, just supply the secret recovery phrase you generated with the Solana Wallet Secret Recovery Phrase endpoint.*  *If you are trying to get a public key that already exists (e.g., created in the Phantom wallet), make sure you use the correct derivation path and passphrase. To read more about that, see the descriptions of those parameters below.*  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_public_key_request = new \OpenAPI\Client\Model\GetPublicKeyRequest(); // \OpenAPI\Client\Model\GetPublicKeyRequest

try {
    $result = $apiInstance->solanaDerivePublicKey($get_public_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaDerivePublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_public_key_request** | [**\OpenAPI\Client\Model\GetPublicKeyRequest**](../Model/GetPublicKeyRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PublicKey**](../Model/PublicKey.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGenerateSecretRecoveryPhrase()`

```php
solanaGenerateSecretRecoveryPhrase(): \OpenAPI\Client\Model\SecretPhrase
```

Generate secret phrase

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/generate-secret-phrase\" target=\"_blank\">See examples (Python, JavaScript)</a>.  Use this endpoint to securely and randomly generate a secret recovery phrase for a Solana wallet. Complete the wallet creation by using the endpoint below.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->solanaGenerateSecretRecoveryPhrase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaGenerateSecretRecoveryPhrase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SecretPhrase**](../Model/SecretPhrase.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetAirdrop()`

```php
solanaGetAirdrop($airdrop_request): \OpenAPI\Client\Model\TransferResponse
```

Get an airdrop on devnet

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/get-airdrop\" target=\"_blank\">See examples (Python, JavaScript)</a>.      Use this endpoint to get an airdrop of SOL on the devnet (not real SOL). Amount of 0.015,  which is the minimum amount of SOL you need to mint a Metaplex NFT and then transfer it to another wallet.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$airdrop_request = new \OpenAPI\Client\Model\AirdropRequest(); // \OpenAPI\Client\Model\AirdropRequest

try {
    $result = $apiInstance->solanaGetAirdrop($airdrop_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaGetAirdrop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **airdrop_request** | [**\OpenAPI\Client\Model\AirdropRequest**](../Model/AirdropRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TransferResponse**](../Model/TransferResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetBalance()`

```php
solanaGetBalance($balance_request): \OpenAPI\Client\Model\BalanceResponse
```

Get wallet's balance in SOL or any SPL

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/get-wallet-balance\" target=\"_blank\">See examples (Python, JavaScript)</a>.      See the balance of a wallet in SOL or any SPL token.  To get the balance of an SPL token, supply the `mint_address` of the SPL token. The list of SPL tokens can be viewed <a href=\"https://raw.githubusercontent.com/solana-labs/token-list/main/src/tokens/solana.tokenlist.json\" target=\"_blank\">here</a>.  You can also use this endpoint to see whether or not a person owns an NFT. Just supply the `mint_address` of the NFT. A balance of \"1\" means the person owns the NFT, and a balance of \"0\" means the person does not own the NFT. This works in most cases, but we are aware of one edge case where a balance of \"0\" will show up for a person who is actually the owner of the NFT. We just recommend using the <a href=\"#operation/solanaGetNFTOwner\">getNFTOwner</a> endpoint and comparing that output to the expected address.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_request = new \OpenAPI\Client\Model\BalanceRequest(); // \OpenAPI\Client\Model\BalanceRequest

try {
    $result = $apiInstance->solanaGetBalance($balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaGetBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_request** | [**\OpenAPI\Client\Model\BalanceRequest**](../Model/BalanceRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BalanceResponse**](../Model/BalanceResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetNFTsBelongingToWallet()`

```php
solanaGetNFTsBelongingToWallet($network, $public_key): \OpenAPI\Client\Model\ListNFTsResponse
```

Get address's NFTs

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/get-wallet-nfts\" target=\"_blank\">See examples (Python, JavaScript)</a>.      See the NFTs that belong to a given public key address  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID (devnet, mainnet-beta)
$public_key = 8WRsGBaDcs1X7bHWr4Ad5Nx3bW29BkcmEbyavrLXDC4i; // string | The public key of the account whose list of owned NFTs you want to get

try {
    $result = $apiInstance->solanaGetNFTsBelongingToWallet($network, $public_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaGetNFTsBelongingToWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID (devnet, mainnet-beta) |
 **public_key** | **string**| The public key of the account whose list of owned NFTs you want to get |

### Return type

[**\OpenAPI\Client\Model\ListNFTsResponse**](../Model/ListNFTsResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaGetTokensBelongingToWallet()`

```php
solanaGetTokensBelongingToWallet($network, $public_key, $list_tokens_request): object[]
```

Get address's tokens and respective balances

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/get-wallet-token-holdings\" target=\"_blank\">See examples (Python, JavaScript)</a>.      See the token holdings of a given public key address  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = mainnet-beta; // string | The network ID (devnet, mainnet-beta)
$public_key = GKNcUmNacSJo4S2Kq3DuYRYRGw3sNUfJ4tyqd198t6vQ; // string | The public key of the account whose list of owned NFTs you want to get
$list_tokens_request = new \OpenAPI\Client\Model\ListTokensRequest(); // \OpenAPI\Client\Model\ListTokensRequest

try {
    $result = $apiInstance->solanaGetTokensBelongingToWallet($network, $public_key, $list_tokens_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaGetTokensBelongingToWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The network ID (devnet, mainnet-beta) |
 **public_key** | **string**| The public key of the account whose list of owned NFTs you want to get |
 **list_tokens_request** | [**\OpenAPI\Client\Model\ListTokensRequest**](../Model/ListTokensRequest.md)|  | [optional]

### Return type

**object[]**

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `solanaTransfer()`

```php
solanaTransfer($transfer_request): \OpenAPI\Client\Model\TransferResponse
```

Transfer SOL, a token, or an NFT to another address

<a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/transfer-sol\" target=\"_blank\">See transfer SOL example (Python, JavaScript)</a>.  <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples/solana-wallet/transfer-nft\" target=\"_blank\">See transfer NFT example (can also be used for SPL token) (Python, JavaScript)</a>.  Transfer SOL, a token or an NFT to another address. If you're transferring an NFT, supply the `mint` (the address of the mint) for the `token_address`.  SENDER: Note that the wallet information (`secret_recovery_phrase`, `passphrase`, `derivation_path`) is used to authorize the sending of the tokens and identifies the source of the tokens.   RECEIVER: `recipient_address` identifies the receiver. This is entirely separate from the information used for the SENDER above. So, in this API call, there are two wallets involved, but only one (namely, the SENDER) is needed to authorize the transaction.  If you're transfering a token, supply the token address found on the explorer (e.g., see `SRMuApVNdxXokk5GT7XD5cUUgXMBCoAz2LHeuAoKWRt` for <a href=\"https://explorer.solana.com/address/SRMuApVNdxXokk5GT7XD5cUUgXMBCoAz2LHeuAoKWRt\" target=\"_blank\">Serum Token</a>) for the `token_address`. If you're transferring SOL, do not supply a value for `token_address`.  `Cost: 1 Credit` (<a href=\"#section/Pricing\">See Pricing</a>)

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


$apiInstance = new OpenAPI\Client\Api\SolanaWalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer_request = new \OpenAPI\Client\Model\TransferRequest(); // \OpenAPI\Client\Model\TransferRequest

try {
    $result = $apiInstance->solanaTransfer($transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolanaWalletApi->solanaTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer_request** | [**\OpenAPI\Client\Model\TransferRequest**](../Model/TransferRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\TransferResponse**](../Model/TransferResponse.md)

### Authorization

[APIKeyID](../../README.md#APIKeyID), [APISecretKey](../../README.md#APISecretKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
