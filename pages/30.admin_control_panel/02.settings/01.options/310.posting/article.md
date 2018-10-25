---
title: Message Posting and Editing Options
slug: message_posting_and_editing_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - posting
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Multi-Quote Enabled
If this option is enabled, an additional button will appear on posts. A user may click as many of these buttons as they wish. Once they click a reply button, the content of each of the selected posts will be quoted and shown in the reply window.



- Variable Name: multiquote
- Data Type: free
- Default Value: 1
[/segment][segment=option]

## Multi-Quote Quote Limit
Enter a value to limit the number of quotes that can be created with Multi-Quote, once this limit is reached the user will be unable to add any more quotes.<br />
<br />
<em>Note: The Quote BB code can still be entered manually, this is not a limit on the number of quotes in a post.</em>



- Variable Name: mqlimit
- Data Type: integer
- Default Value: 
[/segment][segment=option]

## Minimum Characters Per Post
If this number is set to a value greater than 0, users must enter at least that number of characters in each new post.
<br /><br />
Note: setting this to 0 will not completely disable the minimum characters per post check. Users must always enter at least 1 character.



- Variable Name: postminchars
- Data Type: integer
- Default Value: 10
[/segment][segment=option]

## Maximum Characters Per Post
Posts that contain more characters than the value specified here will be rejected with a message telling the user to shorten their post.<br />
<br />
Set the value to 0 to disable this function.



- Variable Name: postmaxchars
- Data Type: integer
- Default Value: 10000
[/segment][segment=option]

## Maximum Characters Per Topic/Post Title
Topic and post titles will be limited to this number of characters.

Please choose a value larger than 0 and less than 251.



- Variable Name: titlemaxchars
- Data Type: integer
- Default Value: 85
[/segment][segment=option]

## Minimum Characters Per Comment
If this number is set to a value greater than 0, users must enter at least that number of characters in each new comment.
<br /><br />
Note: setting this to 0 will not completely disable the minimum characters per comment check. Users must always enter at least 1 character.



- Variable Name: commentminchars
- Data Type: integer
- Default Value: 10
[/segment][segment=option]

## Maximum Characters Per Comment
Comments that contain more characters than the value specified here will be rejected with a message telling the user to shorten their comment.



- Variable Name: commentmaxchars
- Data Type: integer
- Default Value: 10000
[/segment][segment=option]

## Ignore Words in [QUOTE] Tags For Min Chars Check
Setting this option to 'YES' will cause the system to <b>not count</b> words in [QUOTE] tags towards the total number of characters posted.<br />
<br />
The primary use for this is to prevent users posting messages with enormous quotes and a single short word of their own.



- Variable Name: ignorequotechars
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Maximum Images Per Post
When a new post is submitted or edited vBulletin will check the number of images in the text and reject it if the number is greater than the value specified here.<br />
<br />
Set the value to 0 to disable this function.



- Variable Name: maximages
- Data Type: number
- Default Value: 0
[/segment][segment=option]

## Prevent 'SHOUTING'
Prevent your users 'shouting' in their topic titles/message text by changing all-uppercase titles with at least this many characters to capitalization only on the first letters of some words.<br />
<br />
Set the value to 0 to disable this function.<br />
<br />
Disable this for some international forums with different character sets, as this may cause problems.



- Variable Name: stopshouting
- Data Type: integer
- Default Value: 3
[/segment][segment=option]

## Minimum Time Between Posts
You may prevent your users from flooding your forum with posts by activating this feature.<br />
<br />
By enabling floodcheck, you disallow users from making another post within a given time span of their last posting. In other words, if you set a floodcheck time span of 30 seconds, a user may not post again within 30 seconds of making his last post.<br />
<br />
Administrators and moderators are exempt from floodcheck.<br />
<br />Recommended: 30 seconds. Type the number of seconds only. Enter 0 to disable this function.



- Variable Name: floodchecktime
- Data Type: integer
- Default Value: 30
[/segment][segment=option]

## Time Limit on Editing of Topic Title
Specify the time-limit (in minutes) within which the topic title may be edited by the user whom started the topic.



- Variable Name: editthreadtitlelimit
- Data Type: number
- Default Value: 5
[/segment][segment=option]

## Time to Wait Before Starting to Display 'Last Edited by...'
Time limit (in minutes) to allow user to edit the post without the "Last edited by..." message appearing at the bottom of the edited post.



- Variable Name: noeditedbytime
- Data Type: number
- Default Value: 2
[/segment][segment=option]

## Log IP Addresses
For security reasons, you may wish to display the IP address of the person posting a message.



- Variable Name: logip
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Post Edit History
Enable this option to log the previous versions of posts when they are edited. Click the '?' for more information on specific cases where edits will not be logged.<br />
<br />
This will increase the amount of disk space used by vBulletin for database storage.



- Variable Name: postedithistory
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Topic Comment Posting
Enable this option to allow user post comments besides replies on topics.



- Variable Name: postcommentthreads
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Auto-Save Content
While users are writing messages, the in progress content can be automatically saved in case the user's browser crashes or the user mistakenly leaves the page. The time between automatic saves is set in seconds. 20 seconds is the minimum value that will be accepted. If you wish to disable auto-save, set this value to 0.



- Variable Name: autosave
- Data Type: number
- Default Value: 60
[/segment][segment=option]

## Smilie Panel Initial Smilies
Use this option to set the number of smilies that will appear initially in the smilie panel under the editor. If you set this to less than the total number of smilies you have, there will be a link to expand the smilies panel and show all smilies.



- Variable Name: wysiwyg_smtotal
- Data Type: integer
- Default Value: 15
[/segment][segment=option]

## Show Maps For Event Locations
Show a Google Map of the event location.  This requires a <a href="admincp/options.php?do=options&dogroup=search_engine_verification#googlemapsapikey">Google API Key</a>.  You must enable the "Google Maps Embed API" for this key.



- Variable Name: enableeventmaps
- Data Type: boolean
- Default Value: 1
[/segment]