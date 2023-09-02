# CMStick
## Installation
### Cloner le projet depuis GitHub
~~~~
$ mkdir ~/workspace
$ cd ~/workspace
$ git clone git@github.com:Th3-Stick/cmstick.git
~~~~

### Docker
Télécharger et installer Docker : https://docs.docker.com/engine/install/ubuntu/

### Lancement de l'application
~~~~
$ cd ~/workspace/heimdall
$ sudo docker compose up -d
~~~~

### Install les vendors de Symfony
~~~~
$ sudo docker exec -it cmstick-cmstick_php sh
$ composer install
~~~~

## Logs
~~~~
$ sudo docker logs -f cmstick-cmstick_php
~~~~
