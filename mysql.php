$ sudo apt-get install mysql-server

### Login as a root user in mysql . 

CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'newuser'@'localhost';

Example: 
CREATE USER 'mani'@'localhost' IDENTIFIED BY '123456'; 
GRANT ALL PRIVILEGES ON *.* TO 'mani'@'localhost';

##1 List Isers
SELECT User FROM mysql.user;
