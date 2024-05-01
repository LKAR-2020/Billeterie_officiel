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

importer l'image dans un vue blade il faut :

``` bash
php artisan storage:link
```

``` laravel
<img src="{{ asset('storage/avatar-' . auth()->id() . '.png')}}" width="40" class=" mr-2 " > 
```

1. installation de filament ET LES TRADUCTION

``` shell
composer require filament/filament:"^3.2" -W

php artisan filament:install --panels

php artisan vendor:publish --tag=filament-config

php artisan vendor:publish --tag=filament-panels-translations

php artisan vendor:publish --tag=filament-actions-translations
 
php artisan vendor:publish --tag=filament-forms-translations
 
php artisan vendor:publish --tag=filament-notifications-translations
 
php artisan vendor:publish --tag=filament-tables-translations
 
php artisan vendor:publish --tag=filament-translations
```

NB: les traduction sont seulement dans la partir admin de filament

limiter les access avec filament : il faut aller dans le fichier

``` text
"/app/Models/User.php"
```

et ajouter ce code

``` laravel
use Filament\Models\Contracts\FilamentUser;
class User extends Authenticatable implements FilamentUser
{
    // ...
 
    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
    }
}

```

## instalation de langue

``` shell

php artisan lang:publish

APP_LOCALE=fr

composer require laravel-lang/common --dev
php artisan lang:update

```
