
# Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | The globally unique Contract ID. |  [optional]
**createdAt** | [**OffsetDateTime**](OffsetDateTime.md) | Date the Contract was created. |  [optional]
**expiresAt** | [**OffsetDateTime**](OffsetDateTime.md) | Date the Contract will expire. Any expired contracts will no longer attempt execution. |  [optional]
**correlationId** | **String** | Requestor generated globally unique identifier for correleating requests. |  [optional]
**status** | [**StatusEnum**](#StatusEnum) |  |  [optional]
**results** | [**List&lt;Result&gt;**](Result.md) |  |  [optional]


<a name="StatusEnum"></a>
## Enum: StatusEnum
Name | Value
---- | -----
NEW | &quot;new&quot;
PENDINGPAYMENT | &quot;pendingPayment&quot;
REJECTED | &quot;rejected&quot;
EXPIRED | &quot;expired&quot;
EXECUTED | &quot;executed&quot;
FAILED | &quot;failed&quot;



