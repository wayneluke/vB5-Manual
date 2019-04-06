---
title: Editing A Language
---

Path to Editing a Language: [process]Languages & Phrases|Language Manager[/process] 

- Click [button]Add New Language[/button] to create a new Language
- Click [link]Edit Settings[/link] to edit an existing language.

The form to add or edit a language contains many settings that are determine how your language is displayed. For example, some languages might prefer the mm/dd/yy date format, while others prefer dd/mm/yy.

## General Settings

[b]Title[/b]
Name of the language. The title is displayed to users when they are selecting a language.

[b]Allow User Selection[/b] ([u]Yes[/u]/No)
Whether or not users can select the language. If this is set to No, the language is effectively disabled.

[b]Text Direction[/b] (default: Left to Right)
Direction of the text in the language. For example, English is left to right, while Hebrew is right to left.

[b]Language Code[/b] (default: en)
Two-character, standard abbreviation  for the language (for example, fr for French)

This value does not have any effect on the displayed text, but it may be used by programs such as screen readers.

[b]HTML Character Set[/b] (default: UTF-8)
This indicates the encoding of the characters that are displayed on the page. Setting this to an incorrect value might prevent some characters from being displayed. If you are unsure what to put here, enter [type]UTF-8[/type], as it will likely contain the characters you need.

[b]Image Folder Override[/b]
The path to button images, relative to the main channel directory, that contains translated text. This replaces the button images folder, which defaults to images/buttons. If you want to specify a specific button directory for each style, you can use [type]<#>[/type]. At runtime, this replaces the ID number of the style that the user is using.

## Date / Time Formatting

Settings in this group allow you to override the default date and time formatting with one that is more appropriate for your language. For example, [i]English (US)[/i] would use the mm/dd/yy format, while [i]English (UK)[/i] would use the dd/mm/yy format. These formats are represented by [type]%m/%d/%y[/type] and [type]%d/%m/%y[/type], respectively.

[b]Locale[/b]
You can define a locale or just specify the correct date and time formats in the settings below. Since locales are not supported on all systems, it is better to manually specify the correct date and time formats if you can.

[b]Date Format Override[/b]
Overrides the date format specified in your vBulletin options. Leave blank to use the format that is set in your vBulletin options.

[b]Time Format Override[/b]
Overrides the time format specified in your vBulletin options. Leave blank to use the format that is set in your vBulletin options.

[b]Registration Date Format Override[/b]
Overrides the registration date format specified in your vBulletin options. Leave blank to use the format that is set in your vBulletin options.

[b]Birthday Date Format Override (with year)[/b]
Overrides the birthday with year format that is specified in your vBulletin options. Leave blank to use the format that is set in your vBulletin options.

[b]Birthday Date Format Override (without year)[/b]
This setting will override the birthday without year format that is specified in your vBulletin options. Leave blank to use the format that is set in your vBulletin options.

[b]Log Date Format Override[/b]
Overrides the log date format specified in your vBulletin options. Leave blank to use the format that is set in your vBulletin options.

## Number Formatting

[b]Decimal Separator[/b]
Character that separates the integer and decimal parts of a number.

Use this setting to customize the way floating point (decimal) numbers are displayed for this language.

[b]Thousands Separator[/b]
Character that separates and groups thousands in a number. Use this setting to customize the way the thousands place is separated in large numbers for this language.

