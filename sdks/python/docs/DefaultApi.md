# io.arkaces.service_client.DefaultApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contracts_id_get**](DefaultApi.md#contracts_id_get) | **GET** /contracts/{id} | Get Service Contract.
[**contracts_post**](DefaultApi.md#contracts_post) | **POST** /contracts | Create Service Contract
[**info_get**](DefaultApi.md#info_get) | **GET** /info | Get Service Info.
[**status_get**](DefaultApi.md#status_get) | **GET** /status | Get Health of node.


# **contracts_id_get**
> Contract contracts_id_get(id)

Get Service Contract.

Gets service contract info for a contract.

### Example 
```python
from __future__ import print_function
import time
import io.arkaces.service_client
from io.arkaces.service_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = io.arkaces.service_client.DefaultApi()
id = 'id_example' # str | Contract identifier.

try: 
    # Get Service Contract.
    api_response = api_instance.contracts_id_get(id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->contracts_id_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **str**| Contract identifier. | 

### Return type

[**Contract**](Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **contracts_post**
> Contract contracts_post(contract_request=contract_request)

Create Service Contract

Creates a new service contract.

### Example 
```python
from __future__ import print_function
import time
import io.arkaces.service_client
from io.arkaces.service_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = io.arkaces.service_client.DefaultApi()
contract_request = io.arkaces.service_client.ContractRequest() # ContractRequest | The request to create a new contract. (optional)

try: 
    # Create Service Contract
    api_response = api_instance.contracts_post(contract_request=contract_request)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->contracts_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract_request** | [**ContractRequest**](ContractRequest.md)| The request to create a new contract. | [optional] 

### Return type

[**Contract**](Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **info_get**
> Info info_get()

Get Service Info.

Gets Service Info object.

### Example 
```python
from __future__ import print_function
import time
import io.arkaces.service_client
from io.arkaces.service_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = io.arkaces.service_client.DefaultApi()

try: 
    # Get Service Info.
    api_response = api_instance.info_get()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->info_get: %s\n" % e)
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

# **status_get**
> Health status_get()

Get Health of node.

Get application health information.

### Example 
```python
from __future__ import print_function
import time
import io.arkaces.service_client
from io.arkaces.service_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = io.arkaces.service_client.DefaultApi()

try: 
    # Get Health of node.
    api_response = api_instance.status_get()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling DefaultApi->status_get: %s\n" % e)
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

