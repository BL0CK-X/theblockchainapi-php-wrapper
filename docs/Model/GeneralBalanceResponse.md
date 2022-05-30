# # GeneralBalanceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance** | **float** | The balance of the token in the wallet |
**integer_balance** | **float** | Not included if retreiving native token (e.g., SOL, ETH, BNB, etc.) balance | [optional]
**decimals** | **float** | Not included if retreiving native token (e.g., SOL, ETH, BNB, etc.) balance. | [optional]
**network** | **string** | The network of the blockchain you selected  - Solana: &#x60;devnet&#x60;, &#x60;mainnet-beta&#x60; - Ethereum: &#x60;ropsten&#x60;, &#x60;mainnet&#x60;  Defaults when not provided (not applicable to path parameters): - Solana: &#x60;devnet&#x60; - Ethereum: &#x60;ropsten&#x60; |
**unit** | **string** | Not included if retreiving a token / NFT balance | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
