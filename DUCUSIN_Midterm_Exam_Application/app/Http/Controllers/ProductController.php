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
                'rating' => '9.31',
                'views' => '1,028,864',
                'price' => '₱632.11',
                'genre' => 'Fantasy, Adventure'
            ],
            [
                'title' => 'Violet Evergarden',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMWUwNDFiNjQtYjQ0MC00MTcxLWE0MGQtNTdkYTlhZGU2NDFmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.68',
                'views' => '1,871,453',
                'price' => '₱589.23',
                'genre' => 'Drama, Slice of Life'
            ],
            [
                'title' => 'Ascendance of A Bookworm',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYmFhMmUzMDMtMWEwZi00NjBlLTljZmUtZTY5OGI4YWEzYTQxXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '7.98',
                'views' => '335,430',
                'price' => '₱520.00',
                'genre' => 'Isekai, Fantasy'
            ],
            [
                'title' => 'Magi',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2Y2Yjc4MTgtOWU5OC00ZGJkLWJhYmQtOTA4MWY4ZTg1NDRhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.01',
                'views' => '1,078,620',
                'price' => '₱550.75',
                'genre' => 'Fantasy, Adventure'
            ],
            [
                'title' => 'No Game, No Life',
                'image' => 'https://m.media-amazon.com/images/M/MV5BOTk5ZDZhNGUtMDM2OS00Y2RkLWEwMmQtODg4ZTZiMGY1ZjFjXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.05',
                'views' => '2,469,349',
                'price' => '₱599.99',
                'genre' => 'Isekai, Comedy, Fantasy'
            ],
            [
                'title' => 'Koe no Katachi',
                'image' => 'https://m.media-amazon.com/images/M/MV5BOTFiNzRiOWEtYTQwNy00NmRiLWE0ZWYtNTE0YjExZjFmZjkwXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.93',
                'views' => '2,444,623',
                'price' => '₱650.00',
                'genre' => 'Drama, Slice of Life'
            ],
            [
                'title' => 'Maquia: When the Promised Flower Blooms',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNjY5YWZhMzItMDA1OS00NjllLTgxOWUtZWU3YTQwOTE3ZThhXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.39',
                'views' => '460,185',
                'price' => '₱560.00',
                'genre' => 'Fantasy, Drama'
            ],
            [
                'title' => 'Vinland Saga',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDA3MGNmZTEtMzFiMy00ZmViLThhNmQtMjQ4ZDc5MDEyN2U1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.76',
                'views' => '1,640,032',
                'price' => '₱670.00',
                'genre' => 'Action, Historical, Adventure'
            ],
            [
                'title' => 'Assassination Classroom',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZjBkYmRiOTAtY2IwOS00ZWU3LTk3YjItNjMzYWZiMDE1MjcyXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.08',
                'views' => '2,102,049',
                'price' => '₱580.00',
                'genre' => 'Action, Comedy, School'
            ],
            [
                'title' => 'Your Lie in April',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZGMyYmFmNzgtMWQ4NS00MWE2LTg4YmEtZGY1MTBiODE0YmE5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.64',
                'views' => '2,294,713',
                'price' => '₱600.00',
                'genre' => 'Drama, Music, Romance'
            ],
            [
                'title' => 'Link Click',
                'image' => 'https://m.media-amazon.com/images/M/MV5BODNhM2I2NWEtYzkxYy00M2IxLWJjMjYtOWNhZTNjZGNjNjgyXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.73',
                'views' => '416,802',
                'price' => '₱590.00',
                'genre' => 'Mystery, Supernatural'
            ],
            [
                'title' => 'Angel Beats',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTY3ODMzMjM3N15BMl5BanBnXkFtZTgwNzg2MTgwMzE@._V1_.jpg',
                'rating' => '8.05',
                'views' => '2,129,047',
                'price' => '₱559.44',
                'genre' => 'Drama, Supernatural, Comedy'
            ],
            [
                'title' => 'Barakamon',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMzdkYTgzZDctMGQ3OS00NWJlLTk1Y2ItYzZhNzIwOGM0YTU3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.37',
                'views' => '685,173',
                'price' => '₱447.44',
                'genre' => 'Slice of Life, Comedy'
            ],
            [
                'title' => 'Katekyou Hitman Reborn!',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMjE5OTA4NGEtM2FhZi00YTYzLWJlNjEtNDI1NGFlNTdiNDIzXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '8.12',
                'views' => '570,085',
                'price' => '₱839.44',
                'genre' => 'Action, Comedy, Supernatural'
            ],
            [
                'title' => 'Look Back',
                'image' => 'https://m.media-amazon.com/images/M/MV5BOWU3YTkxMjYtYTdlMi00NDQ1LThiMjQtNzhmMTFlZmE2ZTU0XkEyXkFqcGc@._V1_QL75_UY281_CR6,0,190,281_.jpg',
                'rating' => '8.67',
                'views' => '144,894',
                'price' => '₱335.44',
                'genre' => 'Drama, Psychological, Slice of Life'
            ],
            [
                'title' => 'Konosuba: God`s Blessing on This Wonderful World!',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2M2MWExNTAtZWY3ZC00Yzc5LWE2MTgtZWU5OWE2MWYyZTAzXkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.1',
                'views' => '2,048,036',
                'price' => '₱560.00',
                'genre' => 'Isekai, Comedy, Fantasy'
            ],
            [
                'title' => 'Kaiju No. 8',
                'image' => 'https://m.media-amazon.com/images/M/MV5BYjNjNTczNmItOWRkNi00MWQ0LWI1OWYtYTFlNTllMDFjZjg3XkEyXkFqcGc@._V1_.jpg',
                'rating' => '8.3',
                'views' => '549,042',
                'price' => '₱590.00',
                'genre' => 'Action, Sci-Fi'
            ],
            [
                'title' => 'Fairy Tail',
                'image' => 'https://m.media-amazon.com/images/M/MV5BODlhNTQ3ZDgtMDJlMC00YzdmLWE3ZTMtOWNmMTZkN2I2MzI5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                'rating' => '7.65',
                'views' => '1,034,350',
                'price' => '₱550.00',
                'genre' => 'Action, Fantasy, Adventure'
            ]
        ];

        return view('anime-gallery', ['products' => $animeList]);
    }
}

