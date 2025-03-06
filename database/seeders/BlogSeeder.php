<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Trusted Services Since 2000',
                'user_name' => 'AHMED SALEEM',
                'description' => 'AL-NOOR AL-HUDA is one of the familiar names in the Building Material Trading field in Qatar for more than a decade. We provide quality service to projects and the local market.',
                'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.sZSsDOibmkXKfBVxau78JwHaHC&w=450&h=450&c=7',
                'user_image' => ''
            ],
            [
                'title' => 'Quality Construction Materials at Competitive Prices',
                'user_name' => 'RAKESH',
                'description' => 'AL-NOOR AL-HUDA offers a wide range of plumbing, electrical, safety, and hardware items for construction needs. We provide you with the most competitive prices in the market.',
                'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.I9NF1jmNeXzuVvPHl-aLqgHaE8&w=316&h=316&c=7',
                 'user_image' => ''
            ],
            [
                'title' => 'Accuracy, Quality, and Durability: Our Promise to You',
                'user_name' => 'HUDA NOOR',
                'description' => 'We promise accuracy, quality, and durability. We offer quality-assured products from international standards and renowned brands.',
                'image_url' => 'https://files.oaiusercontent.com/file-LxEdHg1EwVfWDmPEjv5LWr?se=2025-03-06T09%3A14%3A06Z&sp=r&sv=2024-08-04&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3D0ef79654-6508-4a2f-9a5b-a3114c418ae6.webp&sig=r3Ul7ErK5TT2Eji9q0rnLozmWir6JxXrWLrv%2Bq7jTt0%3D',
            ]
        ];
        foreach ($blogs as $blog) {
            DB::table('blogs')->updateOrInsert(
                ['title' => $blog['title']], 
                [
                    'user_name' => $blog['user_name'],
                    'description' => $blog['description'],
                    'image_url' => $blog['image_url'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
