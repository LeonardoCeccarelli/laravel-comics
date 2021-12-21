@php

$listIconMainBottom = [
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
];

@endphp

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