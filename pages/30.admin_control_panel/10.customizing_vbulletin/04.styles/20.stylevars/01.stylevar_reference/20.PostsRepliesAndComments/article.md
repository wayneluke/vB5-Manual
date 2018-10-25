---
title: Posts Replies And Comments
slug: postsrepliesandcomments
taxonomy:
    category:
        - settings
    tag:
        - options
        - PostsRepliesAndComments
visible: false
template: article
version: 5.4.5 Alpha 4
date: 10/15/2018 09:05am
---



[toc]

## Activity Stream Avatar Border

Controls the border width, style, and color for avatars in the activity stream.

- Variable Name: activity_stream_avatar_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_blogs_groups.css, css_b_avatar.css, css_b_pmchat.css, css_message_center.css, css_utilities.css

## Activity Stream Content Padding

Controls the padding for the content items shown in the &quot;activity stream&quot; areas.

- Variable Name: activity_stream_content_padding
- Data Type: padding
- Default Value(s):
  - units: px
  - top: 15
  - right: 0
  - bottom: 0
  - left: 0
  - same: 0

- Template List: css_global.css

## Comment Background

Controls the background color and image for comments.

- Variable Name: comment_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_article_content_pagenav.css, css_b_comment.css, css_b_comments.css, css_b_comment_entry.css

## Comment Divider Color

Controls the color for the divider between comments.

- Variable Name: comment_divider_color
- Data Type: color
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_article_content_pagenav.css, css_b_comment.css, css_b_comments.css, css_b_comment_entry.css, css_b_editor.css

## Postbit Background

Controls the background color and image for the user information area of posts.

- Variable Name: postbit_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_post.css, css_b_post_notice.css, css_global.css

## Postbit Deleted Background

Controls the background color and image for the user information area for soft deleted posts.

- Variable Name: postbit_deleted_background
- Data Type: background
- Default Value(s):
  - color: global_palette_warning_01 **(Inherited)**

- Template List: css_b_comment.css, css_b_post.css, css_global.css

## Postbit Unapproved Background

Controls the background color and image for the user information area for unapproved posts.

- Variable Name: postbit_unapproved_background
- Data Type: background
- Default Value(s):
  - color: global_palette_contrast_02 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_b_comment.css, css_b_post.css, css_global.css

## Post Border

Controls the border width, style, and color for the content area of posts.

- Variable Name: post_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_event.css, css_b_post.css, css_b_post_attachments.css, css_b_post_notice.css, css_b_table.css, css_global.css, css_responsive.css

## Post Content Font

Controls the font family, size, and style for the post content area.

- Variable Name: post_content_font
- Data Type: font
- Default Value(s):
  - units: body_font **(Inherited)**
  - family: body_font **(Inherited)**
  - size: 0
  - size: body_font **(Inherited)**

- Template List: css_b_post.css

## Post Controls Divider Color

Controls the color of divider between the post signature and the post controls at the very bottom.

- Variable Name: post_controls_divider_color
- Data Type: color
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_divider.css, css_b_help_table.css, css_b_post.css, css_global.css, css_unreset.css

## Post Controls Quote Active Text Color

Controls the text color for the &quot;Quote&quot; control, when it is activated.

- Variable Name: post_controls_quote_active_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_contrast_01 **(Inherited)**

- Template List: css_b_post_control.css

## Post Controls Text Color

Controls the text color for the controls at the bottom of the post area.

- Variable Name: post_controls_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_02 **(Inherited)**

- Template List: css_b_post.css, css_b_post_control.css, css_b_userinfo.css, css_global.css

## Post Controls Votes Border

Controls the border width, style, and color for votes in the post controls area.

- Variable Name: post_controls_votes_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_utilities.css

## Post Deleted Border

Controls the border width, style, and color for the deleted message that shows for deleted posts.

- Variable Name: post_deleted_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_warning_01 **(Inherited)**

- Template List: css_global.css

## Post Username Color

Controls the text color for the username in the post user information block.

- Variable Name: post_username_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_04 **(Inherited)**

- Template List: css_global.css

## Post User Info Color

Controls the text color for the post user information block in posts.

- Variable Name: post_user_info_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_01 **(Inherited)**

- Template List: css_b_userinfo.css, css_global.css

## Reputation Bar Active Background

Controls the background color and image for active reputation bars.

- Variable Name: reputation_bar_active_background
- Data Type: background
- Default Value(s):
  - color: global_palette_contrast_01 **(Inherited)**
  - gradient_type: linear-gradient
  - gradient_direction: to bottom
  - color: global_palette_contrast_01 **(Inherited)**
  - color: global_palette_contrast_01 **(Inherited)**

- Template List: css_b_meter.css

## Thread Reply Background

Controls the background color and image for replies to a topic.

- Variable Name: thread_reply_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_01 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_b_post.css, css_global.css

## Thread Starter Background

Controls the background color and image for the first post in a topic.

- Variable Name: thread_starter_background
- Data Type: background
- Default Value(s):
  - color: global_palette_accent_03 **(Inherited)**

- Template List: css_b_event.css, css_b_post.css, css_global.css, css_help.css

## Thread View Avatar Border

Controls the border width, style, and color for avatars in thread view.

- Variable Name: thread_view_avatar_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_01 **(Inherited)**

- Template List: css_b_avatar.css, css_global.css

## Topic Featured Background

Controls the background color and image for featured topics.

- Variable Name: topic_featured_background
- Data Type: background
- Default Value(s):
  - color: global_palette_contrast_01 **(Inherited)**

- Template List: css_global.css

