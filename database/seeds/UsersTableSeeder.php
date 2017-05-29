<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \Models\User::create([
            'name' => '管理员',
            'email' => 'admin@yunhaidata.com',
            'password' => bcrypt('admin888'),
            'avatar' => 'http://oqp7wrn6m.bkt.clouddn.com/avatar_2017-05-29',
            'remember_token' => str_random(32),
        ]);
        
        
    }
}