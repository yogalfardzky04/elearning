<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::updateOrCreate([
        'email' => 'agoez1@gmail.com',
    ] , [
        'name' => 'Agus',
        'email_verified_at' =>date('Y-m-d H:i:s'),
        'password' => bcrypt("asdfasdf") 
        ]);

       User::updateOrCreate([
        'email' => 'brodin21@gmail.com',
    ] , [
        'name' => 'Brodin',
        'email_verified_at' =>date('Y-m-d H:i:s'),
        'password' => bcrypt("asdfasdf") 
        ]);

       User::updateOrCreate([
        'email' => 'dinda11@gmail.com',
    ] , [
        'name' => 'Dinda',
        'email_verified_at' =>date('Y-m-d H:i:s'),
        'password' => bcrypt("asdfasdf") 
        ]);

       User::updateOrCreate([
        'email' => 'fauziah91@gmail.com',
    ] , [
        'name' => 'Fauziah',
        'email_verified_at' =>date('Y-m-d H:i:s'),
        'password' => bcrypt("asdfasdf") 
        ]);

       User::updateOrCreate([
        'email' => 'kirana99@gmail.com',
    ] , [
        'name' => 'Kirana',
        'email_verified_at' =>date('Y-m-d H:i:s'),
        'password' => bcrypt("asdfasdf") 
        ]);
    }
}
