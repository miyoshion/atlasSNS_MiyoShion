<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users') -> insert([
            [
                'username'=>'test123456',
                'mail' => '123456test@gmail.com',
                'password' => bcrypt('1qaz2wsX')
            ],
        ]);
    }
}
