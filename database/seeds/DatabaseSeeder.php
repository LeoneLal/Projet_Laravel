<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Entreprise;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = User::create([
            'name' => 'admin',
            'email' => "admin@gmail.com",
            'password' => 'azerty-85',
            'api_token' => Str::uuid(),
        ]);

       // $entreprise = Entreprise::create([ 
       // 'nom' => "Devenir Chiant", 
        //'adresse' => "Chez moi", 
       // 'telephone' => "666 666 666", 
       // 'mail' => "pom@gmail.com",
        //'user_id'=> "85000",
       // ]);
    }
}
