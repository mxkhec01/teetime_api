# Hyper - Laravel

Hyper laravel is bootstraped using standard laravel way. Please follow below steps in order to setup the project:

1. Make sure to have installed and running [`node`](https://nodejs.org/) and `yarn`
2. Make sure to have installed and running [`composer`](https://getcomposer.org/)
3. Open the laravel folder in command line E.g. `cd hyper-laravel`
4. Install frontend dependencies using command `yarn install`
5. Install backend dependencies using command `composer install`
6. Copy env.example and rename it to .env, make sure to edit required configuration including database
7. Run migration to create database tables using command `php artisan migrate`
8. Compile frontend assets using command `yarn run dev` or `yarn run prod`
9. Now, you are ready to start server using command `php artisan serve`



## Layout and Demo (Themes)
Hyper comes with three different theme styles. I.e. saas (default), creative and modern. The setup is already including them all. Just replace the head inclusion in respective layout file with following:

e.g. replace `@include('layouts.shared/head')` with `@include('layouts.shared/head', ['demo'=> 'modern'])` or `@include('layouts.shared/head', ['demo'=> 'creative'])` in `layouts/vertical.blade.php` or `layouts/horizontal.blade.php` or `layouts/detached.blade.php`

## Support

If you run into any trouble, feel free to contact us via our [website](https://coderthemes.com) or email [support@coderthemes.com](mailto:support@coderthemes.com). We would would happy to help.
