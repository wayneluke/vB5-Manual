---
title: XML Sitemap
slug: xml_sitemap
taxonomy:
    category:
        - settings
    tag:
        - options
        - sitemap
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Enable Automatic Sitemap Generation
If you select yes for this option, the XML sitemap will be automatically generated periodically by a scheduled task.<br />
<br />
Even if you select no, you can still <a href="admincp/sitemap.php?do=buildsitemap">manually generate the sitemap</a>.



- Variable Name: sitemap_cron_enable
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Automatic Sitemap Generation Frequency (Days)
If automatic sitemap generation is enabled, this option controls the number of days between automatic builds.



- Variable Name: sitemap_cron_frequency
- Data Type: integer
- Default Value: 14
[/segment][segment=option]

## Default Sitemap Priority
The default priority for content in the XML Sitemap. This may be configured on a per-content basis in the <a href="admincp/sitemap.php">XML Sitemap group</a>.<br />
<br />
Only a limited amount of content should be listed in the sitemap as a high priority, so you shouldn't set this value too high.



- Variable Name: sitemap_priority
- Data Type: number
- Default Value: 0.5
[/segment][segment=option]

## Automatic Sitemap Search Engine Submission
Select the search engines that you wish to notify when a new sitemap has been generated (manually or via a scheduled task).



- Variable Name: sitemap_se_submit
- Data Type: bitfield
- Default Value: 31
[/segment][segment=option]

## Sitemap File Path
XML sitemap data must be written to the filesystem to function. Enter the full path to the directory the files should be written to. Do not include a trailing slash.<br />
<br />
This directory must be writable by the webserver.



- Variable Name: sitemap_path
- Data Type: free
- Default Value: ./store_sitemap
[/segment][segment=option]

## URLs Per Page
Enter the number of URLs that will be processed per page (and placed in each sitemap file). Note that only one type of content will be written to a file, so it is possible that there will be files that have less URLs than the number specified here.<br />
<br />
Enter a value no larger than 50,000. Larger values may cause more performance impact while the sitemap is being generated.



- Variable Name: sitemap_url_perpage
- Data Type: posint
- Default Value: 30000
[/segment]