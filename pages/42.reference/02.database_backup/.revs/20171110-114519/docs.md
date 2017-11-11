---
title: 'Create a Database Backup'
taxonomy:
    category:
        - reference
    tag:
        - intermediate
        - debug
        - troubleshoot
        - 'file edits'
slug: database_backup
visible: true
template: docs
---
[toc]

## Overview

vBulletin stores the majority of its content within the its database. You should create regular backups of this data for safe-keeping. There are several methods to do this.

### Backup via cPanel

### Backup via MySQL Workbench

### Backup via phpMyAdmin

### Backup via Adminer

### Backup via SSH

In order to back up your database via SSH:
+ SSH access to your site. You will need to check with your hosting company to see if this is available.
+ An SSH/Telnet Client, such as PuTTy.

Open your SSH client and log into your website. The command line prompt you will see will vary by OS. For most hosting companies, this will bring you into the FTP root folder.

Type in the following to create a backup in the current directory:
```
mysqldump --opt -Q -u dbusername -p databasename > backupname.sql
```

Or to create a backup in a separate directory (signified by /path/to/) type:
```
mysqldump --opt -Q -u dbusername -p databasename > /path/to/backupname.sql
```

You will be prompted for the database password. Enter it and the database will backup.

If your hosting company has you on a remote MySQL server, such as mysql.yourhost.com, you will need to add the servername to the command line. The servername will be the same as in your config.php. The command line will be:

Current directory:
```
mysqldump --opt -Q -h servername -u dbusername -p databasename > backupname.sql
```
Separate directory:
```
mysqldump --opt -Q -h servername -u dbusername -p databasename > /path/to/backupname.sql
```
You can then, if you wish, download the backup to your home computer.

### vBulletin Cloud Backup
[notice=cloudonly]This service is available to vBulletin Cloud customers only[/notice]

In order to obtain a backup of your vBulletin Cloud database, you must open a support ticket. When received, a support representative will queue your site for backup. When the backup is created, you will receive an email that contains unique FTP information to download the backup. The backup will be available for 72 hours.