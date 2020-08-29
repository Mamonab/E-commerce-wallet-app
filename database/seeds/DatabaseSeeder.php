<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
            for ($i = 1; $i <= 2; $i++) {
                DB::table('customers')->insert([
                    'firstname' => $i == 1 ? 'Taofeek' : 'Abiodun',
                    'lastname' => $i == 1 ? 'Olalere' : 'Olamilekan',
                    'phone_number' => $i == 1 ? '07085516354' : '08139160110',
                    'email' => 'customer'.$i.'@gmail.com',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            DB::table('wallets')->insert([
                'code' => 'WT1',
                'customer_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'balance' => 0,
            ]);

            DB::table('wallets')->insert([
                'code' => 'WT2',
                'customer_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'balance' => 0,
            ]);
        }
    }
}
