<div class="info_footer">
    <ul>
      @foreach ($listIconMainBottom as $icon)
      <li>
        <img src="{{ asset('img/' . $icon['src']) }}" alt="info logo"/>
        <a href="#">{{ $icon['text'] }}</a>
      </li>
      @endforeach
    </ul>
  </div>