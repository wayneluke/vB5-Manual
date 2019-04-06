---
title: Style Inheritance
slug: style_inheritance
---

[toc]
Like so many other systems in vBulletin, the vBulletin Styles system works around the concept of inheritance. In implementing styles, “inheritance”  means that you can create an unlimited number of styles in which your site can be viewed, and customizations made in one style are inherited by all of its child styles.

## How Inheritance Works
The concept of inheritance as it applies to styles in vBulletin is best illustrated with an example of a common use for the system: customizing the look and feel of a site. You accomplish this by editing the colors used by vBulletin, and by editing the header and footer templates.

Assume that you want to customize your header and footer templates, but you also want to offer a choice of three possible color schemes to your users: we’ll call these the Red, Green, and Blue schemes.

You could create three new styles (Red, Green, and Blue) and customize the header and footer templates in each style. That is a valid solution, but has one serious disadvantage: if you decide you want to alter the HTML in the customized header template, you will need to edit the template in each of the three styles individually.

![inheritance 1](/images/admincp/styles/inheritance/1.png)

A more manageable solution would involve creating a single new style, called something like “Custom Header / Footer” and setting up the customizations that apply to all three styles in that file. 

![inheritance 2](/images/admincp/styles/inheritance/2.png)

Then to offer the three color variants, you would create three more styles (Red, Green, and Blue) as child styles of the Custom Header / Footer style.

![inheritance 3](/images/admincp/styles/inheritance/3.png)

Each of these child styles inherits the customized header and footer templates from the Custom Header / Footer parent style, so you do not need to edit that template in the child styles. If you choose to change the HTML of either the header or footer templates at some point in the future, you need only to edit those templates in the parent style: the changes are automatically inherited by the three child styles.

This is a simple example, involving only the site color scheme and the header and footer templates. However, vBulletin allows you to create much more elaborate customizations that individually customize every template and every CSS attribute of a style. Each of those customized attributes can be inherited by all child styles.

## Inheritance Examples
In the vBulletin styles system, each element of a style can be customized from the vBulletin default value, and each customization is inherited by any child styles of the style in which the customization was made, unless the value is further customized in the child style.

