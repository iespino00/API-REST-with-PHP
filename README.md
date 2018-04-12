# API-REST-with-PHP
 
# Los códigos de respuesta que utilizaremos en este tutorial son:


1. **500** : Internal Server Error → Se ha producido un error interno
2. **422** : Unprocessable Entity → Entidad no procesable
3. **400** : Bad Request → La solicitud contiene sintaxis errónea y no debería repetirse
4. **204** : No Content → La petición se ha completado con éxito pero su respuesta no tiene ningún contenido


Para este tutorial, las URL que emplearemos son los siguientes:


* GET /peoples → recuperara una lista de personas.
* GET /peoples/1 → recupera la información de una persona en especifico.
* POST /peoples → Crea una nueva persona
* PUT /peoples/1 → Actualiza el registro con el ID 1
* DELETE /peoples/1 → Elimina el registro con ID 1

# Un ejemplo de lo que NO se debe hacer:


* POST /personas/agregar <<NO usar verbos>>
* GET /personas/sillas/crustaceos <<wtf>>


# Para probar el API puedes usar Insomnia, y configurar las siguientes peticiones dependiendo de la ruta de tu proyecto:
1. obtener personas : **GET** : http://localhost/tuProyecto/peoples
2. persona por ID : **GET** : http://localhost/tuProyecto/peoples/1
3. nueva persona : **POST** : http://localhost/tuProyecto/peoples
4. actualizar registro : **PUT** : http://localhost/tuProyecto/peoples/1
5. eliminar registro : **DELETE** : http://localhost/tuProyecto/peoples/1