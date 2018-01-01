# AcesServiceApi.AcesServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsIdGet**](AcesServiceApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
[**contractsPost**](AcesServiceApi.md#contractsPost) | **POST** /contracts | Create Service Contract
[**healthGet**](AcesServiceApi.md#healthGet) | **GET** /health | Get Health of node.
[**rootGet**](AcesServiceApi.md#rootGet) | **GET** / | Get Service Info.


<a name="contractsIdGet"></a>
# **contractsIdGet**
> Contract contractsIdGet(id)

Get Service Contract.

Gets service contract info for a contract.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.AcesServiceApi();

let id = "id_example"; // String | Contract identifier.


apiInstance.contractsIdGet(id, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **String**| Contract identifier. | 

### Return type

[**Contract**](Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="contractsPost"></a>
# **contractsPost**
> Contract contractsPost(opts)

Create Service Contract

Creates a new service contract.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.AcesServiceApi();

let opts = { 
  'contractRequest': new AcesServiceApi.ContractRequest() // ContractRequest | The request to create a new contract.
};

apiInstance.contractsPost(opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractRequest** | [**ContractRequest**](ContractRequest.md)| The request to create a new contract. | [optional] 

### Return type

[**Contract**](Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="healthGet"></a>
# **healthGet**
> Health healthGet()

Get Health of node.

Get application health information.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.AcesServiceApi();

apiInstance.healthGet((error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Health**](Health.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="rootGet"></a>
# **rootGet**
> Info rootGet()

Get Service Info.

Gets Service Info object.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.AcesServiceApi();

apiInstance.rootGet((error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Info**](Info.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

