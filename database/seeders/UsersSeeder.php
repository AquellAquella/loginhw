<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $h1 = new User;
        $h1->name = "Spiderman";
        $h1->real_name = "Peter Benjamin Parker";
        $h1->gender = "Male";
        $h1->universe_id = 4;
        $h1->email = "spiderman@gmail.com";
        $h1->password = Hash::make("Psswd1");
        $h1->save();

        $h2 = new User;
        $h2->name = "Hulk";
        $h2->real_name = "Robert Bruce Banner";
        $h2->gender = "Male";
        $h2->universe_id = 4;
        $h2->email = "hulk@gmail.com";
        $h2->password = Hash::make("Psswd2");
        $h2->save();

        $h3 = new User;
        $h3->name = "Captain America";
        $h3->real_name = "Steven Rogers";
        $h3->gender = "Male";
        $h3->universe_id = 4;
        $h3->email = "captain_america@gmail.com";
        $h3->password = Hash::make("Psswd3");
        $h3->save();

        $h4 = new User;
        $h4->name = "Superman";
        $h4->real_name = "Clark Kent";
        $h4->gender = "Male";
        $h4->universe_id = 2;
        $h4->email = "superman@gmail.com";
        $h4->password = Hash::make("Psswd4");
        $h4->save();

        $h5 = new User;
        $h5->name = "Batman";
        $h5->real_name = "Bruce Wayne";
        $h5->gender = "Male";
        $h5->universe_id = 5;
        $h5->email = "batman@gmail.com";
        $h5->password = Hash::make("Psswd5");
        $h5->save();

        $h6 = new User;
        $h6->name = "Scarlet Spider";
        $h6->real_name = "Ben Reilly";
        $h6->gender = "Male";
        $h6->universe_id = 5;
        $h6->email = "scarlet_spider@gmail.com";
        $h6->password = Hash::make("Psswd6");
        $h6->save();

        $h7 = new User;
        $h7->name = "Wonder Woman";
        $h7->real_name = "Diana Prince";
        $h7->gender = "Female";
        $h7->universe_id = 1;
        $h7->email = "wonder_woman@gmail.com";
        $h7->password = Hash::make("Psswd7");
        $h7->save();

        $h8 = new User;
        $h8->name = "Doomsday";
        $h8->real_name = "Unkown";
        $h8->gender = "Male";
        $h8->universe_id = 3;
        $h8->email = "doomsday@gmail.com";
        $h8->password = Hash::make("Psswd8");
        $h8->save();

        $h9 = new User;
        $h9->name = "Scarlet Witch";
        $h9->real_name = "Wanda Maximoff";
        $h9->gender = "Female";
        $h9->universe_id = 5;
        $h9->email = "scarlet_witch@gmail.com";
        $h9->password = Hash::make("Psswd9");
        $h9->save();

        $h10 = new User;
        $h10->name = "Night Wing";
        $h10->real_name = "Dick Grayson";
        $h10->gender = "Male";
        $h10->universe_id = 3;
        $h10->email = "night_wing@gmail.com";
        $h10->password = Hash::make("Psswd10");
        $h10->save();
    }
}
