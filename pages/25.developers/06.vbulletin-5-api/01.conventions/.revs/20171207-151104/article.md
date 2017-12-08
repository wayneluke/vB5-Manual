Conventions
-----------

In this documentation, you will find a number of styles of text that distinguish between different kind of information. Here are some examples of these styles and an explaination of their meaning.

API method names and parameters in text are shown as follows: "You can call **[`user.login`](VB5_API:user.login "wikilink")** to login into vBulletin. `nodeid` is a parameter of **[`node.getNode`](VB5_API:node.getNode "wikilink")** method." 

File names and URLs in text are show as follows: "It will load *index.php*, similar to web frontend URL *http://www.yourforumurl.com/**index.php***."

There will also be inline code in within the text: "With the line `x = var / 2 * 1.5`, we get the value of `x`."

A block of code is set as follows:
```
    #include <iostream>
    int main ( int argc,  char **argv ) {
        std::cout << "Hello World!";
        return 0;
    }
```

**Terms** and **important words** are shown in bold.

All API methods return JSON data. Let's take an example (Part of response from **[`node.getNode`](VB5_API:node.getNode "wikilink")**):
```
    {
       "userid": "1",
       "usergroupid": "6",
       "membergroupids": "",
       "displaygroupid": "6",
       "username": "admin",
       "password": "696d29e0940a4957748fe3fc9efd22a3",
       "passworddate": "1330646424",
       "email": "admin@admin.com",
       "styleid": 1,
       "parentemail": "",
       "fbjoindate": "0",
       "fbname": "",
       "logintype": "vb",
       "fbaccesstoken": "",
       "saved_languageid": "0",
       "lang_options": {
          "direction": true,
          "dirmark": false
       },
       "displayusertitle": "Administrator",
       "realstyleid": "0",
       "securitytoken_raw": "bfcd705e0a008c00f06ed49b73c76626dc2b9ada",
       "securitytoken": "1331287150-8087cbcbe0c93e48c48ca592df5bc0cbe9bef64f",
       "logouthash": "1331287150-8087cbcbe0c93e48c48ca592df5bc0cbe9bef64f",
       "is_admin": true,
       "can_use_sitebuilder": true,
       "maxposts_calculated": 10
    }
```

In this documentation, we use this way to refer items of the JSON
response:

-   `userid = 1`
-   `lang_options.direction = 1`