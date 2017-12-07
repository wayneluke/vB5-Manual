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

## Variable Access

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

## Control Tags
In order to control the output of certain information based on specific criteria, several control structures have been implemented. All tags make use of the vb namespace for ease of identification and parsing. These are represented using HTML like tags. 

```
<vb:tag>misc html</vb:tag>
```
The following tags are available.
### IF
Checks the condition specified. If the condition evaluates to true then the contens of the tag is output to the user. 
```
<vb:if condition="condition">true result</vb:if>
```

The following code is used in conjunction with vb:if.
#### elseif
```
<vb:elseif condition="condition" />true result
```

This allows a secondary condition to be checked and the true result to be output if the condition is met.

#### else
```
<vb:else />result
```
Used in conjunction with vb:if, the result is output if the `vb:if` condition failed. Any `vb:elseif` conditions must also fail.

#### vb:if example
```
<vb:if condition="$show['member']">
    <b>Welcome Member.</b>
<vb:elseif condition="$show['guest]" />
    <b>Welcome Guest</b>
<vb:else />
    <b>Welcome</b>
</vb:if>    
```

### EACH

### COMMENT
The comment tag appears like this:
```
<vb:comment>a comment</vb:comment>
``` 
It is used where a comment is necessary but the usual `<!-- comment -->` syntax is undesirable. The vb:comment tag allows its contents to be completely removed upon compiling, so they will not be delivered to the browser. This is useful for internal commenting.

### LITERAL
The literal tag is formatted like this: 
```
<vb:literal>misc code</vb:literal>
```

Anything within the literal tag is treated as plain HTML. No curly-brace syntax or vb:tag markup is evaluated. This tag is often used to allow JavaScript to parse without problems.

## Built-In Methods

vBulletin provides a number of methods in order to request and process data to render the template properly. When templates are saved, this is converted to PHP code and cached for quicker processing.

### Method Syntax

The general syntax for template syntax is the following:

```
{vb:method arg1[, arg2...]}
```

Inside the markup for different methods, variables can be accessed without using a separate set of surrounding braces. For example:
```
{vb:method {variable}} // unneccessary extra braces
{vb:method variable}
```

### Methods
#### API
These methods allow you to call specific functionality with the vBulletin API.
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
- date
- time

#### String
- strrepeat

#### URL
- link
- url
- urlencode


#### Variables
- math
- number
- raw
- set
- variable



