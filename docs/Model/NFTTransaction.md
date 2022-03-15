# # NFTTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_time** | **float** | An epoch time stamp in UTC time that represents the time of the block where the transaction was processed | [optional]
**exchange** | **string** | The NFT exchange on which the transaction occurred | [optional]
**exchange_readable** | **string** | A readable version of the NFT exchange | [optional]
**mint_address** | **string** | The mint address of the NFT | [optional]
**operation** | **string** | The operation of the transaction | [optional]
**seller** | **string** | The public key of the wallet that listed the NFT | [optional]
**buyer** | **string** | The public key of the buyer. This only exists in &#x60;buy&#x60; transactions. | [optional]
**transaction_signature** | **string** | The signature of the transaction. You can look up each transaction on explorer.solana.com | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
