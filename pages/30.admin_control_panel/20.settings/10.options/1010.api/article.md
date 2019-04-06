---
title: vBulletin API and Mobile Application Options
slug: vbulletin_api_and_mobile_application_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - api
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Enable vBulletin API
Allow clients to connect to the vBulletin API. <br /><br />Please remember to generate an API key <a href="admincp/api.php">here</a> to allow the API to work.



- Variable Name: enableapi
- Data Type: boolean
- Default Value: 0

## Enable API Log
Enables the API log, allowing administrators to track client behavior (or for debuging purposes). Only enable this option if you really need it. The log is stored in the database and can rapidly become large in size.



- Variable Name: enableapilog
- Data Type: boolean
- Default Value: 0

## Log API POST parameters
When "Enable API Log" is set to "Yes", this option decides whether to log API POST parameters. Please note that POST parameters can contain a lot of data, which can in turn can take up large amounts of database space.



- Variable Name: apilogpostparam
- Data Type: boolean
- Default Value: 0

## Enable Firebase Cloud Messaging
Enabling this option will allow mobile api users to register their devices with the forum and receive push notifications via Firebase Cloud Messaging.
In addition to this option, the server must have a valid "Firebase Cloud Messaging Server Key" below for push notifications to function.



- Variable Name: fcm_enabled
- Data Type: boolean
- Default Value: 1

## Firebase Cloud Messaging Server Key
This is the "Server key" found in the "Cloud Messaging" Tab of your Firebase Cloud Messaging project. <br />
You can get to this tab via (as of 2017-05-18)
https://console.firebase.google.com/project/{projectid}/settings/cloudmessaging/
Where {projectid} is the unique id assigned to your firebase project. <br />
<br />
After you save this option, you can test the server key <a href="admincp/fcm.php">here</a>.



- Variable Name: fcm_serverkey
- Data Type: free
- Default Value: 
