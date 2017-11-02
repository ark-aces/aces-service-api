# DefaultApi

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
```java
// Import classes:
//import invalidPackageName.ApiException;
//import ArkAces_ServiceClient.DefaultApi;


DefaultApi apiInstance = new DefaultApi();
String id = "id_example"; // String | Contract identifier.
try {
    Contract result = apiInstance.contractsIdGet(id);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling DefaultApi#contractsIdGet");
    e.printStackTrace();
}
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
> Contract contractsPost(contractRequest)

Create Service Contract

Creates a new service contract.

### Example
```java
// Import classes:
//import invalidPackageName.ApiException;
//import ArkAces_ServiceClient.DefaultApi;


DefaultApi apiInstance = new DefaultApi();
ContractRequest contractRequest = new ContractRequest(); // ContractRequest | The request to create a new contract.
try {
    Contract result = apiInstance.contractsPost(contractRequest);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling DefaultApi#contractsPost");
    e.printStackTrace();
}
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
```java
// Import classes:
//import invalidPackageName.ApiException;
//import ArkAces_ServiceClient.DefaultApi;


DefaultApi apiInstance = new DefaultApi();
try {
    Info result = apiInstance.infoGet();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling DefaultApi#infoGet");
    e.printStackTrace();
}
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
```java
// Import classes:
//import invalidPackageName.ApiException;
//import ArkAces_ServiceClient.DefaultApi;


DefaultApi apiInstance = new DefaultApi();
try {
    Health result = apiInstance.statusGet();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling DefaultApi#statusGet");
    e.printStackTrace();
}
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

