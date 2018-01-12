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
template: article
---

[toc]
Style Variables (often called Stylevars) are variables that contain one of more CSS Attributes used to control the appearance of some aspect of a vBulletin style. Stylevars are used in conjunction with CSS and Templates to control the look and feel of your vBulletin site.

StyleVars are incorporated into CSS and Templates using the {vb:stylevar} syntax. While Stylevars are primarily used within CSS in vBulletin, they can be used in HTML templates as well. 

## How Style Variables are used in CSS
vBulletin uses Style Variables to dynamically build the CSS it uses for rendering during page load or when the files are written to the server, if you have enabled that option. The use of Style Variables allows you to build different styles from which your users can choose.

Here is a sample of code in a CSS template:

```
.postbit, .postbitlegacy, .eventbit {
	margin-bottom: {vb:stylevar padding};
	display:block;
	width: 100%;
	clear:both;
	position: relative;
	float: {vb:stylevar left};
	color: {vb:stylevar body_color};
	border: {vb:stylevar postbit_border};
}
```

This code contains several style variable references denoted by [var]{vb:stylevar}[/var] tags. The vBulletin template engine retrieves the values of the style variables and inserts them directly into the CSS before it is used for rendering.

### CSS Math Tag
It is possible to use style variables in mathematical expressions with the [var]{vb:math}[/var] tag.

This is used to evaluate the result of the mathematical expression specified. The syntax is:

```
{vb:math expression}
```

An example using {vb:math} is:

```
height:{vb:math 8px + {vb:math {vb:stylevar font.fontSize}-1}};
```

This expression determines the height of an element based on the font size specified in the font style variable and an extra value of 8 pixels.

