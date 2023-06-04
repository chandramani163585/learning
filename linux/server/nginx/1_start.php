#########   Nginx default ./Configuration (When we install it by `apt-get install nginx`) ############## 


--with-cc-opt='-g -O2 -fdebug-prefix-map=/build/nginx-lUTckl/nginx-1.18.0=. -fstack-protector-strong -Wformat -Werror=format-security -fPIC -Wdate-time -D_FORTIFY_SOURCE=2' --with-ld-opt='-Wl,-Bsymbolic-functions -Wl,-z,relro -Wl,-z,now -fPIC' --prefix=/usr/share/nginx --conf-path=/etc/nginx/nginx.conf --http-log-path=/var/log/nginx/access.log --error-log-path=/var/log/nginx/error.log --lock-path=/var/lock/nginx.lock --pid-path=/run/nginx.pid --modules-path=/usr/lib/nginx/modules --http-client-body-temp-path=/var/lib/nginx/body --http-fastcgi-temp-path=/var/lib/nginx/fastcgi --http-proxy-temp-path=/var/lib/nginx/proxy --http-scgi-temp-path=/var/lib/nginx/scgi --http-uwsgi-temp-path=/var/lib/nginx/uwsgi --with-debug --with-compat --with-pcre-jit --with-http_ssl_module --with-http_stub_status_module --with-http_realip_module --with-http_auth_request_module --with-http_v2_module --with-http_dav_module --with-http_slice_module --with-threads --with-http_addition_module --with-http_gunzip_module --with-http_gzip_static_module --with-http_image_filter_module=dynamic --with-http_sub_module --with-http_xslt_module=dynamic --with-stream=dynamic --with-stream_ssl_module --with-mail=dynamic --with-mail_ssl_module


Nginx Files: 
------------ 
/lib/systemd/system/nginx.service
sudo ln -s /etc/nginx/sites-available/domainmani.localhost /etc/nginx/sites-enabled/



#### list port 
---------------
sudo lsof -i :8080
sudo kill 1234

#### to check response time in curl 
curl -o /dev/null -s -w "%{time_total}\n" http://domainmani.localhost:8080/
curl -o /dev/null -s -w "%{time_total}\n" http://onlinetypingtest.in/


=======>
Theory for `$ sudo ufw allow 6081`
=======>

The command sudo ufw allow 8080 adds a rule to the Uncomplicated Firewall (UFW) to allow incoming traffic on port 8080. ufw is a front-end for iptables, a popular firewall software in Linux. By default, UFW is disabled in many Linux distributions, and this command enables it and allows incoming traffic on port 8080. This is useful when you have a web server running on port 8080 and want to allow external users to access it.

$ sudo ufw deny 8080          // disallow access to port 8080
$ sudo ufw delete deny 8080   //this will block all incoming traffic on port 8080
$ sudo ufw enable             // Remember to restart ufw after making any changes by running the command 


### to check which application is using port 8080
------------------------------------------------- 

$ sudo lsof -i :8080
$ sudo ps -p <PID>
# sudo ps -p 8080


#### To check which Port nginx running 
sudo lsof -i -P -n | grep nginx


### Search text in the Folder:
------------------------------ 
$ grep -r "search text" /path/to/folder/



$ sudo apt-get install php-fpm php-mysql

======= Testing the configuration ==========

$ sudo varnishd -C -f /etc/varnish/default.vcl   // Test the Varnish configuration syntax using the varnishd command:

## Test the Varnish service startup using the systemctl command:

$ sudo systemctl start varnish
$ sudo systemctl status varnish

## Test the Varnishncsa service startup using the systemctl command:

$ sudo systemctl start varnishncsa
$ sudo systemctl status varnishncsa

$ curl -I http://example.com    //Test the Varnish configuration by sending requests to your web server  
$ sudo systemctl restart varnish varnishncsa   ==> If everything looks good, you can restart the Varnish and Varnishncsa services using the systemctl command: 



=======>
Theory for `$ systemctl daemon-reload`
=======>
The systemctl daemon-reload command is used to reload the systemd manager configuration. This is necessary when changes are made to systemd configuration files, such as when modifying unit files or the default settings in /etc/systemd/system.conf or /etc/systemd/user.conf. The daemon-reload command causes systemd to reload its configuration files and units, so that any changes made to them are recognized and applied. This allows for the configuration changes to take effect without needing to reboot the system.


=======>
Theory for `$ netstat -plntu`
=======>


## Check a port number
telnet localhost 6081

systemctl daemon-reload



/etc/systemd/system/varnish.service
/etc/default/varnish
/etc/varnish/default.vcl
/etc/nginx/sites-available/domainmani.localhost
/etc/nginx/nginx.conf
/lib/systemd/system/varnishncsa.service.



/lib/systemd/system/varnishncsa.service
/lib/systemd/system/varnish.service
/etc/default/varnish
/etc/varnish/default.vcl

/etc/systemd/system/
/etc/systemd/system/varnish.service

