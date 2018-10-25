---
title: Cookies and HTTP Header Options
slug: cookies_and_http_header_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - http
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Session Timeout
This is the time in seconds that a user must remain inactive before their login session expires. This setting also controls how long a user will remain on Who's Online after their last activity.



- Variable Name: cookietimeout
- Data Type: integer
- Default Value: 900
[/segment][segment=option]

## Path to Save Cookies
The path to which the cookie is saved. If you run more than one forum on the same domain, it will be necessary to set this to the individual directories of the forums. Otherwise, just leave it as / .<br />
<br />
Suggested valid values for Cookie Path are available in the drop-down menu opposite. If you have a good reason to want a different setting, check the checkbox and enter the desired value in the box provided.<br />
<br />
Please note that your path should <b>always</b> end in a forward-slash; for example '/forums/', '/vbulletin/' etc.<br /><br />
<span class="modlasttendays">Entering an invalid setting can leave you unable to login to your forum.</span>



- Variable Name: cookiepath
- Data Type: free
- Default Value: /
[/segment][segment=option]

## Cookie Domain
This option sets the domain on which the cookie is active. The most common reason to change this setting is that you have two different urls to your forum, i.e. example.com and forums.example.com.  To allow users to stay logged into the forum if they visit via either url, you would set this to <b>.example.com</b> (note the domain begins with a <b>dot</b>.<br />
<br />
Suggested valid values for Cookie Domain are available in the drop-down menu opposite. If you have a good reason to want a different setting, check the checkbox and enter the desired value in the box provided.<br />
<br />
<span class="modlasttendays">You most likely want to leave this setting blank as entering an invalid setting can leave you unable to login to your forum.</span>



- Variable Name: cookiedomain
- Data Type: free
- Default Value: 
[/segment][segment=option]

## GZIP HTML Output
Selecting yes will enable vBulletin to GZIP compress the HTML output of pages, thus reducing bandwidth requirements. This will be only used on clients that support it, and are HTTP 1.1 compliant. There will be a small performance overhead.<br />
<br />
This feature requires the ZLIB library.<br />
<br />
If you are already using <b>mod_gzip</b> or <b>mod_deflate</b> on your server, do not enable this option.



- Variable Name: gzipoutput
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## GZIP Compression Level
Set the level of GZIP compression that will take place on the output. 0=none; 9=max.<br />
<br />
We strongly recommend that you use level 1 for optimum results.



- Variable Name: gziplevel
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Add Standard HTTP Headers
This option does not work with some combinations of web server, so it is off by default. However, some IIS setups may need it turned on.<br />
<br />
It will send the 200 OK HTTP headers if turned on.



- Variable Name: addheaders
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Add No-Cache HTTP Headers
Selecting yes will cause vBulletin to add no-cache HTTP headers. These are very effective, so adding them may cause server load to increase due to an increase in page requests.



- Variable Name: nocacheheaders
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Cache time for permanent redirects
This is the lifetime (in days) that permanent redirects are cached.



- Variable Name: 301cachelifetime
- Data Type: number
- Default Value: 2
[/segment]