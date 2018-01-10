---
title: Version Info and Other Untouchables (Safe)
slug: version_info_and_other_untouchables_safe
taxonomy:
    category:
        - settings
    tag:
        - options
        - versionsafe
visible: false
template: article
version: 5.4.0 Alpha 1
date: 1/10/2018 12:01am
---

[toc]
[segment=option]

*Human Verification Library~*
<div>Choose the verification type that you wish to present to the user.</div>

<div style="font-weight:bold; margin-top:1em">Image Verification</div>
<div>An image consisting of letters in varying fonts/shapes/sizes will be shown to the user. The appearance of this image is dictated by several options that you may control.</div>

<div style="font-weight:bold; margin-top:1em">Question and Answer Verification</div>
<div>Questions provided by you that must be answered appropriately for verification.</div>

<div style="font-weight:bold; margin-top:1em"><a href="http://www.google.com/recaptcha" target="_blank">reCAPTCHA&trade; (2.0 Library)</a> Verification</div>
<div>Uses reCAPTCHA 2.0 library which uses a variety of checks to ensure a human is present while avoiding cumbersome interactions for the user</div>



- Variable Name: hv_type
- Data Type: free
- Default Value: Image
[/segment][segment=option]

*reCAPTCHA&trade; Public Key~*
Public key provided to you by <a href="http://www.google.com/recaptcha" target="_blank">reCAPTCHA&trade;</a>.



- Variable Name: hv_recaptcha_publickey
- Data Type: free
- Default Value: 
[/segment][segment=option]

*reCAPTCHA&trade; Private Key~*
Private key provided to you by <a href="http://www.google.com/recaptcha" target="_blank">reCAPTCHA&trade;</a>.



- Variable Name: hv_recaptcha_privatekey
- Data Type: free
- Default Value: 
[/segment][segment=option]

*reCAPTCHA&trade; 2.0 Theme~*
Leave this setting alone



- Variable Name: hv_recaptcha2_theme
- Data Type: free
- Default Value: light
[/segment][segment=option]

*Image Verification Library~*
Choose the image processing library that vBulletin will use for generating Image Verification.  If the <em>GD (True Type)</em> option doesn't work, please ask your host to recompile PHP with <strong>FreeType 2</strong> support.
<br /><br />Imagemagick must have a valid path specified in the <a href="admincp/options.php?dogroup=imagesettings">Image Settings.</a>



- Variable Name: regimagetype
- Data Type: free
- Default Value: GD
[/segment][segment=option]

*Image Verification Options~*
There are several options that allow you to control the level of difficulty presented by the image verification.



- Variable Name: regimageoption
- Data Type: bitfield
- Default Value: 15
[/segment][segment=option]

*Smilie Path Prefix~*
If set, this defines the path where custom smilies are located.  Note that it must be part a relative path under the core folder



- Variable Name: smiliepath
- Data Type: free
- Default Value: images/smilies/
[/segment]