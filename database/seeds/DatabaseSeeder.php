<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Entreprise;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Léone",
            'email' => "leone@gmail.com",
            'password' => "azerty-85",
            'api_token' => Str::uuid(),
        ]);
        
    }
}
