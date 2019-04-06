---
title: Products/Hook System
slug: products_hook_system
taxonomy:
    category:
        - settings
    tag:
        - options
        - plugin
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Enable Hook System
This setting allows you to globally enable or disable the hook system.<br />
<br />
By switching the system off, only vBulletin-native code will be run, so it can be used to establish whether errors exist within vBulletin itself or in hook code.



- Variable Name: enablehooks
- Data Type: boolean
- Default Value: 1

## Add Template Name in HTML Comments
Add the template name at the beginning and end of every template rendered. This is useful for debugging and analyzing the HTML code, but turn it off to save bandwidth when running in a production environment.



- Variable Name: addtemplatename
- Data Type: boolean
- Default Value: 1

## Add Hook Name in HTML Comments
Add the hook name as an HTML comment when invoked. 
Each hook location will also display a "Add Hook" link based on the "Show Hook Links" option below.
This is useful for debugging and development, but the links can be too intrusive when running in a production environment.



- Variable Name: showhookposition
- Data Type: boolean
- Default Value: 

## Show Hook Links
If "Add Hook Name in HTML Comments" is enabled, each hook location will display an "Add Hook" link based on this option.



- Variable Name: showhooklink
- Data Type: integer
- Default Value: 
