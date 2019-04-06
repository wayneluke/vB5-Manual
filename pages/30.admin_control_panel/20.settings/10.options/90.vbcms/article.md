---
title: Content Management
slug: content_management
taxonomy:
    category:
        - settings
    tag:
        - options
        - vbcms
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Default Article Preview Length in Characters
By default, this many characters from the beginning of an article will be displayed for the preview. You can change this for an individual article by setting the previewbreak in the editor.



- Variable Name: def_cms_previewlength
- Data Type: posint
- Default Value: 500

## Article Preview Image Size
When you create a Text article, the first image attachment found will be used to generate a preview image shown in the category. This setting determines the size for that preview image.<br /><br />Available sizes are determined by the <a href="admincp/options.php?do=options&amp;dogroup=attachment#attachresizes">Attachment Resize Options</a>.



- Variable Name: cmspreviewimagesize
- Data Type: free
- Default Value: thumb
