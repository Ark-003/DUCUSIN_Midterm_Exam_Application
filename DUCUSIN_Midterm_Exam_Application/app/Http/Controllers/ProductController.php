<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList()
    {
        $animeList = [
            [
                'title' => 'Sousou no Frieren',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZTI4ZGMxN2UtODlkYS00MTBjLWE1YzctYzc3NDViMGI0ZmJmXkEyXkFqcGc@._V1_.jpg',
                'rating' => '9.31/10',
                'views' => '1,028,864',
                'price' => '₱632.11',
                'genre' => 'Fantasy, Adventure'
            ],
            [
                'title' => 'Violet Evergarden',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMWUwNDFiNjQtYjQ0MC00MTcxLWE0MGQtNTdkYTlhZGU2NDFmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.68/10',
                'views' => '1,871,453',
                'price' => '₱589.23',
                'genre' => 'Drama, Slice of Life'
            ],
            [
                'title' => 'Ascendance of A Bookworm',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYmFhMmUzMDMtMWEwZi00NjBlLTljZmUtZTY5OGI4YWEzYTQxXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '7.98/10',
                'views' => '335,430',
                'price' => '₱520.00',
                'genre' => 'Isekai, Fantasy'
            ],
            [
                'title' => 'Magi',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2Y2Yjc4MTgtOWU5OC00ZGJkLWJhYmQtOTA4MWY4ZTg1NDRhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.01/10',
                'views' => '1,078,620',
                'price' => '₱550.75',
                'genre' => 'Fantasy, Adventure'
            ],
            [
                'title' => 'No Game, No Life',
                'image' => 'https://m.media-amazon.com/images/M/MV5BOTk5ZDZhNGUtMDM2OS00Y2RkLWEwMmQtODg4ZTZiMGY1ZjFjXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.05/10',
                'views' => '2,469,349',
                'price' => '₱599.99',
                'genre' => 'Isekai, Comedy, Fantasy'
            ],
            [
                'title' => 'Koe no Katachi',
                'image' => 'https://m.media-amazon.com/images/M/MV5BOTFiNzRiOWEtYTQwNy00NmRiLWE0ZWYtNTE0YjExZjFmZjkwXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.93/10',
                'views' => '2,444,623',
                'price' => '₱650.00',
                'genre' => 'Drama, Slice of Life'
            ],
            [
                'title' => 'Maquia: When the Promised Flower Blooms',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNjY5YWZhMzItMDA1OS00NjllLTgxOWUtZWU3YTQwOTE3ZThhXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.39/10',
                'views' => '460,185',
                'price' => '₱560.00',
                'genre' => 'Fantasy, Drama'
            ],
            [
                'title' => 'Vinland Saga',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDA3MGNmZTEtMzFiMy00ZmViLThhNmQtMjQ4ZDc5MDEyN2U1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.76/10',
                'views' => '1,640,032',
                'price' => '₱670.00',
                'genre' => 'Action, Historical, Adventure'
            ],
            [
                'title' => 'Assassination Classroom',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZjBkYmRiOTAtY2IwOS00ZWU3LTk3YjItNjMzYWZiMDE1MjcyXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.08/10',
                'views' => '2,102,049',
                'price' => '₱580.00',
                'genre' => 'Action, Comedy, School'
            ],
            [
                'title' => 'Your Lie in April',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZGMyYmFmNzgtMWQ4NS00MWE2LTg4YmEtZGY1MTBiODE0YmE5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.64/10',
                'views' => '2,294,713',
                'price' => '₱600.00',
                'genre' => 'Drama, Music, Romance'
            ],
            [
                'title' => 'Link Click',
                'image' => 'https://m.media-amazon.com/images/M/MV5BODNhM2I2NWEtYzkxYy00M2IxLWJjMjYtOWNhZTNjZGNjNjgyXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.73/10',
                'views' => '416,802',
                'price' => '₱590.00',
                'genre' => 'Mystery, Supernatural'
            ],
            [
                'title' => 'Konosuba: God`s Blessing on This Wonderful World!',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2M2MWExNTAtZWY3ZC00Yzc5LWE2MTgtZWU5OWE2MWYyZTAzXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.1/10',
                'views' => '2,048,036',
                'price' => '₱560.00',
                'genre' => 'Isekai, Comedy, Fantasy'
            ],
            [
                'title' => 'Kaiju No. 8',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYjNjNTczNmItOWRkNi00MWQ0LWI1OWYtYTFlNTllMDFjZjg3XkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.3/10',
                'views' => '549,042',
                'price' => '₱590.00',
                'genre' => 'Action, Sci-Fi'
            ],
            [
                'title' => 'Fairy Tail',
                'image' => 'https://m.media-amazon.com/images/M/MV5BODlhNTQ3ZDgtMDJlMC00YzdmLWE3ZTMtOWNmMTZkN2I2MzI5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '7.65/10',
                'views' => '1,034,350',
                'price' => '₱550.00',
                'genre' => 'Action, Fantasy, Adventure'
            ]
        ];

        return view('anime-gallery', ['products' => $animeList]);
    }
}

