<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team = [
            [
                'name' => ['en' => 'Mostafa Elsawaf', 'ar' => 'مصطفى السواف'],
                'role' => ['en' => 'CEO & Founder', 'ar' => 'المدير التنفيذي والمؤسس'],
                'image' => 'team/team-1.webp',
                'bio' => ['en' => null, 'ar' => null],
                'social_links' => [
                    'facebook' => '#',
                    'linkedin' => '#',
                ],
                'cv_link' => '#',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Mahmoud Mohamed', 'ar' => 'محمود محمد'],
                'role' => ['en' => 'Marketing Manager', 'ar' => 'مدير التسويق'],
                'image' => 'team/team-2.webp',
                'bio' => ['en' => null, 'ar' => null],
                'social_links' => [
                    'facebook' => '#',
                    'linkedin' => '#',
                ],
                'cv_link' => '#',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Mostafa Ali', 'ar' => 'مصطفى علي'],
                'role' => ['en' => 'Project Manager', 'ar' => 'مدير المشاريع'],
                'image' => 'team/team-3.webp',
                'bio' => ['en' => null, 'ar' => null],
                'social_links' => [
                    'facebook' => '#',
                    'linkedin' => '#',
                ],
                'cv_link' => '#',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => ['en' => 'Abdallah Bakour', 'ar' => 'عبدالله باكير'],
                'role' => ['en' => 'Branding Specialist', 'ar' => 'أخصائي العلامة التجارية'],
                'image' => 'team/team-4.webp',
                'bio' => ['en' => null, 'ar' => null],
                'social_links' => [
                    'facebook' => '#',
                    'linkedin' => '#',
                ],
                'cv_link' => '#',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($team as $member) {
            TeamMember::create($member);
        }
    }
}
