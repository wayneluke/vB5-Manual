---
title: Third Party Login Options
slug: third_party_login_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - externallogin
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Enable Sign-in with Twitter
Enabling this option will allow users to connect their vBulletin account with their Twitter account, and use their Twitter credentials to log-in to the forum.



- Variable Name: twitterlogin_enabled
- Data Type: boolean
- Default Value: 1

## Enable Registration with Twitter
Enabling this option will allow users to connect their Twitter account while creating their vB user account. It will also automatically fill the username & email fields with those fetched from their Twitter account, if available.



- Variable Name: twitterlogin_register_enabled
- Data Type: boolean
- Default Value: 1

## Twitter App Consumer Key (API Key)
Enter your forum's Twitter App Consumer Key (also known as API Key) here. <br />
You can find your app's consumer key and secret by going to the "Keys and Access Tokens" tab in your app settings page (e.g. https://apps.twitter.com/app/14741803/keys where 14741803 is your app's id). <br />
You can access the specific app's settings by visiting the <a href="https://apps.twitter.com/app/new" target="_blank">Twitter Apps page</a> after logging in to Twitter. <br />
If you do not have a Twitter App for your forum yet, you can create one by going to <a href="https://apps.twitter.com/app/new" target="_blank">Twitter's Create an application page</a> after logging in to Twitter.



- Variable Name: twitterlogin_consumer_key
- Data Type: free
- Default Value: 

## Twitter App Consumer Secret (API Secret)
Enter your forum's Twitter App Consumer Secret (also known as API Secret) here. <br />
See notes above for "Twitter App Consumer Key" on where to find this value.



- Variable Name: twitterlogin_consumer_secret
- Data Type: free
- Default Value: 

## TwitterLogin Package Images Directory
Change this value to the new directory if the images directory inside the package has been moved from the default location.



- Variable Name: twitterlogin_images_directory
- Data Type: free
- Default Value: core/packages/twitterlogin/images

## Enable Sign-in with Google
Enabling this option will allow users to connect their vBulletin account with their Google account, and use their Google credentials to log-in to the forum.



- Variable Name: googlelogin_enabled
- Data Type: boolean
- Default Value: 1

## Enable Registration with Google
Enabling this option will allow users to connect their Google account while creating their vB user account. It will also automatically fill the username & email fields with those fetched from their Google account, if available.



- Variable Name: googlelogin_register_enabled
- Data Type: boolean
- Default Value: 1

## Google OAuth Client ID
Enter your Google API Console Project's OAuth Client ID here. <br />
You can generate or view your Google Project's OAuth Client ID & Secret in the API Credentials page at https://console.cloud.google.com/apis/credentials?project={projectid} where {projectid} is the unique ID (not the name) automatically assigned to your project.



- Variable Name: googlelogin_client_id
- Data Type: free
- Default Value: 

## Google OAuth Client Secret
Enter your Google API Console Project's OAuth Client Secret here. <br />
See the note above for "Google OAuth Client ID" on how to generate or view the ID & Secret.



- Variable Name: googlelogin_client_secret
- Data Type: free
- Default Value: 

## GoogleLogin Package Images Path
This must be relative to the forum's base (or CDN) URL. Only change this value if the images directory inside the package has been moved from the default location.



- Variable Name: googlelogin_images_directory
- Data Type: free
- Default Value: core/packages/googlelogin/images
