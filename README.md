#### Powered by https://github.com/mehdiable/tutfw-project
#### Author https://github.com/mehdiable
#### Contact https://www.linkedin.com/in/mehdi-mohammadnejad

# tutfw project
Make your microservice and enjoy :

## git 
- make your repository and :
- git remote set-url origin '___https://your.git/repository/address/url.git___'

## requirements
- docker
- git

## Initializing new project
- cd docker/phpfpm
- docker build -t phpfpm:8.1.8 .
- cd docker/mongodb
- docker build -t mongodb:5.0.9 .
- cd ___root folder of project that have development.yml file___
- docker stack deploy -c development.yml development
- docker exec -it development_webapp.1 bash
- cd main && composer install && composer dump-autoload

___NOTE :___
 - change ```server_name development.local;``` in ```docker/nginx/conf.d/default_dev.conf``` and ```server_name product.local;``` in ```docker/nginx/conf.d/default.conf``` by your project domain
 - if you change development project name, must be change nginx default.conf file in :
```server development_webapp:9000;``` in ```docker/nginx/conf.d/(default_dev.conf and default.conf)```
 - ports is important, check the nginx config files and yml file

### MongoDb Management
- docker exec -it ___development_mongo...___ bash
- mongo -u ___MONGO_INITDB_ROOT_USERNAME___ -p
- ___enter: MONGO_INITDB_ROOT_PASSWORD___
- use ___database_name___ # defined on conf/db.php
- db.createUser({user: "admin_username", pwd: passwordPrompt(), roles: [{ role: "readWrite", db: "app_service" }], mechanisms: [ "SCRAM-SHA-256"]});
- ___enter password for exam_admin user___

## server side
- make vhost
- set dns in /etc/hosts
