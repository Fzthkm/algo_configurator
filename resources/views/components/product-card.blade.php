<div class="popular-card">
    <div class="card-img">
        <div class="card-img-main">
            <img src="" alt="" />
        </div>
        <div class="card-img-sec">
            <div class="card-img-sec-main">
                <img src="./assets/images/card-2.png" alt="" />
            </div>
            <div class="card-img-btn-cont">
                <div class="card-img-btn">
                    <img src="./assets/images/card-3.png" alt="" />
                </div>
                <div class="card-img-btn">
                    <a href="/">
                        <img src="./assets/images/icons/svg.svg" alt="" />
                        <span>Еще</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-descr">
        <h3 class="card-title">Игровой компьютер серии Prologic [2006326]</h3>
        <div class="card-tags-cont">
            <div class="card-tag">lorem ipsum</div>
            <div class="card-tag">lorem ipsum</div>
            <div class="card-tag">lorem ipsum</div>
        </div>
        <div class="cont-price">
            <p class="new-price">6100<span>.26 руб</span></p>
            <p class="old-price">7015<span>.30 руб</span></p>
        </div>
        <div class="button-cont">
            <form action="{{ route('addToCart', ['id' => $configuration->id]) }}">
                @csrf
                <button type="submit" class="primary-btn">В корзину</button>
            </form>
            <form action="{{ route('addToConfig', ['id' => $configuration->id]) }}">
                @csrf
                <button type="submit" class="secondary-btn">В конфигуратор</button>
            </form>
        </div>
    </div>
</div>
