# # CCProject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_id** | **string** | The ID of the project. This is auto-generated upon project creation and cannot currently be changed. |
**name** | **string** | The name of the project. This is shown to your users and should identify your company or organization. |
**description** | **string** | The description of your project / company. | [optional]
**webhook** | **string** | A URL that identifies where we should make an API request to notify you of a new payment (e.g., api.myproject.com/crypto_payments/webhook). Learn more [here](#tag/CC-Webhook/operation/getCCWebhook). | [optional]
**website** | **string** | The website of your project / company. | [optional]
**discord_webhook** | **string** | A Discord webhook. We will send a message to this channel to notify of payment. Learn more [here](). | [optional]
**logo_url** | **string** | A URL of your logo. | [optional]
**customer_id_to_collect** | [**\OpenAPI\Client\Model\CCProjectCreateRequestCustomerIdToCollect**](CCProjectCreateRequestCustomerIdToCollect.md) |  | [optional]
**success_url** | **string** | Where to redirect customers after payment. If not supplied, customers will be redirected to checkout.blockchainapi.com/me to view their subscriptions. | [optional]
**payout_method** | [**\OpenAPI\Client\Model\CCProjectCreateRequestPayoutMethod**](CCProjectCreateRequestPayoutMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
