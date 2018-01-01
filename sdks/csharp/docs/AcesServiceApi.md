# ArkAces.AcesServiceApi.Api.AcesServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ContractsIdGet**](AcesServiceApi.md#contractsidget) | **GET** /contracts/{id} | Get Service Contract.
[**ContractsPost**](AcesServiceApi.md#contractspost) | **POST** /contracts | Create Service Contract
[**HealthGet**](AcesServiceApi.md#healthget) | **GET** /health | Get Health of node.
[**RootGet**](AcesServiceApi.md#rootget) | **GET** / | Get Service Info.


<a name="contractsidget"></a>
# **ContractsIdGet**
> Contract ContractsIdGet (string id)

Get Service Contract.

Gets service contract info for a contract.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.AcesServiceApi.Api;
using ArkAces.AcesServiceApi.Client;
using ArkAces.AcesServiceApi.Model;

namespace Example
{
    public class ContractsIdGetExample
    {
        public void main()
        {
            var apiInstance = new AcesServiceApi();
            var id = id_example;  // string | Contract identifier.

            try
            {
                // Get Service Contract.
                Contract result = apiInstance.ContractsIdGet(id);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AcesServiceApi.ContractsIdGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

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

<a name="contractspost"></a>
# **ContractsPost**
> Contract ContractsPost (ContractRequest contractRequest = null)

Create Service Contract

Creates a new service contract.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.AcesServiceApi.Api;
using ArkAces.AcesServiceApi.Client;
using ArkAces.AcesServiceApi.Model;

namespace Example
{
    public class ContractsPostExample
    {
        public void main()
        {
            var apiInstance = new AcesServiceApi();
            var contractRequest = new ContractRequest(); // ContractRequest | The request to create a new contract. (optional) 

            try
            {
                // Create Service Contract
                Contract result = apiInstance.ContractsPost(contractRequest);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AcesServiceApi.ContractsPost: " + e.Message );
            }
        }
    }
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="healthget"></a>
# **HealthGet**
> Health HealthGet ()

Get Health of node.

Get application health information.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.AcesServiceApi.Api;
using ArkAces.AcesServiceApi.Client;
using ArkAces.AcesServiceApi.Model;

namespace Example
{
    public class HealthGetExample
    {
        public void main()
        {
            var apiInstance = new AcesServiceApi();

            try
            {
                // Get Health of node.
                Health result = apiInstance.HealthGet();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AcesServiceApi.HealthGet: " + e.Message );
            }
        }
    }
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="rootget"></a>
# **RootGet**
> Info RootGet ()

Get Service Info.

Gets Service Info object.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.AcesServiceApi.Api;
using ArkAces.AcesServiceApi.Client;
using ArkAces.AcesServiceApi.Model;

namespace Example
{
    public class RootGetExample
    {
        public void main()
        {
            var apiInstance = new AcesServiceApi();

            try
            {
                // Get Service Info.
                Info result = apiInstance.RootGet();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AcesServiceApi.RootGet: " + e.Message );
            }
        }
    }
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

