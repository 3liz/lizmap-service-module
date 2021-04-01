# lizmap-service-module

## Introduction

This is a Lizmap module to generate significant URLS for Lizmap services.

For example, you could replace the URL:
`https://liz.map/index.php/lizmap/service/?repository=montpellier&project=montpellier&SERVICE=WFS&VERSION=1.0.0&REQUEST=GetCapabilities`
by
`https://liz.map/service.php/montpellier/montpellier/?SERVICE=WFS&VERSION=1.0.0&REQUEST=GetCapabilities`

## Module installation

NB: all the path given are relative to your Lizmap Web Client instance folder.

* Copy the `service` directory inside the `lizmap/lizmap-modules/` of a working Lizmap Web Client instance to have a new `lizmap/lizmap-modules/service/` folder containing the files `module.xml`, `events.xml`, and folders.

* Then modify the file `lizmap/var/config/localconfig.ini.php` to add `service.access=2` in the `[modules]` section, such as

```ini
[modules]
service.access=2

```

* You need to manually edit the file `lizmap/projects.xml` and add the following content inside the `<entrypoints>` section

```xml
    <entry file="service.php" config="service/config.ini.php" type="classic"/>
```

Afterwards, you should have a content like this in the `entrypoints` section

```xml
    <entrypoints>
        <entry file="index.php" config="index/config.ini.php"/>
        <entry file="admin.php" config="admin/config.ini.php" type="classic"/>
        <entry file="script.php" config="cmdline/script.ini.php" type="cmdline"/>
        <entry file="service.php" config="service/config.ini.php" type="classic"/>
    </entrypoints>
```

* Copy the folder `service/install/service` inside the Lizmap folder `lizmap/var/config/` to have a new folder `lizmap/var/config/service` with a file `config.ini.php` inside

```bash
cp -R lizmap/lizmap-modules/service/install/service lizmap/var/config/service
```

* Copy the file `service/install/service.php` inside the `lizmap/www/` folder

```bash
cp -R lizmap/lizmap-modules/service/install/service.php lizmap/www/
```

* Then you need to run the Lizmap installer

```bash
lizmap/install/set_rights.sh
lizmap/install/clean_vartmp.sh
php lizmap/install/installer.php
```

## License

Mozilla Public License 2: https://www.mozilla.org/en-US/MPL/2.0/
