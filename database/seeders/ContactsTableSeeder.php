<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'João Silva',
            'contact' => '123456789',
            'email' => 'joao@example.com',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Maria Souza',
            'contact' => '987654321',
            'email' => 'maria@example.com',
        ]);
    }
}
