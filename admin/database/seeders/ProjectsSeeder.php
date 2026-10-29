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
                'title' => 'GreenLeaf @ Shamirpet',
                'slug' => 'greenleaf-shamirpet',
                'client' => 'Paanchajanya Reality',
                'location' => 'Shamirpet, ORR Exit 7, Hyderabad',
                'category' => 'Villa Plots',
                'description' => '64 Acres Mega Luxury Villa Plotted Community | HMDA & RERA Approved | 866 Villa Plots with 40+ World-Class Amenities near Genome Valley.',
                'full_description' => '<p><strong>64 Acres HMDA & RERA Approved Luxury Villa Plotted Township @ Shamirpet, Hyderabad</strong></p><p>GreenLeaf by Paanchajanya Reality is a signature 64-acre gated community featuring 866 premium villa plots situated just 2 minutes from ORR Exit 7, Shamirpet. Strategically located adjoining Genome Valley, BITS Pilani Hyderabad, and Alwal connectivity.</p><ul><li>64 Acres HMDA & RERA Approved Master Planned Layout</li><li>866 Premium Villa Plots (150 to 500+ Sq. Yds)</li><li>Grand Entrance Arch with 24/7 RFID Security & CCTV</li><li>40,000+ Sft Clubhouse with Infinity Pool, Gym, Sports Courts & Banquet</li><li>60ft, 40ft & 33ft Wide Black Top Roads with Designer Street Lighting</li><li>Underground Electricity, Water Pipeline, Sewage Treatment Plant (STP)</li><li>100% Vaastu Compliant with Clear Title & Immediate Spot Registration</li></ul>',
                'value' => 125.00,
                'start_date' => Carbon::parse('2024-01-01'),
                'end_date' => Carbon::parse('2027-12-31'),
                'status' => 'ongoing',
                'image' => 'projects/greenleaf.jpg',
                'gallery' => [
                    'projects/greenleaf.jpg',
                ],
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'DRR Premium County (RJ Retreat)',
                'slug' => 'rj-retreat',
                'client' => 'Paanchajanya Reality / Panchajanya Eco Villages',
                'location' => 'Kadthal, Srisailam Highway, Hyderabad',
                'category' => 'Villa Plots',
                'description' => 'Spread Across 17 Acres | DTCP & RERA Approved | 150–500 Sq. Yds Resort-Style Plots with Spot Registration near upcoming AI Fourth City.',
                'full_description' => '<p><strong>Premium Resort Living & Villa Plots @ Kadthal, Srisailam Highway</strong></p><p>DRR Premium County (RJ Retreat) is a resort-style villa community located in Kadthal, Hyderabad. Positioned near the upcoming AI Fourth City, Regional Ring Road (RRR), and proposed 6-lane Srisailam Highway.</p><ul><li>17 Acres DTCP & RERA Approved Gated Community</li><li>Resort-Style Living with Weekend Cottage Concepts & Landscaping</li><li>40ft & 33ft Black Top Roads with Avenue Plantation</li><li>100% Vastu Compliant & Clear Title with Spot Registration</li><li>Underground Electricity & Individual Water Connections</li><li>Clubhouse, Swimming Pool, Children Play Parks & 24/7 Security</li></ul>',
                'value' => 85.00,
                'start_date' => Carbon::parse('2023-01-01'),
                'end_date' => Carbon::parse('2026-12-31'),
                'status' => 'ongoing',
                'image' => 'projects/rj-retreat.jpg',
                'gallery' => [
                    'projects/rj-retreat.jpg',
                ],
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Urban Elite County',
                'slug' => 'urban-elite-county',
                'client' => 'Paanchajanya Reality',
                'location' => 'Shadnagar Growth Corridor, Hyderabad',
                'category' => 'Open Plots',
                'description' => 'Fully Developed DTCP Approved Gated Community Plotted Venture | 100% Sold Out & Successfully Delivered with Clear Titles.',
                'full_description' => '<p><strong>Delivered DTCP Approved Gated Plotted Community @ Shadnagar</strong></p><p>Urban Elite County represents one of Paanchajanya Reality\'s landmark delivered plotted communities in the high-growth Shadnagar corridor near Bangalore Highway (NH-44).</p><ul><li>100% Delivered and Registered Plotted Venture</li><li>DTCP Approved Layout with Wide BT Roads & Drainage</li><li>Lush Green Landscaped Parks and Overhead Water Tank</li><li>Electricity with Street Lights and Transformers</li><li>100% Clear Title with High Return on Investment for All Investors</li></ul>',
                'value' => 65.00,
                'start_date' => Carbon::parse('2021-03-01'),
                'end_date' => Carbon::parse('2024-03-31'),
                'status' => 'completed',
                'image' => 'projects/urban-elite.jpg',
                'gallery' => [
                    'projects/urban-elite.jpg',
                ],
                'is_featured' => true,
                'is_active' => true,
                'order' => 4,
            ],
            [
                'title' => 'Ayodhya Nilayam',
                'slug' => 'ayodhya-nilayam',
                'client' => 'Paanchajanya Reality',
                'location' => 'Yadagirigutta Temple City, Hyderabad',
                'category' => 'Residential Plots',
                'description' => 'Successfully Delivered Gated Community Plotted Venture close to the Sacred Yadagirigutta Temple Shrine.',
                'full_description' => '<p><strong>Spiritual Living & High Appreciation Plotted Venture @ Yadagirigutta</strong></p><p>Ayodhya Nilayam was developed and delivered with prompt precision, offering peaceful plotted developments with proximity to the famous Yadagirigutta Temple and Warangal Highway growth belt.</p><ul><li>Fully Developed Gated Community Layout</li><li>Black Top Roads, Underground Drainage & Electricity</li><li>Children Play Park and Beautiful Tree-Lined Avenues</li><li>100% Clear Titles with Immediate Spot Registration</li></ul>',
                'value' => 40.00,
                'start_date' => Carbon::parse('2020-01-15'),
                'end_date' => Carbon::parse('2023-06-30'),
                'status' => 'completed',
                'image' => 'projects/ayodhya-nilayam.jpg',
                'gallery' => [
                    'projects/ayodhya-nilayam.jpg',
                ],
                'is_featured' => false,
                'is_active' => true,
                'order' => 5,
            ],
            [
                'title' => 'Premium County',
                'slug' => 'premium-county',
                'client' => 'Paanchajanya Reality',
                'location' => 'Kadthal, Srisailam Highway, Hyderabad',
                'category' => 'Mega Plotted Township',
                'description' => 'Prime Residential Open Plots Facing Proposed 6-Lane Srisailam Highway in Kadthal near Upcoming AI Fourth City.',
                'full_description' => '<p><strong>Upcoming Mega Plotted Township at Kadthal, Srisailam Highway</strong></p><p>Premium County is positioned directly along the proposed 6-lane Srisailam Highway growth corridor in Kadthal, right next to the upcoming AI Fourth City. Exceptional capital appreciation potential for smart investors.</p><ul><li>Direct 6-Lane Srisailam Highway Facing Access</li><li>Close Proximity to AI Fourth City, Amazon Data Center & Pharma City</li><li>Proposed Wide BT Roads, Underground Infrastructure & Avenue Plantations</li><li>Clear Title & Assured Legal Verification with Spot Registration</li><li>High-Tech Gated Entry with Security Post & Surveillance</li></ul>',
                'value' => 110.00,
                'start_date' => Carbon::parse('2025-06-01'),
                'end_date' => Carbon::parse('2028-12-31'),
                'status' => 'upcoming',
                'image' => 'projects/future-city.jpg',
                'gallery' => [
                    'projects/future-city.jpg',
                ],
                'is_featured' => true,
                'is_active' => true,
                'order' => 5,
            ],
            [
                'title' => 'Aerocity Greens',
                'slug' => 'aerocity-greens',
                'client' => 'Paanchajanya Reality',
                'location' => 'Shamshabad Airport Corridor, Hyderabad',
                'category' => 'Villa Plots',
                'description' => 'Proposed Eco-Luxury Gated Plotted Community with Resort Club, Organic Farming Zones & Wellness Parks near RGIA Shamshabad.',
                'full_description' => '<p><strong>Proposed Eco-Luxury Villa Plotted Community near Shamshabad Airport</strong></p><p>Aerocity Greens brings a harmonious blend of green resort living and modern urban connectivity near Rajiv Gandhi International Airport.</p><ul><li>Strategic Location near Shamshabad Airport & Bangalore Highway</li><li>Proposed 40ft & 33ft Wide Black Top Roads</li><li>Resort Style Clubhouse with Swimming Pool & Wellness Retreat</li><li>Organic Orchard Zones, Herb Gardens & Jogging Tracks</li><li>Solar Street Lighting & Eco-friendly Rainwater Harvesting</li></ul>',
                'value' => 75.00,
                'start_date' => Carbon::parse('2025-09-01'),
                'end_date' => Carbon::parse('2028-06-30'),
                'status' => 'upcoming',
                'image' => 'projects/aerocity-greens.jpg',
                'gallery' => [
                    'projects/aerocity-greens.jpg',
                ],
                'is_featured' => false,
                'is_active' => true,
                'order' => 7,
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
