<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Jordy Kristianata',
            'nrp' => '123456780',
            'email' => 'jordykristianata@gmail.com',
            'jurusan' => 'Informatika',
        ]);
    }
}
