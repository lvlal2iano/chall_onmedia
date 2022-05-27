## Onmedia Challenge

### Deploy en Linux - Ubuntu, Debian, Centos

Dependencias: Docker, Git, Make.

`mkdir onmedia_chall && cd onmedia_chall`

`git clone https://github.com/lvlal2iano/chall_onmedia.git .`

`make init`

`google-chrome http://localhost`

### Deploy en Windows

Lenguaje base stack: php 8, mysql 5.7.
Framework stack: Laravel 9 - Livewire 2 - Jetstream 2 - Tailwind 3

Indicaciones:
Levantar servidor local (Se recomienda Laragon).

`mkdir onmedia_chall && cd onmedia_chall`
`git clone https://github.com/lvlal2iano/chall_onmedia.git .`
`composer install --with-all-dependencies`
`cp -f .env.example .env`
`php artisan key:generate`
`php artisan migrate --seed`
`php artisan optimize:clear`
`composer dump-autoload --optimize`
`chmod -R 777 storage`
`npm i`
`npm run development`

Listo!

Demo: [http://54.91.180.243/] - Montado en instancia EC2 de AWS.