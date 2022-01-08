<?php

namespace Database\Seeders;

use App\Helpers\Helper;
use App\Models\Cities\City;
use App\Models\Countries\Country;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CheckCountry = Country::all();

        if ($CheckCountry->isEmpty()) {
            $countries = Helper::getDataByConfig('countries.country');

            foreach ($countries as $data) {
                $country = new Country();
                $country->name = $data['name'];
                $country->code = $data['code'];
                $country->status = true;
                $country->save();

                $cityData = Helper::getDataByConfig('countries.' . $data['code']);

                foreach ($cityData as $city) {
                    $checkCity = City::where('country_id', $country->id)->where('name', $city['name'])->get();

                    if ($checkCity->isEmpty()) {
                        $cityInsert = new City();
                        $cityInsert->name = $city['name'];
                        $cityInsert->country_id = $country->id;
                        $cityInsert->status = true;
                        $cityInsert->save();
                    }
                }

            }

        }

    }
}
