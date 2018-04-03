<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        if (env('APP_ENV', 'local') === 'local') {
        	// $this->call(AboutUsesSeeder::class);
	        // $this->call(AuthorSeeder::class);
	        // $this->call(CategorySeeder::class);
	        // $this->call(CommentSeeder::class);
	        // $this->call(CourseSeeder::class);
	        // $this->call(DataScientistSeeder::class);
	        // $this->call(EventSeeder::class);
	        // $this->call(InstructorSeeder::class);
	        // $this->call(JoinUsSeeder::class);
	        // $this->call(ProductSeeder::class);
	        // $this->call(ResearchDevelopmentSeeder::class);
	        // $this->call(SubcriberSeeder::class);
        }
    }
}
