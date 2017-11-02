# ArkAces\ServiceClient\DefaultApi

All URIs are relative to *https://localhost/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsIdGet**](DefaultApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
[**contractsPost**](DefaultApi.md#contractsPost) | **POST** /contracts | Create Service Contract
[**infoGet**](DefaultApi.md#infoGet) | **GET** /info | Get Service Info.
[**statusGet**](DefaultApi.md#statusGet) | **GET** /status | Get Health of node.


# **contractsIdGet**
> \ArkAces\ServiceClient\Model\Contract contractsIdGet($id)

Get Service Contract.

Gets service contract info for a contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\ServiceClient\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | Contract identifier.

try {
    $result = $api_instance->contractsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contractsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contract identifier. |

### Return type

[**\ArkAces\ServiceClient\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contractsPost**
> \ArkAces\ServiceClient\Model\Contract contractsPost($contractRequest)

Create Service Contract

Creates a new service contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\ServiceClient\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());
$contractRequest = new \ArkAces\ServiceClient\Model\ContractRequest(); // \ArkAces\ServiceClient\Model\ContractRequest | The request to create a new contract.

try {
    $result = $api_instance->contractsPost($contractRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contractsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractRequest** | [**\ArkAces\ServiceClient\Model\ContractRequest**](../Model/ContractRequest.md)| The request to create a new contract. | [optional]

### Return type

[**\ArkAces\ServiceClient\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoGet**
> \ArkAces\ServiceClient\Model\Info infoGet()

Get Service Info.

Gets Service Info object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\ServiceClient\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->infoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->infoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ArkAces\ServiceClient\Model\Info**](../Model/Info.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statusGet**
> \ArkAces\ServiceClient\Model\Health statusGet()

Get Health of node.

Get application health information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\ServiceClient\Api\DefaultApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->statusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ArkAces\ServiceClient\Model\Health**](../Model/Health.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

