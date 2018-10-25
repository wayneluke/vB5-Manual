---
title: Image Settings
slug: image_settings
taxonomy:
    category:
        - settings
    tag:
        - options
        - imagesettings
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Image Processing Library
Choose the image processing library that vBulletin will use for processing thumbnails and avatars.  GD is more widely available but ImageMagick is more robust, supporting more image types. ImageMagick must have a valid path chosen below.



- Variable Name: imagetype
- Data Type: free
- Default Value: GD
[/segment][segment=option]

## ImageMagick Binary Path
Path to the ImageMagick 6 binaries (<i>convert</i> and <i>identify</i>). Example:<br /><br />
Unix: /usr/local/bin/<br />
Windows: C:\imagemagick\



- Variable Name: magickpath
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Enable PDF Thumbnails
Using the ImageMagick processing library, you can enable thumbnails for PDF attachments if GhostScript is installed on your server. 
This option only takes effect if using the "ImageMagick 6" for "Image Processing Library" option above.



- Variable Name: imagick_pdf_thumbnail
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## GD Resize Quality
Uploaded images are automatically recreated by the image handler for security purposes. When using the GD image library, a created JPEG file may result in a larger size than the original image.  This option controls the tradeoff between filre size and image quality, from 0 (worst quality, smallest size) to 100 (best quality, largest size). <br /><br />

The default is suitable for most sites.



- Variable Name: gdresizequality
- Data Type: integer
- Default Value: 90
[/segment]