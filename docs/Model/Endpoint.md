# # Endpoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_id** | **string** | The ID of the project. This is auto-generated upon project creation and cannot currently be changed. |
**version** | **string** | The project version under which the endpoint exists |
**path** | **string** | The path of the endpoint |
**operation_id** | **string** | The operation ID of the endpoint. |
**readable_name** | **string** | The name of the endpoint formatted in a readable way (e.g., Get Endpoint Metadata). |
**summary** | **string** | The summary of the endpoint to be displayed in the sidebar on the left of the mini-API&#39;s documentation | [optional]
**description** | **string** | A description of what the endpoint does. This will be shown in the mini-API documentation. | [optional]
**credits** | **float** | The price of the endpoint. Valid values are integers from 1 to 100. |
**group_name** | **string** | The name of the group of endpoints that the endpoint comes from | [optional]
**input_specification** | [**\OpenAPI\Client\Model\ParameterSpecification[]**](ParameterSpecification.md) | A list of dictionaries. Each dictionary describes one parameter for the input, including the name, type, required boolean, and description values of that parameter. |
**input_examples** | **object** | An example of the JSON input that a user might send. Limited to one example currently. |
**output_specification** | [**\OpenAPI\Client\Model\ParameterSpecification[]**](ParameterSpecification.md) | A list of dictionaries. Each dictionary describes one parameter for the input, including the name, type, required boolean, and description values of that parameter. |
**output_examples** | **object** | An example of the JSON output that a user might send. Limited to one example currently. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
