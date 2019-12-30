<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name' => 'Martires Alberto',
      'email' => 'beto@gmail.com',
      'password' => bcrypt('123456')
    ]);

    User::create([
      'name' => 'Carlos Emilio',
      'email' => 'carlos@gmail.com',
      'password' => bcrypt('123456')
    ]);

    User::create([
      'name' => 'Mabel Irene',
      'email' => 'irene@gmail.com',
      'password' => bcrypt('123456')
    ]);
  }
}
