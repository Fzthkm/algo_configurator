<div class="slider-arrow prev-btn hidden">
    <img src="./assets/images/buttons/Button - prev.svg" />
</div>
<div class="slider-arrow next-btn">
    <img src="./assets/images/buttons/Button - Next.svg" />
</div>
<div class="popular-list">
    @foreach($configurations as $configuration)
        <x-configuration-card :configuration="$configuration" />
    @endforeach
</div>
