# # Project

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_id** | **string** | The ID of the project. This is auto-generated upon project creation and cannot currently be changed. | [optional]
**project_name** | **string** | The name of the mini-API. This will be shown at the top of the mini-API&#39;s documentation. | [optional]
**project_description** | **string** | The description of the mini-API. This will be shown at the top of the mini-API&#39;s documentation, below the title. | [optional]
**contact_email** | **string** | The email where users of your mini-API can contact you. This will be shown at the top of the mini-API&#39;s documentation. | [optional]
**current_documentation_version** | **string** | The version of the API that the documentation is updated for. You can set the documentation version to any valid version. To see how to format the version string, see the description for &#x60;versions&#x60;. | [optional]
**versions** | **string[]** | The live versions of the project. An array of strings. We use Python&#39;s &#x60;version&#x60; package to see if it&#39;s a valid version and to compare versions (to see which is higher).  Read more about this Python package &lt;a href&#x3D;\&quot;https://packaging.pypa.io/en/latest/version.html#packaging.version.parse\&quot; target&#x3D;\&quot;_blank\&quot;&gt;here&lt;/a&gt;. | [optional]
**groups** | [**\OpenAPI\Client\Model\Group[]**](Group.md) | A list of groups. A section contains groups, and groups contain API endpoints. | [optional]
**endpoints** | [**\OpenAPI\Client\Model\Endpoint[]**](Endpoint.md) | A list of groups. A section contains groups, and groups contain API endpoints. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
