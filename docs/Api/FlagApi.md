# Justpark\Flagr\FlagApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFlag**](FlagApi.md#createFlag) | **POST** /flags | 
[**deleteFlag**](FlagApi.md#deleteFlag) | **DELETE** /flags/{flagID} | 
[**findFlags**](FlagApi.md#findFlags) | **GET** /flags | 
[**getFlag**](FlagApi.md#getFlag) | **GET** /flags/{flagID} | 
[**getFlagSnapshots**](FlagApi.md#getFlagSnapshots) | **GET** /flags/{flagID}/snapshots | 
[**putFlag**](FlagApi.md#putFlag) | **PUT** /flags/{flagID} | 
[**setFlagEnabled**](FlagApi.md#setFlagEnabled) | **PUT** /flags/{flagID}/enabled | 


# **createFlag**
> \Justpark\Flagr\Model\Flag createFlag($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Justpark\Flagr\Model\CreateFlagRequest(); // \Justpark\Flagr\Model\CreateFlagRequest | create a flag

try {
    $result = $apiInstance->createFlag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->createFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justpark\Flagr\Model\CreateFlagRequest**](../Model/CreateFlagRequest.md)| create a flag |

### Return type

[**\Justpark\Flagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlag**
> deleteFlag($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag

try {
    $apiInstance->deleteFlag($flag_id);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->deleteFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findFlags**
> \Justpark\Flagr\Model\Flag[] findFlags($limit, $enabled, $description, $description_like, $key, $offset)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 789; // int | the numbers of flags to return
$enabled = true; // bool | return flags having given enabled status
$description = "description_example"; // string | return flags exactly matching given description
$description_like = "description_like_example"; // string | return flags partially matching given description
$key = "key_example"; // string | return flags matching given key
$offset = 789; // int | return flags given the offset, it should usually set together with limit

try {
    $result = $apiInstance->findFlags($limit, $enabled, $description, $description_like, $key, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->findFlags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| the numbers of flags to return | [optional]
 **enabled** | **bool**| return flags having given enabled status | [optional]
 **description** | **string**| return flags exactly matching given description | [optional]
 **description_like** | **string**| return flags partially matching given description | [optional]
 **key** | **string**| return flags matching given key | [optional]
 **offset** | **int**| return flags given the offset, it should usually set together with limit | [optional]

### Return type

[**\Justpark\Flagr\Model\Flag[]**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlag**
> \Justpark\Flagr\Model\Flag getFlag($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlag($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Justpark\Flagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlagSnapshots**
> \Justpark\Flagr\Model\FlagSnapshot[] getFlagSnapshots($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->getFlagSnapshots($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->getFlagSnapshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Justpark\Flagr\Model\FlagSnapshot[]**](../Model/FlagSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlag**
> \Justpark\Flagr\Model\Flag putFlag($flag_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag to get
$body = new \Justpark\Flagr\Model\PutFlagRequest(); // \Justpark\Flagr\Model\PutFlagRequest | update a flag

try {
    $result = $apiInstance->putFlag($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->putFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |
 **body** | [**\Justpark\Flagr\Model\PutFlagRequest**](../Model/PutFlagRequest.md)| update a flag |

### Return type

[**\Justpark\Flagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFlagEnabled**
> \Justpark\Flagr\Model\Flag setFlagEnabled($flag_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\FlagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag to get
$body = new \Justpark\Flagr\Model\SetFlagEnabledRequest(); // \Justpark\Flagr\Model\SetFlagEnabledRequest | set flag enabled state

try {
    $result = $apiInstance->setFlagEnabled($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlagApi->setFlagEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |
 **body** | [**\Justpark\Flagr\Model\SetFlagEnabledRequest**](../Model/SetFlagEnabledRequest.md)| set flag enabled state |

### Return type

[**\Justpark\Flagr\Model\Flag**](../Model/Flag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

