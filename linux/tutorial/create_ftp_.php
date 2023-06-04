
$ sudo apt-get install vsftpd 
$ sudo nano /etc/vsftpd.conf 
  - write_enable=YES
  - local_umask=022
  - chroot_local_user=YES


  Create an FTP user:

  $ sudo adduser ftpuser



  