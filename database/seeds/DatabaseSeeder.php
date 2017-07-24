<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Qwerty',
            'email' => 'qwerty@mail.com',
            'password' => bcrypt('qwerty'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('permissions')->insert([
            'name' => 'access_backend',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('permission_roles')->insert([
            'permission_id' => '1',
            'role_id' => '1',
        ]);
        DB::table('role_users')->insert([
            'role_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('languages')->insert([
            'name'        => 'English',
            'app_name'    => 'english',
            'flag'        => '',
            'abbr'        => 'en',
            'script'    => 'Latn',
            'native'    => 'English',
            'active'    => '1',
            'default'    => '0',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('languages')->insert([
            'name'        => 'Russian',
            'app_name'    => 'russian',
            'flag'        => '',
            'abbr'        => 'ru',
            'script'    => 'Latn',
            'native'    => 'Russian',
            'active'    => '1',
            'default'    => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
