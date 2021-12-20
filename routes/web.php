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
        ],
        "listCardComics" => config('comics'),
        "listIconMainBottom" => [
            [
                "text" => "Digital comics",
                "src" => "buy-comics-digital-comics.png",
            ],
            [
                "text" => "Dc merchandise",
                "src" => "buy-comics-merchandise.png",
            ],
            [
                "text" => "Subscription",
                "src" => "buy-comics-subscriptions.png",
            ],
            [
                "text" => "Comic shop locator",
                "src" => "buy-comics-shop-locator.png",
            ],
            [
                "text" => "Dc power visa",
                "src" => "buy-dc-power-visa.svg",
            ]
        ],
        "linkDcComicsAndShop" => [
            [
                "text" => "Dc comics",
                "href" => "#Dc comics",
                "headLink" => true,
            ],
            [
                "text" => "Characters",
                "href" => "#Characters",
                "headLink" => false,
            ],
            [
                "text" => "Comics",
                "href" => "#Comics",
                "headLink" => false,
            ],
            [
                "text" => "Movies",
                "href" => "#Movies",
                "headLink" => false,
            ],
            [
                "text" => "Tv",
                "href" => "#Tv",
                "headLink" => false,
            ],
            [
                "text" => "Games",
                "href" => "#Games",
                "headLink" => false,
            ],
            [
                "text" => "Videos",
                "href" => "#Videos",
                "headLink" => false,
            ],
            [
                "text" => "News",
                "href" => "#News",
                "headLink" => false,
            ],
            [
                "text" => "Shop",
                "href" => "#Shop",
                "headLink" => true,
            ],
            [
                "text" => "Shop DC",
                "href" => "#Shop DC",
                "headLink" => false,
            ],
            [
                "text" => "Shop DC Collectibles",
                "href" => "#Shop DC Collectibles",
                "headLink" => false,
            ],
        ],
        "linkDc" => [
            [
                "text" => "Dc",
                "href" => "#Dc",
                "headLink" => true,
            ],
            [
                "text" => "Terms Of Use",
                "href" => "#Terms Of Use",
                "headLink" => false,
            ],
            [
                "text" => "Privacy policy (New)",
                "href" => "#Privacy policy",
                "headLink" => false,
            ],
            [
                "text" => "Ad Choice",
                "href" => "#Ad Choice",
                "headLink" => false,
            ],
            [
                "text" => "Advertising",
                "href" => "#Advertising",
                "headLink" => false,
            ],
            [
                "text" => "Jobs",
                "href" => "#Jobs",
                "headLink" => false,
            ],
            [
                "text" => "Subscriptions",
                "href" => "#Subscriptions",
                "headLink" => false,
            ],
            [
                "text" => "Talent Workshop",
                "href" => "#Talent Workshop",
                "headLink" => false,
            ],
            [
                "text" => "CPSC Certificates",
                "href" => "#CPSC Certificates",
                "headLink" => false,
            ],
            [
                "text" => "Ratings",
                "href" => "#Ratings",
                "headLink" => false,
            ],
            [
                "text" => "Shop Help",
                "href" => "#Shop Help",
                "headLink" => false,
            ],
            [
                "text" => "Contact Us",
                "href" => "#Contact Us",
                "headLink" => false,
            ],
        ],
        "linkDcCities" => [
            [
                "text" => "Sities",
                "href" => "#Sities",
                "headLink" => true,
            ],
            [
                "text" => "DC",
                "href" => "#DC",
                "headLink" => false,
            ],
            [
                "text" => "MAD Magazine",
                "href" => "#MAD Magazine",
                "headLink" => false,
            ],
            [
                "text" => "Dc Kids",
                "href" => "#Dc Kids",
                "headLink" => false,
            ],
            [
                "text" => "Dc Universe",
                "href" => "#Dc Universe",
                "headLink" => false,
            ],
            [
                "text" => "Dc Power Visa",
                "href" => "#Dc Power Visa",
                "headLink" => false,
            ],
        ],
    ];

    return view('home', $data);
});
