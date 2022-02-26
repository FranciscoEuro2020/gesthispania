#Symfony instalado Symfony 5.4.2
#Para instalar docker de primeras ejecutamos
1)Creamos la carpeta mysql en el raiz
2)docker-compose up -d --build

#Para iniciar los servicios
docker-compose up -d

#coleccion postman
https://www.getpostman.com/collections/83edb9c4aa35d6370a6d

#Developers
#acceder a nuestro contenedor donde se encuentra PHP
docker exec -it gesthispania_php_1 bash
instalamos symfony
0)git config --global user.email "you@domain.com"
git config --global user.name "github_username"
1)curl -sS https://get.symfony.com/cli/installer | bash
2)mv /root/.symfony/bin/symfony /usr/local/bin/symfony
3)symfony new symfony --dir=/var/www/symfony

#crear entidades BD
bin/console make:entity
php bin/console doctrine:schema:update --force
------------------------
#Run this installer to create a binary called symfony:
wget https://get.symfony.com/cli/installer -O - | bash

#Doctrine
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

#instalar paginacion
composer require knplabs/knp-paginator-bundle
#Instalamos notificacion de envios de email, con posibilidad de otros canales(SMS, mensajes de Slack,etc)
composer require symfony/notifier
#para la prueba instalamos el canal email,dejando la posibilidad de otros canales
composer require symfony/twig-pack twig/cssinliner-extra twig/inky-extra
composer require symfony/mailer
#limpiar la cache
php bin/console cache:pool:clear cache.global_clearer



tenemos que poner public: true en services.yaml

php bin/console debug:router 
vemos las rutas