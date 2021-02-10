# Swagger\Client\EventApi

All URIs are relative to *https://convertein.com:8083/convertein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEventTestUsingPOST**](EventApi.md#createEventTestUsingPOST) | **POST** /{apiKey}/events | Get Event List
[**createEventUsingPUT**](EventApi.md#createEventUsingPUT) | **PUT** /{apiKey}/event/{id} | Create event


# **createEventTestUsingPOST**
> \Swagger\Client\Model\ResponseEntity createEventTestUsingPOST($api_key, $item_id, $user_id, $name)

Get Event List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$item_id = "item_id_example"; // string | itemId
$user_id = "user_id_example"; // string | userId
$name = "name_example"; // string | name

try {
    $result = $apiInstance->createEventTestUsingPOST($api_key, $item_id, $user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->createEventTestUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **item_id** | **string**| itemId |
 **user_id** | **string**| userId |
 **name** | **string**| name |

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEventUsingPUT**
> \Swagger\Client\Model\ResponseEntity createEventUsingPUT($api_key, $id, $item_id, $user_id, $name)

Create event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id
$item_id = "item_id_example"; // string | itemId
$user_id = "user_id_example"; // string | userId
$name = "VIEW"; // string | name

try {
    $result = $apiInstance->createEventUsingPUT($api_key, $id, $item_id, $user_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->createEventUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |
 **item_id** | **string**| itemId | [optional]
 **user_id** | **string**| userId | [optional]
 **name** | **string**| name | [optional] [default to VIEW]

### Return type

[**\Swagger\Client\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

