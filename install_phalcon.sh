# Install php phalcon framework
# @author: Gustavo Novaro
# run:
# sudo bash install.sh
apt install php-pear -y
apt install php7.4-dev -y
apt install libmcrypt-dev -y
pecl channel-update pecl.php.net
pecl install psr
pecl install phalcon
sudo pecl install mcrypt-1.0.3
touch /etc/php/7.4/mods-available/psr.ini
touch /etc/php/7.4/mods-available/phalcon.ini
touch /etc/php/7.4/mods-available/mcrypt.ini
echo 'extension=psr.so' | sudo tee -a psr.ini > /dev/null
echo 'extension=phalcon.so' | sudo tee -a phalcon.ini > /dev/null
echo 'extension=mcrypt.so' | sudo tee -a mcrypt.ini > /dev/null
cd /etc/php/7.4/cli/conf.d
ln -s /etc/php/7.4/mods-available/psr.ini
ln -s /etc/php/7.4/mods-available/phalcon.ini
ln -s /etc/php/7.4/mods-available/mcrypt.ini
cd /etc/php/7.4/fpm/conf.d
ln -s /etc/php/7.4/mods-available/psr.ini
ln -s /etc/php/7.4/mods-available/phalcon.ini
ln -s /etc/php/7.4/mods-available/mcrypt.ini
service php7.4-fpm reload
service nginx reload
