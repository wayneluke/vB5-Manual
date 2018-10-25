---
title: Group Options
slug: group_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - social_groups
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Group Name Maximum Length
Enter the maximum number of characters allowed in Group names. Names longer than this limit will be rejected.



- Variable Name: sg_name_maxchars
- Data Type: integer
- Default Value: 100
[/segment][segment=option]

## Group Message Moderation
When enabled, all new group messages are placed into moderation. This can also be enabled in usergroup permissions.



- Variable Name: social_moderation
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Default Groups Per-Page
This setting allows you to define the default number of groups displayed per-page when searching Groups.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: sg_perpage
- Data Type: posint
- Default Value: 10
[/segment][segment=option]

## Maximum Groups Per-Page
This setting allows you to limit the number of groups users may display per page when listing Groups.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: sg_maxperpage
- Data Type: posint
- Default Value: 50
[/segment][segment=option]

## Default Messages Per-Page
This setting allows you to define the default number of messages displayed per-page in groups.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: gm_perpage
- Data Type: posint
- Default Value: 10
[/segment][segment=option]

## Maximum Messages Per-Page
This setting allows you to limit the number of messages users may display per page in groups.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: gm_maxperpage
- Data Type: posint
- Default Value: 50
[/segment][segment=option]

## Maximum Discussions Per-Page
This setting allows you to limit the number of discussions users may display per page in a Group.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: sgd_maxperpage
- Data Type: posint
- Default Value: 50
[/segment][segment=option]

## Default Discussions Per-Page
This setting allows you to define the default number of discussions displayed per-page in a Group.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: sgd_perpage
- Data Type: posint
- Default Value: 10
[/segment][segment=option]

## Allow Join-to-View Groups
When set, this allows the creator of a group the option to only show contents (messages, pictures) of the group to members of that group (or Administrators and Moderators).



- Variable Name: sg_allow_join_to_view
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Picture Moderation
When enabled, all new pictures are placed into moderation. This can also be enabled in usergroup permissions.



- Variable Name: groups_pictures_moderation
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Allow Groups Owners to Force New Group Messages into Moderation Queue
This option allows a group owner (with the <em>Manage Own Groups' Content</em> Permission) to set the group so that all Group Messages are automatically sent to the moderation queue.



- Variable Name: sg_allow_owner_mod_queue
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Allow Group Owners to Limit New Discussions to Themselves
Allows users to create Groups where only they can create new discussions.



- Variable Name: sg_enable_owner_only_discussions
- Data Type: free
- Default Value: 0
[/segment][segment=option]

## Allowed BB Code Tags in Group Messages
This setting allows you to enable and disable the use of various BB codes in group messages.<br />
<br />
Note that any changes you make will only affect messages posted (or edited) after this point.



- Variable Name: sg_allowed_bbcode
- Data Type: bitfield
- Default Value: 1091
[/segment][segment=option]

## Allow Owners to Delete Group if Empty
This option will allow any group owner to delete a Group if they are the only member of that group (even if they lack the "Can Delete Own Groups" permission)



- Variable Name: sg_allow_delete_empty_group
- Data Type: integer
- Default Value: 1
[/segment][segment=option]

## Enable Group Image Icons
If this is enabled users who create groups will be able to upload a group icon that will be displayed when viewing the group, and as a smaller version when viewing group listings.<br />
<br />
<strong>Note: </strong>Group Image Icons are always limited to 200px by 200px.



- Variable Name: sg_enablesocialgroupicons
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Number of Newest Groups to Display
This setting allows you to define the number of groups displayed in the Newest Groups section of the Groups Overview.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: sg_newgroups_count
- Data Type: posint
- Default Value: 15
[/segment][segment=option]

## Category Cloud Size
This setting allows you to define the number of categories to display in the Group Overview.<br />
<br />
<b>Note: </b>This number must be at least 1.



- Variable Name: sg_category_cloud_size
- Data Type: posint
- Default Value: 40
[/segment]