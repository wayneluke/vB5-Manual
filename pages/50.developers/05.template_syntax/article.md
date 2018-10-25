---
title: 'Template Syntax'
slug: template_syntax
taxonomy:
    category: Developers
    tag:
        - intermediate
        - developers
        - templates
        - 'vbulletin api'
template: docs
---

[toc]
This topic contains reference and usage information about vBulletin template syntax. While most template code is simple HTML, it is necessary to be able to pull information from the API and database. In order to accomplish this, a pseudo-code has been developed for vBulletin that allows us to connect to the database and get the information we need. 

## vBulletin Shortcodes

### Variable Access

Wherever possible, reference variables in templates using the following syntax:
```
{vb:var variable}
```

Variables accessed this way are made “safe” by being run through htmlspecialchars as they are output.

To access array elements, use a dot operator rather than standard PHP square brackets:
```
{vb:var variable.foo} // accesses htmlspecialchars($variable['foo'])
{vb:var variable.$varkey} // accesses htmlspecialchars($variable[$varkey])
```
Raw Variables

To access variables in versions of vBulletin prior to V4, use the following syntax:
```
{vb:raw variable}
```

This is equivalent to simply accessing $variable in the pre-vB4 syntax. No treatment is applied to the variable. You should only use `vb:raw` if you have verified the information is safe before display. The same dot operator is used to access array elements.

### Shortcode Syntax

The general syntax for shortcode syntax is the following:

```
{vb:shortcode arg1[, arg2...]}
```

Inside the markup for different shortcodes, variables can be accessed without using a separate set of surrounding braces. For example:
```
{vb:shortcode {variable}} // unneccessary extra braces
{vb:shortcode variable}
```


### Built-In Shortcodes

vBulletin provides a number of shortcodes in order to request and process data to render the template properly. When templates are saved, this is converted to PHP code and cached for quicker processing.

#### API
These shortcodes allow you to call specific functionality with the vBulletin API.
- cssextra
- data
- hook
- if
- js
- phrase
- rawphrase
- redirect
- template
- stylevar

#### Date / Time
These shortcodes are used to format date and time values according to the chosen language format.
- date
- time

#### String
Shortcodes that allow you to change strings.
- strrepeat

#### URL
These shortcodes are used to create dynamic links within the vBulletin system.
- link
- url
- urlencode


#### Variables
These shortcodes allow you to show variables in different formats in the system.
- math
- number
- raw
- set
- variable

## vBHTML
In order to control the output of certain information based on specific criteria, several control structures have been implemented. All tags make use of the vb namespace for ease of identification and parsing. These are represented using HTML like tags. 

### Using vBHTML
To use these tags, they would be prefixed with vb:
```
<vb:tag>misc html</vb:tag>
```

#### Dot Notation.
Within vBHTML tags, you can reference the members of any array using a "dot notation" instead of the standard PHP array format. For example: member.member becomes $member['member'] when the template is compiled. 

### Available tags
#### if
Checks the condition specified. If the condition evaluates to true then the contens of the tag is output to the user. 
```
<vb:if condition="condition">true result</vb:if>
```

The following code is used in conjunction with vb:if.
##### elseif
```
<vb:elseif condition="condition" />true result
```

This allows a secondary condition to be checked and the true result to be output if the condition is met.

##### else
```
<vb:else />result
```
Used in conjunction with vb:if, the result is output if the `vb:if` condition failed. Any `vb:elseif` conditions must also fail.

##### Allowed Operators and Functions
In order to process the conditionals in an vb:if statement, a number of PHP and vBulletin functions have been made available. Using a function not in this list will cause compilation of the template to fail.
- PHP Literal Operators: AND, OR, XOR
- PHP Functions: in_array, is_array, is_numeric, is_string, isset, empty, defined, array, gmdate, mktime, gmmktime, count, size, preg_match, explode, array_shift, substr, strpos, strlen, reset, ceil, array_reverse, array_key_exists, date, range, end, prev, intval, sprintf
- vBulletin Functions: can_moderate, is_browser, is_member_of, is_came_from_search_engine, vbdate    

##### vb:if example
```
<vb:if condition="$show['member']">
    <b>Welcome Member.</b>
<vb:elseif condition="$show['guest]" />
    <b>Welcome Guest</b>
<vb:else />
    <b>Welcome</b>
</vb:if>    
```

#### each
Creates a loop in the template that parses the values in an Array. Similar to the foreach loop in PHP.

```
<vb:each from="members.members" value="member">
	{vb:template memberlist_item, member={vb:raw member}}
</vb:each>
```

#### comment
The comment tag appears like this:
```
<vb:comment>a comment</vb:comment>
``` 
It is used where a comment is necessary but the usual `<!-- comment -->` syntax is undesirable. The vb:comment tag allows its contents to be completely removed upon compiling, so they will not be delivered to the browser. This is useful for internal commenting.

#### literal
The literal tag is formatted like this: 
```
<vb:literal>misc code</vb:literal>
```

Anything within the literal tag is treated as plain HTML. No curly-brace syntax or vb:tag markup is evaluated. This tag is often used to allow JavaScript to parse without problems.

#### phrase

#### include