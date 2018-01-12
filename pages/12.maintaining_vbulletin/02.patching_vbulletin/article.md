---
title: Applying a Security Patch
slug: applying_security_patch
---

[toc]
From time to time, it's necessary to issue a Security Patch (or Patch Level) release for vBulletin software. This differs from the normal upgrade routine so this short article will clarify exactly what needs to be done when we announce a Patch Level (PL) release.

A patch level release contains fixes for only the most critical issues in the previous release. In most cases, these are released to address a security issue. However they can be released for data integrity issues as well.

A patch level is designed to be installed directly over top of your existing installation, with [i]no other action[/i]. You do [i]not[/i] need to run any upgrade scripts.

## Download The Patch

A Patch Level release doesn't include the full set of vBulletin files. As such, it doesn't appear in the normal download location. To access the Patch Release, first login to the vBulletin Members Area. In the left hand navigation, you will see the following:

![Patch Image 1](/images/maintain/patch/patch1.png)

In the 'Support Services' section, click on the Patches/Security Patches link and you will see a screen showing a list of Patch Level releases for your Licenses.

Simply click on the Patch for the version you're currently running and you will be taken to the download page, where you will be given options for how to download the Patch. The following options are available via the 'More Download Options' radio button should you need to change these before downloading the ZIP file (in the majority of cases, these will not need to be altered): 

- PHP File Extension - As a general rule, web servers will use .php as the extension for PHP scripts, but some servers may use a different extension, or you may simply wish to use a different extension out of your own preference. Various extensions are available here for you to choose.
- Download File Format - This option allows you to choose the compression format of the package you are about to download. Most people will want to download the .zip package as Windows® has built-in support for zip files. However, if you are downloading the package directly to a Linux server you may prefer to use the tarball (.tar.gz) format.
- CGI Shebang- This option will only be of use to you if your server runs PHP as a CGI rather than as a web server module. If your server runs PHP as a CGI and requires a shebang (such as #!/usr/bin/php) then you can enter the required text here and it will automatically be inserted into whichever PHP files in vBulletin require its use. The majority of web server installations do not require this option today.

When you have set the download options you can click the [button]Download[/button] button to start the download. When the download prompt window appears, you should choose the Save option and choose a directory on your computer in which to save the package.

## Updating Files On Your Server

With Patch Level releases, the preparation work is very small - simply extract the ZIP package to your local machine! Once you've done this, you will notice that there is no upload folder. A Patch Level release only contains the files that are being fixed so you may see something like this when you open the ZIP file to extract it:

![Patch Image 2](/images/maintain/patch/patch2.png)

Before you do this you should [close your forums](/admin_control_panel/settings/options/onoff). This will help eliminate any potential db errors as people attempt to access your forums before the patch is complete. 

It will also be a good idea at this point to take a backup of your site and database. Even if the database will not be updated with a Patch Level release, it's useful to have an up-to-date backup in any case. For more information on backing up your database, please see [Create a Database Backup](http://vbulletin/manual/reference/database_backup).

Connect to your SFTP server using the client of choice. Select the Patch Level files in the local pane and open the existing old files in the remote pane, then drag the new folders/files to the remote window.

You will most likely be prompted by the client at this point to ask if you want to overwrite the existing files. You should confirm this prompt, telling the client that yes, you do want to overwrite the existing files. If the prompt gives you the option to overwrite all existing files without prompting again, use this option.

Once the files are uploaded, that's your installation patched! There are no scripts to run and you can re-open your forums to users again.

This is not a full upgrade. You do not need to run any upgrade scripts to complete the upgrade.

[notice]Patch Level Releases are only supported for their targeted version. If you are using a previous version, you will need to perform a complete upgrade for full functionality and support. Patch Levels will only be released for the latest version in an active vBulletin series.[/notice]
