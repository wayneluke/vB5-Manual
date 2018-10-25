---
title: Facebook Options
slug: facebook_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - facebook
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Enable Facebook Platform
Enabling this option will allow users to connect their vBulletin account with their Facebook account. This will also populate your site with Open Graph meta data. Note: users must have Javascript enabled and your server must support TLS/SSL communication for this feature to work.



- Variable Name: enablefacebookconnect
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Facebook Application ID
Enter the Application ID for your Application (see the <a href="http://www.facebook.com/developers/" target="_blank">Facebook Developer</a> page for more information).



- Variable Name: facebookappid
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Facebook Secret
Enter the Facebook Secret for your Application (see the <a href="http://www.facebook.com/developers/" target="_blank">Facebook Developer</a> page for more information).



- Variable Name: facebooksecret
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Facebook Usergroup
If you want, you may specify a secondary usergroup for Facebook users. Note: All users who connect with facebook from this point on will be members of this usergroup. This will not be applied retroactively to users who have previously connected to facebook.



- Variable Name: facebookusergroupid
- Data Type: number
- Default Value: 
[/segment][segment=option]

## Enable Auto-Register
Enabling this option will allow user to skip the registration form, and register through a simplified two-click process. Note: Using this feature will disable Forum Rules Agreement, Coppa registration, email verification, as well as any custom required fields from the registration form.



- Variable Name: facebookautoregister
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Image URL
Specify a URL for an image that you want to represent your site. This image will appear next to published content in a user's newsfeed, as well as be used to represent your site in the Open Graph schema. Leave this blank if you do not want to have an image.<br/><br/>

This  must be a fully qualified URL.



- Variable Name: facebookfeedimageurl
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Publish to Facebook - New Topic
Enabling this feature will allow users to publish a notification to their Facebook wall when they start a new topic.  This includes forum threads, articles, group messages, and blog posts.<br/><br/>

This feature requires the "publish_actions" permissions from Facebook.  To get this permission you will need to submit your app for review in the Facebook app management portal.



- Variable Name: fbfeednewthread
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Publish to Facebook - Post Reply
Enabling this feature will allow users to publish a notification to their Facebook wall when they reply to a topic.  This includes posts in forum threads, posts in group topics, and comments on blog posts and articles.<br/><br/>

This feature requires the "publish_actions" permissions from Facebook.  To get this permission you will need to submit your app for review in the Facebook app management portal.



- Variable Name: fbfeedpostreply
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Like Button - Topics
Enabling this option will make a "Like" button appear on all topics. Users will then be able to "Like" individual topics. Note: users do not have to have Facebook linked accounts to use this feature.



- Variable Name: facebooklikethreads
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Like Button - Blog Entries
Enabling this option will make a "Like" button appear on all blog entries. Users will then be able to "Like" individual blog posts. Note: users do not have to have Facebook linked accounts to use this feature.



- Variable Name: facebooklikeblogentries
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Like Button - CMS Articles
Enabling this option will make a "Like" button appear on all CMS Articles. Users will then be able to "Like" individual CMS Articles. Note: users do not have to have Facebook linked accounts to use this feature.



- Variable Name: facebooklikecmsarticles
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Import Facebook Data: Biography
Choose the User Profile Field that you would like to import Facebook biography data into when a user connects their account to Facebook.



- Variable Name: fb_userfield_biography
- Data Type: free
- Default Value: field1
[/segment][segment=option]

## Import Facebook Data: Location
Choose the User Profile Field that you would like to import Facebook location data into when a user connects their account to Facebook.



- Variable Name: fb_userfield_location
- Data Type: free
- Default Value: field2
[/segment][segment=option]

## Import Facebook Data: Occupation
Choose the User Profile Field that you would like to import Facebook occupation data into when a user connects their account to Facebook.



- Variable Name: fb_userfield_occupation
- Data Type: free
- Default Value: field4
[/segment][segment=option]

## Show Open Graph Meta Tags
vBulletin sets some information about the site in html header tags that Facebook and other social media sites use when people link to your site.  Usually you want these, but if you have a custom solution that implements these tags, you should turn them off to avoid conflicts.



- Variable Name: show_opengraph_tags
- Data Type: boolean
- Default Value: 1
[/segment]