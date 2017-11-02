# AcesServiceApi.Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | The globally unique Contract ID. | [optional] 
**createdAt** | **Date** | Date the Contract was created. | [optional] 
**expiresAt** | **Date** | Date the Contract will expire. Any expired contracts will no longer attempt execution. | [optional] 
**correlationId** | **String** | Requestor generated globally unique identifier for correleating requests. | [optional] 
**status** | **String** |  | [optional] 
**results** | [**[Result]**](Result.md) |  | [optional] 


<a name="StatusEnum"></a>
## Enum: StatusEnum


* `new` (value: `"new"`)

* `pendingPayment` (value: `"pendingPayment"`)

* `rejected` (value: `"rejected"`)

* `expired` (value: `"expired"`)

* `executed` (value: `"executed"`)

* `failed` (value: `"failed"`)




