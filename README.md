# VoipexIpbx

Access to all methods is granted through Bearer token. 


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/wencagh/voipex-api-client.git"
    }
  ],
  "require": {
    "wencagh/voipex-api-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/VoipexIpbx/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: soap
$config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Voipex\Ipbx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Voipex\Ipbx\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel ID
$call_id = 'call_id_example'; // string | Call Id
$user_id = 'user_id_example'; // string | User ID

try {
    $result = $apiInstance->deleteCalls($channel_id, $call_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->deleteCalls: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://ipbxapi.voipex.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CallsApi* | [**deleteCalls**](docs/Api/CallsApi.md#deletecalls) | **DELETE** /calls | Hangup call
*CallsApi* | [**deleteCallsTransfer**](docs/Api/CallsApi.md#deletecallstransfer) | **DELETE** /calls/transfer | Cancel an attended transfer
*CallsApi* | [**getCalls**](docs/Api/CallsApi.md#getcalls) | **GET** /calls | Returns list of calls
*CallsApi* | [**getCallsCallidDetail**](docs/Api/CallsApi.md#getcallscalliddetail) | **GET** /calls/{callId}/detail | Returns data for specified callId
*CallsApi* | [**getCallsCallidRecordings**](docs/Api/CallsApi.md#getcallscallidrecordings) | **GET** /calls/{callId}/recordings | Returns all recordings for specified callId
*CallsApi* | [**getCallsCallidTranscript**](docs/Api/CallsApi.md#getcallscallidtranscript) | **GET** /calls/{callId}/transcript | Returns transcript of all recordings for specified callId
*CallsApi* | [**getCallsCurrent**](docs/Api/CallsApi.md#getcallscurrent) | **GET** /calls/current | Return current calls
*CallsApi* | [**getCallsMissed**](docs/Api/CallsApi.md#getcallsmissed) | **GET** /calls/missed | Missed and abandoned calls from the call center queues.
*CallsApi* | [**getCallsTransferDestinations**](docs/Api/CallsApi.md#getcallstransferdestinations) | **GET** /calls/transfer/destinations | List of destinations for a transferred call.
*CallsApi* | [**postCalls**](docs/Api/CallsApi.md#postcalls) | **POST** /calls | Create new call
*CallsApi* | [**putCallsMonitor**](docs/Api/CallsApi.md#putcallsmonitor) | **PUT** /calls/monitor | Monitor call
*CallsApi* | [**putCallsTransfer**](docs/Api/CallsApi.md#putcallstransfer) | **PUT** /calls/transfer | Transfer a call
*MembersApi* | [**getMembers**](docs/Api/MembersApi.md#getmembers) | **GET** /members | Get list of members
*NumbersApi* | [**getNumbers**](docs/Api/NumbersApi.md#getnumbers) | **GET** /numbers | Get all numbers
*NumbersApi* | [**getNumbersNumberid**](docs/Api/NumbersApi.md#getnumbersnumberid) | **GET** /numbers/{numberId} | Get number info
*PausesApi* | [**getPauses**](docs/Api/PausesApi.md#getpauses) | **GET** /pauses | Get pauses
*PbxApi* | [**getPbxUsers**](docs/Api/PbxApi.md#getpbxusers) | **GET** /pbx/users | Get user list
*PbxApi* | [**getPbxUsersUserid**](docs/Api/PbxApi.md#getpbxusersuserid) | **GET** /pbx/users/{userId} | Get user
*ProfilesApi* | [**getProfiles**](docs/Api/ProfilesApi.md#getprofiles) | **GET** /profiles | Get profiles
*ProfilesApi* | [**putProfilesProfileid**](docs/Api/ProfilesApi.md#putprofilesprofileid) | **PUT** /profiles/{profileId} | Update profile settings
*RecordingsApi* | [**getRecordings**](docs/Api/RecordingsApi.md#getrecordings) | **GET** /recordings | Get all recording names based on the input filter.
*RecordingsApi* | [**getRecordingsDownload**](docs/Api/RecordingsApi.md#getrecordingsdownload) | **GET** /recordings/download | Download all recordings based on callId as a .zip archive
*RecordingsApi* | [**getRecordingsFilename**](docs/Api/RecordingsApi.md#getrecordingsfilename) | **GET** /recordings/{filename} | Play recording specified by filename
*RecordingsApi* | [**getRecordingsFilenameIpbxPbxid**](docs/Api/RecordingsApi.md#getrecordingsfilenameipbxpbxid) | **GET** /recordings/{filename}/ipbx/{pbxId} | 
*RecordingsApi* | [**postRecordingsBatchdelete**](docs/Api/RecordingsApi.md#postrecordingsbatchdelete) | **POST** /recordings/batch-delete | Batch delete recordings
*ReportsApi* | [**getReportsAgentsActivity**](docs/Api/ReportsApi.md#getreportsagentsactivity) | **GET** /reports/agents/activity | Get agents activity
*ReportsApi* | [**getReportsAgentsActivitydurations**](docs/Api/ReportsApi.md#getreportsagentsactivitydurations) | **GET** /reports/agents/activity-durations | Get agents activity durations
*ReportsApi* | [**getReportsAgentsDailystats**](docs/Api/ReportsApi.md#getreportsagentsdailystats) | **GET** /reports/agents/daily-stats | Daily agent statistics
*ReportsApi* | [**getReportsCalls**](docs/Api/ReportsApi.md#getreportscalls) | **GET** /reports/calls | Returns extended calls information
*ReportsApi* | [**getReportsQueues**](docs/Api/ReportsApi.md#getreportsqueues) | **GET** /reports/queues | Return statistics for queues
*ServiceApi* | [**putServiceReload**](docs/Api/ServiceApi.md#putservicereload) | **PUT** /service/reload | Apply changes
*UsersApi* | [**putUsersProfile**](docs/Api/UsersApi.md#putusersprofile) | **PUT** /users/profile | Set profile to user

## Models

- [CallCenter](docs/Model/CallCenter.md)
- [Direction](docs/Model/Direction.md)
- [Durations](docs/Model/Durations.md)
- [Exten](docs/Model/Exten.md)
- [FromApplication](docs/Model/FromApplication.md)
- [FromUser](docs/Model/FromUser.md)
- [Fwd](docs/Model/Fwd.md)
- [IdentityType](docs/Model/IdentityType.md)
- [Message](docs/Model/Message.md)
- [Model1](docs/Model/Model1.md)
- [Model11](docs/Model/Model11.md)
- [Model13](docs/Model/Model13.md)
- [Model14](docs/Model/Model14.md)
- [Model15](docs/Model/Model15.md)
- [Model17](docs/Model/Model17.md)
- [Model18](docs/Model/Model18.md)
- [Model1Line](docs/Model/Model1Line.md)
- [Model1UserId](docs/Model/Model1UserId.md)
- [Model2](docs/Model/Model2.md)
- [Model20](docs/Model/Model20.md)
- [Model22](docs/Model/Model22.md)
- [Model24](docs/Model/Model24.md)
- [Model26](docs/Model/Model26.md)
- [Model28](docs/Model/Model28.md)
- [Model3](docs/Model/Model3.md)
- [Model30](docs/Model/Model30.md)
- [Model32](docs/Model/Model32.md)
- [Model33](docs/Model/Model33.md)
- [Model36](docs/Model/Model36.md)
- [Model38](docs/Model/Model38.md)
- [Model39](docs/Model/Model39.md)
- [Model4](docs/Model/Model4.md)
- [Model41](docs/Model/Model41.md)
- [Model43](docs/Model/Model43.md)
- [Model44](docs/Model/Model44.md)
- [Model45](docs/Model/Model45.md)
- [Model46](docs/Model/Model46.md)
- [Model47](docs/Model/Model47.md)
- [Model48](docs/Model/Model48.md)
- [Model49](docs/Model/Model49.md)
- [Model5](docs/Model/Model5.md)
- [Model50](docs/Model/Model50.md)
- [Model51](docs/Model/Model51.md)
- [Model52](docs/Model/Model52.md)
- [Model53](docs/Model/Model53.md)
- [Model54](docs/Model/Model54.md)
- [Model55](docs/Model/Model55.md)
- [Model7](docs/Model/Model7.md)
- [Model9](docs/Model/Model9.md)
- [Numplan](docs/Model/Numplan.md)
- [OwnerType](docs/Model/OwnerType.md)
- [Params](docs/Model/Params.md)
- [Properties](docs/Model/Properties.md)
- [SkillsGroup](docs/Model/SkillsGroup.md)
- [State](docs/Model/State.md)
- [Status](docs/Model/Status.md)
- [Type](docs/Model/Type.md)
- [User](docs/Model/User.md)
- [UserFilter](docs/Model/UserFilter.md)
- [Way](docs/Model/Way.md)

## Authorization

### soap

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.98.2`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
