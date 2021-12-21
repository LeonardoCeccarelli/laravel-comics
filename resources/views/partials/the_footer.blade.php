@php

$linkDcComicsAndShop = [
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
];

$linkDc = [
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
];

$linkDcCities = [
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
];

@endphp

<div class="link_footer">
    <div class="container">
      <div class="list_link_container">
        <ul class="list_link">
            @foreach ($linkDcComicsAndShop as $link)
            @php
                $classHead = "";
                if ($link['headLink']) {
                    $classHead = "head_link";
                }
            @endphp
                
            <li class="{{ $classHead }}">
                <a href="#">{{ $link['text'] }}</a>
            </li>
             @endforeach
        </ul>

        <ul class="list_link">
            @foreach ($linkDc as $link)
            @php
                $classHead = "";
                if ($link['headLink']) {
                    $classHead = "head_link";
                }
            @endphp
                
            <li class="{{ $classHead }}">
                <a href="#">{{ $link['text'] }}</a>
            </li>
             @endforeach
        </ul>

        <ul class="list_link">
            @foreach ($linkDcCities as $link)
            @php
                $classHead = "";
                if ($link['headLink']) {
                    $classHead = "head_link";
                }
            @endphp
                
            <li class="{{ $classHead }}">
                <a href="#">{{ $link['text'] }}</a>
            </li>
             @endforeach
        </ul>
      </div>
      <div class="main_logo_container">
        <div class="main_logo">
          <img src="{{ asset('img/dc-logo-bg.png') }}" alt="DC logo"/>
        </div>
      </div>
    </div>
  </div>

  <div class="social_footer">
    <div class="btn_container">
      <button type="button">SIGN-UP NOW!</button>
    </div>
    <div class="social_icon_container">
      <h4>Follow us</h4>
      <img src="{{ asset('img/footer-facebook.png') }}" alt="facebook logo" />
      <img src="{{ asset('img/footer-twitter.png') }}" alt="facebook logo" />
      <img src="{{ asset('img/footer-youtube.png') }}" alt="facebook logo" />
      <img src="{{ asset('img/footer-pinterest.png') }}" alt="facebook logo" />
      <img src="{{ asset('img/footer-periscope.png') }}" alt="facebook logo" />
    </div>
  </div>