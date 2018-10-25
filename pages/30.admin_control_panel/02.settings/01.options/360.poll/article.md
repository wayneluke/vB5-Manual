---
title: Poll and Topic Rating Options
slug: poll_and_topic_rating_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - poll
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Maximum Poll Options
Maximum number of options a user can select for the poll.<br />
<br />
Set this option to 0 to allow any number of options.



- Variable Name: maxpolloptions
- Data Type: integer
- Default Value: 10
[/segment][segment=option]

## Poll Option Length
Maximum length that a poll option can be.



- Variable Name: maxpolllength
- Data Type: integer
- Default Value: 100
[/segment][segment=option]

## Update Topic Last Post on Poll Vote
If you set this option to 'Yes' the topic's last post time will be updated when a vote is placed, thereby returning it to the top of its parent forum listing.<br />
<br />
Note that this option can cause confusion. The last post time of a topic will be changed with no visible post.



- Variable Name: updatelastpost
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Required Topic Rating Votes to Show Rating
This option specifies the number of topic rating votes that must be cast of a particular topic before the current rating is displayed on forumdisplay.php and showthread.php.



- Variable Name: showvotes
- Data Type: integer
- Default Value: 1
[/segment][segment=option]

## Allow Topic Rating Vote Changes
Allow users to change their original rating of a topic?



- Variable Name: votechange
- Data Type: boolean
- Default Value: 
[/segment]