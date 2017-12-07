---
title: Private Messaging and vB Messenger Options
slug: private_messaging_and_vb_messenger_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - pm
visible: false
template: article
version: 5.3.3
date: 12/06/2017 06:39pm
---

## Private Messaging Enabled
Turns the entire private messaging system on and off.

## Instant Messaging Support - Check for New Private Messages
Selecting 'Yes' for this option will cause the system to check the private message database every time a user loads a page, and will display a visible prompt if a new message has just been saved.

## Maximum Messages Per-Page
This setting allows you to limit the number of messages users may display per page on the private messages folder view pages.<br />
<br />
<b>Note: </b>This number must be at least 1.

## Allow Message Icons for Private Messages
Allow the use of the standard message icons for private messages.

## Allow BB Code in Private Messages
Allow users to include BB code in their private messages? (Such as [b], [i] etc.)

## Allow Smilies in Private Messages
Allow users to include smilies in their Private Messages?

## Allow [IMG] Code in Private Messages
Allow users to include [IMG] codes in their Private Messages?

## Enable vB Messenger
Globally enable or disable vB Messenger. Enabling this enables the "Messages" header dropdown, initiating private messages from forum threads, and vB Messenger windows for private messaging.
See help for more info about vB Messenger.

## vB Messenger Header Max
Maximum number of private messages to list in the header dropdown.<br />
<br />
<b>Note: </b>This number must be at least 1.

## vB Messenger Header Polling Interval
Every X seconds (where X is the value set for this option), the client will send an ajax request to check for new private messages, notification & request counts for the header dropdown. <br />
Increase this setting to reduce server load. Decrease this setting for more frequent client side updates. <br />
<strong>Default:</strong> 30 seconds.

## vB Messenger Window Minimum Polling Interval
The Messenger window checks for new messages from the server in a dynamic fashion. <br />
When a new message is sent or retrieved, the Messenger window will temporarily go into a "burst" mode where it checks for new messages very quickly, but <strong>no faster than</strong> every X seconds (where X is the value of this setting). <br />
Increase this setting to reduce server load. Decrease this setting for a more responsive experience. <br />
<strong>Default:</strong> 1 second.

## vB Messenger Window Maximum Polling Interval
The Messenger window checks for new messages from the server in a dynamic fashion. <br />
When no messages have been sent or received for a while, the Messenger window will ease into a "slow" mode where it checks for new messages only intermittently, but <strong>no slower than</strong> every X seconds (where X is the value of this setting). <br />
Increase this setting to reduce server load. Decrease this setting for a more responsive experience. <br />
This value should be greater than "<strong>vB Messenger Window Minimum Polling Interval</strong>". <br />
<strong>Default:</strong> 30 seconds.

## vB Messenger Window Idle Timeout
When no new messages have been sent or received for X seconds (where X is the value of this setting), the Messenger window will go into "idle" mode and stop polling the server. The user can choose to resume polling by clicking a "Reconnect" button. <br />
Decrease this setting to reduce server load. <br />
This value should be greater than "<strong>vB Messenger Window Maximum Polling Interval
</strong>". <br />
<strong>Default:</strong> 300 seconds (5 minutes).

## Minimum Characters Per Message
If this number is set to a value greater than 0, users must enter at least that number of characters in each new post.
<br /><br />
Note: setting this to 0 will not completely disable the minimum characters per post check. Users must always enter at least 1 character.

## Maximum Characters Per Message
Posts that contain more characters than the value specified here will be rejected with a message telling the user to shorten their post.<br />
<br />
Set the value to 0 to disable this function.

## Minimum Time Between Private Messages
You may prevent your users from flooding your private message center by activating this feature.

By enabling floodcheck, you disallow users from making another private message within a given time span of their last message. In other words, if you set a floodcheck time span of 30 seconds, a user may not create a private message topic or reply within 30 seconds of making his last message.

Administrators and moderators are exempt from floodcheck.

Recommended: 30 seconds. Type the number of seconds only. Enter 0 to disable this function.

## Skip floodcheck for PM Replies
If enabled, the floodcheck is only applied to creating new private message threads. Replying to existing private message topics will be exempt from the floodcheck. This improves the user experience of vB Messenger as users will be able to create replies to each other very quickly in an existing private message thread.



