<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $row = 1;
        $breedsPath = database_path('/sources/breeds.csv');
        $breeds = [];
        if (($handle = fopen($breedsPath, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $name = $data[0];
                $sizes = $data[1];
                $weight = $data[2];
                $sizes = Str::of($sizes)->explode('-');
                $minSize = $sizes[0];
                $maxSize = $sizes[1] ?? null;

                $weights = Str::of($weight)->explode('-');
                $minWeight = $weights[0];
                $maxWeight = $weights[1] ?? null;

                $breeds[] = [
                    "name" => $name,
                    "minSize" => $minSize,
                    "maxSize" => $maxSize,
                    "minWeight" => $minWeight,
                    "maxWeight" => $maxWeight
                ];
            }
            fclose($handle);
        }


        Breed::factory()->createMany($breeds);
    }
}
