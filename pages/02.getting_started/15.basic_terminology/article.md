---
title: 'Basic Terminology'
taxonomy:
    chapter:
        - getting_started
    tag:
        - beginner
        - 'getting started'
        - welcome
slug: basic_terminology
visible: true 
template: docs
---

 vBulletin 5 Connect introduces some new concepts on how content is contained in the system. In previous versions, each content type was separate with its own programming, database tables and functionality. In vBulletin 5 Connect, we've eliminated the redundancy this caused and that has required some new terms to be introduced.

**vBulletin Site**
:   This refers to your vBulletin 5 Connect installation including all of its content, pages and users.

**Forum Root**
:   This is the directory that you installed vBulletin 5 Connect in. In most cases this with by public_html.

**Presentation Layer**
:   A layer of vBulletin 5 Connect that draws the pages for the web interface or what users see when they visit using a Web Browser.

**Mobile Layer**
:   Interface that allows the Mobile Apps to retrieve information from the vBulletin installation. This layer is built into the Mobile App and communicates to the Core Layer via APIs.

**Core Layer**
:   The core layer of vBulletin 5 Connect. This interface layer talks with the database and API to provide all the data. It is called from the Presentation and Mobile Layers.


## Other Concepts
**What are Channels?**
:   Channels are Nodes that can contain other Nodes. In vBulletin 5, Channels include: Forums, Articles, Blogs, Social Groups, Private Messages, Visitor Messages, User Albums, and Flagged (reported) Content. Additional Channels may be added in the future. Some channels can be maintained with the Channel Management (formerly Forum Management) tools in the Admin CP. Others are hidden from view and maintained by the individual users.

**What are Nodes?**
:   Nodes are any content within vBulletin 5. They can be discussions, photos, links or channels among other content types. Generally speaking you will refer to nodes by their content type.

**What are Content Types?**
:   Content Types allow your users to control how their contributions are presented to others. These can be Photo Galleries, Links, Polls, or Text. Each content type can be used to create topics on the site. As the Administrator, you control the content types that are available to users through permissions.

**What is a Channel Owner?**
:   The user that has ownership of a channel. They control what happens in the channel itself. Blogs and Social Groups are examples of channels that can have owners.

**What is a Channel Moderator?**
:   A user appointed by the Channel Owner to moderate that channel. Blogs and Social Groups are examples of channels that can have moderators.

**What is a Channel User?**
:   Some channels can be made private. A Channel User is an individual that has permission to access a specific channel. Social Groups are an example of channels that have users.

**What are Subscribers?**
:   Subscribers are people who want to follow a user, channel, or topic.