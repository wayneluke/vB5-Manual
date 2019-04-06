---
title: Message Attachment Options
slug: message_attachment_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - attachment
visible: false
template: article
version: 5.5.1
date: 3/15/2019 01:27pm
---

[toc]

## Limit Space Taken Up By Attachments (Total)
Use this option to limit the total combined amount of disk space in bytes that <i>all</i> attachments can occupy.<br />
<br />
Set the option to 0 to have no disk space limit.



- Variable Name: attachtotalspace
- Data Type: number
- Default Value: 0

## Attachment Upload Inputs
This option sets how many attachment upload input boxes are displayed on the upload form.



- Variable Name: attachboxcount
- Data Type: integer
- Default Value: 1

## Attachment URL Inputs
This option sets how many attachment URL input boxes are displayed on the upload form.



- Variable Name: attachurlcount
- Data Type: integer
- Default Value: 1

## Number of thumbnails to show for photo posts
The number of thumbnails shown before opening the lightbox on photo posts (minimum value = 1, maximum value = 15)



- Variable Name: attatchgallerythumbs
- Data Type: integer
- Default Value: 3

## Resize Images
If an image is larger than your maximum allowed dimensions or file-size, an attempt to resize it will be tried.  This may fail if the image is too large to be successfully processed or if the image type is not supported for resizing. When this option is enabled, you should limit the Attachment Input options above to one, otherwise the uploading of multiple large images by one user could strain your server.



- Variable Name: attachresize
- Data Type: number
- Default Value: 1

## View Attached Images Inline
Only affects the "Attached Files" box.<br /><br />
If thumbnails are enabled, thumbnail creation will need to be enabled in the next option.<br /><br />Set this to 'No' if you want to preserve bandwidth or server processor resources.



- Variable Name: viewattachedimages
- Data Type: number
- Default Value: 1

## Thumbnail Quality
Quality of JPG thumbnails. 75 is a good balance between file-size and image quality.



- Variable Name: thumbquality
- Data Type: integer
- Default Value: 75

## Advanced Insert Image Popup - Enable
Enabling this option will turn on the Advanced Insert Image Dialog, which will allow users to insert images from the computer, or retrieve images referenced from a URL and store them locally. Disabling this option will display the legacy from URL attachment dialog.



- Variable Name: advimagepopup_enable
- Data Type: boolean
- Default Value: 1

## Attachment Resize Options
Several image sizes are created on demand for uploaded images.  The max dimensions for each size are defined here. Defining a size as "0" will result in that type returning the full size image.



- Variable Name: attachresizes
- Data Type: free
- Default Value: a:5:{s:4:&quot;icon&quot;;i:32;s:5:&quot;thumb&quot;;i:121;s:5:&quot;small&quot;;i:204;s:6:&quot;medium&quot;;i:330;s:5:&quot;large&quot;;i:0;}

## Track Attachment Views
If enabled, this tracks attachment downloads.



- Variable Name: attachmentviewstrack
- Data Type: boolean
- Default Value: 1
