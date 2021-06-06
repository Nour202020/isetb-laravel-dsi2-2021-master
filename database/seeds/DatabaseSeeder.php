<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(StudentsTableSeeder::class);
    }
}
