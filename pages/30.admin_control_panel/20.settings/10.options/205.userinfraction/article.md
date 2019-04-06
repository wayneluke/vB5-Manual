---
title: User Infractions &amp; Post Reporting Options
slug: user_infractions_amp_post_reporting_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - userinfraction
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Require Infraction Message
This option requires that the user sending an infraction include a PM or Email, depending on your forum settings.



- Variable Name: uimessage
- Data Type: number
- Default Value: 1

## Post Reporting Email
This option sends an email to the specified users when a post is reported. <br />
Users with an active device token will also receive push notifications about the report if <a href="admincp/options.php?do=options&amp;dogroup=api">Firebase Cloud Messaging</a> is enabled.



- Variable Name: rpemail
- Data Type: number
- Default Value: 1
