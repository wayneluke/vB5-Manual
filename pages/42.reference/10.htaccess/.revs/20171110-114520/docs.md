---
title: .htaccess
slug: htaccess
taxonomy:
  category: Reference
  tag: [beginner, getting started, welcome]
template: docs
---
This is the default vBulletin 5 .htaccess file.

```
<IfModule mod_rewrite.c>
	RewriteEngine On

	#In some cases where you have other mod_rewrite rules, you may need to comment out the following line
	#and change it to match your folder name. This resets the other mod_rewrite rules for just this directory
	#If your site was www.example.com/forum, the setting would be /forum/
	#RewriteBase /

	# Send css calls directly to the correct file VBV-7807
	RewriteRule ^css.php$ core/css.php [NC,L]

	# Redirect old install path to core.
	RewriteRule ^install/ core/install/ [NC,L]

	# Main Redirect
	RewriteCond %{REQUEST_URI} !\.(gif|jpg|jpeg|png|css)$
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ index.php?routestring=$1 [L,QSA]

	# Because admincp is an actual directory.
	RewriteRule ^(admincp/)$ index.php?routestring=$1 [L,QSA]

</IfModule>

<IfModule mod_expires.c>
	ExpiresActive On
	ExpiresByType application/x-javascript A1209600
	ExpiresByType text/javascript A1209600
	ExpiresByType application/javascript A1209600
	ExpiresByType text/css A31536000
	ExpiresByType image/x-icon A2592000
	ExpiresByType image/icon A2592000
	ExpiresByType application/x-ico A2592000
	ExpiresByType application/ico A2592000
	ExpiresByType image/gif A2592000
	ExpiresByType image/jpeg A1209600
	ExpiresByType image/jpg A1209600
	ExpiresByType image/png A1209600
	ExpiresByType application/x-shockwave-flash A1209600
	ExpiresByType font/ttf A2592000
	ExpiresByType font/otf A2592000
	ExpiresByType font/x-woff A2592000
	ExpiresByType image/svg+xml A2592000
	ExpiresByType font/truetype A2592000
	ExpiresByType font/opentype A2592000
	ExpiresByType application/x-font-woff A2592000
	ExpiresByType application/vnd.ms-fontobject A2592000
</IfModule>

<IfModule mod_headers.c>
    Header set Connection keep-alive
	<filesmatch "\.(ico|flv|gif|swf|eot|woff|otf|ttf|svg)$">
		Header set Cache-Control "max-age=2592000, public"
	</filesmatch>
	<filesmatch "\.(jpg|jpeg|png)$">
		Header set Cache-Control "max-age=1209600, public"
	</filesmatch>
	<filesmatch "\.(eot|woff|otf|ttf|svg)$">
		Header set Cache-Control "max-age=2592000, public"
	</filesmatch>
	# css and js should use private for proxy caching https://developers.google.com/speed/docs/best-practices/caching#LeverageProxyCaching
	<filesmatch "\.(css)$">
		Header set Cache-Control "max-age=31536000, private"
	</filesmatch>
	<filesmatch "\.(js)$">
		Header set Cache-Control "max-age=1209600, private"
	</filesmatch>
</IfModule>

```
