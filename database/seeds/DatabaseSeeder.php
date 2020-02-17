<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('UsuarioTableSeeder');
    }
}

class UsuarioTableSeeder extends Seeder{
  public function run(){
    DB::insert('INSERT INTO usuario (usuario, senha) VALUES (?,?)', array('admin', 'admin'));
  }

}
