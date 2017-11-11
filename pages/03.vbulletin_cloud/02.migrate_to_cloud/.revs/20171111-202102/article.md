---
title: 'Migrating Existing Site.'
taxonomy:
    category:
        - docs
    tag:
        - beginner
        - 'getting started'
        - welcome
        - products
        - vbcloud
slug: migrate_to_cloud
template: docs
---
[toc]

We can migrate your existing vBulletin site to vBulletin Cloud. This service is available for vBulletin 3, vBulletin 4, and vBulletin 5. When we migrate your site, we will also update it to the latest version of vBulletin currently available. The migration includes users, all user data, forums/channels, topics and replies. Once migration is completed, you will be able to select one of the provided themes or design your own.

[notice=warning]Please note that any custom styles from vBulletin 3 and 4 will not be usable. Add-on Products will not be migrated. Add-on products are not compatible with vBulletin Cloud.[/notice]

## Starting Your Migration
To get started with your migration, you will need to purchase the migration service and open a support ticket with the following information:

1. User ID of your Admin User. This is the user number and is needed for the importer to operate properly.
2. Any prefix the vBulletin tables have in your database
3. Whether or not you've create style customizations on your cloud site already.

## Providing Your Backup.
In order to perform this service, the support representative will need access to your database backup. See [Create a Database Backup](http://vbulletin/manual/reference/database_backup) for more information. If your attachments and avatars are stored in the file system, we will need a backup of these files as well. We accept backups in ZIP and GZIP formats. They should not be double compressed. If your attachments are stored in the database and your database is larger than 1 Gigabyte in size, the attachments should be moved to the file system.

The file(s) should be named as follows:
+ Database: `database_{sitename}_{year}{month}{day}.extension`
+ Attachments: `attachments_{sitename}_attachments_{year}{month}{day}.extension`
+ Avatars: `avatars_{sitename}_{year}{month}{day}.extension`

Files should be made available via SFTP or as a shared link leading to your favorite cloud storage site.

## Processing Your Migration
Once the support representative has access to your backups, they will upload them to the server and start the process. Depending on the size of your site and any pre-existing modifications you had made previously, this can take several hours to a couple of days. Most only take three to four hours to process but situations can arise while this is occurring. 

[notice=warning]Any changes made to a vBulletin Cloud site will be lost if a migration is performed. We cannot merge sites at this time.[/notice]

We will process up to two migrations for your site. The first migration can be seen used a test. The second will be considered final. Due to this, the vBulletin site that you are migrating should be turned off during this process. Any content created after the backup is created will be lost.

When the migration is completed, you will receive an email notifying you.
