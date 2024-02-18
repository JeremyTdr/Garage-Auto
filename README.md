# Garage Auto Parrot

Site web vitrine + console administrateur pour le Garage automobile Parrot

## Déploiement du projet en local

**> Serveur Web local**

Télécharger et installer un serveur web local donnant accès à PHP ainsi qu'un système de gestion de BDD MySQL (ex : XAMPP, WAMP, MAMP, ...)

**> Node JS**

Téléchargement et installation via le site de Node JS :

```
https://nodejs.org/en/
```

Vérifier le statut d'installation en regardant la version installée :

```
npm -v
```

Initialiser le projet :

```
npm init
```

**> SASS**

Installer Sass :

```
npm -g install sass
```

Vérifier le status d'installation en regardant la version installée :

```
sass --version
```

Dans le fichier package.json du projet > partie "scripts":

- Ajouter "start": "sass ./src/sass/style.scss ./src/style.css --watch"

Lancer Sass :

```
npm start
```
