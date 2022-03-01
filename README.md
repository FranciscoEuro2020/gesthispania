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