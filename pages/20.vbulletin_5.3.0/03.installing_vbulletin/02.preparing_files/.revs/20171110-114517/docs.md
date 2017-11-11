---
title: 'Preparing the Files for your server'
taxonomy:
    chapter:
        - installation
visible: true
---

To extract the files from the package, open the folder on your computer where you saved the vBulletin package and double click the vBulletin package. The system should automatically extract the package for you into its own folder.

[screen shot of OS X after the extraction is complete with the original zip and the new folder]

When the extraction complete, you will find that inside of the new folder there are two other folders called **upload** and another called **do\_not\_upload**.

**upload** - This folder contains the vBulletin files that need to be uploaded to your web server.

However, before you upload the files you must make some changes to the vBulletin configuration files. The first file is located in the upload folder itself and is called **config.php.bkp.** The second file is located in the **core/includes** folder (within the **upload** folder) and is called **config.php.new**.

You will need to rename both files, so vBulletin will be able to use them.

>>> If you do not see file extensions in Windows Explorer, you need to enable this feature in the options on the View menu.

First you must do is to rename this file from **config.php.bkp** to **config.php** (removing the temporary *.bkp* extension).

[screen shot showing the renaming of config.php.bkp in OS X]

Second you must do is to rename this file from **config.php.new** to **config.php** (removing the temporary *.new* extension).

[screen shot showing the renaming of config.php.new in OS X]

The second folder is **do\_not\_upload** - This folder contains tools to perform various tasks on your board

-   **searchshell.php** - This file will allow you to rebuild the search index using PHP's command line processor.

-   **vb\_backup.sh** - This file will allow you to run a database backup via SSH/Telnet or a scheduled backup through cron.

-   **tools.php** - This file must be uploaded to the admincp folder and allows you to perform certain tasks should your board go down or you accidentally lock yourself out of the Admin Control Panel. 
>>>> This file must be deleted immediately after use or it will cause a SEVERE security problem.

