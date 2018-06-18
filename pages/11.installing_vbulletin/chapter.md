---
title: 'Installing vBulletin'
slug: installing_vbulletin
taxonomy:
    tag:
        - install
        - installation
    chapter:
        - installation
content:
    items: '@self.children'
---
[toc]
# Installing vBulletin

In order to use vBulletin, it must first be installed on your server. This is more involved than installing an App on your computer. However following our steps, you should find this process easy. Even if you're not a computer expert.

# Quick Overview

Installing vBulletin Connect is a relatively simple process but it can appear intimidating. This is the quick install guide for getting vBulletin Connect running on your server. This article will give a quick overview. If you need more information, please see the other articles in this chapter.

[note]If you would rather not deal with installation, please look at our vBulletin Cloud product or Professional Installaion. We will take care installing the software needed and provide all the tools necessary to get started.[/note]

Tools needed to install vBulletin Connect on your server
- A text editor that understands Linux linefeeds. Suggested editors are Atom, Visual Studio Code, and Notepad++.
- ZIP Management Utility.
- SFTP Client. We suggest Filezilla.
- Web Hosting. We suggest cPanel based hosting on a Linux server.
- Registered Domain Name.
- A database created on the server and its credentials written down.
- An email address.

A moderate knowledge of HTML and CSS will be beneficial in customizing your site but is not necessary for basic customizations.

## Before Installation

Before installing vBulletin please make sure that your hosting provider meets the minimum requirements for the software. If you don't understand some of the terms on the requirements list, you can simply provide it to your hosting provider and they can do the verification.

Note: It is important to install vBulletin 5 into a clean and empty directory.


## Setting Up vBulletin Connect for the first time

1. After Purchasing, download vBulletin Connect from the your Member's Area.
1. Unzip the downloaded package on your local machine. Depending on your hosting provider and internet connection this can take some time.
1. In your vBulletin files there will be a directory called upload. Enter it.
1. Rename config.php.bkp to config.php (ren config.php.bkp config.php)
1. Enter the /upload/core/includes directory.
1. Rename config.php.new to config.php (ren config.php.new config.php)
1. Edit config.php and change these values to match your information.
```
$config['Database']['dbname'] = 'databasename';
$config['Database']['technicalemail'] = 'dbmaster@example.com';
$config['MasterServer']['servername'] = 'localhost'; // may be referred to as a host name
$config['MasterServer']['port'] = 3306;
$config['MasterServer']['username'] = 'username';
$config['MasterServer']['password'] = 'password';
```

    - Make sure that all values are to the right of the equal sign (=) and between the single quotes ('). If you do not know these values they can be obtained from your hosting provider.
    - No other values need to be changed in this file for a basic installation of vBulletin Connect.
8. Using your SFTP Client, upload the contents of the upload directory (including all sub-directories and files) to your server. Place these files in the directory where you want to install vBulletin.
8. Rename htaccess.txt to .htaccess (the leading period is required). If you are using Filezilla, you can do this by right-clicking on the file and choosing rename on the context menu. This can also be done from the Windows Command Line before uploading the files to the server.

[note]If you are using Windows File Explorer, the default settings may hide file extensions. You can make the system show these by choosing View -> Options from the menu or ribbon and then unchecking the box next to "Hide Extensions of Known File Types". Apply your changes and click OK to close the dialog box.[/note]

## Running the Install Wizard

Now that the files have been copied to your server, you need to install the software by creating the vBulletin Connect database and adding the necessary data. We have provided an Install Wizard to walk you through this important step.

__A couple of definitions before we get started__

- %yourdomain% should be replace with the domain name you are using for your site.
- %forumroot% refers to the directory where vBulletin Connect is installed. If you install vBulletin Connect in the public_html or www directory, this value would be empty. 

1. Load the installation wizard in your browser. The URL should be https://%yourdomain%/%forumroot%/install/install.php
1. The Installation Wizard will ask for your Customer ID. This can be found in your Member's Area after logging in.
1. Process all the steps in the Wizard.
1. When the Wizard finishes, it will redirect you to the AdminCP.
1. Delete the /core/install folder from your server for security purposes.
1. When finished you can view the site through the baseurl (http://%yourdomain%/%forumroot%/.
1. To  get started quickly, log in with the administrator created during installation and click "Edit Site" toggle. This will turn on Site Builder. You can use Site Builder's Quick Setup to get up and running quickly.
1. For permissions and advanced options, click on the AdminCP button within the Site Builder menu.

## Installing vBulletin in a sub-directory and using another App above it

Many web applications rely on a method called URL Rewriting to find content. vBulletin Connect is no different. When you have multiple web applications installed on the same server this cause conflicts. There are tools to make sure this doesn't happen. The best method is to install each app in its own sub-domain but this isn't always possible. To prevent URL conflicts with multiple apps follow these steps:
1. Make sure vBulletin is installed in its own directory.
1. Use a separate database for each web app.
1. If separate databases are not possible use a table prefix specified in the /core/includes/config.php file. We suggest using 'vb_'.
1. Edit your .htaccess file and set the RewriteBase directive at the top. The instructions to do this are in the file. Delete the '#' at the beginning of the line to remove the comment. The code is listed below for reference.
```
# In some cases where you have other mod_rewrite rules, you may need to remove the
    # comment on the following RewriteBase line and change it to match your folder name.
    # This resets the other mod_rewrite rules for just this directory
    # If your site was www.example.com/forum, the setting would be /forum/
    #RewriteBase /
```