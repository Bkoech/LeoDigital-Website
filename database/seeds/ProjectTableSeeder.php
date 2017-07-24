<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'title' => '{"ru":"Тестовое название 1"}',
            'slug' => 'test-name-1',
            'description' => '{"ru":"Тестовое описание"}',
            'content' => '{"ru":"Тестовые контент"}',
            'keys_photo' => '',
            'image' => 'http://via.placeholder.com/600x400',
            'banner' => 'http://via.placeholder.com/1600x800',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'title' => '{"ru":"Тестовое название 2"}',
            'slug' => 'test-name-2',
            'description' => '{"ru":"Тестовое описание"}',
            'content' => '{"ru":"Тестовые контент"}',
            'keys_photo' => '',
            'image' => 'http://via.placeholder.com/600x400',
            'banner' => 'http://via.placeholder.com/1600x800',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]); 
    }
}
