# easydock

## Initial setup

**Create a symbolic lync  to heydoc bash file**
```
ln -s /Volumes/Code/easydock/bash/heydock /usr/local/bin/.
```
**GO inside services folder and run**
```
docker-compose up -d
```

## Creating a new service
- Copy One of the templates ( Network or WordPress )  and paste it in apps folder
- Rename the folder to a name of your choice
- inside use the Codebase folder to clone you repo ( e.g. codebase/yourRepo )
- Update the .env file to meet the requirements of you app

( e.g.  for wodPress)
```
CONTAINER_NAME=trimtone
REPO_NAME=trimtone
WP_ENV=development
HTTPS=true
NGINX_APP_ROOT=/var/www/html/trimtone
NGINX_INDEX_FILE=index.php
HOST_PORT=8577
VIRTUAL_HOST=trimtone.wpdev.com
DB_HOST=mariadb
DB_USER=root
DB_PASSWORD=root
DB_NAME=trimtone
S3_URI=https://ecs-moreniche-wp-content.s3.amazonaws.com/trimtone-prod/wp-content/uploads
```

### For SSL certificates check  [CertGenHelp](https://github.com/rjdsf/easydock/tree/master/services/proxy/certGen)