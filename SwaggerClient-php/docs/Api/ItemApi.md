# Swagger\Client\ItemApi

All URIs are relative to *https://convertein.com:8083/convertein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemAtUsingPUT**](ItemApi.md#addItemAtUsingPUT) | **PUT** /{apiKey}/items/{id} | Add item
[**addItemUsingPOST**](ItemApi.md#addItemUsingPOST) | **POST** /{apiKey}/items | Add item
[**deleteItemUsingDELETE**](ItemApi.md#deleteItemUsingDELETE) | **DELETE** /{apiKey}/items/{id} | Delete item
[**gettemUsingGET**](ItemApi.md#gettemUsingGET) | **GET** /{apiKey}/items/{id} | Get item
[**listtemUsingGET**](ItemApi.md#listtemUsingGET) | **GET** /{apiKey}/items | List items
[**updateItemUsingPOST**](ItemApi.md#updateItemUsingPOST) | **POST** /{apiKey}/items/{id} | Update item


# **addItemAtUsingPUT**
> \Swagger\Client\Model\Item addItemAtUsingPUT($api_key, $id, $attribute_list)

Add item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id
$attribute_list = array(new Attribute()); // \Swagger\Client\Model\Attribute[] | attributeList

try {
    $result = $apiInstance->addItemAtUsingPUT($api_key, $id, $attribute_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->addItemAtUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |
 **attribute_list** | [**\Swagger\Client\Model\Attribute[]**](../Model/Attribute.md)| attributeList |

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemUsingPOST**
> \Swagger\Client\Model\Response addItemUsingPOST($api_key, $attribute_list)

Add item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$attribute_list = array(new Attribute()); // \Swagger\Client\Model\Attribute[] | attributeList

try {
    $result = $apiInstance->addItemUsingPOST($api_key, $attribute_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->addItemUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **attribute_list** | [**\Swagger\Client\Model\Attribute[]**](../Model/Attribute.md)| attributeList |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemUsingDELETE**
> \Swagger\Client\Model\Item deleteItemUsingDELETE($api_key, $id)

Delete item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id

try {
    $result = $apiInstance->deleteItemUsingDELETE($api_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->deleteItemUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gettemUsingGET**
> \Swagger\Client\Model\Item gettemUsingGET($api_key, $id)

Get item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id

try {
    $result = $apiInstance->gettemUsingGET($api_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->gettemUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |

### Return type

[**\Swagger\Client\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listtemUsingGET**
> \Swagger\Client\Model\Item[] listtemUsingGET($api_key, $offset, $limit)

List items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$offset = 56; // int | offsel of the items list
$limit = 56; // int | limit of the items list

try {
    $result = $apiInstance->listtemUsingGET($api_key, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->listtemUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **offset** | **int**| offsel of the items list | [optional]
 **limit** | **int**| limit of the items list | [optional]

### Return type

[**\Swagger\Client\Model\Item[]**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemUsingPOST**
> \Swagger\Client\Model\Response updateItemUsingPOST($api_key, $id, $attribute_list)

Update item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id
$attribute_list = array(new Attribute()); // \Swagger\Client\Model\Attribute[] | attributeList

try {
    $result = $apiInstance->updateItemUsingPOST($api_key, $id, $attribute_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateItemUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |
 **attribute_list** | [**\Swagger\Client\Model\Attribute[]**](../Model/Attribute.md)| attributeList |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

