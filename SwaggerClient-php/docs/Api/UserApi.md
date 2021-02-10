# Swagger\Client\UserApi

All URIs are relative to *https://convertein.com:8083/convertein/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserUsingPOST**](UserApi.md#addUserUsingPOST) | **POST** /{apiKey}/users | Add User
[**addUserUsingPUT**](UserApi.md#addUserUsingPUT) | **PUT** /{apiKey}/users/{id} | Add User
[**deleteUserUsingDELETE**](UserApi.md#deleteUserUsingDELETE) | **DELETE** /{apiKey}/users/{id} | Delete User
[**getSegmentsUsingGET**](UserApi.md#getSegmentsUsingGET) | **GET** /{apiKey}/uses/{id}/segments | Get User List
[**getUserUsingGET**](UserApi.md#getUserUsingGET) | **GET** /{apiKey}/users/{id} | Get User
[**listUsersUsingGET**](UserApi.md#listUsersUsingGET) | **GET** /{apiKey}/users | List Users
[**updateUserUsingPOST**](UserApi.md#updateUserUsingPOST) | **POST** /{apiKey}/users/{id} | User item


# **addUserUsingPOST**
> \Swagger\Client\Model\Response addUserUsingPOST($api_key, $attribute_list)

Add User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$attribute_list = array(new Attribute()); // \Swagger\Client\Model\Attribute[] | attributeList

try {
    $result = $apiInstance->addUserUsingPOST($api_key, $attribute_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addUserUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **addUserUsingPUT**
> \Swagger\Client\Model\User addUserUsingPUT($api_key, $id, $attribute_list)

Add User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id
$attribute_list = array(new Attribute()); // \Swagger\Client\Model\Attribute[] | attributeList

try {
    $result = $apiInstance->addUserUsingPUT($api_key, $id, $attribute_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addUserUsingPUT: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserUsingDELETE**
> \Swagger\Client\Model\User deleteUserUsingDELETE($api_key, $id)

Delete User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id

try {
    $result = $apiInstance->deleteUserUsingDELETE($api_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentsUsingGET**
> string[] getSegmentsUsingGET($api_key, $id)

Get User List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getSegmentsUsingGET($api_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getSegmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserUsingGET**
> \Swagger\Client\Model\User getUserUsingGET($api_key, $id)

Get User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id

try {
    $result = $apiInstance->getUserUsingGET($api_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**| apiKey |
 **id** | **string**| id |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsersUsingGET**
> \Swagger\Client\Model\User[] listUsersUsingGET($api_key, $offset, $limit)

List Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$offset = 56; // int | offsel of the items list
$limit = 56; // int | limit of the items list

try {
    $result = $apiInstance->listUsersUsingGET($api_key, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUsersUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserUsingPOST**
> \Swagger\Client\Model\Response updateUserUsingPOST($api_key, $id, $attribute_list)

User item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | apiKey
$id = "id_example"; // string | id
$attribute_list = array(new Attribute()); // \Swagger\Client\Model\Attribute[] | attributeList

try {
    $result = $apiInstance->updateUserUsingPOST($api_key, $id, $attribute_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserUsingPOST: ', $e->getMessage(), PHP_EOL;
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

