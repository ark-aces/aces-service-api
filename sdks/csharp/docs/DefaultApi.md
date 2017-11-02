# ArkAces.ServiceClient.Api.DefaultApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ContractsIdGet**](DefaultApi.md#contractsidget) | **GET** /contracts/{id} | Get Service Contract.
[**ContractsPost**](DefaultApi.md#contractspost) | **POST** /contracts | Create Service Contract
[**InfoGet**](DefaultApi.md#infoget) | **GET** /info | Get Service Info.
[**StatusGet**](DefaultApi.md#statusget) | **GET** /status | Get Health of node.


<a name="contractsidget"></a>
# **ContractsIdGet**
> Contract ContractsIdGet (string id)

Get Service Contract.

Gets service contract info for a contract.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.ServiceClient.Api;
using ArkAces.ServiceClient.Client;
using ArkAces.ServiceClient.Model;

namespace Example
{
    public class ContractsIdGetExample
    {
        public void main()
        {
            var apiInstance = new DefaultApi();
            var id = id_example;  // string | Contract identifier.

            try
            {
                // Get Service Contract.
                Contract result = apiInstance.ContractsIdGet(id);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling DefaultApi.ContractsIdGet: " + e.Message );
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
using ArkAces.ServiceClient.Api;
using ArkAces.ServiceClient.Client;
using ArkAces.ServiceClient.Model;

namespace Example
{
    public class ContractsPostExample
    {
        public void main()
        {
            var apiInstance = new DefaultApi();
            var contractRequest = new ContractRequest(); // ContractRequest | The request to create a new contract. (optional) 

            try
            {
                // Create Service Contract
                Contract result = apiInstance.ContractsPost(contractRequest);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling DefaultApi.ContractsPost: " + e.Message );
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

<a name="infoget"></a>
# **InfoGet**
> Info InfoGet ()

Get Service Info.

Gets Service Info object.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.ServiceClient.Api;
using ArkAces.ServiceClient.Client;
using ArkAces.ServiceClient.Model;

namespace Example
{
    public class InfoGetExample
    {
        public void main()
        {
            var apiInstance = new DefaultApi();

            try
            {
                // Get Service Info.
                Info result = apiInstance.InfoGet();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling DefaultApi.InfoGet: " + e.Message );
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

<a name="statusget"></a>
# **StatusGet**
> Health StatusGet ()

Get Health of node.

Get application health information.

### Example
```csharp
using System;
using System.Diagnostics;
using ArkAces.ServiceClient.Api;
using ArkAces.ServiceClient.Client;
using ArkAces.ServiceClient.Model;

namespace Example
{
    public class StatusGetExample
    {
        public void main()
        {
            var apiInstance = new DefaultApi();

            try
            {
                // Get Health of node.
                Health result = apiInstance.StatusGet();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling DefaultApi.StatusGet: " + e.Message );
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

