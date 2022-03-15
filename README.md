# OpenAPIClient-php

# About

Our vision is to make it super easy to interact with the decentralized web. We want you to be able to do this in any coding language and do it easily and quickly. 

You're a key part of our vision. We love feature requests! <a href=\"#section/Feature-Requests\">Make one!</a>

# How to Use the API

To use the API, you simply need to create an API key pair.

Doing so takes less than a minute. Simply go to <a target=\"_blank\" href=\"https://dashboard.blockchainapi.com\">the dashboard</a>, create an account, and generate a key pair. You can now use this pair to make API requests. You must create your first pair via the dashboard.

# Feature Requests

Got a feature request? Submit it as an issue on <a target=\"_blank\" href=\"https://github.com/BL0CK-X/the-blockchain-api/issues/new/choose\">our GitHub repo</a> or [email us](mailto:info@blockchainapi.com).

# Contact

<figure>
    <img 
        width=\"40px\"
        height=\"40px\" 
        src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/phone.svg\"
    />
    <figcaption style=\"textAlign:center;\">Text / Call: +1 (415) 888 4745 </figcaption>
</figure> <a href=\"mailto:info@blockchainapi.com\" target=\"_blank\">
    <figure>
        <img 
            width=\"40px\"
            height=\"40px\" 
            src=\"https://theblockchainapi-docs.s3.amazonaws.com/icons/email.svg\"
        />
        <figcaption style=\"textAlign:center;\">Email us: info@blockchainapi.com</figcaption>
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

<b>Each user receives 100 free credits. Each user can call endpoints that cost 0 credits up to 50 requests/min before being rate-limited.</b> Thereafter, they can upgrade to have a higher rate limit. The purpose of this is to act like a free trial -- not to function like a freemium model where one can stay on the free tier indefinitely.

You can learn more about our pricing <a href=\"https://dashboard.blockchainapi.com/billing\" target=\"_blank\">here</a>. 

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
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-csharp-wrapper\" target = \"_blank\">C#</a>
- <a href=\"https://github.com/BL0CK-X/theblockchainapi-dart-wrapper\" target = \"_blank\">Dart</a>

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


$apiInstance = new OpenAPI\Client\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_reference = new \OpenAPI\Client\Model\EndpointReference(); // \OpenAPI\Client\Model\EndpointReference

