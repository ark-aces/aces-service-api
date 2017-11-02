# ArkAces.ServiceClient.Model.Contract
## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **string** | The globally unique Contract ID. | [optional] 
**CreatedAt** | **DateTime?** | Date the Contract was created. | [optional] 
**ExpiresAt** | **DateTime?** | Date the Contract will expire. Any expired contracts will no longer attempt execution. | [optional] 
**CorrelationId** | **string** | Requestor generated globally unique identifier for correleating requests. | [optional] 
**Status** | **string** |  | [optional] 
**Results** | [**List&lt;Result&gt;**](Result.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

