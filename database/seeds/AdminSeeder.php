<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('users')->insert(['nama'=>'Administrator',
    								'nip'=>'admin',
    								'password'=>bcrypt('admin'),
    								'role'=>'admin']);

    }
}
