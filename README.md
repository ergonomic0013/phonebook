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
    database_password: postgres
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
For testing **/tmsg** endpoint you have to enter next command to terminal:
```
curl -X POST -H "Content-type: application/json" -d '{
"cid": "a65f7960-a19d-49c1-a915-c48f036e8887",
"vst": {
"ip": "0.0.0.0",
"lg": "fr-CH",
"rf": "http://www.beeckon.swiss",
"ua": "Mozilla/5.0 (X11; Linux x86_64; rv:12.0) Gecko/20100101 Firefox/21.0"
},
"trk":
"eNodycEJwDAIBdBd_rl0gMziRZJQpNWEGEluxe8voeX4CNW7YRCEDMVa2cdSjgI2puEZj1id1plnSyXpfrmtWM64cMP5pwaCw",
"url": "http://vantino.com/mno",
"sid": "110ec58a-a0f2-4ac4-8393-c866d813b8d1",
"uid": "4648471f-a360-471f-91f1-008b75d74f3b"
}' http://<your host>/web/api/tmsg/index
```
For **/smsg** endpoint:
```
curl -X POST -H "Content-type: application/json" -d '{
"cid": "a65f7960-a19d-49c1-a915-c48f036e8887",
"sid": "110ec58a-a0f2-4ac4-8393-c866d813b8d1",
"uid": "4648471f-a360-471f-91f1-008b75d74f3b",
"url": "http://vantino.com/mno"
}' http://<your host>/web/api/tmsg/index
```
<br>

P.S: For detailed instructions on how to configure a virtual host, see the [documentation Apache](http://httpd.apache.org/docs/2.4/vhosts/examples.html)

<br>

Enjoy!
