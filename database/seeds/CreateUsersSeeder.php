<?php

use Illuminate\Database\Seeder;
use App\User;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'first_name'=>'Admin',
               'last_name'=>'Admin',
               'alamat' => 'JL.LOL',
               'kota' => 'TNG',
               'no_tlp' => '0123456789',
               'bod' => '2016-10-01',
               'email'=>'admin@admin.com',
               'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'first_name'=>'User',
               'last_name'=>'Admin',
               'alamat' => 'JL.LOL',
               'kota' => 'TNG',
               'no_tlp' => '0123456789',
               'bod' => '2016-10-01',
               'email'=>'user@user.com',
               'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
