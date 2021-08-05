# Exercice BLOG par IntegraGen

Ce petit projet est un blog incomplet, à corriger et améliorer.

## Avant de commencer
Votre machine doit disposer
* PHP 7.3 ou supérieur
* Mysql 5.7 ou équivalent ( MariaDB )
* Editeur de code ( Notepad, Sublime text, VS Code ... )
* Composer

## Installation
Afin d'installer le projet, il faut :
* Cloner le repository
* composer install a la racine du projet
* Mettre a jour votre fichier .env afin d'accéder a la base
* php bin/console doctrine:database:create
* php bin/console doctrine:schema:update --force
* Vous connecter a la base de données et y insérer le jeux de données présent dans le dossier sql/ 

## Exercices
### Compétence en twig
1) Dans la liste des blogs, chaque blog dispose d'une date qui ne semble pas présente, il faut donc faire apparaitre la date au format jour/mois/année

2) Dans la liste des blogs, un bouton *Lire la suite* est disponible, mais n'amène pas au dit blog, il faut donc mettre en place le lien.

3) Dans la vue d'un blog, le contenu de ce-dernier est un HTML, qui ne semble pas interprété.

4)

### Compétence en CSS
L'interface actuel utilise bootstrap 5
1) La vue d'un blog est plutôt basique, améliorer la afin d'avoir une zone a gauche pour l'auteur et la date du blog, et une zone a droite avec le contenu.

2) 

### Compétence en Javascript
1) Les blogs déjà présents sont trié par ordre croissant d'id de la base de données. Nous aimerions un tri par date croissant ou décroissant sur le clic du bouton "Trier par date : Croissant" et ceux sans recharger la page.

2) 
### Manipulation d'entité
1) Le schéma actuel nous propose un champs author en string, donnée redondante quand un auteur écrit plusieurs articles. Changez le système d'entité pour éviter cette redondance.

### Manipulation globale
1) L'application dans l'état actuel ne propose pas de création d'article. C'est a vous de le faire.

2) L'application dans l'état actuel ne permet pas la suppression d'un article. C'est a vous de le faire.

### Système poussé ( bonus )
1) La création et la suppression d'un article ne devrait pas être donnée a tout le monde, il faut donc mettre en place un système de sécurité.

2) On aimerait pouvoir utiliser les blogs existants dans divers applications, pour cela, il faudrait un accès API en GET pour récupérer les blogs et avoir un retour en JSON.

## Annexes
* Schéma de la base de données dans le dossier sql/schema.png
* Symfony doc : https://symfony.com/doc/current/index.html
* Bootstrap 5 : https://getbootstrap.com/docs/5.0/getting-started/introduction/