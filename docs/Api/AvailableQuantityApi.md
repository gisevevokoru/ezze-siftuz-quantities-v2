# EzzeSiftuz\Quantitiesv2\AvailableQuantityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeAvailableQuantitiesUsingPOST**](AvailableQuantityApi.md#storeavailablequantitiesusingpost) | **POST** /v2/quantities | Update the available quantity for a specific SKU (up to 200 SKUs per request)

# **storeAvailableQuantitiesUsingPOST**
> object storeAvailableQuantitiesUsingPOST($body, $authorization, $name)

Update the available quantity for a specific SKU (up to 200 SKUs per request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\Quantitiesv2\Api\AvailableQuantityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \EzzeSiftuz\Quantitiesv2\Model\AvailableQuantityRequestDTOV2()); // \EzzeSiftuz\Quantitiesv2\Model\AvailableQuantityRequestDTOV2[] | availableQuantityRequestDTO
$authorization = "\"Bearer access_token\""; // string | Access Token
$name = "name_example"; // string | 

try {
    $result = $apiInstance->storeAvailableQuantitiesUsingPOST($body, $authorization, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableQuantityApi->storeAvailableQuantitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\EzzeSiftuz\Quantitiesv2\Model\AvailableQuantityRequestDTOV2[]**](../Model/AvailableQuantityRequestDTOV2.md)| availableQuantityRequestDTO |
 **authorization** | **string**| Access Token |
 **name** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

