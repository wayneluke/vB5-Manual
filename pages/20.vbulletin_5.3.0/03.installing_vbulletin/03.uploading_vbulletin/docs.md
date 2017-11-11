---
title: 'Uploading vBulletin to your server'
taxonomy:
    chapter:
        - installation
---

## Preparing the Files for your server

To extract the files from the package, open the folder on your computer where you saved the vBulletin package and double click the vBulletin package. The system should automatically extract the package for you into its own folder.

When the extraction complete, you will find that inside of the new folder there are two other folders called **upload** and another called **do_not_upload**.

**upload** - This folder contains the vBulletin files that need to be
uploaded to your web server.

## Uploading vBulletin to your Server

After your config.php file has been edited and saved it is time to upload the vBulletin scripts to your web server ready for installation. The uploading process should be familiar to anyone who has published pages to a web site before, but a brief description of the process is given here.

Although there are several methods available to transfer the vBulletin files from your computer to your web server, by far the most common method in use is transfer via FTP. Most operating systems have built-in tools for opening FTP connections although they are often limited in their usefulness and many people opt to use a third party FTP client application. For this example we will use FileZilla.

>>>>>The **web root** is usually called public_html, www or htdocs and is located within your home directory. If you are unsure of where to find your own web publishing folder, your
host will be able to help you.


### Example 1: Installing at the Domain Root
To install at the root level of your site, you can upload all the files contained in the upload folder directly into the web root on the server. This will bring your visitors directly to the vBulletin site when they visit your   website.

Using FileZilla we do this by dragging the **contents** of the upload folder from its location on your computer's hard disk to the web root on the server.

If all has gone well, you are now ready to run the installation script to prepare your database to run vBulletin.


### Example 2: Installing in a Sub-Directory
Installing in a sub-directory is useful if you have a pre-existing website. Using FileZilla we do this by dragging the upload folder from its location on your computer's hard disk to the web publishing folder on the server.

When all the files have been uploaded successfully you should rename the upload folder on the web server to the name you want to use for your forums directory. We will be calling it forums for the
purposes of this manual.


Note: You will have to set the Rewrite Base directive in your .htaccess file to allow vBulletin to work correctly in a sub-directory.

### Example 3: Utilizing cPanel


###Notes about using FTP Clients

Most FTP client applications will handle the file transfers automatically, but if for some reason your application does not, you should make a note of the following:
- All text files to be transferred in ASCII mode
- All files containing plain text from the vBulletin package should be transferred in ASCII mode. Text file types you will find in vBulletin are: .html, .php, .js, .xml, .css.
- All non-text files to be transferred in Binary mode. Binary file types used in vBulletin are: .gif, .png, .jpg, .ico.

Depending upon the speed of your internet connection, uploading all the files could take several minutes to complete.
