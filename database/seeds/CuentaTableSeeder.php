<?php

use Illuminate\Database\Seeder;

class CuentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cuentas')->truncate();

      DB::table('cuentas')->insert([
        'userId' => 1,
        'numero' => rand(1000, 999999),
        'saldo' => 50,
      ]);

      DB::table('cuentas')->insert([
        'userId' => 2,
        'numero' => rand(1000, 999999),
        'saldo' => 50,
      ]);

      DB::table('cuentas')->insert([
        'userId' => 3,
        'numero' => rand(1000, 999999),
        'saldo' => 50,
      ]);

      DB::table('cuentas')->insert([
        'userId' => 4,
        'numero' => rand(1000, 999999),
        'saldo' => 50,
      ]);

      DB::table('cuentas')->insert([
        'userId' => 5,
        'numero' => rand(1000, 999999),
        'saldo' => 2000,
      ]);

      DB::table('cuentas')->insert([
        'userId' => 6,
        'numero' => rand(1000, 999999),
        'saldo' => 150,
      ]);
    }
}
