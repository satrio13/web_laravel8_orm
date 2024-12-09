<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Jakarta');
        
        DB::table('tb_user')->insert([
            'id_user' => '1',
            'nama' => 'admin',
            'username' => 'admin',
            'password' => password_hash('123456', PASSWORD_BCRYPT),
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'level' => 'superadmin',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

}