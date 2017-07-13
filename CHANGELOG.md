# CHANGELOG

## 2.0 (released 2017-07-13)

- SoapClient responses are now parsed and populate Reply objects. All of the Request 'Reply' methods now return a populated Reply object instead of the SoapClient stdClass.  *This is a backward incompatible change.* To make your code compatible, simply send `true` as the 2nd argument to your `get...Reply` calls. [Click here for an example.](src/FedEx/RateService/Request.php#L27)   
- Added more phpunit tests.

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
  
