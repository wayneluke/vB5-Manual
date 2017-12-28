---
title: Templates
slug: templates
---
[toc]

A template is a piece of code that controls how a specific portion of a style looks and acts. vBulletin 5 allows you to edit a template for a style so that you can have greater control over how your site looks and functions. 


## How Templates Work
The pages you see making up the user interface of vBulletin are generated using a number of templates. Templates combine different technologies to create a page that is presented to the user. These technologies including HTML 5, CSS, vBHTML, and vB Shortcodes. When presented to the browser as a web page, these are combines with Javascript, fonts and images to create the finished product.

### HTML 5
HTML is a markup language that tells the browser how to structually build the page. When rendered most templates templates end up in this format and sent to the browser. Teaching HTML 5 is beyond the scope of this documentation. However, if you would like to know more there are many tutorials and reference sites available on the internet. A couple are [W3Schools](https://www.w3schools.com/html/default.asp) and the [Mozilla Developer Network](https://developer.mozilla.org/en-US/docs/Web/HTML)

### CSS
CSS is a display language that tells the browser how to layout individual pages. In addition to layout it can provide instructions on colors, backgrounds, borders, fonts and other information so your page is pleasant to view. Like HTML, learning CSS is beyond the scope of this document. If you would like to learn more there are many tutorials and reference sites for CSS as well. [W3Schools](https://www.w3schools.com/css/default.asp) and the [Mozilla Developer Network](https://developer.mozilla.org/en-US/docs/Web/CSS) provide tutorials and documentation.

### vBHTML
vBHTML provides a series of tags that can be used to control the output of individual templates. With them you can display information based on information presented to the template, create output loops, tell the system to ignore a block of template code, or tell the system to pass the template code through without parsing it at all. You can find more information on [vBHTML](/developers/template_syntax#vbhtml) in the Developers section of this documentation.

### vB Shortcodes
vB Shortcodes allow templates to format and/or display information from the system. With vB Shortcodes, you can display variables and phrases, format time and date values, include additional templates and more. You can find out more about [vB Shortcodes](/developers/template_syntax#vbulletin-shortcodes) in the Developers section of this documentation.

## Specialized Templates
### CSS Templates
All the CSS for vBulletin is stored as templates. Most of these are used for internal purposes and can be ignored. However, you may want to include your own custom CSS to overwrite the default style's look. Instead of editing each CSS template, we have provided several templates that allow you to accomplish this.

#### css_additional.css
This is the main template for customization. It is the same CSS that you would edit in Site Builder's [Style](/site_builder/style) tab. The majority of your CSS customizations should be located here. For convenience, we do not overwrite or attempt to merge this template on upgrades.

#### css_fonts.css

#### css_icon_sprite.css
This template is used to apply CSS directly to the SVG sprite image included in vBulletin 5.4.0 and higher. If you review the 
### SVG Templates

## Template Examples
A simple example template might look like this:

```
<div class="js-memberlist-table-body" data-total-pages="{vb:raw members.pagingInfo.totalpages}">
	<vb:if condition="!empty($members['members'])">
		<vb:each from="members.members" value="member">
			{vb:template memberlist_item, member={vb:raw member}}
		</vb:each>
	</vb:if>		
</div>
```

This template will cycle through a list of members and display them using another template called memberlist_item.

The template memberlist_item could look like this:

```
<div class="b-table__row l-row">
	<div class="memberAvatar l-col__fixed-1 h-align-center">
		<vb:if condition="$user['showavatars']">
			<a href="{vb:url 'profile', {vb:raw member}}" class="b-avatar--s">
				<vb:if condition="$member['avatarpath']">
					<img src="{vb:raw baseurl_corecdn}/{vb:raw member.avatarpath}" alt="{vb:raw member.username}" />
				<vb:else />
					<img src="{vb:raw baseurl_corecdn}/images/default/default_avatar_medium.png" width="64" height="64" alt="{vb:raw member.username}" />
				</vb:if>
			</a>
		</vb:if>
	</div>

    <div class="l-col__large-1 h-hide-on-small">
		<span class="h-hide-on-small">{vb:date {vb:raw member.joindate}}</span>
	</div>

	<div class="l-col__large-1 h-hide-on-small">
		<span class="h-hide-on-small">{vb:raw member.posts}</span>
	</div>

	<div class="l-col__large-1 h-hide-on-small">
		<span class="h-hide-on-small">{vb:date {vb:raw member.lastactivity}}</span>
	</div>
</div>
```

This template gathers the username, avatar, joindate, number of posts, and last activity for display. Once it has the information, it would format it and display it in a table row.


