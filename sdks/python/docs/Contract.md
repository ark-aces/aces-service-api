# Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **str** | The globally unique Contract ID. | [optional] 
**created_at** | **datetime** | Date the Contract was created. | [optional] 
**expires_at** | **datetime** | Date the Contract will expire. Any expired contracts will no longer attempt execution. | [optional] 
**correlation_id** | **str** | Requestor generated globally unique identifier for correleating requests. | [optional] 
**status** | **str** |  | [optional] 
**results** | [**list[Result]**](Result.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


