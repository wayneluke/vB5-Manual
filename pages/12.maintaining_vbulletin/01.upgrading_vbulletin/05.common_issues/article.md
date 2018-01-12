---
title: Common Issues while Upgrading
slug: common_upgrade_issues
---
[toc]
- **Q. I tried to run the upgrade wizard from the command line and got an error that MySQLi is not installed.**
    A. Your CLI version of PHP may not have been compiled with the same modules as your web version. If you are missing mysqli and have set your config.php to use mysqli, you will receive an immediate error. Either add mysqli support to your CLI php or switch to mysql in config.php. You can switch back to mysqli after the upgrade process.

- **Q. When running the upgrade wizard from the command line, it will not import the standard XML files for the style and languages. What do I do?**
    A. Your version of PHP may have the default XML support disabled for some reason. Run the upgrade wizard in your browser. It will skip to the XML import steps and import your files for you and complete the upgrade.

- **Q. I have a lot of posts and rebuilding the search index takes forever. Is there a faster way?**
    A. You can rebuild your search index from the command line using the searchindex.php in your Do Not Upload folder. You would run the searchindex.php file from the command line using this command, `php searchindex.php`. Then follow the steps on the screen.

- **Q. What is the Query Status button that appears in Browser Mode?**
    A. The "Query Status" button is something that appears after a step has taken more than 20 seconds. Its purpose it to send a query back to the server and retrieve the status of the executing query. It provides a method for the admin to see what is going on with big queries.

- **Q. I receive an error similar to the following how do I fix it?**
```
Warning: chdir(): SAFE MODE Restriction in effect. The script whose uid is 0 is not allowed to access ./../ owned 
by uid 10001 in /var/www/vhosts/domain.com/httpdocs/vb/50/core/install/upgrade.php on line 16
```
    A. This can appear if the command line configuration of PHP is using safemode. Either disable safemode or run the upgrade wizard in browser mode.

- **Q. I previously used the Command Line Upgrade and now I receive an error when I try to save my CSS as files. What is wrong?**
    The permissions on your clientscript/vbulletin_css folder are incorrect. They may be set to 0755 and should be set to 0777. Recursively update the permissions to 0777 using your FTP client or chmod: `chmod -R 777 core/clientscript/vbulletin_css`	
