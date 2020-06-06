## Prerequisite
- Install Docker version 19.03.8

## docker-compose.yml
This project uses a docker-compose to build the required containers. The created containers are below with their exposed ports:
- php - `9000`
- mysql - `3305`
- nginx -`8080`
- composer 
- npm
- artisan

**Note on changing ports:** 
If there is any port collision, you will need to edit the `docker-compose.yml` file manually and change the approriate port.
Note that the only port to be changed is the host port. The left side port on the docker-compose.yml

## Setup Guide

Clone this repository or unzip the zipped file. Open a new terminal on the root of the project where this README.md file is also located.

Next, run the docker containers by running the below command
```sh 
docker-compose up -d --build
```

### Packages
After that, install php packages with this command
```sh 
docker-compose run --rm composer install
```

### Environment 
After package installation, create a .env file by copying the .env.example and save it as .env. Running the below command will do that.
```sh
docker-compose exec php cp .env.example .env
```

Generate application key
```sh
docker-compose run --rm artisan key:generate
```

Replace these database env variables with the env variables I sent via email. You could also check the docker-compose.yml file if you wish and map it to the env.
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
``` 

### Database
Once the env is populated properly, execute the migration & seed the data with the following command

```sh 
docker-compose run --rm artisan migrate --seed
``` 

### Frontend
The below command will install the required js & css packages & will compile the assets need for the project.

```sh
docker-compose run --rm npm install && docker-compose run --rm npm run dev
```

### View Application
Go to [http://localhost:8080](http://localhost:8080 "Go to Project") to see the project.


### Close application
To close the application and remove its containers, run the below command
```sh
docker-compose down
```

