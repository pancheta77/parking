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
        DB::table('users')->truncate();

        DB::table('users')->insert([
        	'name' => 'Pablo',
        	'celular' => 2215429960,
        	'email' => null,
        	'password' => bcrypt ('1234'),
        	'saldo' => 0,
          'remember_token' => str_random(10),
		]);

		DB::table('users')->insert([
        	'name' => 'Javier',
        	'celular' => 2214951946,
        	'email' => null,
        	'password' => bcrypt ('1234'),
        	'saldo' => 0,
          'remember_token' => str_random(10),
		]);

		DB::table('users')->insert([
        	'name' => 'Diego',
        	'celular' => 1159803008,
        	'email' => null,
        	'password' => bcrypt ('1234'),
        	'saldo' => 0,
          'remember_token' => str_random(10),
		]);

		DB::table('users')->insert([
        	'name' => 'Marcelo',
        	'celular' => 2214593156,
        	'email' => null,
        	'password' => bcrypt ('1234'),
        	'saldo' => 0,
          'remember_token' => str_random(10),
		]);
    }
}