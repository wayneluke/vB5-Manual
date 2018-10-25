---
title: Site Name / URL / Contact Details
slug: site_name_url_contact_details
taxonomy:
    category:
        - settings
    tag:
        - options
        - address
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 01:21am
---

[toc]
[segment=option]

## Forum Name
Name of your forum. This appears in the title of every forum page.



- Variable Name: bbtitle
- Data Type: free
- Default Value: vBulletin Forums
[/segment][segment=option]

## vBulletin URL
This is the URL, or web address, that users will use in their bookmarks or address bar to access your site.<br />
Note: do not add a trailing slash. ('/')



- Variable Name: frontendurl
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Login URL
Only used for secure logins. This is the SSL or HTTPS mirror of your site. If you're unsure of this address, contact your hosting provider. If you're not using secure logins, do not change this setting.



- Variable Name: frontendurl_login
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Core URL
The location of your core directory. This directory contains the vBulletin engine and is not public. Do not update unless directed to by vBulletin Support.



- Variable Name: bburl
- Data Type: free
- Default Value: http://www.example.com/forums
[/segment][segment=option]

## HTTPS terminates before the webserver
Select this option if your network is configured so that HTTPS terminates before the request is sent to the webserver.  This has no effect if the site/login urls are not set to use HTTPS.



- Variable Name: terminatedhttps
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Route Channels and Conversations by Node ID
Use the simplified URL node/xxxx for all channels and conversations (including Forums, Blogs, Social Groups, and Articles). This can be useful if the title values for these node used in the URL cause problems on your site.<br/><br/>

Note that this will override any custom urls configured for Channel or Conversation pages.



- Variable Name: routebynode
- Data Type: free
- Default Value: 0
[/segment][segment=option]

## Header Logo URL
If you would like to customize the URL that the logo image in the header links to, please enter the URL here.<br /><br />

Leave this option blank to use the "vBulletin URL" specified above.



- Variable Name: titleimageurl
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Always use Forum URL as Base Path
If this is set to 'Yes' the Forum URL will always be used for links instead of the current URL.  This ensures that links are consistent but may not be desirable if you use multiple domains or a mix of http and https.



- Variable Name: bburl_basepath
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Redirect Domain Whitelist
Optional, advanced additional URL configuration. This setting should remain blank for most installations. Specify additional domains of your forum:<br />
<br />
Examples:<br />
http://www.example2.com<br />
http://www.example.com<br />
<br />
Note: do not add a trailing slash. ('/')



- Variable Name: redirect_whitelist
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Disable Redirect Domain Checking
Disable Redirection Checking.  I understand the risks associated with disabling this security feature.



- Variable Name: redirect_whitelist_disable
- Data Type: boolean
- Default Value: 0
[/segment][segment=option]

## Allow Unregistered Users to use 'Contact Us'
If set to yes, you may require guests to pass <strong>Human Verification</strong> in order to use this form by enabling the option found in the <em><a href="admincp/options.php?do=options&amp;dogroup=humanverification">Human Verification Options</a></em>.



- Variable Name: contactustype
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Contact Us Options
You may pre-define subjects (and corresponding recipients) for users to pick from when using the default Contact Us form listed above. Please place one subject per line. An 'Other' option will be automatically added to the end when the form is viewed.



- Variable Name: contactusoptions
- Data Type: free
- Default Value: Site Feedback
Registration Problem
[/segment][segment=option]

## Allow to Send 'Other' Subject in Contact Us Page
If set to 'Yes', there will be an option in Subject section of Contact Us page to let visitors to input custom subject.



- Variable Name: contactusother
- Data Type: boolean
- Default Value: 1
[/segment][segment=option]

## Webmaster's Email
Email address of the webmaster.



- Variable Name: webmasteremail
- Data Type: free
- Default Value: webmaster@example.com
[/segment][segment=option]

## Contact Us Email
Email address for receiving the emails from Contact Us page by default. If you leave this option empty, Webmaster's Email will be used.



- Variable Name: contactusemail
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Privacy Statement URL
Enter the URL of your privacy statement, if you have one.



- Variable Name: privacyurl
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Copyright Text
Copyright text to insert in the footer of the page.



- Variable Name: copyrighttext
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Company Name
The name of your company. This is required for COPPA compliance.



- Variable Name: companyname
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Company Fax
Fax number for your company. COPPA forms will be faxed to this number.<br />
<br />
You may wish to check out <a href="http://www.efax.com/" target="_blank">http://www.efax.com/</a>.



- Variable Name: faxnumber
- Data Type: free
- Default Value: 
[/segment][segment=option]

## Company Address
Address of your company. COPPA forms will be posted to this address.



- Variable Name: address
- Data Type: free
- Default Value: 
[/segment]