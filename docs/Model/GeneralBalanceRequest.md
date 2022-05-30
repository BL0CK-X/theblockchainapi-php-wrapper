# # GeneralBalanceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain_identifier** | **string** | The address / public key of the wallet you&#39;re querying.  Examples: - Solana: &#x60;GKNcUmNacSJo4S2Kq3DuYRYRGw3sNUfJ4tyqd198t6vQ&#x60; - Ethereum: &#x60;0xa84b9478d203cd25dF722e83C87590f8028f6aAA&#x60; | [optional]
**unit** | **string** | The &#x60;unit&#x60; parameter is only applicable if you are trying to retrieve the balance of the native token (e.g., SOL, ETH, BNB).   Applicable units: - Solana: &#x60;lamport&#x60;, &#x60;sol&#x60; (1 SOL &#x3D; 1e9 Lamports) - Ethereum: &#x60;wei&#x60;, &#x60;gwei&#x60;, &#x60;eth&#x60; | [optional]
**network** | **string** | The network of the blockchain you selected  - Solana: &#x60;devnet&#x60;, &#x60;mainnet-beta&#x60; - Ethereum: &#x60;ropsten&#x60;, &#x60;mainnet&#x60;  Defaults when not provided (not applicable to path parameters): - Solana: &#x60;devnet&#x60; - Ethereum: &#x60;ropsten&#x60; | [optional]
**token_blockchain_identifier** | **string** | The &#x60;token_blockchain_identifier&#x60; identifies the token you wish to transfer.  - If you&#39;re transferring a native blockchain currency (e.g., SOL, ETH, BNB), then simply do not supply this value. - If you&#39;re transfering an NFT, then supply the token address of the NFT. On Solana, this is the &#x60;mint_address&#x60; or &#x60;mint&#x60; (the address of the mint). - If you&#39;re transfering a token, supply the token address. For Solana, you can find on this on the Solana Explorer (e.g., see &#x60;SRMuApVNdxXokk5GT7XD5cUUgXMBCoAz2LHeuAoKWRt&#x60; for &lt;a href&#x3D;\&quot;https://explorer.solana.com/address/SRMuApVNdxXokk5GT7XD5cUUgXMBCoAz2LHeuAoKWRt\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Serum Token&lt;/a&gt;) for the &#x60;token_address&#x60;.  Examples: - Ethereum: &#x60;0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48&#x60; - Solana: &#x60;CK1LHEANTu7RFqN3XMzo2AnZhyus2W1vue1njrxLEM1d&#x60; | [optional] [default to 'null']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
