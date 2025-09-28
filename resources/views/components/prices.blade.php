<div class="price">
    @foreach ($prices as $key => $item)
        <details>
            <summary>{{ $key }}</summary>
            <div class="response">
                <p class="sub_title">
                   {{ $item[0]->description }}
                </p>

                @foreach ($item as $price_blk)
                    <h3 class="price_subtitle">{{ $price_blk->subsection }}</h3>
                    @foreach ($price_blk->positions as $price)
                        <div class="price_item">
                            <span>{{ $price['name'] }}</span>
                            <span>{{ $price['price'] }}</span>
                        </div>
                    @endforeach
                @endforeach

            </div>

        </details>
    @endforeach
</div>
