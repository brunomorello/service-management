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

## Fixing Some issues

### Remove old images

> docker-compose down

## Deploy Docs

> https://cloud.ibm.com/docs/containers?topic=containers-app#app_cli

> https://cloud.ibm.com/docs/containers?topic=containers-clusters#clusters_free

> https://kubernetes.io/docs/concepts/configuration/overview/

> https://cloud.ibm.com/docs/containers?topic=containers-getting-started