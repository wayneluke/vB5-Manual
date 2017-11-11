---
title: 'Custom Domain Names.'
taxonomy:
    category:
        - docs
    tag:
        - beginner
        - 'getting started'
        - welcome
        - products
        - vbcloud
slug: custom_domain_names
template: docs
---
[toc]

With vBulletin Cloud, you can choose a custom domain name if you are the registrer of that name. Within the Cloud system, we will use a subdomain such as www.example.com or forum.example.com. This is handled by a CNAME Record that is created at your domain registrar or the hosting provider of your main website.

## Managing your CNAME Record

Updating your CNAME record allows you to point your custom domain (e.g. myvbulletincloud.com) to the sub-domain assigned to your account. In order to do this you’ll need to visit your domain name registrar and update the records on their site. If you are also using the domain for a regular site, you’ll need to redirect a sub-domain (e.g. forums.myvbulletincloud.com).

To add a CNAME record:

1.	Login into your domain name registrar’s management panel.
2.	Select the domain name you want to manage.
3.	Choose Manage Host Names, Host Name Records, or DNS Records
4.	Update the CNAME record to point to the subdomain assigned to your forum. This would look like: a2398af32123.vbulletin.net
5.	Save your records.
6.	Wait for the records to propagate. This can take up to 24 hours.

## Specific Registrars
Individual registrars will have their own steps to follow in order to set this up. Some more complex than others. Here is a list of various registrars and hosting providers. If you’re provider isn’t listed, you will need to contact them directly for help.

+ [123-Reg](http://www.123-reg.co.uk/support/answers/Domains/Domain-Configuration/how-do-i-set-up-a-cname-record-on-my-domain-name-1198/)
+ [Enom (and its affiliates)](http://www.enomcentral.com/help/dnsdemo.asp)
+ [GoDaddy](http://support.godaddy.com/help/article/680/managing-dns-for-your-domain-names)
+ [Hover](https://help.hover.com/hc/en-us/articles/217282457-How-to-Edit-DNS-records-A-CNAME-MX-TXT-and-SRV-Updated-Aug-2015-)
+ [Namecheap](https://www.namecheap.com/support/knowledgebase/article.aspx/1031/2/)
+ [Network Solutions](http://www.networksolutions.com/support/cname-records-host-aliases/)
+ [Register.com](http://support.launchrock.co/knowledgebase/articles/137754-register-com-cname-record-instructions)

## Hosting Providers
Hosting providers may also have their own practices. Here are links to some of the more common hosting providers.
+ [1&1](https://help.1and1.com/domains-c36931/domain-administration-c79822/dns-settings-c37586/enter-a-cname-record-for-your-domain-a643600.html)
* [A Small Orange](https://kb.asmallorange.com/customer/portal/articles/1603070-all-about-subdomains)
+ [Arvixe](https://blog.arvixe.com/making-dns-zone-changes-in-cpanel/)
+ [Hostgator](http://support.hostgator.com/articles/cpanel/how-to-change-dns-zones-mx-cname-and-a-records+) 
+ [HostMonster](https://my.hostmonster.com/cgi/help/cname)

## Getting Help With Your CNAME
+ If you need help finding your vBulletin Cloud subdomain, contact vBulletin Support.
+ If you need help changing your CNAME record contact your registrar or hosting provider. vBulletin Support cannot set up or create a CNAME for you.

