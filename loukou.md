# Les actions que je vais menés

## base de donnée

1. Modifier ma table users dans le dossier migration

2. modifier le fichier le model utilisateur.
en ajoutant mes champs de ma migration dans la partir   protected $fillable = ['nom', 'prenom', 'email', 'password', 'role'];

3. pour les differents changement utiliser la commande

``` text
ctrl+shift+p
```

ensuite taper dans la barre de recherche

``` text
git file history
```

1. faire le meme processus pour les autres

2. faire les migration dans mon fichier sqlite.

``` text
php artisan migrate:refresh
```

## Administration avec filament

1. installation de laravolt/avatar <!-- il permet de generer des avatar des profil -->

``` text
composer require laravolt/avatar
```

ensuite

``` text
php artisan vendor:publish --provider="Laravolt\Avatar\ServiceProvider"
```

puis aller dans Le fichier Http\Controllers\Auth\PasswordResetLinkController.php

``` laravel
Avatar::create($request->name)->save(storage_path('app/public/avatar-'. $user->id . '.png'));
```

``` laravel
use Laravolt\Avatar\Facade as Avatar;
```

1. installation de filament

``` text
composer require filament/filament
```
