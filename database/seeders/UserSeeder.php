<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $save           = new User();
        $save->name     = 'Emir buğra';
        $save->email    = 'kodmanyagha@gmail.com';
        $save->password = Hash::make('123456');
        $save->save();
    }
}
