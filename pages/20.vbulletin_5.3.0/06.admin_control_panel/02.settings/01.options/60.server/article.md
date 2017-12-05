
---
title: Server Settings and Optimization Options
slug: server_settings_and_optimization_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - server
visible: true
template: article
version: 5.3.3
date: 2017-12-05 08:58:24
---

## Cached Posts Lifespan
Number of days to maintain a cached copy of a post. This makes topics faster to display, but means that each post takes approximately twice the storage space.

## Update Attachment Views Immediately
Option to update attachment views immediately, or once an hour. If you have a large number of inline graphic attachments, you will probably want to disable immediate updates, since they are quite server intensive.

## *NIX Server Load Limit
vBulletin can read the overall load of the server on certain *NIX setups (including Linux).<br />
<br />
This allows vBulletin to determine the load on the server and processor, and to turn away further users if the load becomes too high.<br />
<br />
If you do not want to use this option, set it to 0.<br />
A typical level would be 5.00 for a reasonable warning level.

## Re-check Frequency
How frequent (in seconds) should we re-check the server load average after the system identifies the load average is too high?  Re-checking will divert a tiny bit of system resources to check the new server load average, so re-checking too frequently may end up causing you stay in busy mode for longer.  Default value as of vBulletin 3.8.4 is 60 seconds, before that it was 500 seconds.

## Safe Mode Upload Enabled
If your server runs PHP with <b>SAFE MODE</b> Restrictions, set this to yes. You may also need to set this if you have open_basedir restrictions in place.

## open_basedir Temporary Directory
If your server has open_basedir defined, you'll need to specify a directory that is CHMOD to 777 that will act as a temporary directory for uploads. All files are removed from this directory after database insertion. This directory should be within your home directory on the server.<br />
<br />
<b>Note:</b> Do NOT include the trailing slash ('/') after the directory name.

## Duplicate Search Index Information on Topic Copy?
Setting this option to yes will cause search index information to be copied with each post in the topic. This allows the copied version of the topic to be searchable.
<br /><br />
However, on larger boards, this may cause significant delays in copying a topic. If this is a problem for you, we recommend disabling this option.

## Session IP Octet Length Check
Select the subnet mask which reflects the level of checking you wish to run against IP addresses when a session is being fetched.
<br /><br />
This is useful if you have a large number of users who are behind transparent proxies and have an IP address that can change randomly between request such as AOL.
<br /><br />
The more this is decreased the greater the security risk from session hijacking.

## Use Remote jQuery
jQuery script files are hosted locally on your server, you may however have them served from Google, jQuery, or Microsoft servers, saving you some bandwidth and potentially decreasing load times.<br />
<br />More information about this service can be found here at jQuery's <a href="http://docs.jquery.com/Downloading_jQuery">Website</a>.

## Custom Remote jQuery Path
In place of selecting Google, jQuery, or Microsoft for serving jQuery remotely, you may enter a URL to another jQuery CDN. Please replace the jQuery version(s) in the url with {version}.  If the URL supports SSL, don't add http:// at the beginning, otherwise do so. Examples:<br /><br />http://ajax.aspnetcdn.com/ajax/jquery/jquery-{version}.min.js <b>(No SSL Support)</b><br />ajax.aspnetcdn.com/ajax/jquery/jquery-{version}.min.js <b>(SSL Support)</b>

## Disable Content Caching
Setting this to 'Yes' will disable content caching.  This is not recommended and should only be used for trouble shooting.

## Ajax Content Length Header
Determines if the content length header is sent with XML (ajax) replies. This is normally only sent if you use IIS, please see read help for more details.

## Enable Scheduled Tasks
Enables vBulletin to automatically run Scheduled Tasks on page load. If disabled, you would need to process Scheduled Tasks through an alternate means such as the crontab scheduler. Offloading Scheduled Tasks to an alternative method can provide a performance boost.

## Cache Node Data
Allows node data caching. Disabling this will affect performance

## Enable Early Flush
Enables vBulletin to send header markup to the browser before it is finished processing the request. vBulletin will not send error status codes with this option enabled.

## Minutes to Cache Content for Guests
The number of minutes that a certain page can be cached for guests before being refreshed with new content. Setting this to 0 will turn this feature off.

## CDN URL
Enter the base URL you have configured for your CDN here. Many people create a CNAME entry in DNS that points to their CDN, so you might have suddomain like: <i>static.yoursite.com</i> which is a CNAME to your CDN. Your CDN should be pointing to your site as the origin.

## Search Result Cache Lifetime
This determines how long search results are cached, in minutes. Larger values will reduce server load but make the displayed results more out of date. The search api is extensively used, so this will affect search results modules, Forum "Most recent Post" listings, etc. Setting to zero will disable search results caching, which will significantly increase database server load.



