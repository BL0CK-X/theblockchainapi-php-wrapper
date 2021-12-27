# # GetCandyMetadataResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authority** | **string** | The update authority of the candy machine | [optional]
**bump** | **float** |  | [optional]
**candy_machine_id** | **string** | The ID of the candy machine | [optional]
**config_address** | **string** | The configuration public key address of the candy machine | [optional]
**creators** | [**\OpenAPI\Client\Model\GetCandyMetadataResponseCreators[]**](GetCandyMetadataResponseCreators.md) |  | [optional]
**go_live_date** | **float** | The unix timestamp of the start date of the candy machine | [optional]
**is_mutable** | **bool** |  | [optional]
**items_available** | **float** | The number of NFTs available for mint from the candy machine | [optional]
**items_redeemed** | **float** | The number of NFTs minted already from the candy machine | [optional]
**max_number_of_lines** | **float** |  | [optional]
**max_supply** | **float** |  | [optional]
**price** | **float** | The price in Lamports for minting an NFT from the candy machine. 1e9 Lamport  &#x3D; 1 SOL | [optional]
**retain_authority** | **bool** |  | [optional]
**seller_fee_basis_points** | **float** | The royalty the creators receive on each sale after the primary sale (the initial minting) (denominated in basis points (e.g., 75 basis points &#x3D; 0.75%)) | [optional]
**symbol** | **string** |  | [optional]
**token_mint** | **string** |  | [optional]
**uuid** | **string** | The uuid of the candy machine | [optional]
**wallet** | **string** | The public key address of the wallet that recevies the proceeds from NFT mints | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
