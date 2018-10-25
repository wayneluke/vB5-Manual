# vBulletin Document Generators

> **Important**: Use a clean vBulletin Install to generate these files. If your installation 
> has additional content, it will corrupt the documentation.

These files will automatically generate a series of articles for the vB5Support manual. 
The content is based on three items from a standard vBulletin database.

- Existing inline help from phrases in the AdminCP.
- Existing AdminCP Help items for the items.
- Additional documentation added to special tables. 

These phrases are combined with other database data and configuration settings to create 
individual article pages with images and other media as needed. The goal is to provide 
coherent documentation that can be accessed on any device. Currently all documentation is 
pulled from the master language and therefore in English. It can be translated in the future. 
Each article uses Markdown for its formatting. Each generator will automatically create the 
directory structure and files necessary to properly format the manual's navigation. 
Templates are utilized for formatting and output so it is easy to update articles with 
future generations.

## Available Generators

- Settings (options.php): Generates an article page for each Setting Group in the system. 
Inside the page, each setting is documented with examples. Groups and Options will be 
listed by display value in the manual.

- Style Variables (stylevars.php): Generates an article page for each Stylevar group in 
the system. Adds additional text and descriptions along with working examples of how to 
modify the style vars. Each group will include an image map to highlight where the 
stylevar has its primary effect.

## In Development

- modules.php: (In Development) Creates an article for each default module in the system. 
Includes the options available and their defaults. Provides additional detail on some 
modules like Static HTML and PHP.

- pages.php: Creates an article for each of the default system pages with description, 
overview of the default layout and modules used, and available configurations.

- usermanual.php: Extracts the end user help available in the system and converts the 
document structure from HTML to Markdown. Creates the appropriate output.

- Other generators will be added as deemed appropriate.

## File Structure

- config: Holds various configuration files.
- includes: Holds functions and classes used by all generators.
  - vendor: Third-party files and classes used by various generators.
  - templates: holds all template files.
  - XML: necessary XML files from the current vBulletin installation.
- utilities: utility scripts necessary for some secondary functionality.
  - database.php - Imports manual.sql and makes necessary changes to the database.
  - files.php - Generates a checklist of files and whether they are complete or not.
  - manual.sql - SQL file containing the database changes for these generators.
- ReadMe.md - this file.
- options.php
- stylevars.php
- pages.php
- modules.php
- usermanual.php

## Database Tables

Several database tables have been added to a default installation of vBulletin to hold 
additional data for the generators.

- documentation_settinggroup
  - Fields: grouptitle (unique), documentation, imagepath
- documentation_settings
  - Fields: varname (unique), documentation, example, imagepath
- documentation_stylevargroup
  - Fields: stylevargrou (unique), documentation, imagepath
- documentation_stylevars
  - Fields: varname (unique), documentation, example
- documentation_pages
  - Fields: guid (unique), documentation, modules
- documentation_widgets
  - Fields: guid (unique), documentation, example, imagepath
