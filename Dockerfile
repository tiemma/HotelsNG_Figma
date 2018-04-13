FROM httpd:alpine 

COPY . /var/www/html

CMD ['ls /var/www']