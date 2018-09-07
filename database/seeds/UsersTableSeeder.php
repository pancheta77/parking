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
        	'name' => 'Pablo Ancheta',
        	'celular' => 2215429960,
        	'email' => 'pabloancheta@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'saldo' => rand(0, 999)/10,
          'remember_token' => str_random(10),
		]);

		DB::table('users')->insert([
        	'name' => 'Javier Gimenez',
        	'celular' => 2214951946,
        	'email' => 'gimenezcj@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'saldo' => rand(0, 999)/10,
          'remember_token' => str_random(10),
		]);

		DB::table('users')->insert([
        	'name' => 'Diego Taboada',
        	'celular' => 1159803008,
        	'email' => 'dltaboadat@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'saldo' => rand(0, 999)/10,
          'remember_token' => str_random(10),
		]);

		DB::table('users')->insert([
        	'name' => 'Marcelo Vanucci',
        	'celular' => 2214593156,
        	'email' => 'marcelovannucci@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'saldo' => rand(0, 999)/10,
          'remember_token' => str_random(10),
		]);
    }
}
