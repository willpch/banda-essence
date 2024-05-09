<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = 'William Pacheco';
        $user1->email = 'lolplayerbr@gmail.com';
        $user1->password = Hash::make('salsicha12');
        $user1->save();

        $user2 = new User();
        $user2->name = 'Sabrina Essence';
        $user2->email = 'sabrina@bandaessence.com.br';
        $user2->password = Hash::make('sabrinaessence');
        $user2->save();
    }
}
