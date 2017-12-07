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
version: 5.3.3
date: 12/06/2017 11:16pm
---

## Default Language
Select the default language for your forums. This language will be used for all guests, and any members who have not expressed a language preference in their options.

## Default Style
Select the default style for your forums. This style will be used for all guests, and any members who have not expressed a style preference in their options, or are attempting to use a style that does not exist or is forbidden.

## Allow Users To Change Styles
This allows users to set their preferred style set on registration or when editing their option. Setting this to 'No' disables that option and will force them to use whatever style has been specified.

## Store CSS Stylesheets as Files?
If you would like to store the CSS stylesheet for each style as a file, you must ensure that you have a directory called 'vbulletin_css' inside the 'clientscript' folder, and that the web server has permission to write and delete files within that directory.

## CSS File Location
Relative path to css files.<dfn>This only applies if you have set css as files. If empty it will default to /clientscript/vbulletin_css</dfn> This should be a path relative to your core setting, i.e. start with '/'. Do not include a '/' at the end.

## Show Instant Messaging Program Icons
Setting this option to yes will show the images for Skype, ICQ, AIM, MSN, and Yahoo! Messenger if the user has entered the correct information in his/her profile. These links are shown in various places throughout the forum, on posts, who's online, memberlist, profile, etc.

## Use SkypeWeb Graphics
If set to 'Yes', load Skype&trade; icon from the SkypeWeb server in order to show users' online status, otherwise use local (static) graphic.<br />
<br />
If set to 'Language Specific', graphics in the language being used by the visiting user will be loaded.<br />
<br />
If the 'Language Specific' option does not work, switch it off and try again in a few weeks.

## Search Engine Referrers
Use this option to mark certain HTTP referrer addresses as a search engine source.<br />
<br />
Note that for most accurate detection (and save resource for checking similar things), you should enter only part of the domain.  For example, instead of entering "www.yahoo.com" and "www1.yahoo.com", enter just ".yahoo.com".  Instead of entering ".google.com", ".google.ca", ".google.co.uk", simply enter ".google.".<br />
<br />
Alternatively, if you only care about any part of the domain, you can use * as a wild card.  For example "search*" will match "searching.site", "searchmaster.site", etc.<br />
<br />
Put each search engine source on its own line.

## Cache Templates As Files
If this is selected the templates will be written as files in the directory selected.

## Template Cache Path
The location of the directory to store the compiled templates.  If the path is not absolute then it is interpreted as being relative to the vBulletin core directory.



