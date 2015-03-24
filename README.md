WordPress plugin Demo Composer Autoload Third-party Library
===========================================================

Composer is a Dependency Manager for PHP.
https://getcomposer.org/

I've heard lots of good things about using Composer and the Autoload
functionality that comes with it.  This is a base example case of
using Composer to load a third-party library Composer and the
Composer Autoloader.

The over-all idea is rather than checking in the third-party libraries as
part of your development repository, you instead list them in `composer.json`
and then you can load them locally.

Why use Composer and/or the Autoloader
--------------------------------------

The goal is to automate the installation, usage, and upgrade of third-party
libraries as much as possible within the plugin.

Clarification/Warning
---------------------

When distributing your plugin for use (on
http://wordpress.org/plugins/ for example), it is
__NOT__ acceptable to exclude the third-party libraries.  Defining third-party
libraries exclusively in `composer.json` is great for development and
developers, but doesn't work for end users.

How to Use this Plugin
----------------------

### Clone this repo to your Plugins Directory

### Install Composer (if you haven't already)

Copy and pasting the following on your command line, should install it
```
curl -sS https://getcomposer.org/installer | php;mv composer.phar /usr/local/bin/composer
```
More information at http://salferrarello.com/composer-wordpress-plugins/

### Install the Third-Party Libraries to the Plugin

You can do this by running
```
composer install -vvv
```
Afterwards, you'll see a new directory called `/vendors`, which contains
the third-party library.



Author
------
[@salcode](http://twitter.com/salcode)
