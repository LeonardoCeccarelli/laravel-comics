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