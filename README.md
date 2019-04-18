# php_redis_notes
Php api communicate with redis

Nécessite d'être executé sur un serveur apache, et d'avoir un serveur redis.

Il faut éditer les paramètres de connexion à redis dans la fonction "connect()".

COMMANDE SANS HTACCESS
- ajouter une note :
curl -H "Content-Type:text/plain" -d 'notes={"key":"baguette", "value":"prendre du pain"}' -X POST http://localhost:8080/notes.php
- récupérer toutes les notes :
curl http://localhost:8080/notes.php?notes
- récupérer une note :
curl http://localhost:8080/notes.php?note=baguette


COMMANDE AVEC HTACCESS
- ajouter une note :
curl -H "Content-Type:text/plain" -d 'notes={"key":"baguette", "value":"prendre du pain"}' -X POST http://localhost:8080/notes
- récupérer toutes les notes :
curl http://localhost:8080/notes
- récupérer une note :
curl http://localhost:8080/notes/baguette