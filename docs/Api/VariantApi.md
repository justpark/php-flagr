# Justpark\Flagr\VariantApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariant**](VariantApi.md#createVariant) | **POST** /flags/{flagID}/variants | 
[**deleteVariant**](VariantApi.md#deleteVariant) | **DELETE** /flags/{flagID}/variants/{variantID} | 
[**findVariants**](VariantApi.md#findVariants) | **GET** /flags/{flagID}/variants | 
[**putVariant**](VariantApi.md#putVariant) | **PUT** /flags/{flagID}/variants/{variantID} | 


# **createVariant**
> \Justpark\Flagr\Model\Variant createVariant($flag_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$body = new \Justpark\Flagr\Model\CreateVariantRequest(); // \Justpark\Flagr\Model\CreateVariantRequest | create a variant

try {
    $result = $apiInstance->createVariant($flag_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->createVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **body** | [**\Justpark\Flagr\Model\CreateVariantRequest**](../Model/CreateVariantRequest.md)| create a variant |

### Return type

[**\Justpark\Flagr\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariant**
> deleteVariant($flag_id, $variant_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$variant_id = 789; // int | numeric ID of the variant

try {
    $apiInstance->deleteVariant($flag_id, $variant_id);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->deleteVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **variant_id** | **int**| numeric ID of the variant |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findVariants**
> \Justpark\Flagr\Model\Variant[] findVariants($flag_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag

try {
    $result = $apiInstance->findVariants($flag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->findVariants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |

### Return type

[**\Justpark\Flagr\Model\Variant[]**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVariant**
> \Justpark\Flagr\Model\Variant putVariant($flag_id, $variant_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Justpark\Flagr\Api\VariantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$variant_id = 789; // int | numeric ID of the variant
$body = new \Justpark\Flagr\Model\PutVariantRequest(); // \Justpark\Flagr\Model\PutVariantRequest | update a variant

try {
    $result = $apiInstance->putVariant($flag_id, $variant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantApi->putVariant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_id** | **int**| numeric ID of the flag |
 **variant_id** | **int**| numeric ID of the variant |
 **body** | [**\Justpark\Flagr\Model\PutVariantRequest**](../Model/PutVariantRequest.md)| update a variant |

### Return type

[**\Justpark\Flagr\Model\Variant**](../Model/Variant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

