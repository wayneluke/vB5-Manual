---
title: Modules
slug: modules
taxonomy:
    category:
        - settings
    tag:
        - options
        - Modules
visible: false
template: article
version: 5.4.5 Alpha 4
date: 10/15/2018 09:05am
---



[toc]

## Content List Background

Controls the background color and image in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group.

- Variable Name: content_list_background
- Data Type: background
- Default Value(s):
  - units: wrapper_background **(Inherited)**
  - color: wrapper_background **(Inherited)**
  - image: wrapper_background **(Inherited)**
  - repeat: wrapper_background **(Inherited)**
  - x: wrapper_background **(Inherited)**
  - y: wrapper_background **(Inherited)**
  - gradient_type: wrapper_background **(Inherited)**
  - gradient_direction: wrapper_background **(Inherited)**
  - gradient_start_color: wrapper_background **(Inherited)**
  - gradient_end_color: wrapper_background **(Inherited)**

- Template List: css_global.css

## Content List Link Color

Controls the text color for links in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group.

- Variable Name: content_list_link_color
- Data Type: color
- Default Value(s):
  - color: body_link_color **(Inherited)**

- Template List: css_global.css

## Content List Link Color Hover

Controls the text color for links in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group when you mouse over them.

- Variable Name: content_list_link_color_hover
- Data Type: color
- Default Value(s):
  - color: body_link_color_hover **(Inherited)**

- Template List: css_global.css

## Content List Link Decoration

Controls the text decoration for links in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group.

- Variable Name: content_list_link_decoration
- Data Type: textdecoration
- Default Value(s):
  - none: 0
  - none: body_link_decoration **(Inherited)**
  - underline: 0
  - underline: body_link_decoration **(Inherited)**
  - overline: 0
  - overline: body_link_decoration **(Inherited)**
  - line-through: 0
  - line-through: body_link_decoration **(Inherited)**

- Template List: css_global.css

## Content List Link Decoration Hover

Controls the text decoration for links in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group when the mouse is over them.

- Variable Name: content_list_link_decoration_hover
- Data Type: textdecoration
- Default Value(s):
  - none: 0
  - none: body_link_decoration_hover **(Inherited)**
  - underline: 0
  - underline: body_link_decoration_hover **(Inherited)**
  - overline: 0
  - overline: body_link_decoration_hover **(Inherited)**
  - line-through: 0
  - line-through: body_link_decoration_hover **(Inherited)**

- Template List: css_global.css

## Content List Secondary Text Color

Controls the secondary text color in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group. This is used for secondary information, such as time stamps.

- Variable Name: content_list_secondary_text_color
- Data Type: color
- Default Value(s):
  - color: time_stamp_color **(Inherited)**

- Template List: css_blogs_groups.css, css_global.css, css_responsive.css

## Content List Text Color

Controls the text color in various lists of content, including Topic lists (the Topics tab), and Forum or Channel lists (the Forums tab, sub-forum list, Member blogs tab, Groups tab, etc.) in a forum, blog, or group.

- Variable Name: content_list_text_color
- Data Type: color
- Default Value(s):
  - color: body_text_color **(Inherited)**

- Template List: css_global.css, css_responsive.css

## Module Border Radius Size

Controls the size of the border radius for modules.

- Variable Name: module_border_radius_size
- Data Type: size
- Default Value(s):
  - units: px
  - size: 3

- Template List: css_global.css

## Module Content Background

Controls the background color and image for module content areas.

- Variable Name: module_content_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_b_pseudowidget.css, css_global.css, css_help.css

## Module Content Border

Controls the border width, style, and color for the content area of modules.

- Variable Name: module_content_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_blogs_groups.css, css_b_modal_banner.css, css_b_module.css, css_b_pseudowidget.css, css_global.css, css_help.css, css_message_center.css, css_profile.css, css_responsive.css, css_sitebuilder.css

## Module Header Background

Controls the background color and image for module headers.

- Variable Name: module_header_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_blogs_groups.css, css_global.css, css_message_center.css

## Module Header Border

Controls the border width, style, and color for module headers.

- Variable Name: module_header_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 2
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_global.css, css_message_center.css

## Module Header Divider Margin

Controls the margin for the module header divider (the module_header_border stylevar).

