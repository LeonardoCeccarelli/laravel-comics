<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        "listNavLink" => [
            [
                "text" => "Characters",
                "link" => "#Characters",
            ],
            [
                "text" => "Comics",
                "link" => "#Comics",
            ],
            [
                "text" => "Movies",
                "link" => "#Movies",
            ],
            [
                "text" => "Tv",
                "link" => "#Tv",
            ],
            [
                "text" => "Games",
                "link" => "#Games",
            ],
            [
                "text" => "Collectibles",
                "link" => "#Collectibles",
            ],
            [
                "text" => "Videos",
                "link" => "#Videos",
            ],
            [
                "text" => "Fans",
                "link" => "#Fans",
            ],
            [
                "text" => "News",
                "link" => "#News",
            ],
            [
                "text" => "Shop",
                "link" => "#Shop",
            ],
        ]
    ];

    return view('home', $data);
});
