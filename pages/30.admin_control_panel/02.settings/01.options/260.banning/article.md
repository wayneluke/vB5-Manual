---
title: User Banning Options
slug: user_banning_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - banning
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Enable Banning Options
Banning allows you to stop certain IP addresses and email addresses from registering and posting to the forum.



- Variable Name: enablebanning
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Banned IP Addresses
Use this option to prevent certain IP addresses from accessing any part of your board.<br />
<br />
If you enter a complete IP address (242.21.11.7), only that IP will be banned.<br />
If you enter a partial IP (243.21.11. or 243.21.11), any IPs that begin with the partial IP will be banned. For example, banning 243.21.11 will prevent 243.21.11.7 from accessing your board. However, 243.21.115.7 would still be able to access your board.<br />
<br />
You may also use an '*' as a wildcard for increased flexibility. For example, if you enter 243.21.11*, many IPs will be banned including: 243.21.11.7, 243.21.115.7, 243.21.119.225.<br />
<br />
Place a space or a line break between each IP address.



- Variable Name: banip
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Banned Email Addresses
Email address ban lists: You may ban any email addresses from registering and posting. Type in the complete email address (user@example.com), or use a partial email address (as in @example.com).<br />
<br />
Note that partial email addresses are matched from the <em>end</em> of the address unless you enable 'Aggressive Email Banning' below. Therefore if you ban @example.com you will ban user@example.com, but if you ban @example that user will <em>not</em> be banned. If you enable 'Aggressive Email Banning', user@example.com would be banned by @example.<br />
<br />
If the email address of a user attempting to register or change their email address matches any of the addresses you specify here will see a no-permission error. For example, if you have banned 'example.com' then a user attempting to use 'someone@example.com' will be rejected.<br />
<br />
Put a space between each email address or email address fragment.



- Variable Name: banemail
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Aggressive Email Banning
If this option is enabled, when checking for banned emails, incomplete addresses are matched anywhere in the email address, not just the end.<br />
<br />
For example, if this option is enabled 'yahoo' will block any email address with 'yahoo' in it. If this option is disabled, no emails will be banned unless the ban was changed to 'yahoo.com'.



- Variable Name: aggressiveemailban
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Allow User to Keep Banned Email Addresses
If you ban an email address and a user already uses that address, a problem will occur. Using this option, you can specify whether the user will have to enter a new email address in their profile when they next modify their email address, or whether the user can just keep the email address which you have banned.



- Variable Name: allowkeepbannedemail
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Global Ignore
This option allows you to effectively add a user or users to every member's 'Ignore List'. However, users in this list can still see their own posts and topics...<br />
<br />
Enter a list of userid numbers, separated by spaces (for example: 4 12 68 102).<br />
<br />If you change this option, you need to rebuild topic and then forum information <a href="admincp/misc.php">here</a>.



- Variable Name: globalignore
- Data Type: free
- Default Value: 
[/segment]