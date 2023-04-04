
### Unistall nginx ( From Source Code ):
-----------------------------------

$ sudo systemctl stop nginx 
$ cd /usr/local/nginx
$ sudo make uninstall
$ sudo deluser nginx
$ sudo delgroup nginx


Note: 
If you are seeing the error message "make: *** No rule to make target 'uninstall'. Stop."
sudo rm -rf /usr/local/nginx

In this case, you can try the following steps to remove Nginx manually:

$ sudo systemctl stop nginx
$ sudo rm -rf /usr/local/nginx


#### list port 
---------------
sudo lsof -i :8080
sudo kill 1234


### nginx.service 
-------------------
/lib/systemd/system/nginx.service

Put below code:
-------------

[Unit]
Description=The NGINX HTTP and reverse proxy server
After=syslog.target network-online.target remote-fs.target nss-lookup.target
Wants=network-online.target

[Service]
Type=forking
PIDFile=/var/run/nginx.pid
ExecStartPre=/usr/bin/nginx -t
ExecStart=/usr/bin/nginx
ExecReload=/usr/bin/nginx -s reload
ExecStop=/bin/kill -s QUIT $MAINPID
PrivateTmp=true

[Install]
WantedBy=multi-user.target



### Create multipal domain on same nginx
----------------------------------------

$ sudo nano /etc/nginx/sites-available/pacific.localhost
 

@@@@ normal
server {
    listen 8080 ;
    listen [::]:8080;

    server_name test.localhost;
    root /home/rudra1/Desktop/chandramani/pacific.localhost;
    index index.html index.htm;

    location / {
        try_files $uri $uri/ =404;
    }
}

@@@@ for wordpress
server {
    listen 8080;
    listen [::]:8080;
    server_name pacific.localhost;
    root /home/rudra1/Desktop/chandramani/nginx_server/pacific.localhost;
    index index.php index.html index.htm;

    location / {
        ##try_files $uri $uri/ =404;
        try_files $uri $uri/ /index.php ;
    }

    location ~ \.php$ {
        include fastcgi_params;
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
    }
}




$ sudo ln -s /etc/nginx/sites-available/pacific.localhost /etc/nginx/sites-enabled/
$ sudo nginx -t
$ sudo systemctl restart nginx


### Register multipal localhost on ubuntu:
-----------------------------------------
@@ register subdomain
sudo nano /etc/hosts
127.0.0.1   test.localhost
sudo service networking restart
sudo systemd-resolve --flush-caches

@@ verify subdomain

sudo systemctl start nginx
sudo systemctl start nginx
sudo ls -l /etc/nginx/sites-available/
sudo ln -s /etc/nginx/sites-available/test.localhost /etc/nginx/sites-enabled/
sudo systemctl reload nginx
cd /home/rudra1/Desktop/chandramani/test.localhost
ls


sudo /usr/sbin/nginx -t



/home/rudra1/Downloads 










### to check which application is using port 8080
$ sudo lsof -i :8080
$ sudo ps -p <PID>
sudo ps -p 8080

nginx path prefix: "/usr/local/nginx"
nginx binary file: "/usr/local/nginx/sbin/nginx"
nginx modules path: "/usr/local/nginx/modules"
nginx configuration prefix: "/usr/local/nginx/conf"
nginx configuration file: "/usr/local/nginx/conf/nginx.conf"
nginx pid file: "/usr/local/nginx/logs/nginx.pid"
nginx error log file: "/usr/local/nginx/logs/error.log"
nginx http access log file: "/usr/local/nginx/logs/access.log"
nginx http client request body temporary files: "client_body_temp"
nginx http proxy temporary files: "proxy_temp"
nginx http fastcgi temporary files: "fastcgi_temp"
nginx http uwsgi temporary files: "uwsgi_temp"
nginx http scgi temporary files: "scgi_temp"



./configure --sbin-path=/usr/bin/nginx --conf-path=/etc/nginx/nginx.conf --error-log-path=/var/log/nginx/error.log --http-log-path=/var/log/nginx/access.log --with-pcre --pid-path=/var/run/nginx.pid --with-http_ssl_module






#### The curl -T command is used to upload a local file to a remote server using the HTTP PUT method.
curl -T /path/to/local/file.ext http://example.com/remote/file.ext


#### Create-subdomain-with-nginx 
https://chukwuemekaigbokwe.medium.com/how-to-create-subdomain-with-nginx-ubuntu-in-digital-ocean-13a12c5805d8 



/run/php/php8.0-fpm.sock


/home/rudra1/Desktop/chandramani/laravel 

grep -r "/home/rudra1/Desktop/chandramani/laravel" /path/to/folder/










  sudo apt-get update
  sudo apt-get install php-fpm php-mysql

  sudo nano /etc/php/7.4/fpm/pool.d/www.conf
listen = 127.0.0.1:8080
listen.allowed_clients = 127.0.0.1


location ~ \.php$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass 127.0.0.1:9000;
}




sudo systemctl reload nginx





sudo nano /etc/nginx/snippets/fastcgi-php.conf


# regex to split $uri to $fastcgi_script_name and $fastcgi_path
fastcgi_split_path_info ^(.+\.php)(/.+)$;
# Check that the PHP script exists before passing it
try_files $fastcgi_script_name =404;
# Bypass the fact that try_files resets $fastcgi_path_info
# see: https://trac.nginx.org/nginx/ticket/321
set $path_info $fastcgi_path_info;
fastcgi_param PATH_INFO $path_info;
fastcgi_index index.php;
include fastcgi_params;



 


