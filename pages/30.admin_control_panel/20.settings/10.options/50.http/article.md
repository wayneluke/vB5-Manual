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
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Session Timeout
This is the time in seconds that a user must remain inactive before their login session expires. This setting also controls how long a user will remain on Who's Online after their last activity.



- Variable Name: cookietimeout
- Data Type: integer
- Default Value: 900

## GZIP HTML Output
Selecting yes will enable vBulletin to GZIP compress the HTML output of pages, thus reducing bandwidth requirements. This will be only used on clients that support it, and are HTTP 1.1 compliant. There will be a small performance overhead.<br />
<br />
This feature requires the ZLIB library.<br />
<br />
If you are already using <b>mod_gzip</b> or <b>mod_deflate</b> on your server, do not enable this option.



- Variable Name: gzipoutput
- Data Type: boolean
- Default Value: 0

## GZIP Compression Level
Set the level of GZIP compression that will take place on the output. 0=none; 9=max.<br />
<br />
We strongly recommend that you use level 1 for optimum results.



- Variable Name: gziplevel
- Data Type: number
- Default Value: 1

## Add Standard HTTP Headers
This option does not work with some combinations of web server, so it is off by default. However, some IIS setups may need it turned on.<br />
<br />
It will send the 200 OK HTTP headers if turned on.



- Variable Name: addheaders
- Data Type: boolean
- Default Value: 

## Add No-Cache HTTP Headers
Selecting yes will cause vBulletin to add no-cache HTTP headers. These are very effective, so adding them may cause server load to increase due to an increase in page requests.



- Variable Name: nocacheheaders
- Data Type: boolean
- Default Value: 

## Cache time for permanent redirects
This is the lifetime (in days) that permanent redirects are cached.



- Variable Name: 301cachelifetime
- Data Type: number
- Default Value: 2
