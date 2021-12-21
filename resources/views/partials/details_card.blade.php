<section class="details_section">
    <div class="blue_overlay">
        <div class="comic_cover">
            <img src="{{ $singleComic['thumb'] }}" alt="cover image">
        </div>
    </div>

    <div class="details_container">
        <h2 class="details_title">{{ $singleComic['title'] }}</h2>
        <div class="price_container">
            <h5>
                <span class="pre_price">U. S. Price:</span>
                <span class="price">{{ $singleComic['price'] }}</span>
            </h5>
            <h5 class="disposability">Available</h5>
        </div>
        <div class="details_description">
            <p>{{ $singleComic['description'] }}</p>
        </div>
        <div class="details_show">
            <div class="details_show_left">
                <h3 class="details_show_title">Talent</h3>
                <h5 class="details_show_subtitle">
                    <span>Art by:</span>
                    <span>
                        @foreach ($singleComic['artists'] as $key => $value)
                        @php
                            $spacer = ',';

                            if ($key === count($singleComic['artists']) - 1) {
                                $spacer = '';
                            }
                        @endphp

                        {{ $value }}{{ $spacer }}
                        @endforeach
                    </span>
                </h5>
                <h5 class="details_show_subtitle">
                    <span>Written by:</span>
                    <span>
                        @foreach ($singleComic['writers'] as $key => $value)
                        @php
                            $spacer = ',';

                            if ($key === count($singleComic['writers']) - 1) {
                                $spacer = '';
                            }
                        @endphp

                        {{ $value }}{{ $spacer }}
                        @endforeach
                    </span>
                </h5>
            </div>
            <div class="details_show_right">
                <h3 class="details_show_title">Specs</h3>
                <h5 class="details_show_subtitle">
                    <span>Series:</span>
                    <span class="text_uppercase">{{ $singleComic['series'] }}</span>
                </h5>
                <h5 class="details_show_subtitle">
                    <span>U. S. Price:</span>
                    <span class="text_dark">{{ $singleComic['price'] }}</span>
                </h5>
                <h5 class="details_show_subtitle">
                    <span>On Sale Date:</span>
                    <span class="text_dark">{{ $singleComic['sale_date'] }}</span>
                </h5>
            </div>
        </div>
    </div>
</section>