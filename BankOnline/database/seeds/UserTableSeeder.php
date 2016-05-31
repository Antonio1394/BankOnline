<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
      $user->password ='12345';
      $table->Usuario='Admin';

      $user->email = 'admin@gmail.com';
      $user->save();
    }
}
