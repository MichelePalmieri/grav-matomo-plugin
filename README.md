# grav-matomo-plugin
Matomo plugin lets you embed the tracking to the Grav website.

This is [Grav CMS](http://getgrav.org) plugin that helps you implement [Matomo](https://matomo.org).

# Installation

Installing the Matomo plugin can be done in one of two ways.

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install matomo

This will install the matomo plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/matomo`.

## Manual Installation

To install this plugin, just [download](https://github.com/michelepalmieri/grav-matomo-plugin/archive/master.zip) the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `matomo`.

You should now have all the plugin files under

    /your/site/grav/user/plugins/matomo

# Config Defaults

```
enabled: true
siteId: 0
siteMatomoURL: ''
```

If you need to change any value, then the best process is to copy the [matomo.yaml](matomo.yaml) file into your `users/config/plugins/` folder (create it if it doesn't exist), and then modify there. This will override the default settings.

# Usage
1. Copy the *ID* *URL* and insert it to the configuration of this plugin.
