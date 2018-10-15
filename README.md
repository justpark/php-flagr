# jp-flagr
Flagr is a feature flagging, A/B testing and dynamic configuration microservice

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.10
- Package version: 1.0.9
- Build package: io.swagger.codegen.languages.PhpClientCodegen

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
      "url": "https://github.com/justpark/php-flagr.git"
    }
  ],
  "require": {
    "justpark/php-flagr": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/jp-flagr/vendor/autoload.php');
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

$apiInstance = new JustPark\Flagr\Api\ConstraintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag_id = 789; // int | numeric ID of the flag
$segment_id = 789; // int | numeric ID of the segment
$body = new \JustPark\Flagr\Model\CreateConstraintRequest(); // \JustPark\Flagr\Model\CreateConstraintRequest | create a constraint

try {
    $result = $apiInstance->createConstraint($flag_id, $segment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstraintApi->createConstraint: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConstraintApi* | [**createConstraint**](docs/Api/ConstraintApi.md#createconstraint) | **POST** /flags/{flagID}/segments/{segmentID}/constraints | 
*ConstraintApi* | [**deleteConstraint**](docs/Api/ConstraintApi.md#deleteconstraint) | **DELETE** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 
*ConstraintApi* | [**findConstraints**](docs/Api/ConstraintApi.md#findconstraints) | **GET** /flags/{flagID}/segments/{segmentID}/constraints | 
*ConstraintApi* | [**putConstraint**](docs/Api/ConstraintApi.md#putconstraint) | **PUT** /flags/{flagID}/segments/{segmentID}/constraints/{constraintID} | 
*DistributionApi* | [**findDistributions**](docs/Api/DistributionApi.md#finddistributions) | **GET** /flags/{flagID}/segments/{segmentID}/distributions | 
*DistributionApi* | [**putDistributions**](docs/Api/DistributionApi.md#putdistributions) | **PUT** /flags/{flagID}/segments/{segmentID}/distributions | 
*EvaluationApi* | [**postEvaluation**](docs/Api/EvaluationApi.md#postevaluation) | **POST** /evaluation | 
*EvaluationApi* | [**postEvaluationBatch**](docs/Api/EvaluationApi.md#postevaluationbatch) | **POST** /evaluation/batch | 
*ExportApi* | [**getExportSQLite**](docs/Api/ExportApi.md#getexportsqlite) | **GET** /export/sqlite | 
*FlagApi* | [**createFlag**](docs/Api/FlagApi.md#createflag) | **POST** /flags | 
*FlagApi* | [**deleteFlag**](docs/Api/FlagApi.md#deleteflag) | **DELETE** /flags/{flagID} | 
*FlagApi* | [**findFlags**](docs/Api/FlagApi.md#findflags) | **GET** /flags | 
*FlagApi* | [**getFlag**](docs/Api/FlagApi.md#getflag) | **GET** /flags/{flagID} | 
*FlagApi* | [**getFlagSnapshots**](docs/Api/FlagApi.md#getflagsnapshots) | **GET** /flags/{flagID}/snapshots | 
*FlagApi* | [**putFlag**](docs/Api/FlagApi.md#putflag) | **PUT** /flags/{flagID} | 
*FlagApi* | [**setFlagEnabled**](docs/Api/FlagApi.md#setflagenabled) | **PUT** /flags/{flagID}/enabled | 
*HealthApi* | [**getHealth**](docs/Api/HealthApi.md#gethealth) | **GET** /health | 
*SegmentApi* | [**createSegment**](docs/Api/SegmentApi.md#createsegment) | **POST** /flags/{flagID}/segments | 
*SegmentApi* | [**deleteSegment**](docs/Api/SegmentApi.md#deletesegment) | **DELETE** /flags/{flagID}/segments/{segmentID} | 
*SegmentApi* | [**findSegments**](docs/Api/SegmentApi.md#findsegments) | **GET** /flags/{flagID}/segments | 
*SegmentApi* | [**putSegment**](docs/Api/SegmentApi.md#putsegment) | **PUT** /flags/{flagID}/segments/{segmentID} | 
*SegmentApi* | [**putSegmentsReorder**](docs/Api/SegmentApi.md#putsegmentsreorder) | **PUT** /flags/{flagID}/segments/reorder | 
*VariantApi* | [**createVariant**](docs/Api/VariantApi.md#createvariant) | **POST** /flags/{flagID}/variants | 
*VariantApi* | [**deleteVariant**](docs/Api/VariantApi.md#deletevariant) | **DELETE** /flags/{flagID}/variants/{variantID} | 
*VariantApi* | [**findVariants**](docs/Api/VariantApi.md#findvariants) | **GET** /flags/{flagID}/variants | 
*VariantApi* | [**putVariant**](docs/Api/VariantApi.md#putvariant) | **PUT** /flags/{flagID}/variants/{variantID} | 


## Documentation For Models

 - [Constraint](docs/Model/Constraint.md)
 - [CreateConstraintRequest](docs/Model/CreateConstraintRequest.md)
 - [CreateFlagRequest](docs/Model/CreateFlagRequest.md)
 - [CreateSegmentRequest](docs/Model/CreateSegmentRequest.md)
 - [CreateVariantRequest](docs/Model/CreateVariantRequest.md)
 - [Distribution](docs/Model/Distribution.md)
 - [Error](docs/Model/Error.md)
 - [EvalContext](docs/Model/EvalContext.md)
 - [EvalDebugLog](docs/Model/EvalDebugLog.md)
 - [EvalResult](docs/Model/EvalResult.md)
 - [EvaluationBatchRequest](docs/Model/EvaluationBatchRequest.md)
 - [EvaluationBatchResponse](docs/Model/EvaluationBatchResponse.md)
 - [EvaluationEntity](docs/Model/EvaluationEntity.md)
 - [Flag](docs/Model/Flag.md)
 - [FlagSnapshot](docs/Model/FlagSnapshot.md)
 - [PutDistributionsRequest](docs/Model/PutDistributionsRequest.md)
 - [PutFlagRequest](docs/Model/PutFlagRequest.md)
 - [PutSegmentReorderRequest](docs/Model/PutSegmentReorderRequest.md)
 - [PutSegmentRequest](docs/Model/PutSegmentRequest.md)
 - [PutVariantRequest](docs/Model/PutVariantRequest.md)
 - [Segment](docs/Model/Segment.md)
 - [SegmentDebugLog](docs/Model/SegmentDebugLog.md)
 - [SetFlagEnabledRequest](docs/Model/SetFlagEnabledRequest.md)
 - [Variant](docs/Model/Variant.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




