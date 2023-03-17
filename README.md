
# Containerized PHP Application running on NGINX web server

This is a simple straight-forward example on how to deploy a [bitnami/php-fpm](https://hub.docker.com/r/bitnami/php-fpm) application running on a [bitnami/nginx](https://hub.docker.com/r/bitnami/nginx) web server.

Please consider that this source code was edited and tested in VS Code and rely on the following extensions due to the absence of docker and composer commands in this README.md file.

## Requirements

1. [VS Code](https://code.visualstudio.com/)
2. [Docker Desktop](https://www.docker.com/products/docker-desktop/)
3. [MongoDB FREE Shared Cluster](https://www.mongodb.com/)

## Required VSCode Extensions:

Name: Docker
Id: ms-azuretools.vscode-docker
Description: Makes it easy to create, manage, and debug containerized applications.
Version: 1.24.0
Publisher: Microsoft
VS Marketplace Link: https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker

Name: Composer
Id: DEVSENSE.composer-php-vscode
Description: All-in-One composer integration, quick actions, commands, automatic installation, tasks, code lenses, diagnostics, and composer.json IntelliSense.
Version: 1.31.12740
Publisher: DEVSENSE
VS Marketplace Link: https://marketplace.visualstudio.com/items?itemName=DEVSENSE.composer-php-vscode

## Quickstart:

1. Install composer dependencies by clicking the Install icon above the first line of your code in the composer.json file

2. Replace the MONGO_URI environment key located in ./nginx/conf.d/my_server_block.conf

3. Right-click on docker-compose.yml and choose "Compose Up" and the VSCode extensions will do all the heavy lifting for you.

4. Visit [localhost](http://localhost/) in your browser to check if your server is running or alternatively check your Docker Desktop to see that the containers are running.

## Contributing:

Any pull request are welcome.