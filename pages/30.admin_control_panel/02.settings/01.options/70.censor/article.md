---
title: Censorship Options
slug: censorship_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - censor
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Censorship Enabled
You may have certain words censored on your forum. Words you choose to censor will be replaced by the character you specify below. All message titles and messages will be affected.



- Variable Name: enablecensor
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Character to Replace Censored Words
This character (or characters) will be used to replace censored words. For example, if you have censored the word 'dog' and you set the censor character here to an asterisk (*) then any occurrences of 'dog' in messages will appear as '***'.



- Variable Name: censorchar
- Data Type: free
- Default Value: *
[/segment][segment=option]

## Censored Words
Type all words you want censored in the field below. Do not use commas to separate words, just use spaces. For example, type 'dog cat boy', rather than 'dog, cat, boy.'<br />
<br />
If you type 'dog', all words containing the string 'dog' would be censored (dogma, for instance, would appear as '***ma'). To censor more accurately, you can require that censors occur only for exact words. You can do this by placing a censor word in curly braces, as in {dog}. Signifying 'dog' in the curly braces would mean that dogma would appear as dogma, but dog would appear as '***'. Thus your censor list may appear as: cat {dog} {barn} barn<br />
<br />
Do not use quotation marks and make sure you use curly braces, not parentheses, when specifying exact words.<br /><br />You will need to <a href="admincp/misc.php?do=chooser">Rebuild the Post Cache</a> after making changes to update existing posts.



- Variable Name: censorwords
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Blank Character Stripper
You may wish to prevent users from using certain characters in their posts, usernames, and more. These characters are usually only used to make words appear the same to a human but different to a computer. To prevent these characters from being used, enter their character codes (numbers) here, separated by spaces. You may prefix a character code with a 'u' to denote it is a Unicode value; click the '?' icon on the right for more information.<br />
<br />
Please note that stripping characters with this setting may break some double-byte character sets. If you are unsure or having problems with certain characters not displaying properly, remove the contents of this setting.



- Variable Name: blankasciistrip
- Data Type: free
- Default Value: 160 173 u8205 u8204 u8237 u8238
[/segment]