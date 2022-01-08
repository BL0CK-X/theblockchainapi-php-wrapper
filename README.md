# OpenAPIClient-php

# About

Our vision is to make it super easy to interact with the decentralized web. We want you to be able to do this in any coding language and do it easily and quickly. 

You're a key part of our vision. We love feature requests! <a href=\"#section/Feature-Requests\">Make one!</a>

# How to Use the API

To use the API, you simply need to create an API key pair.

Doing so takes less than a minute. Simply go to <a target=\"_blank\" href=\"https://dashboard.theblockchainapi.com\">the dashboard</a>, create an account, and generate a key pair. You can now use this pair to make API requests. You must create your first pair via the dashboard.

# Feature Requests

Got a feature request? Submit it as an issue on <a target=\"_blank\" href=\"https://github.com/BL0CK-X/the-blockchain-api/issues/new/choose\">our GitHub repo</a> or [email us](mailto:info@theblockchainapi.com).

# Contact

<figure>
    <img 
        width=\"40px\"
        height=\"40px\" 
        src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/phone.svg\"
    />
    <figcaption style=\"textAlign:center;\">Text / Call: +1 (415) 888 4745 </figcaption>
</figure> <a href=\"mailto:info@theblockchainapi.com\" target=\"_blank\">
    <figure>
        <img 
            width=\"40px\"
            height=\"40px\" 
            src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/email.svg\"
        />
        <figcaption style=\"textAlign:center;\">Email us: info@theblockchainapi.com</figcaption>
    </figure>
</a> <a href=\"https://discord.gg/d49yzrZRAF\" target=\"_blank\">
    <figure>
        <img 
            width=\"40px\"
            height=\"40px\" 
            src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/discord.svg\"
        />
        <figcaption style=\"textAlign:center;\">Join our Discord</figcaption>
    </figure>
</a> <a href=\"https://twitter.com/_BlockX_\" target=\"_blank\">
    <figure>
        <img 
            width=\"40px\"
            height=\"40px\" 
            src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/twitter.svg\"
        />
         <figcaption style=\"textAlign:center;\">Follow us on Twitter</figcaption>
    </figure>
</a> <a href=\"https://github.com/BL0CK-X/the-blockchain-api\" target=\"_blank\">
    <figure>
        <img 
            width=\"40px\"
            height=\"40px\" 
            src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/github.svg\"
        />
        <figcaption style=\"textAlign:center;\">Star us on Github</figcaption>
    </figure>
</a>

# Security

Common dogma is to never give out your seed phrase. We agree. It's a matter of security, and anyone who has your seed phrase can irreversibly empty your wallet. 

<b>When using an API endpoint that requires a seed phrase, we highly recommend that users use or create a wallet that they do not use as their primary wallet.</b> 

How you make this work depends on what you're doing. If you're minting an NFT for example, we recommend creating a new wallet and then transferring just enough SOL to that wallet to mint the NFT. This is possible on Solana because such transactions cost less than a penny. We will have more tutorials in the future that make it easier for you to be secure when using our API.

We have easy-to-use endpoints for <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1secret_recovery_phrase/post\">creating a new seed phrase</a> and then <a href=\"#tag/Solana-Wallet/paths/~1solana~1wallet~1public_key/post\">deriving a public key</a> to enable you to transfer to that new wallet.

Let's have a constructive dialog about this. Feel free to <a href=\"#section/Contact\">contact us</a>. I made a video discussing this matter <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.

