<?php

namespace Database\Seeders;

use App\Models\PembayaranListrik;
use App\Models\TarikTunai;
use App\Models\Transaksi;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'bri@gmail.com',
            'username' => 'bri',
            'name' => 'bri',
            'password' => bcrypt('90909')
        ]);

        User::create([
            'email' => 'bca@gmail.com',
            'username' => 'bca',
            'name' => 'bca',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'email' => 'dki@gmail.com',
            'username' => 'dki',
            'name' => 'dki',
            'password' => bcrypt('43532')
        ]);

        Transaksi::create([
            'user_id' => 1,
            'jenis' => 'tarik tunai'
        ]);
        Transaksi::create([
            'user_id' => 2,
            'jenis' => 'transfer'
        ]);
        Transaksi::create([
            'user_id' => 3,
            'jenis' => 'pembayaran listrik'
        ]);

        TarikTunai::create([
            'user_id' => 1,
            'transaksi_id' => 1,
            'nominal' => '100000'
        ]);

        TarikTunai::create([
            'user_id' => 1,
            'transaksi_id' => 1,
            'nominal' => '20000'
        ]);

        TarikTunai::create([
            'user_id' => 1,
            'transaksi_id' => 1,
            'nominal' => '200000'
        ]);

        PembayaranListrik::create([
            'user_id' => 3,
            'transaksi_id' => 3,
            'nomor_pelanggan' => '9034923',
            'nominal' => '1000000'
        ]);
        PembayaranListrik::create([
            'user_id' => 3,
            'transaksi_id' => 3,
            'nomor_pelanggan' => '1000000',
            'nominal' => '200000'
        ]);
        PembayaranListrik::create([
            'user_id' => 3,
            'transaksi_id' => 3,
            'nomor_pelanggan' => '1000000',
            'nominal' => '200000'
        ]);

        Transfer::create([
            'user_id' => 2,
            'transaksi_id' => 2,
            'nomor_rekening' => '1301293019',
            'nominal' => '900000'
        ]);

        Transfer::create([
            'user_id' => 2,
            'transaksi_id' => 2,
            'nomor_rekening' => '2342234019',
            'nominal' => '900000'
        ]);
        Transfer::create([
            'user_id' => 2,
            'transaksi_id' => 2,
            'nomor_rekening' => '1000000',
            'nominal' => '5454871234'
        ]);
    }
}
