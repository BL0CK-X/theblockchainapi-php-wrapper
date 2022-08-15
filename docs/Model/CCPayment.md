# # CCPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_id** | **string** | The ID of the project | [optional]
**product_id** | **string** | The ID of the associated product | [optional]
**plan_id** | **string** | The ID of the respective plan | [optional]
**payment_id** | **string** | The unique ID of the payment | [optional]
**blockchain_identifier** | **string** | The unique identifier of the wallet from which the payment was made. | [optional]
**blockchain_payment_details** | [**\OpenAPI\Client\Model\CCPaymentBlockchainPaymentDetails**](CCPaymentBlockchainPaymentDetails.md) |  | [optional]
**customer_id** | **string** | The ID of the customer | [optional]
**payment_validation_code** | **string** | The validation code shown to the customer. This is only visible to the customer who paid. They can use this code to redeem their subscription to their product. | [optional]
**period_end** | **float** | A UNIX time stamp, in seconds, that identifies the end of the period of the subscription | [optional]
**period_start** | **float** | A UNIX time stamp, in seconds, that identifies the start of the period of the subscription | [optional]
**transaction_blockchain_identifier** | **string** | The string that uniquely identifies the blockchain transaction | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
