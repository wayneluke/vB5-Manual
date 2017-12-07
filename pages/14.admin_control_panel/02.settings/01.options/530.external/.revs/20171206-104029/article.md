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
version: 5.3.3
date: 12/06/2017 06:39pm
---

## Enable External Javascript
This setting allows you to enable/disable the Javascript content syndication system that allows you to embed vBulletin data in HTML pages.

## Enable RSS Syndication
This setting allows you to enable/disable the RSS content syndication system.

## Enable XML Syndication
This setting allows you to enable/disable the XML content syndication system.

## Topic Cutoff
This value controls how many days in the past that updated topics will be chosen from.  Busy forums will want a smaller number. The smallest valid value is 1 day; the default is 30 days.

## Topic Cache Lifespan
This setting controls how long topic content will be cached (in minutes). Valid settings are 1 to 1440, anything else will be treated as the default value of 60. The higher this value is, the less resources will be used by the External Data Provider system.

## Maximum External Records
This option limits the maximum amount of records that can be returned by the external data provider.  By default 15 records will be returned. This option allows the user to tack on &amp;count=X to their RSS feed to retrieve more records.



