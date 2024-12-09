<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminUser::create([
            'name' => 'りゅうや',
            'jtc_id' => 'ryu1',
            'email' => 'ryuya@gmail.com',
            'password' => Hash::make('1234'),
        ]);
        
        AdminUser::create([
            'name' => 'ひかる',
            'jtc_id' => 'hikaru1',
            'email' => 'hikaru@gmail.com',
            'password' => Hash::make('1234'),
        ]);
        
        AdminUser::create([
            'name' => 'はこだ',
            'jtc_id' => 'hako1',
            'email' => 'hakoda@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
