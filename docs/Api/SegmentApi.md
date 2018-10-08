# Justpark\Flagr\SegmentApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegment**](SegmentApi.md#createSegment) | **POST** /flags/{flagID}/segments | 
[**deleteSegment**](SegmentApi.md#deleteSegment) | **DELETE** /flags/{flagID}/segments/{segmentID} | 
[**findSegments**](SegmentApi.md#findSegments) | **GET** /flags/{flagID}/segments | 
[**putSegment**](SegmentApi.md#putSegment) | **PUT** /flags/{flagID}/segments/{segmentID} | 
[**putSegmentsReorder**](SegmentApi.md#putSegmentsReorder) | **PUT** /flags/{flagID}/segments/reorder | 


# **createSegment**
> \Justpark\Flagr\Model\Segment createSegment($flag_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag to get
$body = new \Justpark\Flagr\Model\CreateSegmentRequest(); // \Justpark\Flagr\Model\CreateSegmentRequest | create a segment under a flag

try {
    $result = $apiInstance->createSegment($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->createSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |
 **body** | [**\Justpark\Flagr\Model\CreateSegmentRequest**](../Model/CreateSegmentRequest.md)| create a segment under a flag |

### Return type

[**\Justpark\Flagr\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSegment**
> deleteSegment($flag_id, $segment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment

try {
    $apiInstance->deleteSegment($flag_id, $segment_id);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->deleteSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSegments**
> \Justpark\Flagr\Model\Segment[] findSegments($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag to get

try {
    $result = $apiInstance->findSegments($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->findSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag to get |

### Return type

[**\Justpark\Flagr\Model\Segment[]**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSegment**
> \Justpark\Flagr\Model\Segment putSegment($flag_id, $segment_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment
$body = new \Justpark\Flagr\Model\PutSegmentRequest(); // \Justpark\Flagr\Model\PutSegmentRequest | update a segment

try {
    $result = $apiInstance->putSegment($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **segment_id** | **int**| numeric ID of the segment |
 **body** | [**\Justpark\Flagr\Model\PutSegmentRequest**](../Model/PutSegmentRequest.md)| update a segment |

### Return type

[**\Justpark\Flagr\Model\Segment**](../Model/Segment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSegmentsReorder**
> putSegmentsReorder($flag_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\SegmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$body = new \Justpark\Flagr\Model\PutSegmentReorderRequest(); // \Justpark\Flagr\Model\PutSegmentReorderRequest | reorder segments

try {
    $apiInstance->putSegmentsReorder($flag_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SegmentApi->putSegmentsReorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **body** | [**\Justpark\Flagr\Model\PutSegmentReorderRequest**](../Model/PutSegmentReorderRequest.md)| reorder segments |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

