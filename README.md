#APP

1) Creamos la carpeta /symfony/mysql<br/>
2) Ejecutamos docker-compose up -d --build<br/>
3) Abrimos consola PHP: composer docker-compose exec php sh<br/>
4) Instalamos dependencias: composer install<br/>
5) Crear las tablas MySQL: php bin/console doctrine:schema:update --force<br/>
5) Abrimos http://localhost:8003 en el navegador<br/>

Cuando no estamos logados como usuario, podemos usar la aplicación como administrador y crear cursos y asignaturas desde el menú superior. Una vez logado el usuario puede registrarse en las distintas asignaturas/cursos.

#API
1) Abrir Postman<br/>
2) Click en Importar<br/>
3) Seleccionar Raw Text<br/>
4) Pegar el siguiente código:<br/>

{"info":{"_postman_id":"689301d1-cf25-4a39-83a9-59c766c3ac7a","name":"New Collection","schema":"https://schema.getpostman.com/json/collection/v2.0.0/collection.json"},"item":[{"name":"Añadir Subject","id":"1bdba7d9-517a-422c-8dcd-84c6db2a366d","protocolProfileBehavior":{"followOriginalHttpMethod":false},"request":{"method":"GET","header":[{"key":"name","value":"fran","type":"string","disabled":true},{"key":"salary","value":"40000","type":"string","disabled":true},{"key":"idClub","value":"1","type":"string","disabled":true}],"url":{"raw":"http://localhost:8003/api/subject/?name=lenguaje&duration=anual&credits=5","protocol":"http","host":["localhost"],"port":"8003","path":["api","subject",""],"query":[{"key":"name","value":"lenguaje","description":"nombre asignatura"},{"key":"duration","value":"anual","description":"duracion"},{"key":"credits","value":"5","description":"creditos"},{"key":"","value":"","disabled":true}]}},"response":[]},{"name":"Modificar","event":[{"listen":"prerequest","script":{"type":"text/javascript","exec":["//const idSubject = Math.floor((Math.random()*8)+1);","","const idSubject = 1;","pm.globals.set(\"idSubject\",idSubject);"]}}],"id":"55fe50d5-a3c1-415c-bd13-f90d5c478f0b","protocolProfileBehavior":{"followOriginalHttpMethod":false},"request":{"method":"PUT","header":[{"key":"name","value":"fran","type":"string","disabled":true},{"key":"salary","value":"40000","type":"string","disabled":true},{"key":"idClub","value":"1","type":"string","disabled":true}],"url":{"raw":"http://localhost:8003/api/subject/{{idSubject}}?name=matemáticas","protocol":"http","host":["localhost"],"port":"8003","path":["api","subject","{{idSubject}}"],"query":[{"key":"name","value":"matemáticas"}]}},"response":[]},{"name":"Borrar Subject","id":"57c98430-c5f3-4d78-83bc-15dd3334f8b6","request":{"method":"DELETE","header":[],"url":"http://localhost:8003/api/subject/2"},"response":[]},{"name":"Listado subjects","id":"dba41385-a687-442a-8196-f560cce99896","request":{"method":"GET","header":[],"url":"http://localhost:8003/api/subjects/"},"response":[]}]}



----
1) git clone https://github.com/FranciscoEuro2020/gesthispania.git
2) Ejecutamos docker-compose up -d --build<br/>
3) Abrimos consola PHP: composer docker-compose exec php sh<br/>
4) Instalamos dependencias: composer install<br/>
5) Crear las tablas MySQL: php bin/console doctrine:schema:update --force<br/>
5) Abrimos http://localhost:8003 en el navegador<br/> 

--------------------------------------------
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