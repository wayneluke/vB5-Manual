---
title: Miscellaneous
slug: miscellaneous
taxonomy:
    category:
        - settings
    tag:
        - options
        - Miscellaneous
visible: false
template: article
version: 5.4.5 Alpha 4
date: 10/15/2018 09:05am
---



[toc]

## AJAX Loading Background

Controls the background color and image for the AJAX loading message shown at the top of the page.

- Variable Name: ajax_loading_background
- Data Type: background
- Default Value(s):
  - color: global_palette_contrast_01 **(Inherited)**

- Template List: css_b_ajax_loading_indicator.css

## AJAX Loading Border

Controls the border color and style for the AJAX loading message shown at the top of the page.

- Variable Name: ajax_loading_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_ajax_loading_indicator.css

## AJAX Loading Text Color

Controls the text color for the AJAX loading message shown at the top of the page.

- Variable Name: ajax_loading_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_01 **(Inherited)**

- Template List: css_b_ajax_loading_indicator.css

## CKEditor Image Path

Enter the CKEditor image directory name. This should be a folder in the js/ckeditor/images directory. Do not enter any slashes.

- Variable Name: ckeditor_image_path
- Data Type: imagedir
- Default Value(s):
  - imagedir: default

- Template List: 

## CKEditor Toolbar Button Background

Controls the background color and image for the CKEditor toolbar buttons.

- Variable Name: ckeditor_toolbar_button_background
- Data Type: background
- Default Value(s):
  - gradient_type: linear-gradient
  - gradient_direction: to bottom
  - color: global_palette_fill_02 **(Inherited)**
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_editor.css, css_global.css

## CKEditor Toolbar Button Background Hover

Controls the background color and image for the CKEditor toolbar buttons when the mouse is over them.

- Variable Name: ckeditor_toolbar_button_background_hover
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**
  - gradient_type: linear-gradient
  - gradient_direction: to bottom
  - color: global_palette_fill_02 **(Inherited)**
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_editor.css, css_global.css

## CKEditor Toolbar Button Background Pressed

Controls the background color and image for the CKEditor toolbar buttons when they are pressed.

- Variable Name: ckeditor_toolbar_button_background_pressed
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**
  - gradient_type: linear-gradient
  - gradient_direction: to bottom
  - color: global_palette_fill_02 **(Inherited)**
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_global.css

## CKEditor Toolbar Button Text Color

Controls the text color for CKEditor toolbar buttons.

- Variable Name: ckeditor_toolbar_button_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_01 **(Inherited)**

- Template List: css_editor.css, css_global.css

## content_divider_color



- Variable Name: content_divider_color
- Data Type: color
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_event.css, css_utilities.css

## Post Editor History Added Text Background

This stylevar controls the background of added text in the post edit history.

- Variable Name: diff_add_background
- Data Type: background
- Default Value(s):
  - color: #CCFFCC [swatch=#CCFFCC]  [/swatch]
  - x: 0
  - y: 0

- Template List: css_global.css

## Post Editor History Added Text Color

This stylevar controls the text color of added text in the post edit history.

- Variable Name: diff_add_color
- Data Type: color
- Default Value(s):
  - color: #009900 [swatch=#009900]  [/swatch]

- Template List: css_global.css

## Post Editor History Removed Text Background

This stylevar controls the background of removed text in the post edit history.

- Variable Name: diff_remove_background
- Data Type: background
- Default Value(s):
  - color: #FFCCCC [swatch=#FFCCCC]  [/swatch]
  - x: 0
  - y: 0

- Template List: css_global.css

## Post Editor History Removed Text Color

This stylevar controls the text color of removed text in the post edit history.

- Variable Name: diff_remove_color
- Data Type: color
- Default Value(s):
  - color: #CC0000 [swatch=#CC0000]  [/swatch]

- Template List: css_global.css

## Forum List Category Font

Controls the font family, size, and style for categories in the forum list.

- Variable Name: forum_list_category_font
- Data Type: font
- Default Value(s):
  - units: px
  - family: Helvetica,Arial,Verdana,sans-serif
  - size: 14
  - weight: bold

- Template List: css_global.css

## Forum List Header Font

Controls the font family, size, and style for the forum list header (column headers).

- Variable Name: forum_list_header_font
- Data Type: font
- Default Value(s):
  - units: px
  - family: Helvetica,Arial,Verdana,sans-serif
  - size: 12
  - weight: bold

- Template List: css_global.css

## List item background



- Variable Name: list_item_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_01 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_b_comment.css, css_b_comments.css, css_global.css, css_memberlist.css

## Unread Notification Background

Background color for unread notifications

- Variable Name: notification_detail_unread_background
- Data Type: color
- Default Value(s):
  - color: global_palette_contrast_01 **(Inherited)**

- Template List: css_message_center.css

## private_messages_mark_as_unread_background



- Variable Name: private_messages_mark_as_unread_background
- Data Type: background
- Default Value(s):
  - color: global_palette_accent_03 **(Inherited)**

- Template List: css_b_comp_menu_dropdown.css, css_message_center.css

## search_result_highlight_color



- Variable Name: search_result_highlight_color
- Data Type: color
- Default Value(s):
  - color: global_palette_contrast_03 **(Inherited)**

- Template List: css_help.css, css_search.css

## section_divider_color



- Variable Name: section_divider_color
- Data Type: color
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_attach_item.css, css_b_channel_nav.css, css_b_content_entry_panel.css, css_b_divider.css, css_b_editor.css, css_b_sidebar_field.css, css_b_smilie.css, css_b_toolbar.css

## Sticky topic background color

Controls the background color of sticky topics

- Variable Name: sticky_topic_background_color
- Data Type: color
- Default Value(s):
  - color: global_palette_contrast_01 **(Inherited)**

- Template List: css_b_topicpreview.css, css_global.css

## time_stamp_color



- Variable Name: time_stamp_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_02 **(Inherited)**

- Template List: css_b_post.css, css_b_post_sm.css, css_global.css

## Tooltip signature background

Controls the background of the signature tooltip

- Variable Name: tooltip_signature_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_01 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_global.css

## Tooltip Signature Border

Controls the border width, style, and color for signature tooltips.

- Variable Name: tooltip_signature_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_global.css

## Topic Title Color



- Variable Name: topic_title_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_04 **(Inherited)**

- Template List: css_global.css

