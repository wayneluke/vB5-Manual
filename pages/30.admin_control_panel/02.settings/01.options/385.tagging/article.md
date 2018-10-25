---
title: Tagging Options
slug: tagging_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - tagging
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Enable Topic Tagging
This is a global option to enable or disable the topic tagging system. You may choose which usergroups can apply tags to topics in the usergroup permissions section.



- Variable Name: threadtagging
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Tag Minimum Length
The minimum number of characters in a tag name. This can be between 1 and 100.



- Variable Name: tagminlen
- Data Type: integer
- Default Value: 3
[/segment][segment=option]

## Tag Maximum Length
The maximum number of characters in a tag name. This can be between 0 and 100.



- Variable Name: tagmaxlen
- Data Type: integer
- Default Value: 25
[/segment][segment=option]

## Topic Tag Banned Words
These words will be checked in addition to those listed in includes/searchwords.php to form a list of words whose use is banned in tagging.<br />
<br />
Separate each word with a space or carriage return.



- Variable Name: tagbadwords
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Topic Tag Allowed Words
Words entered here will be allowed as tags, regardless of whether or not their use would be otherwise disallowed due to length, censorship, commonality etc.<br />
<br />
If a word is specified in the 'Banned' words group <em>and</em> here, it <em>will</em> be allowed.<br />
<br />
Separate each word with a space or carriage return.



- Variable Name: taggoodwords
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Tag Separators
This option allows you to specify additional tag separators. Regardless of the value here, a comma will always be used as a separator.<br />
<br />
Separate each tag separators with a space. If you would like to use a space in a tag separator, click the '?' for information on the advanced separator syntax. 



- Variable Name: tagdelimiter
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Force Tags to be Lower Case
If you enable this option, "A" through "Z" will be replaced with "a" through "z" in tag names. Other characters will not be changed.



- Variable Name: tagforcelower
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Tag Cloud: Number of Tags
The maximum number of tags to display in the tag cloud.



- Variable Name: tagcloud_tags
- Data Type: integer
- Default Value: 70
[/segment][segment=option]

## Tag Cloud: Number of Levels
The number of <em>levels</em> to be shown in the tag cloud.<br />
<br />
By default, there are 5 levels named level1 to level5, with the font size growing from its smallest size at level 1 to its largest at level 5.<br />
<br />
Increasing this value above 5 requires a template change.



- Variable Name: tagcloud_levels
- Data Type: integer
- Default Value: 5
[/segment][segment=option]

## Tag Cloud: Cache Time
Amount of time in minutes before the tag cloud data cache is regenerated.<br />
<br />
A value of 0 will generate the tag cloud on each view.



- Variable Name: tagcloud_cachetime
- Data Type: integer
- Default Value: 30
[/segment][segment=option]

## Tag Cloud: Usage History (Days)
The number of days worth of data that should be used to generate the usage-based tag cloud<br />
<br />
Tags added more than this many days ago will not change the size of the link in the cloud.



- Variable Name: tagcloud_usagehistory
- Data Type: integer
- Default Value: 365
[/segment][segment=option]

## Tag Cloud: Build Usergroup
The tag cloud pulls together data from topics in many forums. Users may not be able to see all the topics that make up the tag cloud results. With this option, you can force the tag cloud to be built as if it were viewed by a particular usergroup.<br />
<br />
Live permission checking is the most accurate, but disables the above specified caching.



- Variable Name: tagcloud_usergroup
- Data Type: integer
- Default Value: 2
[/segment][segment=option]

## Search Tag Cloud: History (Days)
Amount of days that the system will keep a record of tag searches for use in the search tag cloud.<br />
<br />
0 means to use all data available.



- Variable Name: tagcloud_searchhistory
- Data Type: integer
- Default Value: 30
[/segment]