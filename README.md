# Bonsai for ElasticPress

Bonsai for ElasticPress is a plugin that allows [Bonsai](https://bonsai.io/) users to connect to Elasticsearch using the [ElasticPress](https://github.com/10up/elasticpress) plugin.

## Minimum Requirements

* PHP 7+
* ElasticPress 3.0 **Note: Bonsai for ElasticPress is not compatible with earlier versions of ElasticPress. ElasticPress 3.0 is not yet available.**
* A Bonsai account

## License

Bonsai for ElasticPress is licensed under [GPLv2](https://raw.githubusercontent.com/technosailor/bonsai-elasticpress/master/LICENSE?token=AAsRN307voFXWS9XmkBt7sC-bQ3wn_jUks5cgVRxwA%3D%3D).

## Usage

**Bonsai for ElasticPress requires ElasticPress 3.0 to work. Please ensure ElasticPress 3.0 is installed and activated.**

* Activate Bonsai for ElasticPress on your Plugins screen.
* Browse to your [Bonsai cluster console](https://app.bonsai.io/clusters) and click on the Elasticsearch instance you wish to connect to.
* Click on the "Access" tab at the top of the cluster page.
* Copy your "Access Key" and "Access Secret" and paste them in the fields provided in your WordPress Admin ElasticPress settings page.
* Save and click on the "Sync" icon in the upper right corner. This will allow WordPress to send your content to Bonsai for indexing.

At this point, all front-end searched will be handled by Bonsai relieving strain on your database and providing faster, more efficient, and more relevant search results.

You can supercharge your WordPress install by integrating Bonsai in other queries as well. [Everything provided by ElasticPress](https://github.com/10up/ElasticPress/blob/develop/README.md) is available for WordPress to use with Bonsai.

Happy searching!


## Developers

Instead of populating the Access Key and Access Secret in the WordPress Admin, you can define `HEROKU_BONSAI_ACCESS_KEY` and `HEROKU_BONSAI_ACCESS_SECRET` in `wp-config.php`.