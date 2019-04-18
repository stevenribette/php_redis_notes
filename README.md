# php_redis_notes
Php api communicate with redis

COMMANDE SANS HTACCESS
- ajouter une note
curl -H "Content-Type:text/plain" -d 'notes={"key":"baguette", "value":"prendre du pain"}' -X POST http://localhost:8080/notes.php
- récupérer toutes les notes
curl http://localhost:8080/notes.php?notes
- récupérer une note
curl http://localhost:8080/notes.php?note=baguette


COMMANDE AVEC HTACCESS
- ajouter une note
curl -H "Content-Type:text/plain" -d 'notes={"key":"baguette", "value":"prendre du pain"}' -X POST http://localhost:8080/notes
- récupérer toutes les notes
curl http://localhost:8080/notes
- récupérer une note
curl http://localhost:8080/notes/baguette