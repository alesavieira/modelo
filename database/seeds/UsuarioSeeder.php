<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
                    'name'          => 'Administrador',
                    'email'         => 'alesavieira@gmail.com',
                    'password'      => bcrypt('1q2w3e4r')
                ];
        DB::table('users')->insert($user);
    }
}
