# EzzeSiftuz\QuantitiesV2\AvailableQuantityApi

All URIs are relative to *https://live.api.otto.market/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableQuantities**](AvailableQuantityApi.md#getavailablequantities) | **GET** /v2/quantities | Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated
[**getAvailableQuantityBySku**](AvailableQuantityApi.md#getavailablequantitybysku) | **GET** /v2/quantities/{sku} | Get available quantity for a specific Sku
[**storeAvailableQuantitiesUsingPOST**](AvailableQuantityApi.md#storeavailablequantitiesusingpost) | **POST** /v2/quantities | Update the available quantity for a specific SKU (up to 200 SKUs per request)

# **getAvailableQuantities**
> \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2 getAvailableQuantities($limit, $page)

Get available quantities for a specific Partner (Upto 200 per request). The partner needs to update the quantities for all his products once or limit the products being returned in the response by setting the limit value to number of products they have updated

Retrieve available quantities sorted by sku name in ascending.The maximum number of returned quantities is limited to 200.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\QuantitiesV2\Api\AvailableQuantityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 200; // int | The maximum number of available quantities to be returned in each response.
$page = 0; // int | Page number (0..N)

try {
    $result = $apiInstance->getAvailableQuantities($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableQuantityApi->getAvailableQuantities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum number of available quantities to be returned in each response. | [optional] [default to 200]
 **page** | **int**| Page number (0..N) | [optional] [default to 0]

### Return type

[**\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityResponseV2**](../Model/AvailableQuantityResponseV2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableQuantityBySku**
> \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2 getAvailableQuantityBySku($sku)

Get available quantity for a specific Sku

Fetch a single available quantity by its unique sku name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\QuantitiesV2\Api\AvailableQuantityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | The sku for the available quantity

try {
    $result = $apiInstance->getAvailableQuantityBySku($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableQuantityApi->getAvailableQuantityBySku: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| The sku for the available quantity |

### Return type

[**\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantitySingleResponseDTOV2**](../Model/AvailableQuantitySingleResponseDTOV2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeAvailableQuantitiesUsingPOST**
> object storeAvailableQuantitiesUsingPOST($body)

Update the available quantity for a specific SKU (up to 200 SKUs per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\QuantitiesV2\Api\AvailableQuantityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2()); // \EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[] | availableQuantityRequestDTO

try {
    $result = $apiInstance->storeAvailableQuantitiesUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableQuantityApi->storeAvailableQuantitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\QuantitiesV2\Model\AvailableQuantityRequestDTOV2[]**](../Model/AvailableQuantityRequestDTOV2.md)| availableQuantityRequestDTO |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

