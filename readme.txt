=== Bonsai for ElasticPress ===
Contributors: technosailor, wpbonsai
Tags: elasticpress, elasticsearch, search
Requires at least: 4.9.8
Tested up to: 5.1
Requires PHP: 7.0
Stable tag: trunk
License: GPLv2
License URI: http://plugins.svn.wordpress.org/bonsai-for-elasticpress/trunk/LICENSE

**Bonsai for WordPress is in beta and not recommended for production use.**

Bonsai for ElasticPress is a plugin that allows [Bonsai](https://bonsai.io/) users to connect to Elasticsearch using the [ElasticPress](https://github.com/10up/elasticpress) plugin.

== Installation ==
= Minimum Requirements =
* PHP 7+
* ElasticPress 3.0 **Note: Bonsai for ElasticPress is not compatible with earlier versions of ElasticPress. ElasticPress 3.0 is not yet available.**
* A Bonsai account

= Usage =
Bonsai for ElasticPress requires ElasticPress 3.0 to work. Please ensure ElasticPress 3.0 is installed and activated.

* Activate Bonsai for ElasticPress on your Plugins screen.
* Browse to your Bonsai cluster console and click on the Elasticsearch instance you wish to connect to.
* Click on the "Access" tab at the top of the cluster page.
* Copy your "Access Key" and "Access Secret" and paste them in the fields provided in your WordPress Admin ElasticPress settings page.
* Save and click on the "Sync" icon in the upper right corner. This will allow WordPress to send your content to Bonsai for indexing.

At this point, all front-end searched will be handled by Bonsai relieving strain on your database and providing faster, more efficient, and more relevant search results.

You can supercharge your WordPress install by integrating Bonsai in other queries as well. Everything provided by ElasticPress is available for WordPress to use with Bonsai.

== Changelog ==
v 1.0
* Initial Release