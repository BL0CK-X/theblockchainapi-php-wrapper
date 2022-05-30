# # GeneralTransactionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_blockchain_identifier** | **string** | The identifier of the transaction | [optional]
**transaction_confirmed** | **bool** | Whether or not the transaction was confirmed | [optional]
**b58_compiled_transaction** | **string** | A base58 encoded byte array in string representation. Really easy to submit to Phantom. See &lt;a href&#x3D;\&quot;https://github.com/BL0CK-X/blockchain-api/blob/main/examples/tutorials/phantom_tutorials/transfer_solana.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;here&lt;/a&gt; for an example on how to submit it to a Phantom wallet for signing. | [optional]
**compiled_transaction** | **object** | An array of integers representing the bytes of the transaction | [optional]
**chain_id** | **string** | Indicates the chain that the transaction was compiled for (e.g., ropsten or mainnet). | [optional]
**data** | **string** | The transaction data | [optional]
**from** | **string** | The address expected to sign and submit the transaction | [optional]
**to** | **string** | The contract. This should match your provided value for &#x60;token_blockchain_identifier&#x60;. | [optional]
**gas** | **float** |  | [optional]
**max_fee_per_gas** | **float** |  | [optional]
**max_priority_fee_per_gas** | **float** |  | [optional]
**nonce** | **float** |  | [optional]
**value** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
