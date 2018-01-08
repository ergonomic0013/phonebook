# Tracking Rest Service

For details on how to download and get started with API, see below.

## Installation:
You should enter a few commands in your <home> directory.
  
Pretty simple with [Composer](http://packagist.org), run:

```sh
git clone https://github.com/ergonomic0013/vantino vantino
```

```sh
composer update
```
### Configuration example

You can configure default query parameter names and templates
```yaml
parameters:
    database_host: 127.0.0.1
    database_port: 5432
    database_name: tracker_db
    database_user: postgres
    database_password: null
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: 
```


All libraries and bundles included in the API are
released under the MIT or BSD license.

Enjoy!
