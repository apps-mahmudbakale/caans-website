<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Region::truncate();
        $regions = [
            ['name' => 'Central Africa'],
            ['name' => 'East Africa'],
            ['name' => 'North Africa'],
            ['name' => 'South Africa' ],
            ['name' => 'West Africa']
        ];
        foreach($regions as $region){
            Region::create(array_merge($region, ['slug' => Str::slug($region['name'], '-')]));
        }
       
    }
}
