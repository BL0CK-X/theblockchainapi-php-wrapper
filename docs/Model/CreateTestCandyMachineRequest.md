# # CreateTestCandyMachineRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet** | [**\OpenAPI\Client\Model\Wallet**](Wallet.md) |  |
**network** | **string** |  | [optional] [default to 'devnet']
**candy_machine_contract_version** | **string** | The contract you want to use to create the candy machine. Note: Metaplex disabled the creation of &#x60;v1&#x60; candy machines on their smart contract, and so we no longer support the creation of &#x60;v1&#x60; test candy machines. | [optional] [default to 'v2']
**include_gatekeeper** | **bool** | Whether or not to include a gatekeeper for testing purposes. Only applies to v2 candy machines. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
