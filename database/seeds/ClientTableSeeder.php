<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'title' => 'Тестовое название 1',
            'image' => 'http://via.placeholder.com/300x200',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clients')->insert([
            'title' => 'Тестовое название 2',
            'image' => 'http://via.placeholder.com/300x200',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clients')->insert([
            'title' => 'Тестовое название 3',
            'image' => 'http://via.placeholder.com/300x200',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clients')->insert([
            'title' => 'Тестовое название 4',
            'image' => 'http://via.placeholder.com/300x200',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('clients')->insert([
            'title' => 'Тестовое название 5',
            'image' => 'http://via.placeholder.com/300x200',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
