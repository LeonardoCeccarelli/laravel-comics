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