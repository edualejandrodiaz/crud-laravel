<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'admin@admin.cl',
            'password'=>Hash::make('lealtad360')
            
        ]);

        DB::table('empleados')->insert([
            'Nombre'=>'Primer',
            'ApellidoPaterno'=>'Usuario',
            'ApellidoMaterno'=>'Agregado',
            'Correo'=>'admin@admin.cl',
            'Foto'=>'uploads/lbC60GQWKEqGdhmd1bZoG7JU8FSeRHqI8HT3gFU2.png'
        ]);
    }
}