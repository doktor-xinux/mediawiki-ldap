FROM mediawiki:latest
RUN  apt-get update &&  apt-get install libldap2-dev apache2-bin  -y &&  rm -rf /var/lib/apt/lists/* &&  docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ && docker-php-ext-install ldap
COPY OwnPlugins.php /var/www/html
RUN a2enmod authnz_ldap
