# ArkAces\AcesServiceApi\AcesServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsIdGet**](AcesServiceApi.md#contractsIdGet) | **GET** /contracts/{id} | Get Service Contract.
[**contractsPost**](AcesServiceApi.md#contractsPost) | **POST** /contracts | Create Service Contract
[**healthGet**](AcesServiceApi.md#healthGet) | **GET** /health | Get Health of node.
[**rootGet**](AcesServiceApi.md#rootGet) | **GET** / | Get Service Info.


# **contractsIdGet**
> \ArkAces\AcesServiceApi\Model\Contract contractsIdGet($id)

Get Service Contract.

Gets service contract info for a contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\AcesServiceApi\Api\AcesServiceApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | Contract identifier.

try {
    $result = $api_instance->contractsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcesServiceApi->contractsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contract identifier. |

### Return type

[**\ArkAces\AcesServiceApi\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contractsPost**
> \ArkAces\AcesServiceApi\Model\Contract contractsPost($contractRequest)

Create Service Contract

Creates a new service contract.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\AcesServiceApi\Api\AcesServiceApi(new \Http\Adapter\Guzzle6\Client());
$contractRequest = new \ArkAces\AcesServiceApi\Model\ContractRequest(); // \ArkAces\AcesServiceApi\Model\ContractRequest | The request to create a new contract.

try {
    $result = $api_instance->contractsPost($contractRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcesServiceApi->contractsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractRequest** | [**\ArkAces\AcesServiceApi\Model\ContractRequest**](../Model/ContractRequest.md)| The request to create a new contract. | [optional]

### Return type

[**\ArkAces\AcesServiceApi\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **healthGet**
> \ArkAces\AcesServiceApi\Model\Health healthGet()

Get Health of node.

Get application health information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\AcesServiceApi\Api\AcesServiceApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->healthGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcesServiceApi->healthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ArkAces\AcesServiceApi\Model\Health**](../Model/Health.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rootGet**
> \ArkAces\AcesServiceApi\Model\Info rootGet()

Get Service Info.

Gets Service Info object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ArkAces\AcesServiceApi\Api\AcesServiceApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->rootGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcesServiceApi->rootGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ArkAces\AcesServiceApi\Model\Info**](../Model/Info.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

