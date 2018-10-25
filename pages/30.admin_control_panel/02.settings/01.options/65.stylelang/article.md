---
title: Style &amp; Language Settings
slug: style_amp_language_settings
taxonomy:
    category:
        - settings
    tag:
        - options
        - stylelang
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Default Language
Select the default language for your forums. This language will be used for all guests, and any members who have not expressed a language preference in their options.



- Variable Name: languageid
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Default Style
Select the default style for your forums. This style will be used for all guests, and any members who have not expressed a style preference in their options, or are attempting to use a style that does not exist or is forbidden.



- Variable Name: styleid
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Allow Users To Change Styles
This allows users to set their preferred style set on registration or when editing their option. Setting this to 'No' disables that option and will force them to use whatever style has been specified.



- Variable Name: allowchangestyles
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Store CSS Stylesheets as Files?
If you would like to store the CSS stylesheet for each style as a file, you must ensure that you have a directory called 'vbulletin_css' inside the 'clientscript' folder, and that the web server has permission to write and delete files within that directory.



- Variable Name: storecssasfile
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## CSS File Location
Relative path to css files.<dfn>This only applies if you have set css as files. If empty it will default to /clientscript/vbulletin_css</dfn> This should be a path relative to your core setting, i.e. start with '/'. Do not include a '/' at the end.



- Variable Name: cssfilelocation
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Show Instant Messaging Program Icons
Setting this option to yes will show the images for Skype, ICQ, AIM, MSN, and Yahoo! Messenger if the user has entered the correct information in his/her profile. These links are shown in various places throughout the forum, on posts, who's online, memberlist, profile, etc.



- Variable Name: showimicons
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Use SkypeWeb Graphics
If set to 'Yes', load Skype&trade; icon from the SkypeWeb server in order to show users' online status, otherwise use local (static) graphic.<br />
<br />
If set to 'Language Specific', graphics in the language being used by the visiting user will be loaded.<br />
<br />
If the 'Language Specific' option does not work, switch it off and try again in a few weeks.



- Variable Name: skypeweb_gfx
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Search Engine Referrers
Use this option to mark certain HTTP referrer addresses as a search engine source.<br />
<br />
Note that for most accurate detection (and save resource for checking similar things), you should enter only part of the domain.  For example, instead of entering "www.yahoo.com" and "www1.yahoo.com", enter just ".yahoo.com".  Instead of entering ".google.com", ".google.ca", ".google.co.uk", simply enter ".google.".<br />
<br />
Alternatively, if you only care about any part of the domain, you can use * as a wild card.  For example "search*" will match "searching.site", "searchmaster.site", etc.<br />
<br />
Put each search engine source on its own line.



- Variable Name: searchenginereferrers
- Data Type: free
- Default Value: .google.
.live.
.msn.
.yahoo.
[/segment][segment=option]

## Cache Templates As Files
If this is selected the templates will be written as files in the directory selected.



- Variable Name: cache_templates_as_files
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Template Cache Path
The location of the directory to store the compiled templates.  If the path is not absolute then it is interpreted as being relative to the vBulletin core directory.



- Variable Name: template_cache_path
- Data Type: free
- Default Value: cache/template
[/segment]