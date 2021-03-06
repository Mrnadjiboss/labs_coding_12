<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
   



        DB::table( 'users' )->insert( [
            'name' => 'The  project',
            'email' => 'projet12codingschool@gmail.com',
            'password' => bcrypt( 'projet.codingschool@gmail.com' ),
            'role_id' => 1,
            'created_at' => now()

        ] );     


        DB::table( 'users' )->insert( [
            'name'=> 'thor odinson',
            'email'=> 'thor@example.com',
            'password'=> bcrypt( 'thor@example.com' ),
            'role_id' => 2,
            'img'=>'/img/avatar/03.jpg',
            'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'created_at' => now()
        ] );
        DB::table( 'users' )->insert( [
            'name'=> 'will Smith',
            'email'=> 'membre@example.com',
            'password'=> bcrypt( 'membre@example.com' ),
            'role_id' => 4,
            'img'=>'/img/avatar/01.jpg',
            'created_at' => now()
        ] );


        DB::table( 'users' )->insert( [
            'name'=> 'jaden Smith',
            'email'=> 'member@example.com',
            'password'=> bcrypt( 'member@example.com' ),
            'role_id' => 4,
            'img'=>'/img/avatar/03.jpg',
            'created_at' => now()
        ] );


        DB::table( 'users' )->insert( [
            'name'=> 'tony stark',
            'email'=> 'test@example.com',
            'password'=> bcrypt( 'test@example.com' ),
            'role_id' => 3,
            'img'=>'/img/avatar/03.jpg',
            'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'created_at' => now()
        ] );
    }
}
 