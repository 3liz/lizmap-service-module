# lizmap-service-module

## Introduction

**Service** est un module pour [Lizmap](https://www.lizmap.com/) qui peut être utilisé pour mettre à disposition les services Lizmap via certaines URLS.

Par exemple, on peut appeler directement cette URL :

`https://liz.map/service.php/test/montpellier/?SERVICE=WFS&VERSION=1.0.0&REQUEST=GetCapabilities`

pour rejoindre

`https://liz.map/index.php/lizmap/service/?repository=test&project=montpellier&SERVICE=WFS&VERSION=1.0.0&REQUEST=GetCapabilities`

On voit que le répertoire Lizmap `test` et le projet `montpellier` ne sont passés dans les paramètres
mais sont passés avant le `?`


## Installation

Il est recommandé d'installer le module avec [Composer](https://getcomposer.org),
le gestionnaire de paquet pour PHP.
Si vous ne pouvez pas l'utiliser, utilisez la méthode manuelle indiquée plus bas.

NB : tous les chemins ci-dessous sont relatifs au dossier de Lizmap Web Client.

### Installation automatique avec Composer

* Dans `lizmap/my-packages`, créer le fichier `composer.json` si il n'existe pas déjà,
  en copiant le fichier `composer.json.dist`, puis installer le module avec Composer :

```bash
cp -n lizmap/my-packages/composer.json.dist lizmap/my-packages/composer.json
composer require --working-dir=lizmap/my-packages "lizmap/lizmap-service-module"
```

* puis aller dans le répertoire `lizmap/install/` pour lancer l'installateur

Si vous utilisez Lizmap 3.6 et suivante, lancez d'abord la commande :

```bash
php configurator.php service
```

* Lancez enfin l'installation du module :

```bash
php installer.php
./clean_vartmp.sh
./set_rights.sh
```

Go to the "Configuration" section.

### Installation manuelle, sans Composer

* Téléchargez l'archive sur la [page des version dans Github](https://github.com/3liz/lizmap-service-module/releases).
* Extrayez les fichiers de l'archive et copier le répertoire `service` dans `lizmap/lizmap-modules/`.


* Si vous utilisez Lizmap 3.5, éditez le fichier `lizmap/var/config/localconfig.ini.php` pour ajouter
  dans la section `[modules]`

```ini
service.access=2
```

* Si vous utilisez Lizmap 3.6, lancez la commande

```bash
php lizmap/install/configurator.php service
```

* Pour toutes versions de Lizmap, lancez l'installateur :

```bash
php lizmap/install/installer.php
./lizmap/install/clean_vartmp.sh
./lizmap/install/set_rights.sh
```

## License

Mozilla Public License 2: https://www.mozilla.org/en-US/MPL/2.0/
