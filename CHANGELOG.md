# CHANGELOG

## 6.0.2 (relased 2022-02-14)
- Increased composer.json PHP version for 8.1

## 6.0.1 (released 2021-12-10)
- Fix WSDL naming issue [#191](https://github.com/JeremyDunn/php-fedex-api-wrapper/pull/191)

## 6.0.0 (released 2021-11-16)
- Update services, tests, examples and composer packages [#187](https://github.com/JeremyDunn/php-fedex-api-wrapper/pull/187)

|Service|Version|
|---|---|
|Address Validation|4|
|Close|5|
|Courier Dispatch|3|
|Locations|12|
|Package Movement Information|5|
|Pickup|23|
|Rate|31|
|Return Tag|1|
|Ship|28|
|Track|20|
|Upload Document|19|
|Open Ship|20|
|Validation Availability and Commitment Service|17|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|
|DGLD Service|1|
|DGDS Service|3|

## 5.0.2 (released 2021-08-11)
- handle null pointer exception [#169](https://github.com/JeremyDunn/php-fedex-api-wrapper/pull/169)

## 5.0.1 (released 2021-02-13)
- PHP 8 compatibility: [#264](https://github.com/JeremyDunn/php-fedex-api-wrapper/issues/164)

## 5.0 (released 2020-11-28)
- Updated Rate service
- Updated Location service
- Updated Pickup service
- Updated Ship service
- Updated Validation Availability and Commitment Service
- Removed apigen dev depdendency

|Service|Version|
|---|---|
|Address Validation|4|
|Close|5|
|Courier Dispatch|3|
|Locations|12|
|Package Movement Information|5|
|Pickup|22|
|Rate|28|
|Return Tag|1|
|Ship|26|
|Track|19|
|Upload Document|11|
|Open Ship|15|
|Validation Availability and Commitment Service|14|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|
|DGLD Service|1|
|DGDS Service|3|

## 4.0 (released 2020-08-19)
- Updated Track Service

|Service|Version|
|---|---|
|Address Validation|4|
|Close|5|
|Courier Dispatch|3|
|Locations|9|
|Package Movement Information|5|
|Pickup|17|
|Rate|24|
|Return Tag|1|
|Ship|23|
|Track|19|
|Upload Document|11|
|Open Ship|15|
|Validation Availability and Commitment Service|8|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|
|DGLD Service|1|
|DGDS Service|3|


## 3.0 (released 2018-12-27)
- Updated Upload Document Service
- Updated Pickup Service
- Updated Ship Service
- Updated Address Validation Service
- Updated Rate Service
- Updated Track Service
- Updated Locations Service
- Added Country Service
- Added/updated usage examples

|Service|Version|
|---|---|
|Address Validation|4|
|Close|5|
|Courier Dispatch|3|
|Locations|9|
|Package Movement Information|5|
|Pickup|17|
|Rate|24|
|Return Tag|1|
|Ship|23|
|Track|16|
|Upload Document|11|
|Open Ship|15|
|Validation Availability and Commitment Service|8|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|
|DGLD Service|1|
|DGDS Service|3|

## 2.6 (released 2017-11-02)
- Added Dangerous Goods Data Service

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
|Open Ship|11|
|Validation Availability and Commitment Service|6|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|
|DGLD Service|1|
|DGDS Service|4|

## 2.5 (released 2017-11-02)
- Added List Dangerous Goods Service

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
|Open Ship|11|
|Validation Availability and Commitment Service|6|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|
|DGLD Service|1|

## 2.4 (released 2017-11-02)
- Added In Flight Shipment Service

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
|Open Ship|11|
|Validation Availability and Commitment Service|6|
|ASYNC Transaction Service|4|
|In Flight Shipment Service|1|

## 2.3 (released 2017-11-02)
- Added ASYNC Transaction Service

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
|Open Ship|11|
|Validation Availability and Commitment Service|6|
|ASYNC Transaction Service|4|

## 2.2 (released 2017-08-19)
- Added Validation Availability and Commitment Service

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
|Open Ship|11|
|Validation Availability and Commitment Service|6|

## 2.1 (release 2017-08-19)
- Added Open Ship service

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
|Open Ship|11|
  

## 2.0 (released 2017-07-13)

- SoapClient responses are now parsed and populate Reply objects. All of the Request 'Reply' methods now return a populated Reply object instead of the SoapClient stdClass.  *This is a backward incompatible change.* To make your code compatible, simply send `true` as the 2nd argument to your `get...Reply` calls. [Click here for an example.](src/FedEx/RateService/Request.php#L27)   
- Added more phpunit tests.

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
  

## 1.0 (released 2016-03-28)

- Tagged release to indicate stable version in packagist
- Created phpunit tests
- Current web service versions:

|Service|Version|
|---|---|
|Address Validation|2|
|Close|2|
|Courier Dispatch|3|
|Locator|2|
|Package Movement Information|5|
|Pickup|3|
|Rate|10|
|Return Tag|1|
|Ship|12|
|Track|5|
|Upload Document|1|
  
