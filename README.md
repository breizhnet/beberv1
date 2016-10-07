Projet Béber Application
========================


Symfony Documentation
---------------------

> **Arborescence**
>
> Répertoire app/ 
> HTML : app/Resources/views et app/Resources/FOSUserBundle/views
> Le premier répertoire contient les fichiers html ( ne vous formalisez pas sur l'extension .twig, le contenu est du html ) génériques à l'ensemble de l'appli ( le fichier base.html.twig étant l'equivalent d'un index.html )
> Le second répertoire contient les fichiers html spécifique à la gestion utilisateurs ( formulaire de connexion, page de profile, formulaire d'inscription etc etc )
>
> Répertoire src/
> Il contient le code PHP de notre projet. 
> Entity : class php servant de modèle base de données
> Controller: class php qui comprendra les controllers de notre application ( en gros, tout ce qui doit être affiché/enregistré/mis à jour doit passer dans un controlleur pour vérifier que ce que l'on affiche correspond bien à ce qu'on a demandé.
>
> Répertoires bin/ vendor/ sont des répertoires à ignorer. vendor/ contient les librairies/codes sources/ mise à disposition par des dév. Chaque code est ajouté via des commandes en fonction des besoins. 
>
> Répertoire web/ 
> c'est dans ce repertoire que seront ajoutés tous les élements publiques de l'appli ( images, feuilles de styles, javascript
>
Bundle utilisé
------------

  * FOSUserBundle : gestion des utilisateurs : [FOSUserBundle Doc](https://symfony.com/doc/master/bundles/FOSUserBundle/index.html)
  

