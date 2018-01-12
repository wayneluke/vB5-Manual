---
title: Upgrading vBulletin
slug: upgrading_vbulletin
---
[toc]
From time to time it will be necessary to upgrade your vBulletin installation to the latest version, either to gain new features or to fix newly discovered bugs in PHP, MySQL or vBulletin itself. You can upgrade to the latest version of vBulletin 5 Connect from the following vBulletin versions:

- Any version of vBulletin 4
- Any version of vBulletin 3 from version 3.6.0 and newer. 
- Previous Versions of vBulletin 5 Connect

The upgrade process differs depending upon the version of vBulletin currently installed on your web server.

When upgrading, the first step is always the same, in that you must log in to the vBulletin Members' Area and download the latest vBulletin package available, as described in [Downloading the vBulletin Package](installing_vbulletin/downloading_vbulletin).

## Uploading the files to your server
After downloading the latest vBulletin package, unzip it to a folder on your local machine. Next you must upload the files to your server. Before you do this [b]you should close your forums[/b]. This will help eliminate any potential db errors as people attempt to access your forums before the upgrade is complete.

Connect to your FTP server and navigate to the new vBulletin files in the local pane and the existing old files in the remote pane. Select the files within the Upload directory and upload them to your server. Make sure to overwrite the existing files.

If you need more information about uploading the files to your server see [Uploading vBulletin to your server](installing_vbulletin/uploading_vbulletin).

## Running the vBulletin Upgrade Script
Once you have uploaded the files to upgrade your vBulletin installation, point your browser to `http:/www.yourdomain.com/pathtoforums/core/install/upgrade.php`. The first thing you will see from the upgrade script is a login prompt, asking you to enter your Customer Number. This is done to prevent other users from accidentally stumbling across your upgrade script and running it. Only you should know your Customer Number. The screen will look like this:

![upgrade image 1](/images/maintain/upgrade/image1.png)

When you have entered your customer number, hit the [Enter Upgrade System] button and you should be taken to the first step of the install script. If after hitting the [Enter Upgrade System] button you are brought back to the customer number entry dialog, there was an error verifying your customer number. Please check for mistakes and try again.

[note]Your Customer Number is the string of numbers and letters used as the login user name for the vBulletin Members' Area and is supplied via email following your purchase.  If you have deleted this email and need to recover your Customer Number, please visit this [link](https://members.vbulletin.com/lostpw.php?do=lostcustomerid) to retrieve it.

[notice]You should type your customer number carefully to avoid errors. Note that your customer number is not the same as your vBulletin license number.[/notice]

The only reasons the customer number won't work are:
- You are not using the correct number (don't use the license number.)
- You are not using the correct files for the license under that account.
- You are blocking cookies.

After entering the correct Customer Number, the upgrade wizard will begin. Press [Begin Upgrade] to begin.

![upgrade image 1](/images/maintain/upgrade/image1.png)

The upgrader from this point is automatic. You will see the progress bar progress as it goes through the steps.

![upgrade image 2](/images/maintain/upgrade/image1.png)
If the upgrade script needs to retrieve any information from you, it will stop and show a dialog box requesting the information.  To proceed, simply follow the instructions on the screen. 

During the upgrade process, you may opt to have a more detailed output view. You can view each step as it processes by clicking the "Show Details" button while the upgrade wizard is running. It will present you with a view like this:

![upgrade image 3](/images/maintain/upgrade/image1.png)

Once the upgrade process is complete, you will be presented with a link to your Admin Control Panel.
![upgrade image 4](/images/maintain/upgrade/image1.png)

Before you will be able to enter the Admin Control Panel, you will need to delete the `/core/install/` directory from your server.

## After the Upgrade