try {
    $apiInstance->deleteEndpoint($endpoint_reference);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->deleteEndpoint: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.blockchainapi.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EndpointApi* | [**deleteEndpoint**](docs/Api/EndpointApi.md#deleteendpoint) | **POST** /endpoint/delete | Delete an endpoint
*EndpointApi* | [**getEndpoint**](docs/Api/EndpointApi.md#getendpoint) | **POST** /endpoint/metadata | Get an endpoint&#39;s metadata
*EndpointApi* | [**listEndpoints**](docs/Api/EndpointApi.md#listendpoints) | **GET** /endpoint/list | List all endpoints
*EndpointApi* | [**setEndpoint**](docs/Api/EndpointApi.md#setendpoint) | **POST** /endpoint | Create / update an endpoint
*FileApi* | [**uploadFile**](docs/Api/FileApi.md#uploadfile) | **POST** /file | Upload a file
*ProjectApi* | [**createProject**](docs/Api/ProjectApi.md#createproject) | **POST** /project | Create a project
*ProjectApi* | [**createProjectVersion**](docs/Api/ProjectApi.md#createprojectversion) | **POST** /project/{project_id}/{version} | Create a new project version
*ProjectApi* | [**deleteProject**](docs/Api/ProjectApi.md#deleteproject) | **DELETE** /project/{project_id} | Delete a project
*ProjectApi* | [**deleteProjectVersion**](docs/Api/ProjectApi.md#deleteprojectversion) | **DELETE** /project/{project_id}/{version} | Delete a project version
*ProjectApi* | [**getProject**](docs/Api/ProjectApi.md#getproject) | **GET** /project/{project_id} | Get a project&#39;s metadata
*ProjectApi* | [**getProjectDeploymentStatus**](docs/Api/ProjectApi.md#getprojectdeploymentstatus) | **POST** /project/{project_id}/deploy/status | Get deployment status
*ProjectApi* | [**getProjectDeploymentURL**](docs/Api/ProjectApi.md#getprojectdeploymenturl) | **POST** /project/{project_id}/deploy/url | Get the deployment URL
*ProjectApi* | [**getProjectStats**](docs/Api/ProjectApi.md#getprojectstats) | **GET** /project/{project_id}/stats | Get a project&#39;s stats
*ProjectApi* | [**listProjects**](docs/Api/ProjectApi.md#listprojects) | **GET** /project/list | List projects
*ProjectApi* | [**updateProject**](docs/Api/ProjectApi.md#updateproject) | **POST** /project/{project_id} | Update a project
*ProjectApi* | [**updateProjectDocumentation**](docs/Api/ProjectApi.md#updateprojectdocumentation) | **POST** /project/{project_id}/{version}/documentation | Update the project&#39;s documentation
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
*SolanaNFTMarketplacesApi* | [**solanaBuyNFT**](docs/Api/SolanaNFTMarketplacesApi.md#solanabuynft) | **POST** /solana/nft/marketplaces/{exchange}/buy/{network}/{mint_address} | Buy
*SolanaNFTMarketplacesApi* | [**solanaDelistNFT**](docs/Api/SolanaNFTMarketplacesApi.md#solanadelistnft) | **POST** /solana/nft/marketplaces/{exchange}/delist/{network}/{mint_address} | Delist
*SolanaNFTMarketplacesApi* | [**solanaGetNFTListing**](docs/Api/SolanaNFTMarketplacesApi.md#solanagetnftlisting) | **GET** /solana/nft/marketplaces/listing/{network}/{mint_address} | Get NFT Listing
*SolanaNFTMarketplacesApi* | [**solanaGetNFTMarketplaceAnalytics**](docs/Api/SolanaNFTMarketplacesApi.md#solanagetnftmarketplaceanalytics) | **POST** /solana/nft/marketplaces/analytics | Get NFT Analytics
*SolanaNFTMarketplacesApi* | [**solanaGetNFTMarketplaceMarketShare**](docs/Api/SolanaNFTMarketplacesApi.md#solanagetnftmarketplacemarketshare) | **GET** /solana/nft/marketplaces/analytics/market_share | Get Marketplace Market Share
*SolanaNFTMarketplacesApi* | [**solanaGetNFTMarketplaceRecentTransactions**](docs/Api/SolanaNFTMarketplacesApi.md#solanagetnftmarketplacerecenttransactions) | **GET** /solana/nft/marketplaces/analytics/recent_transactions | Get Recent NFT Transactions
*SolanaNFTMarketplacesApi* | [**solanaListNFT**](docs/Api/SolanaNFTMarketplacesApi.md#solanalistnft) | **POST** /solana/nft/marketplaces/{exchange}/list/{network}/{mint_address} | List
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
*SolanaWalletApi* | [**solanaGetWalletTransactions**](docs/Api/SolanaWalletApi.md#solanagetwallettransactions) | **GET** /solana/wallet/{network}/{public_key}/transactions | Get address&#39;s associated transaction signatures
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
- [BuyRequest](docs/Model/BuyRequest.md)
- [BuyResponse](docs/Model/BuyResponse.md)
- [CandyMachineSearchRequest](docs/Model/CandyMachineSearchRequest.md)
- [CreateTestCandyMachineRequest](docs/Model/CreateTestCandyMachineRequest.md)
- [CreateTestCandyMachineResponse](docs/Model/CreateTestCandyMachineResponse.md)
- [DelistRequest](docs/Model/DelistRequest.md)
- [DelistResponse](docs/Model/DelistResponse.md)
- [DoubleTransferResponse](docs/Model/DoubleTransferResponse.md)
- [Endpoint](docs/Model/Endpoint.md)
- [EndpointReference](docs/Model/EndpointReference.md)
- [FeePayerWallet](docs/Model/FeePayerWallet.md)
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
- [GetNFTListingResponse](docs/Model/GetNFTListingResponse.md)
- [GetPublicKeyRequest](docs/Model/GetPublicKeyRequest.md)
- [GetSPLTokenResponse](docs/Model/GetSPLTokenResponse.md)
- [Group](docs/Model/Group.md)
- [ListNFTsResponse](docs/Model/ListNFTsResponse.md)
- [ListRequest](docs/Model/ListRequest.md)
- [ListResponse](docs/Model/ListResponse.md)
- [MintNFTErrorResponse](docs/Model/MintNFTErrorResponse.md)
- [MintNFTRequest](docs/Model/MintNFTRequest.md)
- [MintNFTResponse](docs/Model/MintNFTResponse.md)
- [NFT](docs/Model/NFT.md)
- [NFTAnalyticsRequest](docs/Model/NFTAnalyticsRequest.md)
- [NFTAnalyticsResponse](docs/Model/NFTAnalyticsResponse.md)
- [NFTAnalyticsResponseTransactionHistory](docs/Model/NFTAnalyticsResponseTransactionHistory.md)
- [NFTData](docs/Model/NFTData.md)
- [NFTMintErrorResponse](docs/Model/NFTMintErrorResponse.md)
- [NFTMintFee](docs/Model/NFTMintFee.md)
- [NFTMintRequest](docs/Model/NFTMintRequest.md)
- [NFTOwnerResponse](docs/Model/NFTOwnerResponse.md)
- [NFTSearchRequest](docs/Model/NFTSearchRequest.md)
- [NFTSearchResponse](docs/Model/NFTSearchResponse.md)
- [NFTTransaction](docs/Model/NFTTransaction.md)
- [ParameterSpecification](docs/Model/ParameterSpecification.md)
- [PrivateKey](docs/Model/PrivateKey.md)
- [Project](docs/Model/Project.md)
- [ProjectCreateRequest](docs/Model/ProjectCreateRequest.md)
- [ProjectDeploymentURL](docs/Model/ProjectDeploymentURL.md)
- [PublicKey](docs/Model/PublicKey.md)
- [SecretPhrase](docs/Model/SecretPhrase.md)
- [SecretRecoveryPhrase](docs/Model/SecretRecoveryPhrase.md)
- [StatItem](docs/Model/StatItem.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionResult](docs/Model/TransactionResult.md)
- [TransferRequest](docs/Model/TransferRequest.md)
- [TransferResponse](docs/Model/TransferResponse.md)
- [TransferResponseCompiled](docs/Model/TransferResponseCompiled.md)
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

info@blockchainapi.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `null`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
