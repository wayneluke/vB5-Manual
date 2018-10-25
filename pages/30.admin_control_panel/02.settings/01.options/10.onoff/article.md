---
title: Turn Your vBulletin On and Off
slug: turn_your_vbulletin_on_and_off
taxonomy:
    category:
        - settings
    tag:
        - options
        - onoff
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Site Active
From time to time, you may want to turn your site off to the public while you perform maintenance, update versions, etc. When you turn your site off, visitors will receive a message that states that the site is temporarily unavailable. <b>Administrators will still be able to see the site.</b>



- Variable Name: bbactive
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Reason For Turning Site Off
The text that is presented when the BB is closed.<br />
<br />
Note: as an administrator, you will be able to see the forums as usual, even when you have turned them off to the public.



- Variable Name: bbclosedreason
- Data Type: free
- Default Value: &lt;div class=&quot;forum-off restore&quot;&gt;Sorry, the board is unavailable at the moment while we are testing some functionality. We will be back soon...&lt;/div&gt;
[/segment]