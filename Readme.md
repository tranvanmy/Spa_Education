## Requirement
- Docker
    - [Docker for Mac](https://docs.docker.com/docker-for-mac/)
    - [Docker for Linux](https://docs.docker.com/engine/installation/linux/ubuntulinux/)
- PHP >= 7.13
- Mysql
- Laravel ~5.6
- [Redis](https://github.com/antirez/redis)
- npm or yarn (recommend)

## Setup
- Copy file `.env.example` to `.env`,
- Modify `.env` config file (optional). If you modify the `mysql`, `mongo`, `redis` configurations in `.env` file, remember to modify the configurations in `docker-compose.yml` file too.
- Install or run Docker
```BASH
docker-compose up -d
# Stop
docker-compose stop
```

- Site will publish on 127.0.0.1:{`ports`} (`ports` config in docker-compose.yml > services > ngix > ports). Add domain to host file so we can access site by domain:{`ports`}
```
127.0.0.1 education.local
127.0.0.1 admin.education.local
```

- `chmod` cache folders
```BASH
chmod -R 777 storage
chmod -R 777 bootstrap/cache
```

### Deploy

*Quick deploy*: Run after each time you pull code from framgia repository
```BASH
Run deploy
```

- Install laravel
```BASH
composer install
php artisan key:generate
```

- Install node modules
```BASH
npm install
#or
yarn install
```

- Build
```BASH
npm run dev
#or
yarn run dev
```

- Run migration
```BASH
# Check Docker Container list, copy the `workspace` container name
docker ps

# Go into the `workspace` container
docker exec -it education_workspace bash

# Run migration
php artisan migrate --seed

# Or running outside the docker container
docker exec -it education_workspace php artisan migrate --seed
```

- If you want run project on your local instead of Docker, just skip all step about docker and create virtual host. And modify `.env` config of `DB_HOST`, `DB_HOST_TEST`, `REDIS_HOST` to `127.0.0.1`
