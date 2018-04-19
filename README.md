# Drupal-7-mongodb-module-PHP-7.0 with mongodb_session module
Drupal 7 mongodb module Support for PHP7.0  with mongodb_session module

# In your drupal root put vendor.tar.gz lib files or install vendor using composer form git: https://github.com/alcaeus/mongo-php-adapter updated library.


# After alcaeus mongodb lib install do the config. in /sites/default/settings.php file given below:

require_once DRUPAL_ROOT . '/vendor/autoload.php';

# Config and install mongodb module from https://github.com/vaibbhav/Drupal-7-mongodb-module-PHP-7.0/tree/master/mongodb 

EXAMPLE:

$conf['mongodb_connections'] = array(
     'default' => array(
       'host' => '127.0.0.1',                       
       'db' => 'drupal',
      ),
   );
$conf['session_inc'] = 'sites/all/modules/mongodb/mongodb_session/mongodb_session.inc';

# Enable the mongodb module n here you go.


# Command for php install and switching php 5.5 to php 7.0 on ubuntu OS
-------------------------
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.0
sudo apt-get install libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json
sudo update-alternatives --set php /usr/bin/php7.0

sudo a2dismod php5.*
sudo a2enmod php7.0

# Apache: To revert PHP 5
sudo a2dismod php7.0 ;
sudo a2enmod php5.6 ;
sudo service apache2 restart

# CLI: To revert PHP 5
sudo update-alternatives --set php /usr/bin/php5.6

sudo apt-get install php5.6-dom for Class 'DOMDocument' 

# Ref. 
https://www.digitalocean.com/community/questions/how-to-downgrade-php7-to-php5-x


