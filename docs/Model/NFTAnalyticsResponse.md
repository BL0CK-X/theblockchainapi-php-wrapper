# # NFTAnalyticsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | **mixed** | The start time used in the API request. | [optional]
**end_time** | **mixed** | The end time used in the API request. | [optional]
**transaction_history** | [**\OpenAPI\Client\Model\NFTAnalyticsResponseTransactionHistory**](NFTAnalyticsResponseTransactionHistory.md) |  | [optional]
**floor** | **float** | The minimum active listing price for the collection in the given time period. The listing must have been processed before &#x60;end_time&#x60; and still active (not delisted or purchased) by &#x60;end_time&#x60; in order to affect the floor calculation. | [optional]
**volume** | **float** | The sum of the sale prices for the given time period. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
