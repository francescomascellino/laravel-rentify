<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## CREARE UN UTENTE FINTO:

La password è 'password'. Tra le parentesi di create possono essere inseriti valori dentro un array come [email => 'email@email.com']
```bash
User::factory()->create()
```
## INSTALLARE LE DIPENDENZE
```bash
composer install
```

## RINOMINARE IL FILE COPIA DI .env ED EFFETTUARE LE MODIFICHE

(DATI DEL DATABASE, NOME APP, DISK SU public...)

## GENERARE LA CHIAVE DELL'APP
```bash
php artisan key:generate
```

## COLLEGARE LO STORAGE
```bash
php artisan storage:link
```

## INSTALLARE I PACCHETTI
```bash
npm i
```

SE NECESSARIO CREARE LA CARTELLA DI SALVATAGGIO DEI FILES IN storage/app/public/[image disk folder]

## MIGRARE LE TABELLE
```bash
php artisan migrate
```

## SEEDARE LE TABELLE
```bash
php artisan db:seed --class=CarSeeder
```
