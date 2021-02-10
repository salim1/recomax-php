# Swagger\Client\RecommendationApi

All URIs are relative to *https://convertein.com:8083/convertein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryItemUsingGET**](RecommendationApi.md#queryItemUsingGET) | **GET** /{apiKey}/recommendations/items/{id} | Get Recommendations for items
[**recommendForUserUsingGET**](RecommendationApi.md#recommendForUserUsingGET) | **GET** /{apiKey}/recommendations/users/{id} | Get Recommendations for user


# **queryItemUsingGET**
> \Swagger\Client\Model\RecomResult queryItemUsingGET($api_key, $id, $start, $page_size, $sort_field, $sort_type, $token, $did, $user, $fq, $event, $sb, $callback, $uid_cookie)

Get Recommendations for items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecommendationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id
$start = 0; // int | start
$page_size = 10; // int | pageSize
$sort_field = "sort_field_example"; // string | sortField
$sort_type = "asc"; // string | sortType
$token = "token_example"; // string | token
$did = "did_example"; // string | did
$user = "user_example"; // string | user
$fq = array("fq_example"); // string[] | fq
$event = "ON_QUERY"; // string | event
$sb = "false"; // string | sb
$callback = "callback_example"; // string | callback
$uid_cookie = "uid_cookie_example"; // string | uidCookie

try {
    $result = $apiInstance->queryItemUsingGET($api_key, $id, $start, $page_size, $sort_field, $sort_type, $token, $did, $user, $fq, $event, $sb, $callback, $uid_cookie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationApi->queryItemUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |
 **start** | **int**| start | [optional] [default to 0]
 **page_size** | **int**| pageSize | [optional] [default to 10]
 **sort_field** | **string**| sortField | [optional]
 **sort_type** | **string**| sortType | [optional] [default to asc]
 **token** | **string**| token | [optional]
 **did** | **string**| did | [optional]
 **user** | **string**| user | [optional]
 **fq** | [**string[]**](../Model/string.md)| fq | [optional]
 **event** | **string**| event | [optional] [default to ON_QUERY]
 **sb** | **string**| sb | [optional] [default to false]
 **callback** | **string**| callback | [optional]
 **uid_cookie** | **string**| uidCookie | [optional]

### Return type

[**\Swagger\Client\Model\RecomResult**](../Model/RecomResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendForUserUsingGET**
> \Swagger\Client\Model\RecomResult recommendForUserUsingGET($api_key, $id)

Get Recommendations for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecommendationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id

try {
    $result = $apiInstance->recommendForUserUsingGET($api_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationApi->recommendForUserUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |

### Return type

[**\Swagger\Client\Model\RecomResult**](../Model/RecomResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

