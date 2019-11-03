<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ownerlaundry',
            'username' => 'ownerlaundry',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('owner123'),
            'notelp' => '081320985748',
            'alamat' => 'alamat owner',
            'tipe' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'stafflaundry',
            'username' => 'stafflaundry',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff123'),
            'notelp' => '081321391087',
            'alamat' => 'alamat staff',
            'tipe' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Andi',
            'username' => 'customer1',
            'email' => 'andi@gmail.com',
            'password' => bcrypt('andi1234'),
            'notelp' => '081322746759',
            'alamat' => 'Bandung, Komplek Angkasa Blok A1',
            'tipe' => 3
        ]);

        DB::table('users')->insert([
            'name' => 'Budi',
            'username' => 'customer2',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi1234'),
            'notelp' => '08132109765',
            'alamat' => 'Bandung, Komplek Permata Blok B2',
            'tipe' => 3
        ]);
    }
}
