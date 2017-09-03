<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $setting1 = Setting::create(['judul_setting'=>'Nama Toko',
                                     'isi_setting'=>'IT STORE',
                                     'updater'=>'superadmin',]);
        $setting2 = Setting::create(['judul_setting'=>'Alamat',
                                     'isi_setting'=>'<p>Alamat: Jalan Sudirman No. 12345 RT. 007, RW. 008, Jakarta, Indonesia</p>',
                                     'updater'=>'superadmin',]);
        $setting3 = Setting::create(['judul_setting'=>'Author',
                                     'isi_setting'=>'<p>IT STORE</p>',
                                     'updater'=>'superadmin',]);
        $setting5 = Setting::create(['judul_setting'=>'Footer',
                                     'isi_setting'=>'<p>Alamat: Jalan Sudirman No. 12345 RT. 007, RW. 008, Jakarta, Indonesia<br /> Customer Service: SMS/Call/Whatsapp 080141238, BBM XXXXX<br /> Jam Layanan: Senin - Sabtu: 09.00 WIB - 16.00 WIB<br /> Copyright 2010-2016 IT STORE<br /> All Right Reserved</p>',
                                     'updater'=>'superadmin',]);
    }
}
