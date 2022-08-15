# # CCPaymentBlockchainPaymentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The chain on which the payment was made. | [optional]
**fee_amount** | **string** | The fee taken by the blockchain API. This is shown in integer form. | [optional]
**payout_amount** | **string** | The amount paid to the project&#39;s payout wallet (the recipient of the payment). This is shown in integer form. | [optional]
**token_blockchain_identifier** | **string** | The blockchain identifier of the token used to pay. Currently, we only support payments in USDC. | [optional]
**total_paid** | **string** | The total paid by the user when making the payment. This should match the amount set in the respective plan. | [optional]
**transaction_signature** | **string** | The transaction signature which you can use to manually or automatically verify the transaction on the blockchain. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
