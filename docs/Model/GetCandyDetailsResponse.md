# # GetCandyDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The uuid of the candy machine | [optional]
**go_live_date** | **float** | The unix timestamp of the start date of the candy machine | [optional]
**price** | **float** | The price in Lamports for minting an NFT from the candy machine. 1e9 Lamport  &#x3D; 1 SOL | [optional]
**items_available** | **float** | The number of NFTs available for mint from the candy machine | [optional]
**items_redeemed** | **float** | The number of NFTs minted already from the candy machine | [optional]
**token_mint** | **string** |  | [optional]
**config_address** | **string** | The configuration public key address of the candy machine | [optional]
**wallet** | **string** | The public key address of the wallet that recevies the proceeds from NFT mints | [optional]
**bump** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
