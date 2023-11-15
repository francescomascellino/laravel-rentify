<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $cars = [];

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
    }
}
