# # NFT

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confirmed** | **bool** | Whether or not the NFT mint was confirmed or simply submitted for processing. The status depends on your input for &#x60;wait_for_confirmation&#x60;. This only is returned when you are minting an NFT, not when searching or retrieving the metadata. | [optional]
**data** | [**\OpenAPI\Client\Model\NFTData**](NFTData.md) |  | [optional]
**is_mutable** | **bool** |  | [optional]
**mint** | **string** | The public key address of the NFT | [optional]
**primary_sale_happened** | **bool** |  | [optional]
**update_authority** | **string** | A public key address that is usually that of the person who minted the NFT | [optional]
**seller_fee_basis_points** | **float** |  | [optional]
**mint_secret_recovery_phrase** | **string** |  | [optional]
**explorer_url** | **string** |  | [optional]
**metadata_account** | **string** | The metadata account of the NFT | [optional]
**edition_nonce** | **float** |  | [optional]
**token_standard** | **float** |  | [optional]
**collection** | [**\OpenAPI\Client\Model\NFTCollection**](NFTCollection.md) |  | [optional]
**uses** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
