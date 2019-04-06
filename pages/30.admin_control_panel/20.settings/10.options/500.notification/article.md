---
title: Notification Options
slug: notification_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - notification
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Dismissed Notification Auto Delete
Dismissed notifications will automatically be deleted this many days after they have been dismissed. This does not affect new notifications. Set to (0) to disable this functionality.



- Variable Name: dismissed_notification_ttl_days
- Data Type: integer
- Default Value: 180

## New Notification Auto Delete
New notifications will automatically be deleted this many days after they were created. This does not affect dismissed notifications. Set to (0) to disable this functionality.



- Variable Name: new_notification_ttl_days
- Data Type: integer
- Default Value: 0

## Enable Usermention Notifications
If this is disabled, usermentions will not send notifications. This does not affect the use of the [USER] BBCode.



- Variable Name: notification_usermention_enabled
- Data Type: boolean
- Default Value: 1
