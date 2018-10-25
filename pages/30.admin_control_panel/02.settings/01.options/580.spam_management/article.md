---
title: Spam Management
slug: spam_management
taxonomy:
    category:
        - settings
    tag:
        - options
        - spam_management
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Anti-Spam Akismet Service
Enables the Akismet service for scanning content posted to the forum. The corresponding API key for the service has to be entered.



- Variable Name: vb_antispam_type
- Data Type: number
- Default Value: 0
[/segment][segment=option]

## Anti-Spam Akismet Content Key
Enter an Akismet service key to enable scanning of user data where supported.



- Variable Name: vb_antispam_key
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Stop Forum Spam API Key
A Stop Forum Spam API key is required in order to submit spammers to their database. A key may be obtained at <a href="http://www.stopforumspam.com">Stop Forum Spam</a>. You do not need a key to you the Stop Forum Spam service to check new user registrations.



- Variable Name: vb_antispam_sfs_key
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Stop Forum Spam No Response
If the Stop Forum Spam service fails to respond are new users to be allowed to register?



- Variable Name: vb_antispam_sfs_unavailable
- Data Type: free
- Default Value: 1
[/segment][segment=option]

## Stop Forum Spam IP Address Check
The Stop Forum Spam service can verify registering user's IP addresses against a list of known spammers.



- Variable Name: vb_antispam_sfs_ip
- Data Type: free
- Default Value: 0
[/segment][segment=option]

## Stop Forum Spam IP Address Check Whitelist
Use this option to allow certain IP addresses to still register even if they are detected as a spammer.
<br /><br />
If you enter a complete IP address (242.21.11.7), only that IP will be allowed.
If you enter a partial IP (243.21.11. or 243.21.11), any IPs that begin with the partial IP will be allowed. For example, adding 243.21.11 will allow 243.21.11.7 to register. However, 243.21.115.7 would still not be able to register.
<br /><br />
You may also use an '*' as a wildcard for increased flexibility. For example, if you enter 243.21.11*, many IPs will be allowed to register, including: 243.21.11.7, 243.21.115.7, 243.21.119.225.
<br /><br />
Place a space or a line break between each IP address.



- Variable Name: vb_antispam_sfs_iplist
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Stop Forum Spam Email Address Check
The Stop Forum Spam service can verify registering user's email addresses against a list of known spammers.



- Variable Name: vb_antispam_sfs_email
- Data Type: free
- Default Value: 0
[/segment][segment=option]

## Stop Forum Spam Email Address Check Whitelist
Use this option to allow certain email addresses to still register even if they are detected as a spammer.
<br /><br />
Place a space or a line break between each email address.



- Variable Name: vb_antispam_sfs_emaillist
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Stop Forum Spam Username Check
The Stop Forum Spam service can verify registering user's username against a list of known spammers.  Checking usernames is not very productive as it can block many valid users so only enable this with caution.



- Variable Name: vb_antispam_sfs_username
- Data Type: free
- Default Value: 0
[/segment][segment=option]

## Stop Forum Spam Registration Activity Check
The Stop Forum Spam check data includes the date of the last reported spam. Choose the maximum number of days past that will trigger a positive spam result.<br /><dfn>Set this to 0 to block registration regardless of the last date of activity.</dfn>



- Variable Name: vb_antispam_sfs_days
- Data Type: integer
- Default Value: 30
[/segment][segment=option]

## Stop Forum Spam Registration Confidence Check
The Stop Forum Spam check data includes a confidence score, based on the last seen date and the number of sightings of a spammer. This value ranges from 0 to 100 with 100 being the most confident.  Choose the minimum score that will trigger a positive spam result.
<dfn>Set this to 0 to block registration regardless of the confidence score.</dfn>



- Variable Name: vb_antispam_sfs_confidence
- Data Type: integer
- Default Value: 25
[/segment][segment=option]

## Detect Words as Spam
Use this option to block the posting of certain words. The appearance of word listed here will cause a post to be marked as spam. Words will be matched regardless of where they appear in the text.
<br /><br />
Place a space or a line break between each word and enter all words in lowercase.



- Variable Name: vb_antispam_badwords
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Detect URLs as Spam
Use this option to block posts that contain links. If the number of links in a post exceeds the value chosen here, the post will be considered spam.



- Variable Name: vb_antispam_maxurl
- Data Type: number
- Default Value: 9999
[/segment]