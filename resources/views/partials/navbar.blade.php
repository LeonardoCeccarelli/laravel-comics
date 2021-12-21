@php

$listNavLink = [
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
];

@endphp

<nav class="main_navbar">
    <div class="logo_navbar">
      <img src="{{ asset('img/dc-logo.png') }}" alt="DC logo"/>
    </div>
    <div class="link_navbar">
      <ul>
          @foreach ($listNavLink as $navLink)              
        <li>
          <a href="{{ $navLink['link'] }}">{{ $navLink['text'] }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </nav>