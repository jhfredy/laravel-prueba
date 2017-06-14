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
        $this->call(UserTableSeeder::class);
    }
    
}
class UserTableSeeder extends Seeder {

    public function run()
    {
       DB::table('users')->insert([
         'id' => '15',
          'name' => 'antonino',
         'email' => 'antonino@hotmail.com',
         'password'=>bcrypt('12345')
        ]);
    }

}
