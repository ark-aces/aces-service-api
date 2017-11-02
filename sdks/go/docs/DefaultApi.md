# \DefaultApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ContractsIdGet**](DefaultApi.md#ContractsIdGet) | **Get** /contracts/{id} | Get Service Contract.
[**ContractsPost**](DefaultApi.md#ContractsPost) | **Post** /contracts | Create Service Contract
[**InfoGet**](DefaultApi.md#InfoGet) | **Get** /info | Get Service Info.
[**StatusGet**](DefaultApi.md#StatusGet) | **Get** /status | Get Health of node.


# **ContractsIdGet**
> Contract ContractsIdGet(id)
Get Service Contract.

Gets service contract info for a contract.

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
  **id** | **string**| Contract identifier. | 

### Return type

[**Contract**](Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **ContractsPost**
> Contract ContractsPost(optional)
Create Service Contract

Creates a new service contract.

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **optional** | **map[string]interface{}** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a map[string]interface{}.

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractRequest** | [**ContractRequest**](ContractRequest.md)| The request to create a new contract. | 

### Return type

[**Contract**](Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **InfoGet**
> Info InfoGet()
Get Service Info.

Gets Service Info object.

### Required Parameters
This endpoint does not need any parameter.

### Return type

[**Info**](Info.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **StatusGet**
> Health StatusGet()
Get Health of node.

Get application health information.

### Required Parameters
This endpoint does not need any parameter.

### Return type

[**Health**](Health.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

