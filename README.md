This is a simple straight-forward example on how to deploy a bitnami/php-fpm application running on a bitnami/nginx web server.

Make sure that you have installed Docker Desktop on your machine! 

Please consider that this source code was edited and tested in VS Code and rely on the following extensions due to the absence of docker and composer commands in this README.md file.

Required VSCode Extensions:

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

===================================================================================================

Before building this image make sure that you edit the MONGO_URI environment key located in 

./nginx/conf.d/my_server_block.conf

Quickstart:

1. Install composer dependencies by clicking the Install icon above the first line of your code in the composer.json file

2. Right-click on docker-compose.yml and choose "Compose Up" and the VSCode extensions will do all the heavy lifting for you.

3. Visit http://localhost/ in your browser to check if your server is running or alternatively check your Docker Desktop to see the containers are running.