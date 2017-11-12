---
title: 'System Requirements'
taxonomy:
    chapter:
        - getting_started
    tag:
        - beginner
        - requirements
        - server
slug: system_requirements
template: article
twig_first: true
process:
    twig: true
---
>>> A modern computer such as a desktop or laptop is necessary to administrate and modify your vBulletin Software. Much of the administrator functionality is not available on tablets or smart phones.

[toc]
Your server must meet the following requirements before vBulletin can be installed on the machine. Most shared-environment hosting providers meet these qualifications already. If you're unsure, you can always use [vBulletin Cloud](http://www.vbulletin.com/en/vbulletin-cloud/) to host your vBulletin website.


## Minimum Requirements
vBulletin is a web-based application and as such has a few minimum requirements. To run vBulletin, you need a web hosting provider that includes the following on their systems:
- PHP version: {{ site.vbulletin.php_version }}
- MySQL version: {{ site.vbulletin.mysql_version }}
    - As an alternative to MySQL, you can use MariaDB version: {{ site.vbulletin.mariadb_version }}
- A pre-registered domain name
- 200 Megabytes of hard drive space
- Rewrite Engine – A rewrite engine is needed for vBulletin's Friendly URL routing to work. Popular rewrite engines include mod_rewrite on Apache 2.4+ and "URL Rewrite" for IIS 7+.
- MySQLi support – MySQLi is a more robust software library to connect to the database that vBulletin uses.
- mbstring library - A PHP library that helps with character conversion for UTF-8 support.
- iconv library – A PHP library that provides extra language and character set support.


## Recommended Requirements
The following settings and software packages are not required but will make your vBulletin experience more enjoyable. Your hosting provider can tell you whether these are available on your server.
- PHP 7.0 or higher.
- MySQL 5.6 or greater.
- cURL or OpenSSL support – Allows secure connections to third-party services like Facebook Connect.
- OpCode Cache – An OpCode Cache like APC or XCache will enhance the performance of your vBulletin software. An OpCode Cache is a caching mechanism that can significantly increase the performance of vBulletin by pre-parsing the PHP files and keeping commonly used data in memory for rapid retrieval.

## Sphinx Search
A minimum version of Sphinx 2.4.2 is required to use Sphinx Search instead of MySQL for keyword based searches.

## Facebook
Connecting to the Facebook API servers requires that either the cURL or OpenSSL library is installed in your PHP Configuration. Your server must also be able to make secure requests to external servers. 

## Encryption
vBulletin uses encryption in a number of places including passwords and random number generation. Due to this, a modern Cryptography library is needed. In most cases, your server will already have one installed. We support the following libraries:
* libsodium
* /dev/urandom
* mcrypt
* windows system call using the PHP COM extension
* openssl

If your server does not have one of these libraries installed then some parts of vBulletin will fail to work properly.