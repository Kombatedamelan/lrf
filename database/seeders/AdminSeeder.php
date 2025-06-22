<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            "name"=>"KOMBATE Damelan",
            "email"=>"admin@gmail.com",
            "password"=>Hash::make("admin"),
        ]);


    }
}
