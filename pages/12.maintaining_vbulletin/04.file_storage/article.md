---
title: File Storage
stub: file_storage
taxonomy:
    category: Maintenance
    tag: [files, maintenance]
---

By default, vBulletin stores all data in the database. This default is for convenience instead of performance. To allow vBulletin to perform better, you can move the storage of attachments, avatars, CSS and templates to the file system.

## Moving Avatars to the Filesystem
1. Using your SFTP client log into your server.
1. Navigate to your %forumroot%.
1. Open the `/core/` directory.
1. Select the `/customavatars/` directory.
1. Using the tools in your SFTP client, change the permissions of the `/customavatars/` directory to 777
1. Log into your Admincp.
1. Go to Avatars in the left navigation.
1. Open "User Picture Storage Type
1. Submit the form to move your avatars from the database to the file system.


## Moving Attachments to the Filesystem
1. Using your SFTP client log into your server.
1. Navigate to your %forumroot%.
1. Create a new directory named `/attachments/`.
1. Using the tools in your SFTP client, change the permissions of the `/attachments/` directory to 777
1. Log into your Admincp.
1. Go to Attachments in the left navigation.
1. Open "Attachment Storage Type
1. Submit the form to move your avatars from the database to the file system.