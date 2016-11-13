<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'id' => 1,
          'accountType' => 'Organization',
          'name' => 'HQD',
          'address' => 'hcm',
          'email' => 'superman@app.com',
          'phone' => '123456',
          'accessType'=>'pay',
          'password' => Hash::make('mypw')
      ]);
    }
}
