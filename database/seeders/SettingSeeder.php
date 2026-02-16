<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General
            ['key' => 'agency_name', 'value' => 'Believe Agency', 'group' => 'general'],

            // Social
            ['key' => 'facebook', 'value' => 'https://www.facebook.com/BelieveAgency2025', 'group' => 'social'],
            ['key' => 'instagram', 'value' => 'https://www.instagram.com/believe_agency_?igsh=MWhyaHQxNmg1Mm45Zg%3D%3D&utm_source=qr', 'group' => 'social'],
            ['key' => 'behance', 'value' => 'https://www.behance.net/believeagency', 'group' => 'social'],
            ['key' => 'linkedin', 'value' => 'https://www.linkedin.com/company/believeagency2025/', 'group' => 'social'],
            ['key' => 'tiktok', 'value' => 'https://www.tiktok.com/@believe.agency4?_r=1&_t=ZS-92W8PwecCMz', 'group' => 'social'],
            ['key' => 'twitter', 'value' => '', 'group' => 'social'],
            ['key' => 'whatsapp', 'value' => '201505294544', 'group' => 'social'],

            // Contact
            ['key' => 'contact_email', 'value' => 'info@believe-agency.net', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '+20 15 0529 4544', 'group' => 'contact'],
            ['key' => 'contact_address', 'value' => 'Tanta, Egypt', 'group' => 'contact'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value'], 'group' => $setting['group']]
            );
        }
    }
}
