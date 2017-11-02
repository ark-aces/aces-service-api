# Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Id** | **string** | The globally unique Contract ID. | [optional] [default to null]
**CreatedAt** | [**time.Time**](time.Time.md) | Date the Contract was created. | [optional] [default to null]
**ExpiresAt** | [**time.Time**](time.Time.md) | Date the Contract will expire. Any expired contracts will no longer attempt execution. | [optional] [default to null]
**CorrelationId** | **string** | Requestor generated globally unique identifier for correleating requests. | [optional] [default to null]
**Status** | **string** |  | [optional] [default to null]
**Results** | [**[]Result**](Result.md) |  | [optional] [default to null]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


