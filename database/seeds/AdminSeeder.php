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
        
        DB::table('users')->insert(['nama'=>'NANANG PRASETYO',
                                    'nip'=>'7806011-Z',
                                    'perner'=>'78061000'
                                    'password'=>bcrypt('7806011-Z'),
                                    'role'=>'pegawai']);

    }
}
