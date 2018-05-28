<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('roles')->insert(
            [
                [
                    'name' => 'Admin'
                ],
                [
                    'name' => 'Author'
                ],
                [
                    'name' => 'Student'
                ]
            ]
        );
    }
}
