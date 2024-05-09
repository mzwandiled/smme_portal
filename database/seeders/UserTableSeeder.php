<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@logicbloom.co.za',
                'password'=> Hash::make('51420841Lu@'),
                'role'=>'admin',
                'status'=> 'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            //smme
            [
                'name'=>'Smme',
                'username'=>'smme',
                'email'=>'smme@logicbloom.co.za',
                'password'=> Hash::make('51420841Lu@'),
                'role'=>'smme',
                'status'=> 'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

            //corporate_sponsor
            [
                'name'=>'Corporate Sponsor',
                'username'=>'corporate_sponsor',
                'email'=>'corporate_sponsor@logicbloom.co.za',
                'password'=> Hash::make('51420841Lu@'),
                'role'=>'corporate_sponsor',
                'status'=> 'active',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],

        ]);
    }
}
