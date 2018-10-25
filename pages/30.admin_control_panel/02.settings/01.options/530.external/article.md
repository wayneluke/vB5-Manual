---
title: External Data Provider
slug: external_data_provider
taxonomy:
    category:
        - settings
    tag:
        - options
        - external
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Enable External Javascript
This setting allows you to enable/disable the Javascript content syndication system that allows you to embed vBulletin data in HTML pages.



- Variable Name: externaljs
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Enable RSS Syndication
This setting allows you to enable/disable the RSS content syndication system.



- Variable Name: externalrss
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Enable XML Syndication
This setting allows you to enable/disable the XML content syndication system.



- Variable Name: externalxml
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Topic Cutoff
This value controls how many days in the past that updated topics will be chosen from.  Busy forums will want a smaller number. The smallest valid value is 1 day; the default is 30 days.



- Variable Name: externalcutoff
- Data Type: number
- Default Value: 30
[/segment][segment=option]

## Topic Cache Lifespan
This setting controls how long topic content will be cached (in minutes). Valid settings are 1 to 1440, anything else will be treated as the default value of 60. The higher this value is, the less resources will be used by the External Data Provider system.



- Variable Name: externalcache
- Data Type: number
- Default Value: 60
[/segment][segment=option]

## Maximum External Records
This option limits the maximum amount of records that can be returned by the external data provider.  By default 15 records will be returned. This option allows the user to tack on &amp;count=X to their RSS feed to retrieve more records.



- Variable Name: externalcount
- Data Type: integer
- Default Value: 15
[/segment]