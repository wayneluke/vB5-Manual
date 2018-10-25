---
title: Topic Display Options
slug: topic_display_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - showthread
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## User-Settable Maximum Displayed Posts
If you would like to allow the user to set their own maximum posts per topic then give the options separated by commas. 
<br />
<br />
Example setting: 10,20,30,40



- Variable Name: usermaxposts
- Data Type: free
- Default Value: 5,10,20,30,40
[/segment][segment=option]

## Show Default Post Icon
If you would like to use a default icon for messages without an icon, enter the path to the image here.



- Variable Name: showdeficon
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Number of Characters Before Wrapping Text
If you want posts to automatically insert spaces into long words to make them wrap after a certain number of characters, set the number of characters in the box above.<br />
<br />
If you do not want this to occur, enter 0.



- Variable Name: wordwrap
- Data Type: integer
- Default Value: 50
[/segment][segment=option]

## Check Topic Rating
If enabled, this option will check if a user voted on a topic and show their vote if they have. Otherwise, they will see the voting options even if they are not able to vote again. <b>This can have an effect on performance.</b>



- Variable Name: threadvoted
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Post Elements
There is optional user information that you may display on each post.  These options require a bit of processing time to calculate.



- Variable Name: postelements
- Data Type: bitfield
- Default Value: 0
[/segment][segment=option]

## Post Signature Inline
If enabled, this option will allow user's post signature to be displayed inline, below the content.



- Variable Name: showsignaturesinline
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Enable Schema Microdata
Schema.org provides a collection of shared vocabularies webmasters can use to mark up their pages in ways that can be understood by the major search engines: Google, Microsoft, Yandex and Yahoo!



- Variable Name: schemaenabled
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Preview Text  Length
On the activity stream page, this is the amount of text displayed as a preview.



- Variable Name: previewLength
- Data Type: posint
- Default Value: 200
[/segment][segment=option]

## Enable Share Topics to Facebook?
Shows a Facebook Share button on topic display.
<br/><br/>
This can be enabled without enabling other Facebook features or creating a Facebook App.



- Variable Name: sharing_facebook
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Enable Share Topics to Twitter?
Shows a Twitter Tweet button on topic display.



- Variable Name: sharing_twitter
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Twitter User Name
If sharing to Twitter is enabled, when a user shares a post to Twitter, this username will be added to the tweet as "via @username". You would normally use this if you have an official Twitter account related to your website. Enter the username without the "@" symbol.

<br /><br />Leave blank to disable this feature.



- Variable Name: sharing_twitter_username
- Data Type: free
- Default Value: 
[/segment]