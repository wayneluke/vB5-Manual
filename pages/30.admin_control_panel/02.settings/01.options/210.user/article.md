---
title: User Profile Options
slug: user_profile_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - user
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Require Date of Birth
Require users to provide a valid date of birth (1902 to current year).



- Variable Name: reqbirthday
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## User Title Maximum Characters
This is the maximum number of characters allowed for a user's custom title.



- Variable Name: ctMaxChars
- Data Type: integer
- Default Value: 25
[/segment][segment=option]

## Censored Words for Usertitle
Type all words you want censored in the Usertitle in the field below. Do not use commas to separate words, just use spaces. For example, type 'dog cat boy', rather than 'dog, cat, boy.'<br />
<br />
If you type 'dog', all words containing the string 'dog' would be censored (dogma, for instance, would appear as '***ma'). To censor more accurately, you can require that censors occur only for exact words. You can do this by placing a censor word in curly braces, as in {dog}. Signifying 'dog' in the curly braces would mean that dogma would appear as dogma, but dog would appear as '***'. Thus your censor list may appear as: cat {dog} {barn} barn<br />
<br />
Do not use quotation marks and make sure you use curly braces, not parentheses, when specifying exact words.



- Variable Name: ctCensorWords
- Data Type: free
- Default Value: admin forum moderator vbulletin leader
[/segment][segment=option]

## Exempt Moderators From Censor
Do you want to exempt your forum Moderators from the censor words? You will want to set this to yes if you censor anything that is part of a moderator's title like 'moderator' as they have custom titles by default and will get censored.



- Variable Name: ctCensorMod
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Number of friends to display in the small friends block
The Number of Friends to display in the Small Friends Block on the Users' Profile Pages



- Variable Name: minifriends_amount
- Data Type: integer
- Default Value: 6
[/segment][segment=option]

## Signature Soft-Linebreak Character Limit
When counting the number of lines in a signature, this setting controls the number of characters that can be displayed before text wraps in the browser and is displayed as multiple lines. Once this value is surpassed, the run of text will be counted as multiple lines.<br />
<br />
The value in this setting should be based on the number of <em>normal-sized</em> characters. Other sized characters will be scaled appropriately to this setting.



- Variable Name: softlinebreakchars
- Data Type: integer
- Default Value: 90
[/segment][segment=option]

## Allow Users to  'Ignore' Moderators
Allow users to add Moderators and Administrators to their ignore list?



- Variable Name: ignoremods
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Allow Signatures
This allows users to include a signature in their posts.



- Variable Name: allow_signatures
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Enable User Profile Customization
Globally enable or disable user profile customization.



- Variable Name: enable_profile_styling
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## User Status Maximum Characters
This is the maximum number of characters allowed for a user's status, up to a hard limit of 1000 characters.



- Variable Name: statusMaxChars
- Data Type: integer
- Default Value: 140
[/segment]