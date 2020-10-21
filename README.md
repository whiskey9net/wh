# wh
Project "Warehouse". Use it on your own risk!!

#### Quick fix

````
git add -A; git commit -m "up"; git push
````

````
sudo touch /forcefsck
````

#### MySQL

````
CREATE {DATABASE | SCHEMA} [IF NOT EXISTS] db_name
````

````
wget percona.com/get/pt-show-grants
````

#### Docker

Swarm init (local):
````
docker swarm init --advertise-addr 127.0.0.1 --listen-addr 127.0.0.1 --data-path-addr 127.0.0.1
````

#### Install 

Install from AUR
````
git clone https://aur.archlinux.org/teams.git .
makepkg
pacman -U teams-1.3.00.16851-1-x86_64.pkg.tar.xz
````
