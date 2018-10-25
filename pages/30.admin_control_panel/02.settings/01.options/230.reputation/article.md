---
title: User Reputation Options
slug: user_reputation_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - reputation
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Default Reputation
What reputation level shall new users receive upon registration?  Make sure that you have a reputation level that is at least equal to or less than this value.



- Variable Name: reputationdefault
- Data Type: number
- Default Value: 10
[/segment][segment=option]

## Reputation Undefined
If you have any user gain a reputation that exceeds your lowest <em>negative</em> level, then this phrase will be used for them.  If you do not wish to use this phrase, make sure you set a negative reputation that is larger than the largest score (negative) that a user on your forum has.



- Variable Name: reputationundefined
- Data Type: free
- Default Value: is off the scale
[/segment][segment=option]

## Administrator's Reputation Power
How many reputation points does an administrator give or take away with each click?<br />
<br />Set to 0 to have administrators follow the same rules as everyone else.



- Variable Name: adminpower
- Data Type: number
- Default Value: 10
[/segment][segment=option]

## Register Date Factor
For every X number of days, users gain 1 point of reputation-altering power.



- Variable Name: rdpower
- Data Type: number
- Default Value: 365
[/segment][segment=option]

## Post Count Factor
For every X number of posts, users gain 1 point of reputation-altering power.



- Variable Name: pcpower
- Data Type: number
- Default Value: 1000
[/segment][segment=option]

## Reputation Point Factor
For every X points of reputation, users gain 1 point of reputation-altering power.



- Variable Name: kppower
- Data Type: number
- Default Value: 100
[/segment][segment=option]

## Minimum Post Count
How many posts must a user have before his reputation hits count on others?



- Variable Name: minreputationpost
- Data Type: number
- Default Value: 50
[/segment][segment=option]

## Minimum Reputation Count
How much reputation must a user have before his reputation hits count on others?



- Variable Name: minreputationcount
- Data Type: number
- Default Value: 10
[/segment]