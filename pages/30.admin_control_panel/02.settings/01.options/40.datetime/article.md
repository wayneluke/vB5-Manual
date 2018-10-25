---
title: Date and Time Options
slug: date_and_time_options
taxonomy:
    category:
        - settings
    tag:
        - options
        - datetime
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Datestamp Display Option
This option controls the display of dates throughout your forum<br /><br />'Normal' uses the date and time formats below this option.<br />
<br />
'Yesterday / Today' will show 'Yesterday' and 'Today' for dates that fall in those periods.<br />
<br />
'Detailed' will show times such as '1 Minute Ago', '1 Hour Ago', '1 Day Ago', and '1 Week Ago'.



- Variable Name: yestoday
- Data Type: number
- Default Value: 1
[/segment][segment=option]

## Default Time Zone Offset
Time zone offset for guests and new users. Do not take DST into consideration, rather use the next option to enable/disable DST.



- Variable Name: timeoffset
- Data Type: number
- Default Value: 
[/segment][segment=option]

## Enable Daylight Savings
If Daylight Savings Time is currently in effect for the above time zone, enable this option so that guests will see the correct times on posts and events. This has no effect on registered users as they control their DST options in the User CP. 



- Variable Name: dstonoff
- Data Type: boolean
- Default Value: 
[/segment][segment=option]

## Format For Date
Format in which the date is presented on vBulletin pages:<br />
<br />
See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a><br />
<br />
<b>Examples:</b><br />
US Format (e.g., 04-25-98): m-d-y<br />
Expanded US Format (e.g., April 25th, 1998): F jS, Y<br />
European Format (e.g., 25-04-98): d-m-y<br />
Expanded European Format (e.g., 25th April 1998): jS F Y



- Variable Name: dateformat
- Data Type: free
- Default Value: m-d-Y
[/segment][segment=option]

## Format For Time
Format in which the time is presented on all vBulletin pages:<br />
<br />
See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a><br />
<br />
<b>Examples:</b><br />
AM/PM Time Format (eg, 11:15 PM): h:i A<br />
24-Hour Format Time (eg, 23:15): H:i



- Variable Name: timeformat
- Data Type: free
- Default Value: h:i A
[/segment][segment=option]

## Format For Registration Date
This is used to format the user's registration date, which is displayed in each user's post.<br />
<br />
See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a>



- Variable Name: registereddateformat
- Data Type: free
- Default Value: M Y
[/segment][segment=option]

## Format For Birthdays with Year Specified
Format of date shown in profile when user gives their birth-year.

<br />
<br />
See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a>



- Variable Name: calformat1
- Data Type: free
- Default Value: F j, Y
[/segment][segment=option]

## Format For Birthdays with Year Unspecified
Format of user's birthday shown on profile when the user does not specify their birth-year.<br />
<i>DO NOT put in a code for the year.</i>

<br />
<br />
See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a>



- Variable Name: calformat2
- Data Type: free
- Default Value: F j
[/segment][segment=option]

## Format for Event Dates in the Upcoming Events Module
This is the format for the event start date as shown in the Upcoming Events module. You only need to enter the format for month and day, since there is a separate year header in the module.

<br />
<br />
See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a>



- Variable Name: eventdateformat
- Data Type: free
- Default Value: M j
[/segment][segment=option]

## Format for DateTime Picker
This is the format for the date and time as shown in the DateTime Picker. Enter formatting codes for the date and the time.

<br /><br />See: <a href="https://chmln.github.io/flatpickr/formatting/" target="_blank">https://chmln.github.io/flatpickr/formatting/</a>



- Variable Name: pickerdateformat
- Data Type: free
- Default Value: n-j-Y h:i K
[/segment][segment=option]

## Log Date Format
Format of dates shown in Control Panel logs.<br /><br />See: <a href="http://www.php.net/manual-lookup.php?function=date" target="_blank">http://www.php.net/manual-lookup.php?function=date</a>



- Variable Name: logdateformat
- Data Type: free
- Default Value: H:i, jS M Y
[/segment]