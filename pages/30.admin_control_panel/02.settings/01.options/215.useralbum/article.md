---
title: User Profile: Album Options
slug: user_profile_album_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - useralbum
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Albums Per Page
When listing multiple albums on one page, this controls how many will be displayed before pagination occurs.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: albums_perpage
- Data Type: posint
- Default Value: 10
[/segment][segment=option]

## Pictures Per Page
When viewing an album, this controls how many pictures are displayed before pagination occurs.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: album_pictures_perpage
- Data Type: posint
- Default Value: 25
[/segment][segment=option]

## Number of Albums to display in the Users Profile
The Maximum Number of Albums to Display on the Users' Profile Pages



- Variable Name: profile_album_amount
- Data Type: integer
- Default Value: 2
[/segment][segment=option]

## Picture Moderation
When enabled, all new pictures are placed into moderation. This can also be enabled in usergroup permissions.



- Variable Name: albums_pictures_moderation
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Caption Preview Length
The amount of characters from a picture's caption that will be shown when a user hovers over the picture.



- Variable Name: album_captionpreviewlen
- Data Type: integer
- Default Value: 150
[/segment][segment=option]

## Maximum Pictures per Album
You may choose to limit the number of pictures that a user can have in one album. This is primarily useful for encouraging your users to have albums for smaller topics, but it does have minor performance considerations as well. The usergroup setting "Maximum Number of Album Pictures" takes precedence over this setting.<br />
<br />
Set this to 0 to disable the limit.



- Variable Name: album_maxpicsperalbum
- Data Type: integer
- Default Value: 60
[/segment][segment=option]

## Recent Album Update Days
You may set the amount of days that albums are relevant in the Recently Updated Albums list.  You may want to increase this value if picture updates are infrequent, or vice versa.<br /><br /><strong>Note:</strong> If user album permissions are changed, the Recently Update Album list can be rebuilt with <a href="admincp/misc.php?do=chooser">Rebuild Counters</a>.

If you set this to 0, Recently Updated Albums will be disabled.



- Variable Name: album_recentalbumdays
- Data Type: number
- Default Value: 7
[/segment][segment=option]

## Enable Picture Comments
Set this option to yes if you would like to enable commenting on album and group pictures. Comments are associated with the picture itself, so comments will be shown anywhere the picture is shown.



- Variable Name: pc_enabled
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Moderate Picture Comments
When enabled, all new picture comments are placed into moderation. This can also be enabled in usergroup permissions.



- Variable Name: pc_moderation
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Default Picture Comments Per-Page
This setting allows you to define the default number of picture comments displayed per-page with a picture.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: pc_perpage
- Data Type: posint
- Default Value: 10
[/segment][segment=option]

## Maximum Picture Comments Per-Page
This setting allows you to limit the number of picture comments users may display per page with a picture.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: pc_maxperpage
- Data Type: posint
- Default Value: 50
[/segment][segment=option]

## Allowed BB Code Tags in Picture Comments
This setting allows you to enable and disable  the use of various BB codes in picture comments.<br />
<br />
Note that any changes you make will only affect messages posted (or edited) after this point.



- Variable Name: pc_allowed_bbcode
- Data Type: bitfield
- Default Value: 1091
[/segment]