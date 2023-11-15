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

MIGRATION
```php
Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->decimal('price', 5, 2);
            $table->tinyInteger('seats')->default(4);
            $table->string('transmission')->nullable();
            $table->string('fuel_type')->nullable();
            $table->text('notes');
            $table->timestamps();
        });
```

```bash
php artisan migrate
```

## SEEDARE LE TABELLE

SEEDER
```php
for ($i = 0; $i < 10; $i++) {
            $car = new Car();
            $car->image = 'car_images/' . $faker->image('public/storage/car_images', fullPath: false);
            $car->model = $faker->word;
            $car->brand = $faker->word;
            $car->price = $faker->randomFloat(2, 0, 999);
            $car->seats = $faker->numberBetween(2, 7);
            $car->transmission = $faker->randomElement(['manual', 'automatic']);
            $car->fuel_type = $faker->randomElement(['petrol', 'diesel', 'electric']);
            $car->notes = $faker->paragraph;
            $car->save();
        }
```

```bash
php artisan db:seed --class=CarSeeder
```
