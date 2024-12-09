<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\EndUser;

class EndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        EndUser::create([
            'name' => 'たろ',
            'email' => 'taro@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
