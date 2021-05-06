Projet complet en PHP pour créer une sorte de location de films.

STRUCTURE DES DOSSIERS MVC:

MODÈLE: Toutes les entités du système;

VUE: les interfaces avec l'utilisateur

CONTROLLER: reçoit les données provenant de moduleScript.js de chaque module et par la suite décide quelle route du CRUD choisir selon le choix de l'utilisateur; Ensuite, utilisez le service fournit pour DAO pour conserver les données dans la base de données;

DAO (Data acce objet): classes responsables de la création du CRUD et de la persistance des dons dans la base des donateurs;

LES MODULES: chaque module possède, indépendamment, des fils css, includes, js et view; js /: il dispose de 2 fichiers pour verser les éléments (moduleScript.js): récupérer les données provenant de Forms et envoyer à Controlleur et l'autre (moduleFunction.js) pour les polices liées à ceux événements.

TECHNOLOGIE UTILISÉE:

-Exigences d'Ajax -API (RFQ) pour la connexion à la base de données -Bootstrape
