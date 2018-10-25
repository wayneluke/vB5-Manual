---
title: General Settings
slug: general_settings
taxonomy:
    category:
        - settings
    tag:
        - options
        - general
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Login Credential Type
This option lets users log in using only their email, only their username, or both.



- Variable Name: logintype
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Add Template Name in HTML Comments
Add the template name at the beginning and end of every template rendered. This is useful for debugging and analyzing the HTML code, but turn it off to save bandwidth when running in a production environment.



- Variable Name: addtemplatename
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Use Login "Strikes" System
Setting this to no will disable the system that prevents a user (with a specific IP address) from logging into an account after entering an incorrect password 5 times.



- Variable Name: usestrikesystem
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Post Referrer Whitelist
For security purposes, vBulletin only allows data to be submitted via post from within the domain the board is installed on. If you are submitting post requests from a different domain or subdomain, you must add them here.
<br /><br />
Enter domains in the form of .domain.com (including the leading dot). Separate multiple domains by line breaks.



- Variable Name: allowedreferrers
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Topic/Forum Read Marking Type
This option controls how topics and forums are marked as read.<br />
<br />
Click the help icon on the right for more information on each option.



- Variable Name: threadmarking
- Data Type: free
- Default Value: 2
[/segment][segment=option]

## Database Read Marking Limit
The amount of time in days to store the topic and forum read times. All topics or forums without posts in this many days will be considered read.



- Variable Name: markinglimit
- Data Type: number
- Default Value: 10
[/segment][segment=option]

## Enable Inline Moderation Authentication
Inline moderation actions will require a user to authenticate again prior to being performed. The timeout is based on the admin control panel timeout, or one hour if that option is disabled.



- Variable Name: enable_inlinemod_auth
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Disable PHP, Static HTML, and Ad Module rendering
In order to fix an error with PHP, Static HTML, or Ad module errors, you may need to temporary disable rendering for these modules.



- Variable Name: disable_php_rendering
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Number of Pages Visible in Page Navigator
If a thread/forum (etc.) requires multiple pages to be displayed, this option selects how many page links either side of the current page are shown. Set this to 0 to display all pages.



- Variable Name: pagenavpages
- Data Type: number
- Default Value: 3
[/segment][segment=option]

## Relative Jumps for Page Navigator
If a thread/forum (etc.) requires multiple pages to be displayed, this option selects what pages can be jumped to relative to the current one. For example, by adding 10 to the list, links will appear for current page -10 and current page +10.



- Variable Name: pagenavs
- Data Type: free
- Default Value: 10 50 100 500 1000
[/segment][segment=option]

## Redirect 404 pages to root node
Redirect 404 pages to root node



- Variable Name: redirect_404_to_root
- Data Type: free
- Default Value: 0
[/segment]