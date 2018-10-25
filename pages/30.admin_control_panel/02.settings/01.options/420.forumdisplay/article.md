---
title: Channel Display Options
slug: channel_display_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - forumdisplay
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Show Private Forums
Select 'No' here will hide private forums from users who are not allowed to access them. Users who do have permission to access them will have to log in before they can see these forums too.<br />
<br />
This option applies to any forum listing, including the Quick Navigation menu, and Search Results.



- Variable Name: showprivateforums
- Data Type: free
- Default Value: 0
[/segment][segment=option]

## Show Topic Prefix in Last Post Column?
You may choose to show a topic's prefix in the last post column, along with the title. This will increase the size of the data included in that column, however.



- Variable Name: showprefixlastpost
- Data Type: number
- Default Value: 2
[/segment][segment=option]

## Show Sticky Topics on All Pages
Select 'Yes' to show sticky topics on every forumdisplay.php page, regardless of page number. Set 'No' to only display them on page one.



- Variable Name: showstickies
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Highlight Topics in Which User Has Posted
When this feature is enabled, a logged in user will see an 'arrow' (or whatever graphic you choose) on the folder icons (hot folders, new folders, etc.) next to the topics that they have posted in.



- Variable Name: showdots
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Multi-Page Topic Links Enabled
Link to individual pages of a topic spanning multiple pages on the forum listing?



- Variable Name: linktopages
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Multi-Page Topic Maximum Links
When linking to multiple pages in the forum display, this allows you to set the cut-off point on which long posts stop adding more page numbers and are replaced by 'more...'



- Variable Name: maxmultipage
- Data Type: integer
- Default Value: 3
[/segment][segment=option]

## Length of Topic Preview Text
This setting allows you to specify how many characters of the first post in a topic to display in the 'title' tag of the topic title on the forumdisplay page.<br />
<br />
Set this value to 0 to disable topic previews.



- Variable Name: threadpreview
- Data Type: integer
- Default Value: 150
[/segment][segment=option]

## Age of Channel Display Last Content
For the channel listings this set the maximum age, in minutes, of the channel "last content" data. We recommend this be set to at least a minute and preferably five minutes. You can disable caching by setting to zero, but this will significantly increase server load.



- Variable Name: channeltreelife
- Data Type: integer
- Default Value: 1
[/segment]