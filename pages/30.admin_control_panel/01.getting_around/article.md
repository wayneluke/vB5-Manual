---
title: Navigating the AdminCP
slug: navigating_admincp
---

[toc]

## Logging into the AdminCP
The vBulletin Admin Control Panel can be accessed by pointing your browser at `http://www.example.com/forums/admincp/`.

The first thing you will see when you access the Control Panel is a prompt to log in. You may be presented with this login prompt even if you are already logged into the frontend of your vBulletin site.

![AdminCP Login Form](/images/admincp/admin1.png)

To log in, simply enter the username and password of a user account with administrator privileges, such as the one you created towards the end of the installation script process.

There are a couple of extra options that can be set on the login form. To see them, click the [button]Options[/button] button to expand the form to its full size.

Clicking the [button]Log in[/button] button will submit the login details and options you have set, and log you in to the AdminCP.

![AdminCP Options](/images/admincp/admin2.png)

### AdminCP Options
The two options you can set from the login form are:

- Style Choice: vBulletin comes with a selection of styles in which you can view the control panel. Try them out and see which one you like best, or if you are feeling adventurous, create your own!
- Save Open Groups Automatically: This option allows you to have the system automatically save your preferences for which options in the Admin CP navigation panel are opened and which are collapsed by default, without you having to manually save the preferences.



## AdminCP Overview
![AdminCP Main Page](/images/admincp/admin3.png)

You will notice that the Admin Control Panel is divided into three distinct areas. The first and most obvious of these is the main content panel, which currently shows the home page. This page will display any news about vBulletin, action items that need to be handled, and information about your server configuration. It will also contain a quick method to search for users, phrases, PHP functions or MySQL language as well as some useful links, and the vBulletin credits. This area (the main content panel) is where the majority of your attention will be focused when administering your board.

At the top of the page is a tab bar with a link to the Site Home Page (the Frontend or User portion of your site). To the right of the tab bar are a series of links:
- Report Bug: Create an issue report for evaluation by the vBulletin Developers. If the issue is valid, it will be assigned to a future version for resolution.
- Get Support: Open a support ticket with vBulletin Support.
- Messages: This links to your Message Center on the frontend. In the Message Center you can reply to private messages, handle notifications, and approve moderated posts.
- Log out: Ends your AdminCP session.

Directly below the open Admin CP tab is a narrow strip that contains information about the vBulletin version you are currently running and the latest version available to download. Warning indicators will appear if your site is in Debug Mode and/or is turned off. To the right of the strip is a search box allowing you to search the AdminCP.

## Navigation Menu
To the left of the AdminCP page is the navigation panel. This long, thin area is the key to getting around the Admin CP. 

When you first visit the Admin CP, you will notice that all the sections of this panel are in a collapsed state. 

![Navigation Panel](/images/admincp/admin4.png)

You can click the arrow on each section to expand it and show its contents, and click the arrow again to collapse that section again. Double-clicking a section's title will also toggle its state and either expand or contract it. When you have a section or sections expanded, different command pages will appear as links. Selecting a page will load it in the main content panel. 

You can expand and collapse sections to build a customized control panel layout for yourself. For example, you may find that you regularly use the 'Styles' tools, but very infrequently use the Help (User Manual) manager.

![Navigation with Styles Expanded](/images/admincp/admin5.png)

When you have established a set of expanded and collapsed sections that suits your way of working, you can save the state of the sections by clicking on [button]Save Prefs[/button]. When you reload the Admin CP, you will find that the sections in the left navigation panel will automatically return to the configuration that you saved. Clicking on the [button]Revert Prefs[/button] will delete your saved preferences and restore the AdminCP to its default state.

If at any time you want to return to the home page of the Admin CP, clicking the [button]Control Panel Home[/button] button at the top of the navigation panel will do this.

