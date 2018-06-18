---
Title: NGINX Config

---
[toc]
```
server {
        # address and port accepted by the server
        listen   80; ## listen for ipv4
        #listen   [::]:80 default ipv6only=on; ## listen for ipv6

        # server IP to compare against http requests, uncomment and set proper value.
        # Enter the hostname or IP address you use to reach this server. If you run on your dev environment it might be localhost.
        # Note: If your vb install is in a folder inside your domain <mysite>/forum/install/path please change location directives defined below to include the path first. e.G:
        # vbulletin.com/forum
        #
        # css directive would be:
        # location = /forum/css\.php {
        #        rewrite ^ /forum/core/css.php break;
        #}
        #server_name      127.0.0.1;

        # document root for request,  uncomment and set proper value
	# this should reflect the path that your vBulletin is installed in. 
	# This is usually /var/www/public_html/forumpath
        #root   /var/www/public_html/forumpath;
        index   index.php index.html index.htm;

	# log files, uncomment and set proper values
        #access_log      /usr/share/nginx/www/vb/logs/access.log;
        #error_log       /usr/share/nginx/www/vb/logs/nginx_error.log;

	# configuration rules
        # legacy css being handled separate for performance
        location = /css\.php {
                rewrite ^ /core/css.php break;
        }

        # make install available from presentation
        location ^~ /install {
                rewrite ^/install/ /core/install/ break;
        }

        # any request to not existing item gets redirected through routestring
        location / {
                if (!-f $request_filename) {
                        rewrite ^/(.*)$ /index.php?routestring=$1 last;
                }
        }

        # make admincp available from presentation
        location ^~ /admincp {
                if (!-f $request_filename) {
                        rewrite ^/admincp/(.*)$ /index.php?routestring=admincp/$1 last;
                }
        }

        # process any php scripts, not found gets redirected through routestring
        location ~ \.php$ {
                # handles legacy scripts
                if (!-f $request_filename) {
                        rewrite ^/(.*)$ /index.php?routestring=$1 break;
                }

                fastcgi_split_path_info ^(.+\.php)(.*)$;
                fastcgi_pass phpfastcgi;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
                fastcgi_param QUERY_STRING $query_string;
                fastcgi_param REQUEST_METHOD $request_method;
                fastcgi_param CONTENT_TYPE $content_type;
                fastcgi_param CONTENT_LENGTH $content_length;
                fastcgi_intercept_errors on;
                fastcgi_ignore_client_abort off;
                fastcgi_connect_timeout 60;
                fastcgi_send_timeout 180;
                fastcgi_read_timeout 180;
                fastcgi_buffers 256 16k;
                fastcgi_buffer_size 32k;
                fastcgi_temp_file_write_size 256k;
        }
}

upstream phpfastcgi {
	# address to accept FastCGI requests. Make sure you set the right value under your fast cgi conf.
	server    unix:/var/run/php/php7.0-fpm.sock;
}
```