<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => '{"ru":"Тестовое название 1"}',
            'slug' => 'test-name-1',
            'description' => '{"ru":"Тестовое описание"}',
            'content' => '{"ru":"Тестовые контент"}',
            'image' => 'http://via.placeholder.com/700x311',
            'icon' => ' icon-laptop',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('services')->insert([
            'title' => '{"ru":"Тестовое название 2"}',
            'slug' => 'test-name-2',
            'description' => '{"ru":"Тестовое описание"}',
            'content' => '{"ru":"Тестовые контент"}',
            'image' => 'http://via.placeholder.com/700x311',
            'icon' => ' icon-laptop',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('services')->insert([
            'title' => '{"ru":"Тестовое название 3"}',
            'slug' => 'test-name-3',
            'description' => '{"ru":"Тестовое описание"}',
            'content' => '{"ru":"Тестовые контент"}',
            'image' => 'http://via.placeholder.com/700x311',
            'icon' => ' icon-laptop',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('services')->insert([
            'title' => '{"ru":"Тестовое название 4"}',
            'slug' => 'test-name-4',
            'description' => '{"ru":"Тестовое описание"}',
            'content' => '{"ru":"Тестовые контент"}',
            'image' => 'http://via.placeholder.com/700x311',
            'icon' => ' icon-laptop',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
