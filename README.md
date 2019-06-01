# Push Images to IBM Cloud

## List Local Images

> docker image ls

## Tag Images

> docker tag docker_php us.icr.io/bmorenos-smanagement/bmorenos/smanagement:php
> docker tag docker_database us.icr.io/bmorenos-smanagement/bmorenos/smanagement:mariadb
> docker tag nginx:latest us.icr.io/bmorenos-smanagement/bmorenos/smanagement:nginx_http_server

## Push Images

> ibmcloud cr login
> docker push us.icr.io/bmorenos-smanagement/bmorenos/smanagement:php
> docker push us.icr.io/bmorenos-smanagement/bmorenos/smanagement:mariadb
> docker push us.icr.io/bmorenos-smanagement/bmorenos/smanagement:nginx_http_server
