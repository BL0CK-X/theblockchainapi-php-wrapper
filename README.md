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
</a> <a href=\"https://twitter.com/BlockchainAP1\" target=\"_blank\">
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

<b>Each user receives 50,000 free credits each month.</b> Each endpoint costs a certain amount credits. Scroll below to any endpoint (i.e., function) to see how much each endpoint costs. (Or CMD+F `Cost: 0 Credit`, for example)

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


$apiInstance = new OpenAPI\Client\Api\CCPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = project_WDQskRIfHQxj53N5mk5K; // string | The ID of the project. Created and returned when a project is created.
$payment_identifier = ["payment_97jA1szpVjrSI5EvOb5zxNQFq5CfrC"]; // string | You can supply either `payment_id` or `payment_validation_code`.  The `payment_id` is only visible by you and uniquely identifies a payment.  The `payment_validation_code` is shown exclusively to the customer and the owner of the project. It can be used to redeem a payment. You can verify a payment by pulling the payment with the `payment_validation_code`.

try {
    $result = $apiInstance->getCCPayment($project_id, $payment_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CCPaymentApi->getCCPayment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.blockchainapi.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CCPaymentApi* | [**getCCPayment**](docs/Api/CCPaymentApi.md#getccpayment) | **GET** /checkout/v1/project/{project_id}/payment/{payment_identifier} | Get a payment
*CCPaymentApi* | [**listAllCCPayments**](docs/Api/CCPaymentApi.md#listallccpayments) | **GET** /checkout/v1/payments | List all payments
*CCPaymentApi* | [**listCCProjectPayments**](docs/Api/CCPaymentApi.md#listccprojectpayments) | **GET** /checkout/v1/project/{project_id}/payments | List a project&#39;s payments
*CCProjectApi* | [**createCCProject**](docs/Api/CCProjectApi.md#createccproject) | **POST** /checkout/v1/project | Create a project
*CCProjectApi* | [**deleteCCProject**](docs/Api/CCProjectApi.md#deleteccproject) | **DELETE** /checkout/v1/project/{project_id} | Delete a project
*CCProjectApi* | [**getCCProject**](docs/Api/CCProjectApi.md#getccproject) | **GET** /checkout/v1/project/{project_id} | Get a project
*CCProjectApi* | [**listCCProjects**](docs/Api/CCProjectApi.md#listccprojects) | **GET** /checkout/v1/projects | List projects
*CCProjectApi* | [**updateCCProject**](docs/Api/CCProjectApi.md#updateccproject) | **PUT** /checkout/v1/project/{project_id} | Update a project
*CCWebhookApi* | [**getCCWebhook**](docs/Api/CCWebhookApi.md#getccwebhook) | **POST** /webhook/v1/project/{project_id}/webhook/{webhook_identifier} | Get a webhook
*CCWebhookApi* | [**listCCProjectWebhooks**](docs/Api/CCWebhookApi.md#listccprojectwebhooks) | **POST** /webhook/v1/project/{project_id}/webhooks | List project&#39;s webhooks
*CCWebhookApi* | [**validateCCWebhook**](docs/Api/CCWebhookApi.md#validateccwebhook) | **POST** /webhook/v1/project/{project_id}/webhook/{webhook_identifier}/validate | Validate a webhook
*NameServiceApi* | [**getBlockchainIdentifierFromName**](docs/Api/NameServiceApi.md#getblockchainidentifierfromname) | **POST** /{blockchain}/{network}/name_service/name_to_blockchain_identifier | Get the identifier
*NameServiceApi* | [**getNameForBlockchainIdentifier**](docs/Api/NameServiceApi.md#getnameforblockchainidentifier) | **POST** /{blockchain}/{network}/name_service/blockchain_identifier_to_name | Get the name
*SolanaAccountApi* | [**solanaGetAccount**](docs/Api/SolanaAccountApi.md#solanagetaccount) | **GET** /solana/account/{network}/{public_key} | Get the details of an account on Solana
*SolanaAccountApi* | [**solanaGetAccountIsCandyMachine**](docs/Api/SolanaAccountApi.md#solanagetaccountiscandymachine) | **GET** /solana/account/{network}/{public_key}/is_candy_machine | Get if account is candy machine
*SolanaAccountApi* | [**solanaGetAccountIsNFT**](docs/Api/SolanaAccountApi.md#solanagetaccountisnft) | **GET** /solana/account/{network}/{public_key}/is_nft | Get if account is NFT
*SolanaCandyMachineApi* | [**solanaGetAllNFTsFromCandyMachine**](docs/Api/SolanaCandyMachineApi.md#solanagetallnftsfromcandymachine) | **GET** /solana/nft/candy_machine/{network}/{candy_machine_id}/nfts | Get CM&#39;s NFTs
*SolanaCandyMachineApi* | [**solanaGetCandyMachineMetadata**](docs/Api/SolanaCandyMachineApi.md#solanagetcandymachinemetadata) | **POST** /solana/nft/candy_machine/metadata | Get a CM&#39;s metadata
*SolanaCandyMachineApi* | [**solanaListAllCandyMachines**](docs/Api/SolanaCandyMachineApi.md#solanalistallcandymachines) | **GET** /solana/nft/candy_machine/list | List all CMs
*SolanaCandyMachineApi* | [**solanaSearchCandyMachines**](docs/Api/SolanaCandyMachineApi.md#solanasearchcandymachines) | **POST** /solana/nft/candy_machine/search | Search CMs
*SolanaNFTApi* | [**solanaCreateNFT**](docs/Api/SolanaNFTApi.md#solanacreatenft) | **POST** /solana/nft | Create an NFT on Solana
*SolanaNFTApi* | [**solanaGetNFT**](docs/Api/SolanaNFTApi.md#solanagetnft) | **GET** /solana/nft/{network}/{mint_address} | Get an NFT&#39;s metadata
*SolanaNFTApi* | [**solanaGetNFTMintFee**](docs/Api/SolanaNFTApi.md#solanagetnftmintfee) | **GET** /solana/nft/mint/fee | Get the NFT mint fee
*SolanaNFTApi* | [**solanaGetNFTOwner**](docs/Api/SolanaNFTApi.md#solanagetnftowner) | **GET** /solana/nft/{network}/{mint_address}/owner | Get owner of an NFT
*SolanaNFTApi* | [**solanaGetNFTOwnerAdvanced**](docs/Api/SolanaNFTApi.md#solanagetnftowneradvanced) | **GET** /solana/nft/{network}/{mint_address}/owner_advanced | Get owner of an NFT (advanced)
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
*SolanaWalletApi* | [**solanaGetWalletTransactions**](docs/Api/SolanaWalletApi.md#solanagetwallettransactions) | **GET** /solana/wallet/{network}/{public_key}/transactions | Get address&#39;s associated transaction signatures
*SolanaWalletApi* | [**solanaTransfer**](docs/Api/SolanaWalletApi.md#solanatransfer) | **POST** /solana/wallet/transfer | Transfer SOL, a token, or an NFT to another address
*TokenApi* | [**getTokenMetadata**](docs/Api/TokenApi.md#gettokenmetadata) | **GET** /{blockchain}/{network}/token/{token_blockchain_identifier} | Get a token&#39;s metadata
*TokenApi* | [**listAllTokens**](docs/Api/TokenApi.md#listalltokens) | **GET** /{blockchain}/{network}/all_tokens | List all tokens
*TransactionApi* | [**getTransaction**](docs/Api/TransactionApi.md#gettransaction) | **GET** /{blockchain}/transaction/{network}/{transaction_blockchain_identifier} | Get the details of a transaction made on a blockchain
*WalletApi* | [**derivePrivateKey**](docs/Api/WalletApi.md#deriveprivatekey) | **POST** /{blockchain}/wallet/private_key | Derive private key
*WalletApi* | [**deriveWalletIdentifier**](docs/Api/WalletApi.md#derivewalletidentifier) | **POST** /{blockchain}/wallet/identifier | Derive wallet identifier
*WalletApi* | [**generatePrivateKey**](docs/Api/WalletApi.md#generateprivatekey) | **POST** /{blockchain}/wallet/generate/private_key | Generate private key
*WalletApi* | [**generateSeedPhrase**](docs/Api/WalletApi.md#generateseedphrase) | **POST** /{blockchain}/wallet/generate/secret_recovery_phrase | Generate seed phrase
*WalletApi* | [**getAirdrop**](docs/Api/WalletApi.md#getairdrop) | **POST** /{blockchain}/wallet/airdrop | Get an airdrop
*WalletApi* | [**getBalance**](docs/Api/WalletApi.md#getbalance) | **POST** /{blockchain}/wallet/balance | Get wallet&#39;s balance of X
*WalletApi* | [**transfer**](docs/Api/WalletApi.md#transfer) | **POST** /{blockchain}/wallet/transfer | Transfer crypto, a token, or an NFT to another wallet

## Models

- [ATAResponse](docs/Model/ATAResponse.md)
- [Account](docs/Model/Account.md)
- [AccountContext](docs/Model/AccountContext.md)
- [AccountIsCandyMachine](docs/Model/AccountIsCandyMachine.md)
- [AccountIsNFT](docs/Model/AccountIsNFT.md)
- [AccountValue](docs/Model/AccountValue.md)
- [AirdropRequest](docs/Model/AirdropRequest.md)
- [AvalancheCChainPublicAddress](docs/Model/AvalancheCChainPublicAddress.md)
- [AvalancheXPChainPublicAddress](docs/Model/AvalancheXPChainPublicAddress.md)
- [B58PrivateKey](docs/Model/B58PrivateKey.md)
- [BSCPublicAddress](docs/Model/BSCPublicAddress.md)
- [BalanceRequest](docs/Model/BalanceRequest.md)
- [BalanceResponse](docs/Model/BalanceResponse.md)
- [CCPayment](docs/Model/CCPayment.md)
- [CCPaymentBlockchainPaymentDetails](docs/Model/CCPaymentBlockchainPaymentDetails.md)
- [CCProject](docs/Model/CCProject.md)
- [CCProjectCreateRequest](docs/Model/CCProjectCreateRequest.md)
- [CCProjectCreateRequestCustomerIdToCollect](docs/Model/CCProjectCreateRequestCustomerIdToCollect.md)
- [CCProjectCreateRequestPayoutMethod](docs/Model/CCProjectCreateRequestPayoutMethod.md)
- [CCWebhook](docs/Model/CCWebhook.md)
- [CCWebhookValidateRequest](docs/Model/CCWebhookValidateRequest.md)
- [CandyMachineSearchRequest](docs/Model/CandyMachineSearchRequest.md)
- [DoubleTransferResponse](docs/Model/DoubleTransferResponse.md)
- [EthereumPublicAddress](docs/Model/EthereumPublicAddress.md)
- [EthereumTransaction](docs/Model/EthereumTransaction.md)
- [EthereumTransactionCompiledResponse](docs/Model/EthereumTransactionCompiledResponse.md)
- [EthereumTransactionMadeResponse](docs/Model/EthereumTransactionMadeResponse.md)
- [FeePayerWallet](docs/Model/FeePayerWallet.md)
- [GeneralAirdropRequest](docs/Model/GeneralAirdropRequest.md)
- [GeneralB58PrivateKey](docs/Model/GeneralB58PrivateKey.md)
- [GeneralBalanceRequest](docs/Model/GeneralBalanceRequest.md)
- [GeneralBalanceResponse](docs/Model/GeneralBalanceResponse.md)
- [GeneralFeePayerWallet](docs/Model/GeneralFeePayerWallet.md)
- [GeneralGeneratePrivateKeyResponse](docs/Model/GeneralGeneratePrivateKeyResponse.md)
- [GeneralPrivateKey](docs/Model/GeneralPrivateKey.md)
- [GeneralSecretPhrase](docs/Model/GeneralSecretPhrase.md)
- [GeneralSecretRecoveryPhrase](docs/Model/GeneralSecretRecoveryPhrase.md)
- [GeneralTransaction](docs/Model/GeneralTransaction.md)
- [GeneralTransactionMadeResponse](docs/Model/GeneralTransactionMadeResponse.md)
- [GeneralTransactionResponse](docs/Model/GeneralTransactionResponse.md)
- [GeneralTransferRequest](docs/Model/GeneralTransferRequest.md)
- [GeneralWallet](docs/Model/GeneralWallet.md)
- [GeneratePrivateKey](docs/Model/GeneratePrivateKey.md)
- [GenerateSeedPhraseRequest](docs/Model/GenerateSeedPhraseRequest.md)
- [GetAllNFTsResponse](docs/Model/GetAllNFTsResponse.md)
- [GetAllNFTsResponseMintedNfts](docs/Model/GetAllNFTsResponseMintedNfts.md)
- [GetAllNFTsResponseUnmintedNfts](docs/Model/GetAllNFTsResponseUnmintedNfts.md)
- [GetCandyMachineIDRequest](docs/Model/GetCandyMachineIDRequest.md)
- [GetCandyMachineIDResponse](docs/Model/GetCandyMachineIDResponse.md)
- [GetCandyMetadataErrorResponse](docs/Model/GetCandyMetadataErrorResponse.md)
- [GetCandyMetadataRequest](docs/Model/GetCandyMetadataRequest.md)
- [GetCandyMetadataResponse](docs/Model/GetCandyMetadataResponse.md)
- [GetCandyMetadataResponseCreators](docs/Model/GetCandyMetadataResponseCreators.md)
- [GetPublicKeyRequest](docs/Model/GetPublicKeyRequest.md)
- [GetSPLTokenResponse](docs/Model/GetSPLTokenResponse.md)
- [HexPrivateKey](docs/Model/HexPrivateKey.md)
- [InputBlockchainIdentifier](docs/Model/InputBlockchainIdentifier.md)
- [InputName](docs/Model/InputName.md)
- [ListNFTsResponse](docs/Model/ListNFTsResponse.md)
- [NFT](docs/Model/NFT.md)
- [NFTCollection](docs/Model/NFTCollection.md)
- [NFTData](docs/Model/NFTData.md)
- [NFTMintErrorResponse](docs/Model/NFTMintErrorResponse.md)
- [NFTMintFee](docs/Model/NFTMintFee.md)
- [NFTMintRequest](docs/Model/NFTMintRequest.md)
- [NFTOwnerAdvancedResponse](docs/Model/NFTOwnerAdvancedResponse.md)
- [NFTOwnerAdvancedResponseContract](docs/Model/NFTOwnerAdvancedResponseContract.md)
- [NFTOwnerResponse](docs/Model/NFTOwnerResponse.md)
- [NFTSearchRequest](docs/Model/NFTSearchRequest.md)
- [NFTSearchResponse](docs/Model/NFTSearchResponse.md)
- [NearPublicKey](docs/Model/NearPublicKey.md)
- [PrivateKey](docs/Model/PrivateKey.md)
- [PublicKey](docs/Model/PublicKey.md)
- [SecretPhrase](docs/Model/SecretPhrase.md)
- [SecretRecoveryPhrase](docs/Model/SecretRecoveryPhrase.md)
- [SolanaPublicKey](docs/Model/SolanaPublicKey.md)
- [SolanaTransaction](docs/Model/SolanaTransaction.md)
- [SolanaTransactionCompiledResponse](docs/Model/SolanaTransactionCompiledResponse.md)
- [SolanaTransactionMadeResponse](docs/Model/SolanaTransactionMadeResponse.md)
- [SupplyWalletRequest](docs/Model/SupplyWalletRequest.md)
- [TokenMetadataResponse](docs/Model/TokenMetadataResponse.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionResult](docs/Model/TransactionResult.md)
- [TransferRequest](docs/Model/TransferRequest.md)
- [TransferResponse](docs/Model/TransferResponse.md)
- [TransferResponseCompiled](docs/Model/TransferResponseCompiled.md)
- [Wallet](docs/Model/Wallet.md)
- [WalletIdentifiers](docs/Model/WalletIdentifiers.md)

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
