<div class="main_container">
    <div class="title_card_container">
      <h3>Current series</h3>
    </div>
    <div class="card_container">
      @foreach ($listCardComics as $card)
          @include('partials.single_card')
      @endforeach
    </div>
    <div class="btn_container">
      <button type="button">LOAD MORE</button>
    </div>
  </div>