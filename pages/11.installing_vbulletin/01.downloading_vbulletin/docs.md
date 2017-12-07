---
title: 'Downloading the vBulletin Package'
date: '11/10/2017 12:20 pm'
slug: downloading_vbulletin
template: docs
---

The first thing you will need to do when installing vBulletin is to download the latest version from the Members' Area.

![Members Area Login](download-1.png)

You will need to log-in to the Members' Area using the Customer Number or Email Address along with the Customer Password that was emailed to you when you purchased your license. At the top of the Members Area, you will see information about your account including your Customer ID.

![Customer Information](download-2.png)

Once logged in, you will see a list of **Current Licenses**. For each active license that you own, there will be a **Download vBulletin 5 Connect** link on the right side of the table. Click the link for the license you want to use and you will be taken to the download page, where you will be given options for how to download the latest vBulletin package. 

![List of vBulletin Licenses](download-3.png)

For most purposes, you can review and accept the license agreement and click the Download link. When the download prompt window appears, you should choose the **Save** option and choose a directory on your computer in which to save the package.

![Common Download Prompt](download-4.png)

The package will then be downloaded and saved to the location you specified.


## More Download Options

If you want addition options then you can select "More Download Options and select from the options below.

[notice=info]By default compression is performed on the JavaScript files included within the clientscript directory in order to reduce the size of the
files.[YUI Compressor](http://developer.yahoo.com/yui/compressor/) is used to do this but you can choose uncompressed JavaScript files using the option
described below. Uncompressed Javascript is typically slower to process but easier to use for development and debug purposes.[/notice]

You can choose from the following options:

- **Version**
	- For most people you want to download the latest available version of vBulletin. However, there may be special cases where you need to download an older version. This dropdown will allow you to select from all currently available versions. Some versions in this list may no longer be supported and may be insecure. Use caution with this option.

- **Additional Language**
	- Several other languages are supported in vBulletin. Selecting a language from this list will add it to your download and install it on your next upgrade. At this time, you can only install one additional language per download.

- **PHP File Extension**
	- As a general rule, web servers will use the default php extension for PHP scripts, but some servers may use a different extension, or you may simply wish to use a different extension out of your own preference. Various extensions are available here for you to choose.

- **Download File Format**
	- This option allows you to choose the compression format of the package you are about to download. Most people will want to download the zip package as Windows® has in-built support for zip files. However, if you are downloading the package directly to a Linux server you may prefer to use the tarball (tar.gz) format.

- **CGI Shebang**
	- This option will only be of use to you if your server runs PHP as a CGI rather than as a web server module. If your server runs PHP as a CGI and requires a shebang then you can enter the required text here and it will automatically be inserted into whichever PHP files in vBulletin require its use. This is rarely necessary on modern servers.

- **Download File**
	- Use this option to control the contents of the package you are about to download. For example, if you have previously installed vBulletin you may not want to download the images again, so you can use this control to specify that the package you download does not contain the images directory. You can also download the uncompressed JavaScript package with this option.

When you have set the download options that you wish to use, you can review and accept the License Agreement. Once this is done, click the **Download** button to start the download. 