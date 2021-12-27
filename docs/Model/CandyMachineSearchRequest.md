# # CandyMachineSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**update_authority** | **string** | The public key of the update authority of the candy machine | [optional]
**update_authority_search_method** | **string** | Only &#x60;exact_match&#x60; supported at this time | [optional] [default to 'exact_match']
**config_address** | **string** | The public key of the configuration of the candy machine | [optional]
**config_address_search_method** | **string** | Only &#x60;exact_match&#x60; supported at this time | [optional] [default to 'exact_match']
**uuid** | **string** | The alphanumeric string of length six that corresponds to the candy machine. This is NOT the candy machine ID.  This is the first six letters of the configuration address and is also used to identify the candy machine. An example is &#x60;4zKV6i&#x60;. | [optional]
**uuid_search_method** | **string** | Only &#x60;exact_match&#x60; supported at this time | [optional] [default to 'exact_match']
**symbol** | **string** | The symbol associated with the candy machine | [optional]
**symbol_search_method** | **string** |  | [optional] [default to 'exact_match']
**nft_name** | **string** | The name of an NFT on the candy machine, minted or unminted. For example, to find The Solana Money Boys candy machine, you already know that each NFT is named \&quot;Solana Money Boy #0\&quot;, \&quot;Solana Money Boy #1\&quot;, and so on. So you could search with  nft_name&#x3D;\&quot;Solana Money Boy #0\&quot;, nft_name_index&#x3D;0, nft_name_search_method&#x3D;&#39;exact_match&#39;, for example, which would return the candy machine ID. This also works with candy machines that are not live but are uploaded. | [optional]
**nft_name_index** | **string** | The index of the NFT to check, e.g., the 2nd NFT would have an index of 1. We cannot search all NFTs on a candy machine currently, so you must search an NFT at a particular position, such as the first, second, and so on. In general, nft_name_index&#x3D;0 works for most use cases. | [optional] [default to '0']
**nft_name_search_method** | **string** |  | [optional] [default to 'exact_match']
**network** | **string** |  | [optional] [default to 'devnet']
**candy_machine_contract_version** | **string** | The candy machine contract you want to search.  If you want to search &#x60;v1&#x60; candy machines, set this to &#x60;v1&#x60;. If you want to search &#x60;v2&#x60; candy machines. set this to &#x60;v2&#x60;. | [optional] [default to 'v1']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
