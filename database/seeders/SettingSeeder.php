<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::factory()->create([
            'website_name'      => 'BioMac Lab',
            'contact_email'     => 'info@biomaclab.com',
            'info_email'        => 'info@biomaclab.com',
            'whatsapp_number'   => '01721238439',
            'address_line_two'  => 'Dhaka, Bangladesh',
            'copyright_title'   => 'Developed By CODERS HAT',
            'copyright_url'     => 'codershatbd.com',
            'site_title'        => 'BioMac Lab',
            'site_url'          => 'biomaclab.com',
            'facebook_url'      => 'https://web.facebook.com/profile.php?id=61560183247831',
            'linkedin_url'      => 'https://web.facebook.com/profile.php?id=61560183247831',
            'whatsapp_url'      => 'https://wa.me/01721238439',
        ]);
    }
}
