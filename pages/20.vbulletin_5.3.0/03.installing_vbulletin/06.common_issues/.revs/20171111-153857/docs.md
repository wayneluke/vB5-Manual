---
title: 'Common Issues'
taxonomy:
    book:
        - manual
    chapter:
        - installation
    tag:
        - beginner
        - install
        - installation
slug: common_issues
template: docs
twig_first: true
process:
    twig: true
---

A list of common issues that people have while installing the software.

#### I get an error saying that my PHP version is too low
You will need to upgrade your PHP to the minimum required version or higher. If you do not manage your own server, you can ask your server administrator or hosting provider to do this for you. Sometimes, the hosting provider will support multiple versions of PHP. We recommend using the latest version available. If they say that you're using a version higher than PHP {{ site.vbulletin.php_version }}, then ask them if you need to "add a handler for that version". Follow their instructions.


#### I installed vBulletin but there is no formatting
If after installation your vBulletin looks like a plain white page with no formatting and none of the links are working, this means that URL Rewriting is not operational. To fix this choose the appropriate step.
*  Apache
  1. If you're on a Apache powered webserver, you will need to rename htaccess.txt to .htaccess.
  1. If the above doesn't fix it, make sure the AllowOverride directive is set to all in Apache's httpd.conf file. You may need to talk to your hosting provider about this. Apache will need to be restarted for any changes to this file to take affect.
  1. If you have vBulletin installed in a sub-directory, find the line following section of your .htacces file and change it to fit your installation.
  ```
  # In some cases where you have other mod_rewrite rules, you may need to remove the comment on the following
  #  line and change it to match your folder name. This resets the other mod_rewrite rules for just this directory
  # If your site was www.example.com/forum, the setting would be /forum/
  #RewriteBase /
  ```
* Windows
  1. Make sure that the URL Rewrite module from Microsoft is installed for IIS. The module needs to be available for your vBulletin application pool.
  1. Make sure the web.config file in your vBulletin root directory is uploaded.
  1. Verify that rewrites are working in the IIS Manager Console by navigating to the vBulletin application pool and checking the rewrites under URL Rewrite.
  1. You need to restart the IIS service to make sure any configuration changes are loaded properly.
