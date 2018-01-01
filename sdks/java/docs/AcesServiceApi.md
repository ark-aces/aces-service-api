# AcesServiceApi

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
```java
// Import classes:
//import com.arkaces.ApiException;
//import com.arkaces.aces_service_api.AcesServiceApi;


AcesServiceApi apiInstance = new AcesServiceApi();
String id = "id_example"; // String | Contract identifier.
try {
    Contract result = apiInstance.contractsIdGet(id);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AcesServiceApi#contractsIdGet");
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
//import com.arkaces.ApiException;
//import com.arkaces.aces_service_api.AcesServiceApi;


AcesServiceApi apiInstance = new AcesServiceApi();
ContractRequest contractRequest = new ContractRequest(); // ContractRequest | The request to create a new contract.
try {
    Contract result = apiInstance.contractsPost(contractRequest);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AcesServiceApi#contractsPost");
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

<a name="healthGet"></a>
# **healthGet**
> Health healthGet()

Get Health of node.

Get application health information.

### Example
```java
// Import classes:
//import com.arkaces.ApiException;
//import com.arkaces.aces_service_api.AcesServiceApi;


AcesServiceApi apiInstance = new AcesServiceApi();
try {
    Health result = apiInstance.healthGet();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AcesServiceApi#healthGet");
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

<a name="rootGet"></a>
# **rootGet**
> Info rootGet()

Get Service Info.

Gets Service Info object.

### Example
```java
// Import classes:
//import com.arkaces.ApiException;
//import com.arkaces.aces_service_api.AcesServiceApi;


AcesServiceApi apiInstance = new AcesServiceApi();
try {
    Info result = apiInstance.rootGet();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling AcesServiceApi#rootGet");
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

