<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectsSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'DRR Premium County (RJ Retreat)',
                'slug' => 'rj-retreat',
                'client' => 'Paanchajanya Realty / Panchajanya Eco Villages',
                'location' => 'Kadthal, Srisailam Highway, Hyderabad',
                'category' => 'Villa Plots',
                'description' => 'Spread Across 17 Acres | DTCP Approved | 150–500 Sq. Yds Plots with Spot Registration near upcoming AI Fourth City.',
                'full_description' => '<p><strong>Premium Residential Plots @ Kadthal, Hyderabad</strong></p><p>Panchajanya Eco Villages brings you DRR Premium County (RJ Retreat), a premium villa plots project located in Kadthal, Hyderabad. Positioned near the upcoming AI Fourth City, Regional Ring Road, and proposed 6-lane Srisailam Highway.</p><ul><li>17 Acres DTCP Approved Gated Community</li><li>40ft & 33ft Black Top Roads</li><li>100% Vastu Compliant & Clear Title with Spot Registration</li><li>Underground Electricity & Water Pipeline</li><li>Clubhouse, Landscaped Parks, Children Play Area & 24/7 Security</li></ul>',
                'value' => 85.00,
                'start_date' => Carbon::parse('2023-01-01'),
                'end_date' => Carbon::parse('2026-12-31'),
                'status' => 'in_progress',
                'image' => 'projects/rj-retreat.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'Urban Trilla Living',
                'slug' => 'urban-trilla-living',
                'client' => 'Paanchajanya Realty',
                'location' => 'Prime Hyderabad Growth Hub',
                'category' => 'Luxury Apartments',
                'description' => '2 & 3 BHK Luxury Apartments with modern clubhouse, swimming pool, gym, 100% Vastu compliance, and GHMC approval.',
                'full_description' => '<p>Discover Urban Trilla Living by Paanchajanya Realty. Luxury living with modern amenities in the heart of Hyderabad. Explore floor plans, highlights, and world-class architecture.</p><ul><li>GHMC Approved Luxury Residential Complex</li><li>2 & 3 BHK Spacious Floor Plans</li><li>Clubhouse with Swimming Pool & Modern Gymnasium</li><li>100% Power Backup & 24/7 High-definition Surveillance</li></ul>',
                'value' => 95.00,
                'start_date' => Carbon::parse('2022-06-01'),
                'end_date' => Carbon::parse('2025-10-31'),
                'status' => 'completed',
                'image' => 'projects/urban-trilla.png',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Future City Enclave',
                'slug' => 'future-city-enclave',
                'client' => 'Paanchajanya Realty',
                'location' => 'Proposed 6-Lane Srisailam Highway, Hyderabad',
                'category' => 'Open Plots',
                'description' => 'Prime residential open plots facing proposed 6-lane Srisailam Highway near upcoming AI Fourth City growth corridor.',
                'full_description' => '<p>Future City Enclave is positioned directly along the proposed 6-lane Srisailam Highway growth corridor, right next to the upcoming AI Fourth City. High appreciation potential for smart investors and families looking to build dream homes.</p><ul><li>Direct 6-Lane Srisailam Highway Facing</li><li>Close proximity to AI Fourth City, Amazon Data Center & Pharma City</li><li>Clear Title & Immediate Spot Registration</li><li>Wide internal BT roads, avenue plantations, and water supply</li></ul>',
                'value' => 45.00,
                'start_date' => Carbon::parse('2024-01-01'),
                'end_date' => null,
                'status' => 'planned',
                'image' => 'projects/future-city.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
