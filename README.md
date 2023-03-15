# Laravel 9

projet de site de salle de sport construit avec laravel 9.

## Prérequis

- vscode 1.73.1
- composer 2.4.4
- artisan
- npm 8.19.2

## Installation

créer un dossier dans le terminal avec la commande :

```
composer create-project laravel/laravel site-salle-sport
```
puis une fois le dossier créé à l'intérieur de ce dossier,tapez la commande ci dessous dans le terminal

```bash
composer install
npm install
```

## Utilisation

Ouvrir le dossier qui vient d'être créé avec vscode puis éxécutez les actions ci-dessous.

Dans un premier terminal,lancez :

```bash
php artisan serve
```

Dans un autre terminal,lancez :

```bash
npm run dev
```

Pour voir la page d'accueil,ouvrez : [Accueil](http://127.0.0.1:8000)

## Mentions légales

Les images suivantes ont été utilisées :


[uomo in canotta arancione e pantaloncini neri che fanno esercizio photo – Photo Saskatchewan Gratuite sur Unsplash](https://unsplash.com/fr/photos/aclkvEMIfL8)

[tapis roulant in palestra photo – Photo Aptitude Gratuite sur Unsplash](https://unsplash.com/fr/photos/pCT8ag1o3nU)

[femmes qui dansent près d'un miroir photo – Photo Danse Gratuite sur Unsplash](https://unsplash.com/fr/photos/3ckWUnaCxzc)

[homme en maillot rouge portant des gants de boxe rouges photo – Photo Boxe Gratuite sur Unsplash](https://unsplash.com/fr/photos/hwHHq82Enf0)

[femme faisant du yoga méditation sur parquet marron photo – Photo Silhouette Gratuite sur Unsplash](https://unsplash.com/fr/photos/NTyBbu66_SI)

[gruppo di donne che fanno yoga photo – Photo Exercer Gratuite sur Unsplash](https://unsplash.com/fr/photos/gJtDg6WfMlQ)

[Photo Deux Gratuite sur Unsplash](https://unsplash.com/fr/photos/2j6IzAIbifQ)

# Faire fonctionner ce projet laravel en utilisant git clone

## Prérequis

- PHP
- composer 2.4.4
- nodejs 18.12.1 et npm 8.19.2
- vs code (un editeur de code...)
- cmd

## Installation


Pour commencer veuiller cloner ce projet avec git clone, en spécifiant le nom ssh pour cela vous pouvez saisir la commande suivante:

`git@github.com:FOTIECHARLES/site-salle-sport.git`

Veuillez ouvrir le dossier du projet qui vient d'être cloné avec votre éditeur code (Vs code pour être à l'intérieur du projet cloné)

Puis une fois que c'est fait, téléchargez les dépendances en tapant les commandes suivantes dans votre terminal d'abord `composer install` une fois le téléchargement terminé saisissez la commande suivante dans votre terminal `npm install` et veuillez appuyé sur entrer, lorsque le téléchargement sera terminé.

Maintenant à l'intérieur de votre cmd !, et non votre éditeur de code(vs code...); tapez la commande suivante `copy .env.example .env` dans le dossier laravel qui a été téléchargé lors du git clone !

 De plus vous pouvez revenir dans votre éditeur de code maintenant (vs code...)et saisir la commande dans le terminal`php artisan key:generate` et validez.

## Utilisation


Dans votre éditeur de code (Vs code...) ouvrez deux terminaux, dans le premier tapez la commande`php artisan serve` et dans le second terminal tapez la commande `npm run dev`.
Pour voir la page d'accueil,ouvrez : [Accueil](http://127.0.0.1:8000)
