Projeto completo em PHP para criar um Locadora de films.

STRUCTURE DES DOSSIERS MVC:

MODEL: Toutes les entités du système;

VIEW: les interfaces avec l'utilisateur

CONTROLLER: recebe as dados proviniente de moduleScript.js de chaque module et par la suite decide quel route du CRUD choisir selon le choix de l'utilisateur; Ensuite, il utilise le service fournit par DAO para persistir os dados na BD;

DAO (Data acce objet): classes responsables de la création du CRUD et de la persistance des données dans la base de données;

LES MODULES: chaque module possede, independament, son css, includes, js et view; js/ : possede 2 arquivos un pour l'écoute des événements (moduleScript.js): recoit les donnes provenant des Forms et envoie au Controlleur et l'autre(moduleFunction.js) pour les fonction lié à ceux événements.

TECNOLOGIA USADA:

-Requisicoes Ajax -API(PDO) para conecxao na base de dados -Bootstrape
