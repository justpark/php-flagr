# Justpark\Flagr\ConstraintApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConstraint**](ConstraintApi.md#createConstraint) | **POST** /flags/{flagID}/segments/{segmentID}/constraints | 
[**deleteConstraint**](ConstraintApi.md#deleteConstraint) | **DELETE** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 
[**findConstraints**](ConstraintApi.md#findConstraints) | **GET** /flags/{flagID}/segments/{segmentID}/constraints | 
[**putConstraint**](ConstraintApi.md#putConstraint) | **PUT** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 


# **createConstraint**
> \Justpark\Flagr\Model\Constraint createConstraint($flag_id, $segment_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment
$body = new \Justpark\Flagr\Model\CreateConstraintRequest(); // \Justpark\Flagr\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->createConstraint($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->createConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **body** | [**\Justpark\Flagr\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |

### Return type

[**\Justpark\Flagr\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConstraint**
> deleteConstraint($flag_id, $segment_id, $constraint_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment
$constraint_id = 789; // int | numeric ID of the constraint

try {
    $apiInstance->deleteConstraint($flag_id, $segment_id, $constraint_id);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->deleteConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **constraint_id** | **int**| numeric ID of the constraint |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findConstraints**
> \Justpark\Flagr\Model\Constraint[] findConstraints($flag_id, $segment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment

try {
    $result = $apiInstance->findConstraints($flag_id, $segment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->findConstraints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

### Return type

[**\Justpark\Flagr\Model\Constraint[]**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConstraint**
> \Justpark\Flagr\Model\Constraint putConstraint($flag_id, $segment_id, $constraint_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment
$constraint_id = 789; // int | numeric ID of the constraint
$body = new \Justpark\Flagr\Model\CreateConstraintRequest(); // \Justpark\Flagr\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->putConstraint($flag_id, $segment_id, $constraint_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->putConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **constraint_id** | **int**| numeric ID of the constraint |
 **body** | [**\Justpark\Flagr\Model\CreateConstraintRequest**](../Model/CreateConstraintRequest.md)| create a constraint |

### Return type

[**\Justpark\Flagr\Model\Constraint**](../Model/Constraint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

