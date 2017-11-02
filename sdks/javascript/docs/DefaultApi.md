# AcesServiceApi.DefaultApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsIdGet**](DefaultApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
[**contractsPost**](DefaultApi.md#contractsPost) | **POST** /contracts | Create Service Contract
[**infoGet**](DefaultApi.md#infoGet) | **GET** /info | Get Service Info.
[**statusGet**](DefaultApi.md#statusGet) | **GET** /status | Get Health of node.


<a name="contractsIdGet"></a>
# **contractsIdGet**
> Contract contractsIdGet(id)

Get Service Contract.

Gets service contract info for a contract.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.DefaultApi();

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

let apiInstance = new AcesServiceApi.DefaultApi();

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

<a name="infoGet"></a>
# **infoGet**
> Info infoGet()

Get Service Info.

Gets Service Info object.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.DefaultApi();

apiInstance.infoGet((error, data, response) => {
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

<a name="statusGet"></a>
# **statusGet**
> Health statusGet()

Get Health of node.

Get application health information.

### Example
```javascript
import AcesServiceApi from 'aces_service_api';

let apiInstance = new AcesServiceApi.DefaultApi();

apiInstance.statusGet((error, data, response) => {
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

