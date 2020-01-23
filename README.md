# SwaggerClient-php
Quantities interface

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0.0
- Package version: v1.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/gisevevokoru/EzzeSiftuz-Quantities-v2.git"
    }
  ],
  "require": {
    "gisevevokoru/EzzeSiftuz-Quantities-v2": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new EzzeSiftuz\Quantities_v2\Api\AvailableQuantityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \EzzeSiftuz\Quantities_v2\Model\AvailableQuantityRequestDTOV2()); // \EzzeSiftuz\Quantities_v2\Model\AvailableQuantityRequestDTOV2[] | availableQuantityRequestDTO
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

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AvailableQuantityApi* | [**storeAvailableQuantitiesUsingPOST**](docs/Api/AvailableQuantityApi.md#storeavailablequantitiesusingpost) | **POST** /v2/quantities | Update the available quantity for a specific SKU (up to 200 SKUs per request)

## Documentation For Models

 - [ApiErrorResponseV2](docs/Model/ApiErrorResponseV2.md)
 - [ApiErrorV2](docs/Model/ApiErrorV2.md)
 - [AvailableQuantityRequestDTOV2](docs/Model/AvailableQuantityRequestDTOV2.md)
 - [UpdateQuantityMultiStatusResponse](docs/Model/UpdateQuantityMultiStatusResponse.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



