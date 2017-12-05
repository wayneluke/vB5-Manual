
---
title: Error Handling &amp; Logging
slug: error_handling_amp_logging
taxonomy:
    category:
        - settings
    tag:
        - options
        - errorhandling
visible: true
template: article
version: 5.3.3
date: 2017-12-05 08:58:26
---

## Log Database Errors to a File
If you would like to log all database errors to a file, enter the path to the file here. The file will be saved as {filename}.log.<br />
<br />
Errors connecting to the database server will not be logged.<br />
<br />
<u>Please note</u> that the directory in which this file is to be created <b>must</b> be writable by the web server.

## Log Failed Admin Control Panel Logins to a File
If you would like to log all failed Admin Control Panel login attempts to a file, enter the path to the file here. The file will be saved as {filename}.log<br />
<br />
<u>Please note</u> that the directory in which this file is to be created <b>must</b> be writable by the web server.

## Log PHP Errors to a File
If you would like to log all PHP fatal errors to a file, enter the path to the file here. The file will be saved as {filename}.log.<br />
<br />
<u>Please note</u> that the directory in which this file is to be created <b>must</b> be writable by the web server.

## Log Emails to a File
If you would like to log all emails to a file, enter the path to the file here. The file will be saved as {filename}.log. You should only enable email logging if you suspect problems with the email system within vBulletin.<br />
<br />
<u>Please note</u> that the directory in which this file is to be created <b>must</b> be writable by the web server.

## Maximum File Size of Error Logs
If you would like your vBulletin error logs to be rotated when they reach a certain size, enter the maximum file-size in bytes here.<br />1048576 bytes = 1 megabyte.<br />
<br />
When a log file reaches this size, it will be renamed as {filename}{unix timestamp}.log and a new file will be created.<br />
<br />
Set this value to 0 to disable log rotation.



