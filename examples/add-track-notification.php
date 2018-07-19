<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\TrackService\ComplexType\SendNotificationsRequest;
use FedEx\TrackService\ComplexType\Localization;
use FedEx\TrackService\ComplexType\EMailDetail;
use FedEx\TrackService\ComplexType\NotificationDetail;
use FedEx\TrackService\SimpleType\NotificationType;
use FedEx\TrackService\ComplexType\ShipmentNotificationFormatSpecification;
use FedEx\TrackService\SimpleType\NotificationFormatType;
use FedEx\TrackService\ComplexType\ShipmentEventNotificationSpecification;
use FedEx\TrackService\SimpleType\ShipmentNotificationRoleType;
use FedEx\TrackService\SimpleType\NotificationEventType;
use FedEx\TrackService\ComplexType\ShipmentEventNotificationDetail;
use FedEx\TrackService\Request;

$trackingNumber = '12345';

$recipient = (object) [
	'email_addr' => 'recipient@example.com'
];

$sender = (object) [
	'email_addr' => 'sender@example.com',
	'name'       => 'Sender Sender'
];

// Get instance of SendNotificationRequest
$notificationRequest = new SendNotificationsRequest();

// User credential
$notificationRequest->WebAuthenticationDetail->UserCredential->Key = FEDEX_KEY;
$notificationRequest->WebAuthenticationDetail->UserCredential->Password = FEDEX_PASSWORD;

// Client detail
$notificationRequest->ClientDetail->AccountNumber = FEDEX_ACCOUNT_NUMBER;
$notificationRequest->ClientDetail->MeterNumber = FEDEX_METER_NUMBER;

// Version
$notificationRequest->Version->ServiceId = 'trck';
$notificationRequest->Version->Major = 14;
$notificationRequest->Version->Intermediate = 0;
$notificationRequest->Version->Minor = 0;

// Tracking number
$notificationRequest->setTrackingNumber( $trackingNumber );

// Sender email address
$notificationRequest->setSenderEMailAddress( $sender->email_addr );

// Sender contact name
$notificationRequest->setSenderContactName( $sender->name );

// Localization
$localization  = new Localization();
$localization->setLocaleCode("US")
	->setLanguageCode("EN");

// Email detail
$emailDetail = new EMailDetail();
$emailDetail->setEmailAddress( $recipient->email_addr );

// Notification detail
$notificationDetail = new NotificationDetail();
$notificationDetail->setNotificationType(NotificationType::_EMAIL)
	->setEmailDetail($emailDetail)
	->setLocalization($localization);

// Format specification
$formatSpecification = new ShipmentNotificationFormatSpecification();
$formatSpecification->setType(NotificationFormatType::_TEXT);

// Notification specification
$notification = new ShipmentEventNotificationSpecification();
$notification->setRole(ShipmentNotificationRoleType::_SHIPPER)
	->setEvents([
		NotificationEventType::_ON_DELIVERY,
		NotificationEventType::_ON_EXCEPTION
	])
	->setNotificationDetail($notificationDetail)
	->setFormatSpecification($formatSpecification);

// Notification detail
$eventNotificationDetail = new ShipmentEventNotificationDetail();
$eventNotificationDetail->setEventNotifications([$notification]);

// Set event notification detail for request
$notificationRequest->setEventNotificationDetail($eventNotificationDetail);

// Do the request
$request = new Request();

// Uncomment for production mode
//$request->getSoapClient()->__setLocation(Request::PRODUCTION_URL);

// Get the reply
$response = $request->getSendNotificationsReply($notificationRequest);

echo '<pre>';
var_dump($response);
echo '</pre>';
