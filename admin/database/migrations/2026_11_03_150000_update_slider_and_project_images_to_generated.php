<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Copy generated images from assests/ into storage/app/public/ so backend admin sees them
        $baseDir = dirname(base_path());
        $sourceSliders = $baseDir . '/assests/image/generated/sliders';
        $destSliders = storage_path('app/public/sliders');
        if (File::isDirectory($sourceSliders)) {
            File::ensureDirectoryExists($destSliders);
            File::copyDirectory($sourceSliders, $destSliders);
        }

        $sourceVentures = $baseDir . '/assests/image/generated/ventures';
        $destProjects = storage_path('app/public/projects');
        if (File::isDirectory($sourceVentures)) {
            File::ensureDirectoryExists($destProjects);
            File::copyDirectory($sourceVentures, $destProjects);
        }

        $sourceCompleted = $baseDir . '/assests/image/generated/completed';
        if (File::isDirectory($sourceCompleted)) {
            File::copyDirectory($sourceCompleted, $destProjects);
        }

        // Overwrite rj-retreat.jpg in storage/app/public/projects with the real entrance photo
        $rjEntrance = $sourceVentures . '/venture-rj-retreat-entrance.jpg';
        if (File::exists($rjEntrance)) {
            File::copy($rjEntrance, $destProjects . '/rj-retreat.jpg');
        }

        // 2. Update sliders in DB
        $sliders = [
            1 => [
                'title' => 'Own Land. Build Dreams. Create Legacy.',
                'subtitle' => 'DTCP & HMDA Approved Open Plots in Hyderabad',
                'image' => 'sliders/slider-1-paanchajanya-heritage.jpg'
            ],
            2 => [
                'title' => 'Paanchajanya Venture - Shamirpet',
                'subtitle' => 'Premium Plots Near ORR Exit 7',
                'image' => 'sliders/slider-2-greenleaf-shamirpet.jpg'
            ],
            3 => [
                'title' => 'RJ Retreat - Kadthal Srisailam Highway',
                'subtitle' => 'Near Upcoming AI City & Pharma Hub',
                'image' => 'sliders/slider-3-rj-retreat-kadthal.jpg'
            ],
            4 => [
                'title' => 'Premium County - Kadthal Growth Zone',
                'subtitle' => 'Strategic Plotted Living on Srisailam Highway',
                'image' => 'sliders/slider-4-premium-county.jpg'
            ],
        ];

        try {
            DB::table('sliders')->truncate();
            foreach ($sliders as $order => $s) {
                DB::table('sliders')->insert([
                    'title' => $s['title'],
                    'subtitle' => $s['subtitle'],
                    'image' => $s['image'],
                    'order' => $order,
                    'is_active' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // 3. Update projects table
            DB::table('projects')->where('slug', 'greenleaf-shamirpet')->update([
                'image' => 'projects/venture-greenleaf-entrance.jpg',
                'updated_at' => now(),
            ]);
            DB::table('projects')->where('slug', 'rj-retreat')->update([
                'image' => 'projects/venture-rj-retreat-entrance.jpg',
                'updated_at' => now(),
            ]);
            DB::table('projects')->where('slug', 'premium-county')->update([
                'image' => 'projects/venture-premium-county-entrance.jpg',
                'status' => 'upcoming',
                'location' => 'Kadthal, Srisailam Highway',
                'updated_at' => now(),
            ]);
        } catch (\Exception $e) {
            // Log but don't fail deployment
            logger()->error('Slider/Project migration error: ' . $e->getMessage());
        }
    }

    public function down(): void
    {
    }
};