Note: We have had a couple of individuals harrass and threaten us. These individuals did <b>not</b> try our API or speak to anyone who has used it. They simply saw that we require a seed phrase for certain endpoints and figured that the proper response was to attack us. (I explain why we do <a target=\"_blank\" href=\"https://youtu.be/m9unUb8Z9qU\">here</a>.) Such harrassment and threats are not only harmful, but they are also illegal, and we will report offenders. Do not harrass us. Rather, feel free to discuss your concerns with us and we will be more than happy to work with you to come up with a solution.

# Pricing

<b>Each user receives 500 free credits.</b>

You can learn more about our pricing <a href=\"https://dashboard.theblockchainapi.com/billing\" target=\"_blank\">here</a>. 

We frequently do custom plans. If our pricing doesn't work for you, <a href=\"#section/Contact\">contact us</a>.

If you have questions, concerns, feedback, or ideas, <a href=\"#section/Contact\">contact us</a>.

# SDKs / API Wrappers

We have examples using both our <a href=\"https://github.com/BL0CK-X/the-blockchain-api/tree/main/examples\" target=\"_blank\">Python wrapper and our JavaScript wrapper here</a>.

We have built a custom <a href=\"https://github.com/BL0CK-X/the-blockchain-api-python-wrapper\" target=\"_blank\">Python wrapper</a>.

`pip install theblockchainapi`

We also have published a <a href=\"https://github.com/BL0CK-X/theblockchainapi-javascript-wrapper\" target=\"_blank\">JavaScript Wrapper</a>.

`npm install theblockchainapi`

We also have auto-generated wrappers for the following languages:
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-go-wrapper\" target = \"_blank\">Go</a>
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-java-wrapper\" target = \"_blank\">Java</a>
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-kotlin-wrapper\" target = \"_blank\">Kotlin</a>
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-php-wrapper\" target = \"_blank\">PHP</a>
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-swift-wrapper\" target = \"_blank\">Swift5</a>
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-typescript-wrapper\" target = \"_blank\">TypeScript</a>

If you would like a different language as well, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.

If you run into any bugs with the wrappers, submit an issue <a href=\"https://github.com/BL0CK-X/theblockchainapi-wrappers/issues/new\" target=\"_blank\">here</a>.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new OpenAPI\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->uploadFile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.theblockchainapi.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FileApi* | [**uploadFile**](docs/Api/FileApi.md#uploadfile) | **POST** /file | Upload a file
*SolanaAccountApi* | [**solanaGetAccount**](docs/Api/SolanaAccountApi.md#solanagetaccount) | **GET** /solana/account/{network}/{public_key} | Get the details of an account on Solana
*SolanaAccountApi* | [**solanaGetAccountIsCandyMachine**](docs/Api/SolanaAccountApi.md#solanagetaccountiscandymachine) | **GET** /solana/account/{network}/{public_key}/is_candy_machine | Get if account is candy machine
*SolanaAccountApi* | [**solanaGetAccountIsNFT**](docs/Api/SolanaAccountApi.md#solanagetaccountisnft) | **GET** /solana/account/{network}/{public_key}/is_nft | Get if account is NFT
*SolanaCandyMachineApi* | [**solanaCreateTestCandyMachine**](docs/Api/SolanaCandyMachineApi.md#solanacreatetestcandymachine) | **POST** /solana/nft/candy_machine | Create a test CM
*SolanaCandyMachineApi* | [**solanaGetAllNFTsFromCandyMachine**](docs/Api/SolanaCandyMachineApi.md#solanagetallnftsfromcandymachine) | **GET** /solana/nft/candy_machine/{network}/{candy_machine_id}/nfts | Get CM&#39;s NFTs
*SolanaCandyMachineApi* | [**solanaGetCandyMachineMetadata**](docs/Api/SolanaCandyMachineApi.md#solanagetcandymachinemetadata) | **POST** /solana/nft/candy_machine/metadata | Get a CM&#39;s metadata
*SolanaCandyMachineApi* | [**solanaListAllCandyMachines**](docs/Api/SolanaCandyMachineApi.md#solanalistallcandymachines) | **GET** /solana/nft/candy_machine/list | List all CMs
*SolanaCandyMachineApi* | [**solanaMintFromCandyMachine**](docs/Api/SolanaCandyMachineApi.md#solanamintfromcandymachine) | **POST** /solana/nft/candy_machine/mint | Mint from a CM
*SolanaCandyMachineApi* | [**solanaSearchCandyMachines**](docs/Api/SolanaCandyMachineApi.md#solanasearchcandymachines) | **POST** /solana/nft/candy_machine/search | Search CMs
*SolanaNFTApi* | [**solanaCreateNFT**](docs/Api/SolanaNFTApi.md#solanacreatenft) | **POST** /solana/nft | Create an NFT on Solana
*SolanaNFTApi* | [**solanaGetNFT**](docs/Api/SolanaNFTApi.md#solanagetnft) | **GET** /solana/nft/{network}/{mint_address} | Get an NFT&#39;s metadata
*SolanaNFTApi* | [**solanaGetNFTMintFee**](docs/Api/SolanaNFTApi.md#solanagetnftmintfee) | **GET** /solana/nft/mint/fee | Get the NFT mint fee
*SolanaNFTApi* | [**solanaGetNFTOwner**](docs/Api/SolanaNFTApi.md#solanagetnftowner) | **GET** /solana/nft/{network}/{mint_address}/owner | Get owner of an NFT
*SolanaNFTApi* | [**solanaGetNFTsCandyMachineId**](docs/Api/SolanaNFTApi.md#solanagetnftscandymachineid) | **POST** /solana/nft/candy_machine_id | Get the ID of the candy machine of an NFT
*SolanaNFTApi* | [**solanaSearchNFTs**](docs/Api/SolanaNFTApi.md#solanasearchnfts) | **POST** /solana/nft/search | Search NFTs on Solana
*SolanaSPLTokenApi* | [**solanaGetSPLToken**](docs/Api/SolanaSPLTokenApi.md#solanagetspltoken) | **GET** /solana/spl-token/{network}/{public_key} | Get SPL token metadata
*SolanaTransactionApi* | [**solanaGetTransaction**](docs/Api/SolanaTransactionApi.md#solanagettransaction) | **GET** /solana/transaction/{network}/{tx_signature} | Get the details of a transaction made on Solana
*SolanaWalletApi* | [**solanaDeriveAssociatedTokenAccountAddress**](docs/Api/SolanaWalletApi.md#solanaderiveassociatedtokenaccountaddress) | **GET** /solana/wallet/{public_key}/associated_token_account/{mint_address} | Derive an associated token account address
*SolanaWalletApi* | [**solanaDerivePrivateKey**](docs/Api/SolanaWalletApi.md#solanaderiveprivatekey) | **POST** /solana/wallet/private_key | Derive private key
*SolanaWalletApi* | [**solanaDerivePublicKey**](docs/Api/SolanaWalletApi.md#solanaderivepublickey) | **POST** /solana/wallet/public_key | Derive public key
*SolanaWalletApi* | [**solanaGeneratePrivateKey**](docs/Api/SolanaWalletApi.md#solanagenerateprivatekey) | **POST** /solana/wallet/generate/private_key | Generate private key
*SolanaWalletApi* | [**solanaGenerateSecretRecoveryPhrase**](docs/Api/SolanaWalletApi.md#solanageneratesecretrecoveryphrase) | **POST** /solana/wallet/generate/secret_recovery_phrase | Generate secret phrase
*SolanaWalletApi* | [**solanaGetAirdrop**](docs/Api/SolanaWalletApi.md#solanagetairdrop) | **POST** /solana/wallet/airdrop | Get an airdrop on devnet
*SolanaWalletApi* | [**solanaGetBalance**](docs/Api/SolanaWalletApi.md#solanagetbalance) | **POST** /solana/wallet/balance | Get wallet&#39;s balance in SOL or any SPL
*SolanaWalletApi* | [**solanaGetNFTsBelongingToWallet**](docs/Api/SolanaWalletApi.md#solanagetnftsbelongingtowallet) | **GET** /solana/wallet/{network}/{public_key}/nfts | Get address&#39;s NFTs
*SolanaWalletApi* | [**solanaGetTokensBelongingToWallet**](docs/Api/SolanaWalletApi.md#solanagettokensbelongingtowallet) | **GET** /solana/wallet/{network}/{public_key}/tokens | Get address&#39;s tokens and respective balances
*SolanaWalletApi* | [**solanaTransfer**](docs/Api/SolanaWalletApi.md#solanatransfer) | **POST** /solana/wallet/transfer | Transfer SOL, a token, or an NFT to another address

## Models

- [ATAResponse](docs/Model/ATAResponse.md)
- [Account](docs/Model/Account.md)
- [AccountContext](docs/Model/AccountContext.md)
- [AccountIsCandyMachine](docs/Model/AccountIsCandyMachine.md)
- [AccountIsNFT](docs/Model/AccountIsNFT.md)
- [AccountValue](docs/Model/AccountValue.md)
- [AirdropRequest](docs/Model/AirdropRequest.md)
- [B58PrivateKey](docs/Model/B58PrivateKey.md)
- [BalanceRequest](docs/Model/BalanceRequest.md)
- [BalanceResponse](docs/Model/BalanceResponse.md)
- [CandyMachineSearchRequest](docs/Model/CandyMachineSearchRequest.md)
- [CreateTestCandyMachineRequest](docs/Model/CreateTestCandyMachineRequest.md)
- [CreateTestCandyMachineResponse](docs/Model/CreateTestCandyMachineResponse.md)
- [GeneratePrivateKey](docs/Model/GeneratePrivateKey.md)
- [GetAllNFTsResponse](docs/Model/GetAllNFTsResponse.md)
- [GetAllNFTsResponseMintedNfts](docs/Model/GetAllNFTsResponseMintedNfts.md)
- [GetAllNFTsResponseUnmintedNfts](docs/Model/GetAllNFTsResponseUnmintedNfts.md)
- [GetCandyMachineIDRequest](docs/Model/GetCandyMachineIDRequest.md)
- [GetCandyMachineIDResponse](docs/Model/GetCandyMachineIDResponse.md)
- [GetCandyMetadataErrorResponse](docs/Model/GetCandyMetadataErrorResponse.md)
- [GetCandyMetadataRequest](docs/Model/GetCandyMetadataRequest.md)
- [GetCandyMetadataResponse](docs/Model/GetCandyMetadataResponse.md)
- [GetCandyMetadataResponseCreators](docs/Model/GetCandyMetadataResponseCreators.md)
- [GetFileResponse](docs/Model/GetFileResponse.md)
- [GetPublicKeyRequest](docs/Model/GetPublicKeyRequest.md)
- [GetSPLTokenResponse](docs/Model/GetSPLTokenResponse.md)
- [ListNFTsResponse](docs/Model/ListNFTsResponse.md)
- [MintNFTErrorResponse](docs/Model/MintNFTErrorResponse.md)
- [MintNFTRequest](docs/Model/MintNFTRequest.md)
- [MintNFTResponse](docs/Model/MintNFTResponse.md)
- [NFT](docs/Model/NFT.md)
- [NFTData](docs/Model/NFTData.md)
- [NFTMintErrorResponse](docs/Model/NFTMintErrorResponse.md)
- [NFTMintFee](docs/Model/NFTMintFee.md)
- [NFTMintRequest](docs/Model/NFTMintRequest.md)
- [NFTOwnerResponse](docs/Model/NFTOwnerResponse.md)
- [NFTSearchRequest](docs/Model/NFTSearchRequest.md)
- [NFTSearchResponse](docs/Model/NFTSearchResponse.md)
- [PrivateKey](docs/Model/PrivateKey.md)
- [PublicKey](docs/Model/PublicKey.md)
- [SecretPhrase](docs/Model/SecretPhrase.md)
- [SecretRecoveryPhrase](docs/Model/SecretRecoveryPhrase.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionResult](docs/Model/TransactionResult.md)
- [TransferRequest](docs/Model/TransferRequest.md)
- [TransferResponse](docs/Model/TransferResponse.md)
- [UploadFileRequest](docs/Model/UploadFileRequest.md)
- [Wallet](docs/Model/Wallet.md)

## Authorization

### APIKeyID

- **Type**: API key
- **API key parameter name**: APIKeyID
- **Location**: HTTP header



### APISecretKey

- **Type**: API key
- **API key parameter name**: APISecretKey
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@theblockchainapi.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `null`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
