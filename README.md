# Tracking Rest Service

For details on how to download and get started with API, see below.

## Installation
You should enter a few commands from your ```<home>``` directory.
  
Pretty simple with [Composer](http://packagist.org), run:

```sh
git clone https://github.com/ergonomic0013/vantino vantino
```

```sh
composer update
```
Now your project is saved!
Read below to see detailed instructions.

#### Configuration example

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
## Import ***dump.sql*** in PostgreSQL
In BASH Terminal you should enter next command:
1. PostgreSQL installation
```
sudo apt-get update
sudo apt-get install postgresql postgresql-contrib
```
2. Create ***tracker_db*** database:
```
sudo -u postgres createdb tracker_db
```
3. Import **dump** file:
```
psql tracker_db < dump.sql
```

The database was created and the dump was imported!

## Testing Tracking API:





Enjoy!
