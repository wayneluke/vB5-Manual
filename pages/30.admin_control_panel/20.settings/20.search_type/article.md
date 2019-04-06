---
title: Search Type
slug: search_type
---
[toc]

This section will show the different search engines installed in vBulletin and allow you to switch between them.

In a new installation of vBulletin 5.0.4 and higher, there two search engines installed. The default is called "DB Search" and is an indexed implementation stored in a number of tables within your database. This will allow you to search all content types marked as "Searchable" when they are created/installed in your system.

The second search implementation uses Sphinx Search. Sphinx is an open source full text search server, designed from the ground up with performance, relevance (aka search quality), and integration simplicity in mind. It's written in C++ and works on Linux (RedHat, Ubuntu, etc), Windows, MacOS, Solaris, FreeBSD, and a few other systems. To use this search engine, please see the instructions on Installing Sphinx.

You may be able to find alternative search engines from third-party vendors or possibly at http://www.vbulletin.org.

[notice]Changing search implementations will require you to rebuild the search index before the search function will return results. For the DB Search this can be done via Maintenance > General Update Counters. The reindex can take a long time for large boards. Some high performance search engines may provide a faster alternate method of doing a full reindex, consult the documentation provided with your search type. Consult the documentation for your search type to learn how to rebuild the search index for it.[/notice]

## Indexed Search
This is the default search type used by vBulletin. When new content is created, it split up into individual words and indexed into various search tables. Words less than 4 characters are not indexed. Sub-words are not indexed separately. This search type does not have any separate configuration options.

## Sphinx Search
[notice=warning]Sphinx is designed for Advanced Users only. Knowledge of configuring and maintaining Server Platforms is a requirement.[/notice]

Below you will find the instructions for installing the Sphinx Search Daemon on your server and how to configure it to work with vBulletin.

### Linux/Unix/MacOS
#### Install Sphinx on your server
1. Login as root
1. Download Sphinx. Sphinx is available through its official Web site at http://sphinxsearch.com/downloads (Our minimum required version is 2.4.2)
1. unpack the package
```
    cd sphinx-<version>
    ./configure --enable-id64 --prefix=/usr/local/sphinx
    make
```    
1. Did you get Error 127 during step 3? Install gcc-c++ using the following command and then repeat step 3.
`yum install gcc-c++`
OR For Debian and Ubuntu flavors of linux:
```
sudo apt-get install gcc
make install
```
1. Did you get dependency errors with steps 3 or 4? Install mysql-devel using the following command and then repeat steps 5 and 7.
`yum install mysql-devel`
OR For Debian and Ubuntu flavors of linux:
`sudo apt-get install libmysqlclient-dev`
1. Create the following directories in your sphinx install (/usr/local/sphinx/): log & data
```
mkdir /usr/local/sphinx/log
mkdir /usr/local/sphinx/data
```

#### Configure Sphinx for vBulletin
[notice]Do not upload your vbulletin-sphinx.php to a web accessible URL. Doing so would give away your database details. If you follow these exact instructions, it will not be in a web accessible URL.[/notice]

1. Upload the contents of the upload folder to the vbulletin root directory.
2. At the end of your vBulletin core/includes/config.php file, add the following:
```
/*
 * Sphinx configuration parameters
 */
$config['Misc']['sphinx_host']        = '127.0.0.1';
$config['Misc']['sphinx_port']        = '9306';
$config['Misc']['sphinx_path']        = '/usr/local/sphinx'; //no trailing slash
$config['Misc']['sphinx_config']    = $config['Misc']['sphinx_path'] . '/etc/vbulletin-sphinx.php';
```
3. Upload vbulletin-sphinx.php to /usr/local/sphinx/etc/ .
4. Update the first line in vbulletin-sphinx.php to match your php installation path
5. Change $myforumroot in vbulletin-sphinx.php to the exact forum root (Example: /home/vbulletin/public_html).
6. Set vbulletin-sphinx.php file to executable using: `chmod +x /usr/local/sphinx/etc/vbulletin-sphinx.php`
7. Change directory to your sphinx folder using: `cd /usr/local/sphinx`
8. Start the daemon using: `/usr/local/sphinx/bin/searchd --config /usr/local/sphinx/etc/vbulletin-sphinx.php`
9. Ignore the worning about 'vbulletin_disk' index, it will be created once you ran the indexer.
10.	To verify your Sphinx is working you can enter: `ps ax | grep search[d]`
11.	If the above returned something such as: /usr/local/sphinx/bin/searchd --config... the daemon is running.
12.	Go to your AdminCP->Options->Search Type. In the drop down, select Sphinx Search, then hit go.

That is it! Sphinx should now be working correctly on your board.

[notice=warning]If you adjust any of your config.php credentials you will need to restart your Sphinx daemon.[/notice]

### Windows
[notice]Do not upload your vbulletin-sphinx.php to a web accessible URL. Doing so would give away your database details. If you follow these exact instructions, it will not be in a web accessible URL.[/notice]

1. Sphinx is available through its official Web site at http://sphinxsearch.com/
2. Download the sphinx package (minimum version is 2.4.2), extract the contents and follow the instructions in the doc/sphinx.txt
[Notice]Note the installation folder and replace below with it where it says <shpinx_root>. Do not add the trailing slash.[/notice]
3. Do not install the service yet!
4. If you installed the service, run the following commands from the Command line:
```
net stop SphinxSearch
<shpinx_root>\bin\searchd --delete --servicename SphinxSearch
```
5. Make sure the following directories are created in your sphinx install (<shpinx_root>): log & data. Using the command line:
```
mkdir <shpinx_root>\log
mkdir <shpinx_root>\data
```

#### Configure Sphinx for vBulletin
1. Upload the contents of the upload folder to the vbulletin root directory.
2. At the end of your vBulletin core/includes/config.php file, add the following:
```
/*
 * Sphinx configuration parameters
 */
$config['Misc']['sphinx_host']        = '127.0.0.1';
$config['Misc']['sphinx_port']        = '9306';
$config['Misc']['sphinx_path']        = '<shpinx_root>'; //no trailing slash
$config['Misc']['sphinx_config']    = $config['Misc']['sphinx_path'] . '/etc/vbulletin_sphinx.conf';
```
3. Upload vbulletin-sphinx.php to <shpinx_root>/etc/
4. Edit <shpinx_root>/etc/vbulletin-sphinx.php and update the path in the $myforumroot variable to your vbulletin root
5. Run the following command in a console (cmd) to generate a sphinx config file based on your board: `php <shpinx_root>\etc\vbulletin-sphinx.php > <shpinx_root>\etc\vbulletin_sphinx.conf`
6. Install the service by running this in a command line as administrator: `<sphinx_root>\bin\searchd --install --config <shpinx_root>etc\vbulletin_sphinx.conf --servicename SphinxSearch`
7	Start the service by running: `net start SphinxSearch`
8	Go to your AdminCP->Options->Search Type. In the drop down, select Sphinx Search, then hit go.

That is it! Sphinx should now be working correctly on your board.

[notice=warning]If you adjust any of your config.php credentials you will need to restart your Sphinx daemon.[/notice]

## Related Options
You can find additional search engine options in the AdminCP under [Settings](/admin_control_panel/settings) -> [Options](/admin_control_panel/settings/options) -> [Message Searching Options](/admin_control_panel/settings/options/message_searching_options)