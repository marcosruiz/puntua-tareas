# Puntua tareas

Este es un proyecto que permite poner notas a las tareas de un módulo profesional por parte de gente anónima.

## Estado del arte

Existen diferente competencia a este proyecto como:

- Strawpoll
- Google Forms
- PollMaker
- Doodle
- Mentimeter
- SurveyMonkey

Estas webs tienen uno de estos problemas en su versión gratuita:

- No tienen una encuesta para que introduzcan un número. Por ejemplo: ¿Cuántas horas has dedicado a este módulo?
- No tienen la posibilidad de embeber la encuesta en una web.
- No tienen la posibilidad de analizar los resultados de una manera cómoda.

Debido a estas necesidades se desarrolla este proyecto.

## Set up

Para iniciar este proyecto deberás ejecutar los siguientes comandos descritos en <https://laravel.com/docs/12.x/installation>.

```ps
npm install
composer install
npm run build
php artisan key:generate
```

Creamos la base de datos con los datos de `.env`:

```console
php artisan migrate:fresh --seed
```

Para tener el cambio en caliente:

```console
npm run dev
```

Para arrancar el proyecto

```console
php artisan serve
```

## Base de datos

Tablas:

- Users
  - Regular
  - Admin
- Roles
- Permissions
- QuestionGroup
- Question
  - Number
    - Int
    - Double
  - Single Choice
- Response

## Comandos habituales

Para reiniciar la base de datos con los seeeders:

```console
php artisan migrate:fresh --seed
```

Para crear seeder:

```console
php artisan make:seeder RolesSeeder
```

TODO Para aplicar los seeders:

```console
php artisan seed
```



Para instalar todo lo que haya en el composer.json:

```console
composer install
```

Para arrancar el proyecto:

```console
composer run dev
```

Me he quedado aqui en el tutorial

<https://youtu.be/FhRlQu8dUVk?si=zZynCi-G0I3-vjQN&t=1404>
