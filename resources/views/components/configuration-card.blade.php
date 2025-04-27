@php
    use App\Enums\AllowedCategory;
    use App\Models\Setting;
@endphp
<div class="popular-card">
    <div class="card-img">
        <div class="card-img-main">
            @php
                $image = '';
                foreach($configuration['items'] as $item)
                {
                    if($item['category'] == AllowedCategory::CHASSIS->value) {
                        $image = $item['image'];
                        break;
                    }
                }
            @endphp
            <img src="{{ route('image-proxy', ['path' => $image, 'type' => 'chassis']) }}" alt="Корпус"
                 onerror="this.onerror=null;this.src='{{ Setting::defaultChassisImage() }}';"/>
        </div>
        <div class="card-img-sec">
            <div class="card-img-sec-main">
                @php
                $image = '';
                    foreach($configuration['items'] as $item)
                    {
                        if($item['category'] == AllowedCategory::CPU->value) {
                            $image = $item['image'];
                            break;
                        }
                    }
                @endphp
                <img src="{{ route('image-proxy', ['path' => $image, 'type' => 'cpu']) }}" alt="Процессор"
                     onerror="this.onerror=null;this.src='{{ Setting::defaultCpuImage() }}';"/>
            </div>
            <div class="card-img-btn-cont">
                <div class="card-img-btn">
                    @php
                        $image = '';
                        foreach($configuration['items'] as $item)
                        {
                            if($item['category'] == AllowedCategory::VIDEOCARD->value) {
                                $image = $item['image'];
                                break;
                            }
                        }
                    @endphp
                    <img src="{{ route('image-proxy', ['path' => $image, 'type' => AllowedCategory::VIDEOCARD->value]) }}" alt="Видеокарта"
                         onerror="this.onerror=null;this.src='{{ Setting::defaultVideocardImage() }}';"/>
                </div>
                <div class="card-img-btn">
                    <a href="/">
                        <img src="./assets/images/icons/svg.svg" alt=""/>
                        <span>Еще</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-descr">
        <h3 class="card-title">{{ $configuration->name }}</h3>
        <div class="card-tags-cont">
            <div class="card-tag">lorem ipsum</div>
            <div class="card-tag">lorem ipsum</div>
            <div class="card-tag">lorem ipsum</div>
        </div>
        <div class="cont-price">
            <p class="new-price">{{ number_format($configuration->total_price, 2, '.', ' ') }}<span> руб</span></p>

            @if($configuration->total_price != $configuration->total_discount_price)
                <p class="old-price">{{ number_format($configuration->total_discount_price, 2, '.', ' ') }}
                    <span> руб</span></p>
            @endif
        </div>
        <div class="button-cont">
            <form action="{{ route('addToCart', ['id' => $configuration->id]) }}" method="POST">
                @csrf
                <button type="submit" class="primary-btn">В корзину</button>
            </form>
            <form action="{{ route('addToConfig', ['id' => $configuration->id]) }}" method="POST">
                @csrf
                <button type="submit" class="secondary-btn">В конфигуратор</button>
            </form>
        </div>
    </div>
</div>
