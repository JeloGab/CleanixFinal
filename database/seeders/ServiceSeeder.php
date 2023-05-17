<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::create(

            [
                'user_id' => 1,
                'service_name' => "General Cleaning",
                'description' => "Basic cleaning service that includes vacuum cleaning, mopping and dusting services, and possibly additional tasks such as dishwashing and de-cluttering depending on customer's request.",
                'img' => 'generalcleaning.jpg'
            ],
            [
                'user_id' => 1,
                'service_name' => "Deep Cleaning",
                'description' => "Deep cleaning process that clears all areas of your home of dust, dirt, bacteria, and grime. This includes rarely visited surfaces where dirt has had time to accumulate.",
                'img' => 'deepcleaning.jpg'
            ],
            [
                'user_id' => 1,
                'service_name' => "Post Construction",
                'description' => "Deep cleaning process that clears all areas of your home of dust, dirt, and bacteria after construction that includes spots seldomly cleaned on all corners of your home.",
                'img' => 'postconstruction.jpg'
            ],
            [
                'user_id' => 1,
                'service_name' => "Renovation Cleaning",
                'description' => "Cleaning all surfaces to get rid of dust, filth, and scuffs. cleaning appliances, fixtures, and woodwork with a vacuum and a duster. Trim, baseboards, frames, and door jambs should be cleaned. cleaning brickwork or tile in masonry.",
                'img' => 'renovationcleaning.jpg'
            ],
            [
                'user_id' => 1,
                'service_name' => "Home/Office Cleaning",
                'description' => "All basic cleaning in and around the facility or office building. This can entail dusting, mopping, sweeping, vacuuming, and cleaning smudges off windows and doors; ensuring restrooms are cleaned and sanitized.",
                'img' => 'homeofficscleaning.jpg'
            ],
        );

    }
}
