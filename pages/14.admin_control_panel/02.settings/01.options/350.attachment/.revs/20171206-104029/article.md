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
version: 5.3.3
date: 12/06/2017 06:39pm
---

## Limit Space Taken Up By Attachments (Total)
Use this option to limit the total combined amount of disk space in bytes that <i>all</i> attachments can occupy.<br />
<br />
Set the option to 0 to have no disk space limit.

## Attachment Upload Inputs
This option sets how many attachment upload input boxes are displayed on the upload form.

## Attachment URL Inputs
This option sets how many attachment URL input boxes are displayed on the upload form.

## Number of thumbnails to show for photo posts
The number of thumbnails shown before opening the lightbox on photo posts (minimum value = 1, maximum value = 15)

## Allow Deletion of Attachments Beyond Edit Time Limit
Allow users to delete attachments, even if the post edit time limit has been exceeded?  If you have attachment quotas enabled then you will need this option enabled to allow users to delete attachments once they reach their quota. The user will still need permission to edit posts in the forum for this to apply.

## Allow Deletion of Attachments in Closed Topics
Allow users to delete attachments from topics that are closed? If you have attachment quotas enabled then you might need this option enabled to allow users to delete attachments once they reach their quota. The user will still need permission to edit posts in the forum for this to apply. If the above option is set to NO then this option will only apply up to the edit time limit setting.

## Allow Duplicate Attached Images
This setting only checks for attachments posted by the user that is making the post.

## Resize Images
If an image is larger than your maximum allowed dimensions or file-size, an attempt to resize it will be tried.  This may fail if the image is too large to be successfully processed or if the image type is not supported for resizing. When this option is enabled, you should limit the Attachment Input options above to one, otherwise the uploading of multiple large images by one user could strain your server.

## View Attached Images Inline
Only affects the "Attached Files" box.<br /><br />
If thumbnails are enabled, thumbnail creation will need to be enabled in the next option.<br /><br />Set this to 'No' if you want to preserve bandwidth or server processor resources.

## Thumbnail Quality
Quality of JPG thumbnails. 75 is a good balance between file-size and image quality.

## Asset Manager - Enable
The asset manager is an enhanced interface for uploading files. It allows users to reuse their existing attachments with ease.  Some older browsers may have problems using the interface. Users may also choose to disable the asset manager from within their profiles.

## Asset Manager - Assets per Page
This is the maximum amount of assets to display before displaying page navigation.<br />
<br />
<b>Note: </b>This number must be at least 1.

## Advanced Insert Image Popup - Enable
Enabling this option will turn on the Advanced Insert Image Dialog, which will allow users to insert images from the computer, or retrieve images referenced from a URL and store them locally. Disabling this option will display the legacy from URL attachment dialog.

## Attachment Resize Options
Several image sizes are created on demand for uploaded images.  The max dimensions for each size are defined here. Defining a size as "0" will result in that type returning the full size image.



