#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive
sed -i "s/buster main/buster main contrib/"  /etc/apt/sources.list
apt-get update

echo "Update packages"
apt-get install wget gnupg2 -y
wget -q https://packages.sury.org/php/apt.gpg -O- | apt-key add -
apt-get install ca-certificates apt-transport-https wget -y
echo "deb https://packages.sury.org/php/ buster main" | tee /etc/apt/sources.list.d/php.list
apt-get update
apt-get upgrade -y


echo "localhost" > /etc/hostname
hostname --file /etc/hostname


echo "Installing APT packages"
apt-get install lsb-release ca-certificates sudo wget curl git-core build-essential \
  vim elinks zip unzip software-properties-common apache2 php7.4-mysql \
  libapache2-mod-php7.4 php7.4-cli php7.4-curl php7.4-gd php7.4-mbstring php7.4-imagick \
  php7.4-dev php7.4-xml php7.4-json php7.4-intl php7.4-zip php7.4-bcmath \
   php7.4-soap mariadb-server autoconf automake build-essential   -y


if [ ! -f /usr/local/bin/composer ]; then
  echo "Get composer"
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin
  mv /usr/bin/composer.phar /usr/bin/composer
  chmod a+x /usr/bin/composer
fi

echo "Installing postfix"
debconf-set-selections <<<"postfix postfix/mailname string dev.consorzisdb.it"
debconf-set-selections <<<"postfix postfix/main_mailer_type string 'Internet Site'"
apt-get install -y postfix


if [ ! -f /usr/sbin/mysqld ]; then
    echo "Installing packages - mysql"
    DEBIAN_FRONTEND=noninteractive apt-get  -y install mysql-server
    sudo mysql -u root -e "update mysql.user set plugin = 'mysql_native_password' where User='root';"
    mysqladmin -u root password root
    service mysql restart
fi
if ls -c1 /var/lib/mysql | grep gallery; then
     echo "Database exists nothing to do"
else
     echo "Create database"
     mysqladmin -u root -proot create gallery
fi


if [ ! -f /usr/lib/php/20180731/xdebug.so ]; then
  echo "Configuring php xdebug"
  wget http://xdebug.org/files/xdebug-2.9.6.tgz -O /tmp/xdebug-2.9.6.tgz
  cd /tmp
  tar -xvzf xdebug-2.9.6.tgz
  cd /tmp/xdebug-2.9.6
  phpize
  ./configure
  make
  cp modules/xdebug.so /usr/lib/php/20190902
  cat <<EOF >>/etc/php/7.4/apache2/php.ini

zend_extension =/usr/lib/php/20190902/xdebug.so

[Xdebug]

xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_port = 9000
xdebug.idekey = "PHPSTORM"
xdebug.remote_host=33.33.33.1
xdebug.autostart=1

EOF

fi

if [ "$(grep -c vagrant /etc/apache2/sites-enabled/000-default.conf)"=="0" ]; then
  echo "Configuring Apache2"

  sed -i 's/\/var\/www\/html/\/vagrant\/public/g' /etc/apache2/sites-enabled/000-default.conf
  sed -i 's/<\/VirtualHost>//g' /etc/apache2/sites-enabled/000-default.conf

  cat <<EOF >>/etc/apache2/sites-enabled/000-default.conf
    <Directory /vagrant/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF

  a2enmod rewrite
  service apache2 restart
fi

echo "Installing yarn"
curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list


