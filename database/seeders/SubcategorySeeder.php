<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            'Plumbing' => [
                'Copper Pipe And Fittings',
                'Copper NS Fittings',
                'Copper Compression Fittings',
                'Copper Non-Soldering Fittings',
                'Copper Soldering Fittings',
                'PVC High Pressure Pipes',
                'GI, MI Fittings',
                'Gate Valves',
                'PVC Drainage Pipes',
                'PPR Pipe Fittings',
                'Rubber Type Fittings',
                'Solvent Type Fittings'
            ],
            'Electrical' => [
                'Wiring Materials',
                'Circuit Breakers',
                'Electrical Outlet',
                'Light Fixtures',
                'Distribution Boards',
                'Junction Boxes',
                'Panels For HVAC Systems',
                'Surge Protectors',
                'Grounding Materials',
                'Electrical Meters',
                'Exhaust Fans'
            ],
            'Sanitary' => [
                'Toilet Flush And Bowls',
                'Bathroom Sinks',
                'Faucets',
                'Shower Heads',
                'Bathtubs',
                'Bathroom Accessories',
                'Water Closet',
                'Urinals',
                'Grease Traps',
                'Seat Covers',
                'Bathroom Mirror',
                'Shower Curtains'
            ],
            'Safety' => [
                'Safety Helmet',
                'Safety Glasses',
                'Vests And Jackets',
                'Boots And Shoes',
                'Gloves',
                'Ear Protectors',
                'Respirators',
                'Safety Harness',
                'Barricades And Barriers',
                'First Aid Kits',
                'Fire Extinguisher',
                'Emergency Eyewash',
                'Safety Signs And Labels',
                'Lockout Or Tagout Devices',
                'Safety Traffic Cone'
            ],
            'Paint' => [
                'Oryx Paints',
                'Berger Paints',
                'Hempel Paints',
                'Hampel Paints',
                'Jotun Paints',
                'Epoxy',
                'Brushes',
                'Scrapers',
                'Spray Gun',
                'Rollers',
                'Paint Tray'
            ],
            'Other' => [
                'Door Locks',
                'Door Cylinders',
                'Hinges',
                'Self Tapping Screws',
                'Machine Screws',
                'Wood Screws',
                'PPR Tools',
                'Power Tools',
                'Hand Tools',
                'Water Tank',
                'Rubber Insulation',
                'Water Cooler',
                'Channel Gratings',
                'Road Gully Gratings',
                'Plywood',
                'Hoses',
                'Supporting Clamps',
                'Tapes',
                'Tiles',
                'Gypsum Boards',
                'Diamond Drills',
                'Tools Set',
                'Hammers',
                'Rubber Gaskets And Sheets'
            ]
        ];

        foreach ($subcategories as $categoryName => $subs) {
            $category = Category::where('name', $categoryName)->first();
            foreach ($subs as $sub) {
                Subcategory::firstOrCreate(['name' => $sub, 'category_id' => $category->id]);
            }
        }
    }
}
