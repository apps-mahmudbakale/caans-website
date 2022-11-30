<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name'=> 'Angola', 'region_id' => '1'],
            ['name'=> 'Cameroon', 'region_id' => '1'],
            ['name'=> 'Chad', 'region_id' => '1'],
            ['name'=> 'Congo Brazzaville', 'region_id' => '1'],
            ['name'=> 'Gabon', 'region_id' => '1'],
            ['name'=> 'Burundi', 'region_id' => '2'],
            ['name'=> 'Tanzania', 'region_id' => '2'],
            ['name'=> 'Kenya', 'region_id' => '2'],
            ['name'=> 'Uganda', 'region_id' => '2'],
            ['name'=> 'Rwanda', 'region_id' => '2'],
            ['name'=> 'Djibouti', 'region_id' => '2'],
            ['name'=> 'Eritrea', 'region_id' => '2'],
            ['name'=> 'Ethopia', 'region_id' => '2'],
            ['name'=> 'Somalia', 'region_id' => '2'],
            ['name'=> 'Mzambique', 'region_id' => '2'],
            ['name'=> 'Madagascar', 'region_id' => '2'],
            ['name'=> 'Malawi', 'region_id' => '2'],
            ['name'=> 'Zambia', 'region_id' => '2'],
            ['name'=> 'Zimbabwe', 'region_id' => '2'],
            ['name'=> 'Comoros', 'region_id' => '2'],
            ['name'=> 'South Sudan', 'region_id' => '2'],
            ['name'=> 'Egypt', 'region_id' => '3'],
            ['name'=> 'Morocco', 'region_id' => '3'],
            ['name'=> 'Algeria', 'region_id' => '3'],
            ['name'=> 'Tunisia', 'region_id' => '3'],
            ['name'=> 'Libya', 'region_id' => '3'],
            ['name'=> 'Sudan', 'region_id' => '3'],
            ['name'=> 'South Africa', 'region_id' => '4'],
            ['name'=> 'Botswana', 'region_id' => '4'],
            ['name'=> 'Namibia', 'region_id' => '4'],
            ['name'=> 'Benin', 'region_id' => '5'],
            ['name'=> 'Mali', 'region_id' => '5'],
            ['name'=> 'Burkina Fasso', 'region_id' => '5'],
            ['name'=> 'Mauritane', 'region_id' => '5'],
            ['name'=> 'Ivory Coast', 'region_id' => '5'],
            ['name'=> 'Niger', 'region_id' => '5'],
            ['name'=> 'Cape Verde', 'region_id' => '5'],
            ['name'=> 'Nigeria', 'region_id' => '5'],
            ['name'=> 'Gambia', 'region_id' => '5'],
            ['name'=> 'Senegal', 'region_id' => '5'],
            ['name'=> 'Ghana', 'region_id' => '5'],
            ['name'=> 'Sierra Leone', 'region_id' => '5'],
            ['name'=> 'Guinea', 'region_id' => '5'],
            ['name'=> 'Liberia', 'region_id' => '5'],
            ['name'=> 'Togo', 'region_id' => '5'],
            ['name'=> 'Congo Kinshasa', 'region_id' => '5'],
           
        ];

        foreach($countries as $country){
            Country::create($country);
        }
    }
}
