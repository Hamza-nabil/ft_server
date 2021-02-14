FROM debian:buster
RUN apt-get update && apt-get install wget -y
RUN apt-get install vim nginx -y
COPY /srcs/default /etc/nginx/sites-available/
RUN apt-get install mariadb-server mariadb-client -y 
RUN  apt-get install  php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cli php-fpm php-cgi php-mysql -y
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz && mkdir /var/www/html/phpmyadmin &&  tar xzf phpMyAdmin-5.0.4-english.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
RUN rm /var/www/html/phpmyadmin/config.sample.inc.php
COPY /srcs/config.inc.php /var/www/html/phpmyadmin/
RUN chmod 660 /var/www/html/phpmyadmin/config.inc.php && chown -R www-data:www-data /var/www/html/phpmyadmin
RUN service mysql start && mysql -u root -e "CREATE DATABASE wordpress;GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost'; FLUSH PRIVILEGES;update mysql.user set plugin = 'mysql_native_password' where user='root';"
RUN service mysql start && mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'hnabil'@'localhost' IDENTIFIED BY '123';FLUSH PRIVILEGES;"
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/CN=MA" && openssl dhparam -out /etc/nginx/dhparam.pem 64
COPY /srcs/self-signed.conf /etc/nginx/snippets/
COPY /srcs/ssl-params.conf /etc/nginx/snippets/
COPY /srcs/localhost.sql /
RUN service mysql start && mysql -u root < /localhost.sql
COPY /srcs/wordpress /var/www/html/wordpress
COPY /srcs/script.sh /
ENTRYPOINT "/script.sh"
