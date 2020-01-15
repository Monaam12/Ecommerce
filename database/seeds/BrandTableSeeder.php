<?php

use App\Model\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brands = [
            'Desktop',
            'TV',
            'Phones',
            'Cameras',
            'Laptop & Notebooks',
            'Components',
            'MP3 Players',
        ];


        foreach ($brands as $brand) {
            Brand::create(['name' => $brand]);
        }
    }
}
