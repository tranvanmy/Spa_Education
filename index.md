## Welcome to Education Pages

Requirement
Docker </br>
Docker for Mac </br>
Docker for Linux </br>
PHP >= 7.13</br>
Mysql</br>
Laravel ~5.6</br>
Redis</br>
npm or yarn (recommend)</br>
Setup</br>
Copy file .env.example to .env,</br>
Modify .env config file (optional). If you modify the mysql, mongo, redis configurations in .env file, remember to modify the configurations in docker-compose.yml file too.</br>
Install or run Docker</br>
docker-compose up -d</br>
### Stop
docker-compose stop</br>
Site will publish on 127.0.0.1:{ports} (ports config in docker-compose.yml > services > ngix > ports). Add domain to host file so we can access site by domain:{ports}</br>
127.0.0.1 education.local</br>
127.0.0.1 admin.education.local</br>
chmod cache folders</br>
chmod -R 777 storage</br>
chmod -R 777 bootstrap/cache</br>
Deploy</br>
Quick deploy: Run after each time you pull code from framgia repository</br>

Run deploy</br>
Install laravel</br>
composer install</br>
php artisan key:generate</br>
Install node modules</br>
npm install</br>
#or</br>
yarn install</br>
Build</br>
npm run dev</br>
#or</br>
yarn run dev</br>
Run migration</br>
### Check Docker Container list, copy the `workspace` container name</br>
docker ps</br>

### Go into the `workspace` container</br>
docker exec -it education_workspace bash</br>

### Run migration</br>
php artisan migrate --seed</br>

### Or running outside the docker container</br>
docker exec -it education_workspace php artisan migrate --seed</br>
If you want run project on your local instead of Docker, just skip all step about docker and create virtual host. And modify .env config of DB_HOST, DB_HOST_TEST, REDIS_HOST to 127.0.0.1</br>
