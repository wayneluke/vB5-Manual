---
title: 'Style Variables'
taxonomy:
    chapter:
        - customizing_vbulletin
    tag:
        - intermediate
        - 'customizing vBulletin'
        - style
        - theme
        - stylevar
slug: stylevars
visible: true 
template: docs
---

[ui-tabs position="top-left" active="0" theme="lite"]
[ui-tab title="Global"]
Global Style Variables Go Here.
[/ui-tab]

[ui-tab title="Header"]
[ui-callout]
[ui-callout-item title="Site Builder / User Menu" position="15.3%, 35%, nw"]
This top menu holds user information as well as the Site Builder Menu as needed. When a user is logged in, they can access important areas of their account from this menu. The look of this menu is controlled by style variables prefixed with `main_nav_admin_bar`. 
[/ui-callout-item]
[ui-callout-item title="Logo" position="28%, 16%, nw"]
This is the logo of your site. You can upload a logo directly using the Header tool in Site Builder. Alternatively, you can use a logo stored elsewhere by editing the `titleimage` style variable in the AdminCP.
[/ui-callout-item]
[ui-callout-item title="Header Background" position="28%, 48%, nw"]
This is the header background. You can alter this with the `header_background` style variable. Attributes include color, background image, repeat. Hint, set the color to transparent to allow the page background to show in this area.
[/ui-callout-item]
[ui-callout-item title="Search Box" position="27%, 97.5%, nw"]
The search box is controlled by the style variables prefixed with the `header_search`. Altering these style variables can change the look and feel of the search box.
[/ui-callout-item]
[ui-callout-item title="Navigation Bar" position="44%, 35%, nw"]
The Tab Bar shows your primary navigation. This can be changed by editing the style variables prefixed with `header_tabbar`. The individual tabs can be style with the style variables prefixed with `header_tab`. Additionally each tab will have a unique CSS ID that can be used for advanced modifications using the additional template accessible through the template editor or the Style tab in Site Builder. You can add additional tabs using the Navigation Bar tool in Site Builder.
[/ui-callout-item]
[ui-callout-item title="Sub-Navigation Bar" position="49%, 52%, nw"]
Additional navigation links can be placed in the sub-navigation for each tab. This is unique per tab and can be controlled via the Navigation Bar tool in Site Builder. To change the look and feel of the sub-navigation you will edit style variables prefixed with `header_subtabbar`.
[/ui-callout-item]
[ui-callout-item title="Breadcrumbs" position="54%, 8%, nw"]
The breadcrumbs for the page will show here. Breadcrumbs are another tool to help users navigate your site. The look of your breadcrumbs are controlled by all the style variables starting with `breadcrumb`.
[/ui-callout-item]
[ui-callout-item title="Notices" position="63%, 43%, nw"]
Notices are pieces of information that you want the user to regard with importance. The look of your notices can be controlled with style variables starting with `notice`.
[/ui-callout-item]
![](./header.png)
[/ui-callout]    


[/ui-tab]

[ui-tab title="Footer"]
[/ui-tab]
[/ui-tabs]