- Variable Name: module_header_divider_margin
- Data Type: margin
- Default Value(s):
  - units: px
  - top: 0
  - right: 0
  - bottom: 15
  - left: 0
  - same: 0

- Template List: css_global.css

## Module Header Font

Controls the font family, size, and style for module headers.

- Variable Name: module_header_font
- Data Type: font
- Default Value(s):
  - units: px
  - family: body_font **(Inherited)**
  - size: 16
  - weight: bold

- Template List: css_blogs_groups.css, css_global.css

## Module Header Text Align

Controls the text alignment for module headers.

- Variable Name: module_header_text_align
- Data Type: textalign
- Default Value(s):
  - textalign: left

- Template List: css_global.css

## Module Header Text Color

Controls the text color for module headers.

- Variable Name: module_header_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_01 **(Inherited)**

- Template List: css_blogs_groups.css, css_global.css, css_help.css

## Module Header Text Transform

Controls text transformation for the text in module headers.

- Variable Name: module_header_text_transform
- Data Type: texttransform
- Default Value(s):
  - texttransform: none

- Template List: css_global.css

## Search module item border

Defines the border of the items inside the search module

- Variable Name: module_search_list_item_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: dotted
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_post_sm.css

## No Content Background

Controls the background color and image for the &quot;no content&quot; message in modules.

- Variable Name: no_content_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_01 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_global.css, css_message_center.css

## Primary Module Background

Controls the background color and image for the primary modules.

- Variable Name: primary_module_background
- Data Type: background
- Default Value(s):
  - color: transparent [swatch=transparent]  [/swatch]
  - x: 0
  - y: 0

- Template List: css_global.css

## Primary Module Border

Controls the border width, style, and color for the primary module.

- Variable Name: primary_module_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_global.css, css_message_center.css, css_profile.css

## Primary Module Header Background

Controls the background color and image for primary module headers.

- Variable Name: primary_module_header_background
- Data Type: background
- Default Value(s):
  - color: transparent [swatch=transparent]  [/swatch]
  - x: 0
  - y: 0

- Template List: css_global.css

## Primary Module Header Font

Controls the font family, size, and style for primary module headers.

- Variable Name: primary_module_header_font
- Data Type: font
- Default Value(s):
  - units: px
  - family: body_font **(Inherited)**
  - size: 16
  - weight: bold

- Template List: css_global.css

## Primary Module Header Text Align

Controls the text alignment for primary module header.

- Variable Name: primary_module_header_text_align
- Data Type: textalign
- Default Value(s):
  - textalign: left

- Template List: css_global.css

## Primary Module Header Text Color

Controls the text color for primary module headers.

- Variable Name: primary_module_header_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_01 **(Inherited)**

- Template List: css_global.css

## Primary Module Header Text Transform

Controls text transformation for the text in primary module headers.

- Variable Name: primary_module_header_text_transform
- Data Type: texttransform
- Default Value(s):
  - texttransform: none

- Template List: css_global.css

## Primary Module Subheader Background

Controls the background color and image for primary module subheaders.

- Variable Name: primary_module_subheader_background
- Data Type: background
- Default Value(s):
  - color: global_palette_fill_02 **(Inherited)**
  - x: 0
  - y: 0

- Template List: css_b_event.css, css_b_table.css, css_global.css, css_message_center.css

## Primary Module Subheader Border

Controls the border width, style, and color for primary module subheaders.

- Variable Name: primary_module_subheader_border
- Data Type: border
- Default Value(s):
  - units: px
  - width: 1
  - style: solid
  - color: global_palette_fill_02 **(Inherited)**

- Template List: css_b_table.css, css_b_topicpreview.css, css_global.css, css_message_center.css, css_responsive.css

## Primary Module Subheader Font

Controls the font family, size, and style for primary module subheaders.

- Variable Name: primary_module_subheader_font
- Data Type: font
- Default Value(s):
  - units: px
  - family: Helvetica,Arial,Verdana,sans-serif
  - size: 12
  - weight: bold

- Template List: css_b_table.css, css_global.css, css_message_center.css

## Primary Module Subheader Text Color

Controls the text color for primary module subheaders.

- Variable Name: primary_module_subheader_text_color
- Data Type: color
- Default Value(s):
  - color: global_palette_text_01 **(Inherited)**

- Template List: css_b_event.css, css_b_table.css, css_global.css, css_help.css, css_message_center.css

