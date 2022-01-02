<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator;
use Illuminate\Container\Container;
use App\Models\Employer;

class EmployerProfileSeeder extends Seeder
{
   /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
                // Create 10 EMPLOYER Profile
                for ($i=0; $i < 10; $i++) { 
                    Employer::create([
                        'company_name' => $this->faker->company(),
                        'company_website' => $this->faker->domainName(),
                        'subscription_id' => $this->faker->numberBetween($min = 1, $max = 3),                        
                        'user_id' => $this->faker->unique()->numberBetween($min = 52, $max = 62),
                    ]);          
                }
    }
}
