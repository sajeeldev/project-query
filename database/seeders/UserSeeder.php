<?php

namespace Database\Seeders;

// use Faker\Core\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\users;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/users.json');
        $users = collect(json_decode($json));

        $users->each(function ($user){
            users::create([
                'name'=> $user->name,
                'email'=>$user->email,
                'age' => $user->age,
                'city' => $user->city,
            ]);
        });
    }
}
