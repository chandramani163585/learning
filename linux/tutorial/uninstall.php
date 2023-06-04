
$ sudo systemctl stop apache2

###  Remove the Apache2 package and its dependencies by running the command:
$ sudo apt-get remove --purge apache2


### Remove any remaining configuration files by running the command:
$ sudo apt-get purge apache2

### Remove any remaining dependencies that were installed with Apache2 by running the command:
$ sudo apt-get autoremove


### Finally, verify that Apache2 has been completely removed by running the command:
$  apache2 -v
