---
title: Version Info and Other Untouchables
slug: version_info_and_other_untouchables
taxonomy:
    category:
        - settings
    tag:
        - options
        - version
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 12:01am
---

[toc]
[segment=option]

*vBulletin Version Number~*
Leave this setting alone.



- Variable Name: templateversion
- Data Type: free
- Default Value: 5.4.0 Alpha 1
[/segment][segment=option]

*Active Payment APIs~*
Payment APIs are enabled



- Variable Name: subscriptionmethods
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

*Save Attachments as Files~*
Leave this setting alone.<br />
<br />
Before 3.0.0 RC1, we stored attachments for each user in a sub folder named after that user's userid.  This resulted in us having X folders for X users with attachments. Some systems couldn't cope when this number exceeded 32,768 so we altered this method for 3.0.0 RC1.  Now each digit of the userid is made into a directory, i.e. userid 568 gets her attachments stored in /path/5/6/8.  To use the new setting you must move all of your attachments back into the DB and then move them back out to the FS.  This is the only way to 'activate' the new option.



- Variable Name: attachfile
- Data Type: free
- Default Value: 
[/segment][segment=option]

*File Attachment Path~*
Leave this setting alone.



- Variable Name: attachpath
- Data Type: free
- Default Value: /path/to/your/attachment/directory
[/segment][segment=option]

*Save Avatars as Files~*
Leave this setting alone.



- Variable Name: usefileavatar
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

*Avatar File Path~*
Leave this setting alone.



- Variable Name: avatarpath
- Data Type: free
- Default Value: ./customavatars
[/segment][segment=option]

*Avatar URL~*
Leave this setting alone.



- Variable Name: avatarurl
- Data Type: free
- Default Value: customavatars
[/segment][segment=option]

*Profile Pic File Path~*
Leave this setting alone.



- Variable Name: profilepicpath
- Data Type: free
- Default Value: ./customprofilepics
[/segment][segment=option]

*Profile Pic URL~*
Leave this setting alone.



- Variable Name: profilepicurl
- Data Type: free
- Default Value: customprofilepics
[/segment][segment=option]

*Signature Picture Path~*
Leave this setting alone.



- Variable Name: sigpicpath
- Data Type: free
- Default Value: ./signaturepics
[/segment][segment=option]

*Signature Pic URL~*
Leave this setting alone.



- Variable Name: sigpicurl
- Data Type: free
- Default Value: signaturepics
[/segment][segment=option]

*Post Icon Location~*
Normally you should leave this alone.



- Variable Name: posticon_location
- Data Type: free
- Default Value: images/icons
[/segment][segment=option]

*Search Implementation~*
Do not edit



- Variable Name: searchimplementation
- Data Type: free
- Default Value: vBDBSearch_Core
[/segment][segment=option]

*Album Data Location~*
Leave this setting alone



- Variable Name: album_dataloc
- Data Type: free
- Default Value: db
[/segment][segment=option]

*Album Full Picture Path~*
Leave this setting alone



- Variable Name: album_picpath
- Data Type: free
- Default Value: 
[/segment][segment=option]

*Album Thumbnail Path~*
Leave this setting alone



- Variable Name: album_thumbpath
- Data Type: free
- Default Value: 
[/segment][segment=option]

*Album Thumbnail URL~*
Leave this setting alone



- Variable Name: album_thumburl
- Data Type: free
- Default Value: 
[/segment][segment=option]

*Save Group Icons as Files~*
Leave this setting alone.



- Variable Name: usefilegroupicon
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

*Group Icon Path~*
Leave this setting alone.



- Variable Name: groupiconpath
- Data Type: free
- Default Value: ./customgroupicons
[/segment][segment=option]

*Group Icon URL~*
Leave this setting alone.



- Variable Name: groupiconurl
- Data Type: free
- Default Value: customgroupicons
[/segment][segment=option]

*API Key~*
Leave this setting alone.



- Variable Name: apikey
- Data Type: free
- Default Value: 
[/segment][segment=option]

*Number of Header Ad~*
Number of Header Ad



- Variable Name: headeradnum
- Data Type: posint
- Default Value: 1
[/segment]