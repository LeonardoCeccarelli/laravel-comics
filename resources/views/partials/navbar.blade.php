@php

$listNavLink = [
  [
      "text" => "Characters",
      "link" => "#",
  ],
  [
      "text" => "Comics",
      "link" => "home",
  ],
  [
      "text" => "Movies",
      "link" => "#",
  ],
  [
      "text" => "Tv",
      "link" => "#",
  ],
  [
      "text" => "Games",
      "link" => "#",
  ],
  [
      "text" => "Collectibles",
      "link" => "#",
  ],
  [
      "text" => "Videos",
      "link" => "#",
  ],
  [
      "text" => "Fans",
      "link" => "#",
  ],
  [
      "text" => "News",
      "link" => "#",
  ],
  [
      "text" => "Shop",
      "link" => "#",
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
          @php

          $_link = $navLink['link'];

          if ($_link != '#') {
            $_link = route($navLink['link']);
          }
              
          @endphp              
        <li>
          <a href="{{ $_link }}">{{ $navLink['text'] }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </nav>