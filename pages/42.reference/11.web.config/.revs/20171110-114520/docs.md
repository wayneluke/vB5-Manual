---
title: web.config
slug: web_config
taxonomy:
  category: Reference
  tag: [beginner, reference, iis]
template: docs
---

The default web.config file for vBulletin. IIS uses web.config along with the URL Rewrite Module to handle rewrites for vBulletin.

```
<?xml version="1.0" encoding="UTF-8"?>
<!-- This file is to support redirection in IIS.
This file is harmless if you are running under Apache -->
<configuration>
	<system.webServer>
		<rewrite>
			<rules>
				<clear /> <!-- reset other rewrite rules -->
				<rule name="Css" stopProcessing="true">
					<match url="^css.php$" ignoreCase="false" />
					<action type="Rewrite" url="core/css.php" />
				</rule>

				<rule name="Installer" stopProcessing="true">
					<match url="^install/" ignoreCase="true" />
					<action type="Rewrite" url="core/install/" />
				</rule>

				<rule name="Main Redirect" stopProcessing="true">
					<match url="^(.*)$" ignoreCase="false" />
					<conditions logicalGrouping="MatchAll">
						<add input="{REQUEST_FILENAME}" matchType="IsFile" ignoreCase="false" negate="true" />
						<add input="{REQUEST_FILENAME}" matchType="IsDirectory" ignoreCase="false" negate="true" />
					</conditions>

					<action type="Rewrite" url="index.php?routestring={R:1}" />
				</rule>

				<rule name="Admincp" stopProcessing="true">
					<match url="^(admincp/)$" ignoreCase="false" />
					<action type="Rewrite" url="index.php?routestring={R:1}" />
				</rule>
			</rules>
		</rewrite>
	</system.webServer>
</configuration>
```
