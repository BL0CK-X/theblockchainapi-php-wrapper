# # CCWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_id** | **string** | The unique identifier of the webhook | [optional]
**signature** | **object** | A signature from the Blockchain API that verifies the webhook is from us. An array of integers. | [optional]
**time_sent** | **float** | The time we sent the webhook | [optional]
**data** | [**\OpenAPI\Client\Model\CCPayment**](CCPayment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
