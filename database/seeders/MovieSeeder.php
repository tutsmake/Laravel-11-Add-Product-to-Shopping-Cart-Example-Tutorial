<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
       $Movies = [
            [
                'name' => 'Hancock',
                'director' => 'Peter Berg',
                'poster' => 'https://assets-in.bmscdn.com/iedb/movies/images/extra/vertical_logo/mobile/thumbnail/xxlarge/hancock-et00000995-10-03-2021-03-48-47.jpg',
                'price' => 299
            ],
            [
                'name' => 'Article 370',
                'director' => 'Aditya Suhas',
                'poster' => 'https://assets-in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/article-370-et00384444-1708669471.jpg',
                'price' => 500
            ],
            [
                'name' => 'Yuva',
                'director' => 'Yuva Rajkumar',
                'poster' => 'https://assets-in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/yuva-et00387718-1708087150.jpg',
                'price' => 1000
            ],
            [
                'name' => 'Over Water S1',
                'director' => 'John',
                'poster' => 'https://assets-in.bmscdn.com/iedb/movies/images/extra/vertical_logo/mobile/thumbnail/xxlarge/over-water-s1-et00359269-1683705409.jpg',
                'price' => 699
            ],
            [
                'name' => 'Star Trek',
                'director' => 'J. J. Abrams',
                'poster' => 'https://assets-in.bmscdn.com/iedb/movies/images/extra/vertical_logo/mobile/thumbnail/xxlarge/star-trek-et00003082-14-05-2021-11-30-13.jpg',
                'price' => 649
            ]
        ];
        foreach ($Movies as $key => $value) {
            Movie::create($value);
        }
    }
}
