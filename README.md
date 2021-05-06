Projet complet en PHP pour créer une sorte de location de films.

STRUCTURE DES DOSSIERS MVC:

MODÈLE: Toutes les entités du système;

VUE: les interfaces avec l'utilisateur

CONTROLLER: reçoit les données provenant de moduleScript.js de chaque module et par la suite décide quelle route du CRUD choisir selon le choix de l'utilisateur; Ensuite, utilisez le service fournit pour DAO pour conserver les données dans la base de données;

DAO (Data acce objet): classes responsables de la création du CRUD et de la persistance de données;

LES MODULES: chaque module possède, indépendamment son css, includes, js et view; 
le js: il dispose de 2 fichiers, un pour l'écoute des événements (moduleScript.js)qui récupérer les données provenant du Forms et  envoie par la suite au Controlleur et l'autre (moduleFunction.js) pour les fonctions  liées à ceux événements.

TECHNOLOGIE UTILISÉE:

-Requêtes d'Ajax -API (PDO) pour la connexion à la base de données -Bootstrape
