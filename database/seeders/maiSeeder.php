<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Skills;
use App\Models\Edu;
use App\Models\LangProfi;
use App\Models\Experience;
use App\Models\LanguageModel;
use App\Models\Socials;
use App\Models\status;
use App\Models\contact;
use Illuminate\Support\Str;
use Faker\Generator;
use Illuminate\Container\Container;

class maiSeeder extends Seeder
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
        //Generate Administrator [1]
        $user = User::create([
            'fname' => ucwords('Limbo'),
            'lname' => ucwords('T'),
            'email' => 'limbo@zerotwo.com',
            'country_id' => '228',
            'password' => bcrypt('admin456')              ///admin456
        ]);
        //Assign ROLE for Admin
        $user->attachRole('admin');      

        //Generate 50 Random Candidate 
        for ($i=0; $i < 51; $i++) { 
            $user = User::create([
                'fname' => $this->faker->firstName(),
                'lname' => $this->faker->lastName(),
                'email' => $this->faker->unique()->freeEmail(),
                'country_id' => $this->faker->numberBetween($min = 1, $max = 240),
                'password' => bcrypt('password')
            ]);
            //Assign ROLE for Candidate
            $user->attachRole('candidate'); 
        }
        //Generate 10 Random Employer
        for ($i=0; $i < 10 ; $i++) { 
            $user = User::create([
                'fname' => $this->faker->firstName(),
                'lname' => $this->faker->lastName(),
                'email' => $this->faker->unique()->companyEmail(),
                'country_id' => $this->faker->numberBetween($min = 1, $max = 240),
                'password' => bcrypt('password')
            ]);
            //Assign ROLE for Employer
            $user->attachRole('employer'); 
        } 

        //Generate 50  Candidate Profile
        for ($i=0; $i < 50; $i++) { 
            Profile::create([
                'username' => $this->faker->unique()->userName(),
              //  'image_path'=> $this->faker->slug(),
                'phone' => $this->faker->e164PhoneNumber(),
                'address' => $this->faker->address(),
                'profession' => $this->faker->jobTitle(),
                'description' => $this->faker->text(),
                'user_id' => $this->faker->unique()->numberBetween($min = 2, $max = 51),
            ]);          
        }
        //Generate 20 HTML Skills
        for ($i=0; $i < 10; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('HTML'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 20 CSS Skills
        for ($i=0; $i < 20; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('CSS'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 20 JS Skills
        for ($i=0; $i < 20; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('JavaScript'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 20 PHP Skills
        for ($i=0; $i < 20; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('PHP'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 20 Python Skills
        for ($i=0; $i < 10; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 20),
                'name' => ('Python'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 20 Photoshop Skills
        for ($i=0; $i < 20; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('Photoshop'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 20 Web Design Skills
        for ($i=0; $i < 20; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('Web Design'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 10 SQL Skill
        for ($i=0; $i < 10; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => ('SQL'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 10 Cyber Security Skill
        for ($i=0; $i < 10; $i++) { 
            Skills::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 30),
                'name' => ('Cyber Security'),
                'level'=> $this->faker->numberBetween($min = 30, $max = 100),                
            ]);          
        }
        //Generate 200 Educations
        for ($i=0; $i < 150; $i++) { 
            Edu::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'institution' => $this->faker->company(),
                'study_area'=> $this->faker->word(),
                'degree' => $this->faker->word(),
                'attend_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                'complete_date' => $this->faker->date($format = 'Y-m-d', $max = 'now') ,          
            ]);          
        }
        //Generate 150 Experience
        for ($i=0; $i < 150; $i++) { 
            Experience::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
              // 'is_current_job' => 'true',
                'start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                'end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), 
                'job_title' => $this->faker->jobTitle(),
                'company_name'=> $this->faker->company(),
     
            ]);          
        }
        //PRESET PROFICIENCY
        LangProfi::create([            
            'id' => '1',
            'pro' => 'Basic',     
        ]);          
        LangProfi::create([            
            'id' => '2',
            'pro' => 'Conversational',     
        ]);          
        LangProfi::create([            
            'id' => '3',
            'pro' => 'Fluent',     
        ]);          
        LangProfi::create([            
            'id' => '4',
            'pro' => 'Native',     
        ]);          

        //Generate 40 Language --EN
        for ($i=0; $i < 40; $i++) { 
            LanguageModel::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => 'English',
                'proficiency_id' => $this->faker->numberBetween($min = 1, $max = 4),     
            ]);          
        }
        //Generate 10 Language --Japanese
        for ($i=0; $i < 10; $i++) { 
            LanguageModel::create([
                'profile_id' => $this->faker->numberBetween($min = 21, $max = 30),
                'name' => 'Japanese',
                'proficiency_id' => $this->faker->numberBetween($min = 1, $max = 4),     
            ]);          
        }
        //Generate 20 Language --German
        for ($i=0; $i < 20; $i++) { 
            LanguageModel::create([
                'profile_id' => $this->faker->numberBetween($min = 31, $max = 50),
                'name' => 'German',
                'proficiency_id' => $this->faker->numberBetween($min = 1, $max = 4),     
            ]);          
        }
        //Generate Socials --FB
        for ($i=0; $i < 30; $i++) { 
            Socials::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => 'Facebook',
                'link' => 'fb.com/User',     
            ]);          
        }
        //Generate Socials --Website
        for ($i=0; $i < 50; $i++) { 
            Socials::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => 'Website',
                'link' => $this->faker->freeEmailDomain(),     
            ]);          
        }
        //Generate Socials --Twitter
        for ($i=0; $i < 30; $i++) { 
            Socials::create([
                'profile_id' => $this->faker->numberBetween($min = 1, $max = 50),
                'name' => 'Twitter',
                'link' => 'twitter.com/user',     
            ]);          
        }
        //Generate Socials --Reddit
        for ($i=0; $i < 40; $i++) { 
            Socials::create([
                'profile_id' => $this->faker->numberBetween($min = 2, $max = 49),
                'name' => 'Reddit',
                'link' => 'reddit.com/user',     
            ]);          
        }
        //Generate Contact Messages
           for ($i=0; $i < 10; $i++) { 
            Contact::create([
                'name' => $this->faker->firstName(),
                'email' => $this->faker->unique()->freeEmail(),
                'subject' => $this->faker->catchPhrase(),    
                'message' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),    
            ]);          
        }
        //Status Invitation
        $status = [
            [
                'id'         => 1,
                'name'       => 'Invited',
            ],
            [
                'id'         => 2,
                'name'       => 'Accepted',
            ],
            [
                'id'         => 3,
                'name'       => 'Rejected',
            ],
        ];
        status::insert($status);
        
    }
}
