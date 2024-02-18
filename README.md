# Le quai antique

Site web du restaurant Le Quai Antique

## Déploiement du projet en local

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
