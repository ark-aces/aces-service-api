# com.arkaces.aces_service_api.AcesServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contracts_id_get**](AcesServiceApi.md#contracts_id_get) | **GET** /contracts/{id} | Get Service Contract.
[**contracts_post**](AcesServiceApi.md#contracts_post) | **POST** /contracts | Create Service Contract
[**health_get**](AcesServiceApi.md#health_get) | **GET** /health | Get Health of node.
[**root_get**](AcesServiceApi.md#root_get) | **GET** / | Get Service Info.


# **contracts_id_get**
> Contract contracts_id_get(id)

Get Service Contract.

Gets service contract info for a contract.

### Example 
```python
from __future__ import print_function
import time
import com.arkaces.aces_service_api
from com.arkaces.aces_service_api.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = com.arkaces.aces_service_api.AcesServiceApi()
id = 'id_example' # str | Contract identifier.

try: 
    # Get Service Contract.
    api_response = api_instance.contracts_id_get(id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AcesServiceApi->contracts_id_get: %s\n" % e)
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
import com.arkaces.aces_service_api
from com.arkaces.aces_service_api.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = com.arkaces.aces_service_api.AcesServiceApi()
contract_request = com.arkaces.aces_service_api.ContractRequest() # ContractRequest | The request to create a new contract. (optional)

try: 
    # Create Service Contract
    api_response = api_instance.contracts_post(contract_request=contract_request)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AcesServiceApi->contracts_post: %s\n" % e)
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

# **health_get**
> Health health_get()

Get Health of node.

Get application health information.

### Example 
```python
from __future__ import print_function
import time
import com.arkaces.aces_service_api
from com.arkaces.aces_service_api.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = com.arkaces.aces_service_api.AcesServiceApi()

try: 
    # Get Health of node.
    api_response = api_instance.health_get()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AcesServiceApi->health_get: %s\n" % e)
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

# **root_get**
> Info root_get()

Get Service Info.

Gets Service Info object.

### Example 
```python
from __future__ import print_function
import time
import com.arkaces.aces_service_api
from com.arkaces.aces_service_api.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = com.arkaces.aces_service_api.AcesServiceApi()

try: 
    # Get Service Info.
    api_response = api_instance.root_get()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AcesServiceApi->root_get: %s\n" % e)
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

