---
title: User Registration Options
slug: user_registration_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - register
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Allow New User Registrations
Set this option to NO if you would like to temporarily (or permanently) prevent anyone new from registering. Anyone attempting to register will be told that you are not accepting new registrations at this time.



- Variable Name: allowregistration
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## COPPA Registration System
Use the COPPA registration system. This complies with the COPPA laws and requires children under the age of 13 to get parental consent before they can post.<br />
<br />
For more info about this law, see here:
<a href="http://www.vbulletin.com/go/coppa">http://www.vbulletin.com/go/coppa</a>



- Variable Name: usecoppa
- Data Type: number
- Default Value: 0
[/segment][segment=option]

## COPPA Registration System Cookie Check
This option will save a cookie onto the user's computer if an age  under 13 is entered.  Subsequent registration attempts will be failed, no matter what age is entered. This only applies if the previous option is set to either <em>Enable COPPA</em> or <em>Deny registration for users under 13 years</em>.



- Variable Name: checkcoppa
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Paid Subscription during Registration
Allow you to set the paid subscription as a required field during registration that new members need to select a paid subscription and pay before becoming a member.



- Variable Name: regrequirepaidsub
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Moderate New Members
Allows you to validate new members before they are classified as registered members and are allowed to post.



- Variable Name: moderatenewmembers
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Send Welcome Email
Enabling this option will send a welcome email to new users. To alter or translate this email, use the following links:<br /><br /> [<a href="admincp/phrase.php?do=edit&amp;e[emailsubject][welcomemail_gemailsubject]" target="_blank">Email Title</a>] [<a href="admincp/phrase.php?do=edit&amp;e[emailbody][welcomemail_gemailbody]" target="_blank">Email Body</a>]<br />
<br />
Note: If you require emails to be verified, this email will be sent after the user has activated his or her account. If you moderate new memberships, no welcome mail will be sent as the user will already be receiving an email.



- Variable Name: welcomemail
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Welcome Private Message
Please input the username of the user that this PM is to be sent from. If no username is set then the Welcome PM will not be sent.<br /><br />

To alter or translate this message, use the following links:<br /><br /> [<a href="admincp/phrase.php?do=edit&amp;e[emailsubject][welcomepm_gemailsubject]" target="_blank">PM Title</a>] [<a href="admincp/phrase.php?do=edit&amp;e[emailbody][welcomepm_gemailbody]" target="_blank">PM Body</a>]<br />
<br />
Note: If you require emails to be verified, this message will be sent after the user has activated his or her account. Also ensure that <em>Receive Private Messages</em> is enabled in <strong>Default Registration Options</strong> below.



- Variable Name: welcomepm
- Data Type: username
- Default Value: 
[/segment][segment=option]

## Email Address to Notify About New Members
This email address will receive an email message when a new user signs up. Leave the option blank to disable this function.



- Variable Name: newuseremail
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Allow Multiple Registrations Per User
Normally, vBulletin will stop users signing up for multiple names by checking for a cookie on the user's machine. If one exists, then the user may not sign up for additional names. <b>Note</b>: This does not stop users from logging out and then registering new accounts.<br />
<br />
If you wish to allow your users to sign up for multiple names, then select yes for this option, and they will not be blocked from registering additional usernames.



- Variable Name: allowmultiregs
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Verify Email Address in Registration
If you set this option to 'Yes' new members will not be allowed to post messages until they visit a link that is sent to them in an email when they sign up.<br />
<br />
If a user's account is not activated by the user visiting the link, it will remain in the 'Users Awaiting Activation' usergroup.



- Variable Name: verifyemail
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Require Unique Email Addresses
The default option is to require unique email addresses for each registered user. This means that no two users can have the same email address. You can disable this requirement by setting this option to 'No'.



- Variable Name: requireuniqueemail
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Minimum Username Length
Enter the minimum number of characters in a valid username, for the purpose of ensuring that new members create valid usernames.



- Variable Name: minuserlength
- Data Type: integer
- Default Value: 3
[/segment][segment=option]

## Maximum Username Length
Enter the maximum number of characters in a valid username, for the purpose of ensuring that new members create valid usernames.



- Variable Name: maxuserlength
- Data Type: integer
- Default Value: 25
[/segment][segment=option]

## Illegal User Names
Enter names in here that you do not want people to be able to register.<br />
<br />
If any of the names here are included within the username, the user will be told that there is an error. For example, if you make the name <b>John</b> illegal, the name <b>John</b>athan will also be disallowed.<br />
<br />
Separate names by spaces.



- Variable Name: illegalusernames
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Username Regular Expression
You may require the username to match a regular expression (<a href="http://www.php.net/manual-lookup.php?function=preg-match" target="_blank">PCRE</a>).  The admin help provides some examples that may be useful. To disable this function leave the option blank.



- Variable Name: usernameregex
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Default Registration Options
The user options on the New User creation form in the Admin Control Panel, as well as the New User registration form will default to the following settings.



- Variable Name: defaultregoptions
- Data Type: bitfield
- Default Value: 180847753
[/segment][segment=option]

## Username Reuse Delay
When a username is changed, you may wish to prevent users from registering with that name for a certain length of time.<br />
<br />
Enter the number of days which an old username is reserved for. (Use 0 to disable.)



- Variable Name: usernamereusedelay
- Data Type: integer
- Default Value: 365
[/segment]