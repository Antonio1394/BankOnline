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
      $user->usuario='Admin';
      $user->email = 'admin@gmail.com';
      $user->password ='12345';
      $user->estado=true;
      $user->idCliente=1;
      $user->save();
    }
}
