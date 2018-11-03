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
        	'celular' => 2213334455,
        	'email' => 'pablo@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'cuentaId' => 1,
          'remember_token' => str_random(10),
	      ]);

    		DB::table('users')->insert([
        	'name' => 'Javier Gimenez',
        	'celular' => 2213334466,
        	'email' => 'javier@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'cuentaId' => 2,
          'remember_token' => str_random(10),
    		]);

    		DB::table('users')->insert([
        	'name' => 'Diego Taboada',
        	'celular' => 2213334477,
        	'email' => 'diego@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'cuentaId' => 3,
          'remember_token' => str_random(10),
    		]);

    		DB::table('users')->insert([
        	'name' => 'Marcelo Vannucci',
        	'celular' => 2213334498,
        	'email' => 'marcelo@pavesur.com',
        	'password' => bcrypt ('1234'),
        	'cuentaId' => 4,
          'remember_token' => str_random(10),
    		]);

        DB::table('users')->insert([
          'name' => 'Vendedor',
          'celular' => 2219998888,
          'email' => 'vendedor@pavesur.com',
          'password' => bcrypt ('1234'),
          'cuentaId' => 5,
          'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
          'name' => 'Usuario',
          'celular' => 2212223344,
          'email' => 'usuario@pavesur.com',
          'password' => bcrypt ('1234'),
          'cuentaId' => 6,
          'remember_token' => str_random(10),
        ]);
    }
}
