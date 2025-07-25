<section class="hero-section-2">
    @if($rotator->arrows)
        <div class="array-buttons">
            <button class="array-prev"><i class="fas fa-arrow-left"></i></button>
            <button class="array-next"><i class="fas fa-arrow-right"></i></button>
        </div>
    @endif
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            @foreach($rotator->gallery->items as $item)
                <div class="swiper-slide">
                    <div class="hero-2">
                        <div class="hero-bg bg-cover" style="background-image: url({{renderImage($item->url, 1920, 700, `fit`)}});"></div>
                        <div class="container">
                            <div class="row align-items-end justify-content-between">
                                <div class="col-xl-12">
                                    <div class="hero-content">
                                        <h2 data-animation="fadeInUp" data-delay="1.3s">
                                            {{$item->name}}
                                        </h2>
                                        {!! str_replace('<p>', '<p data-animation="fadeInUp" data-delay="1.5s">', $item->text ?? '') !!}
                                        <div class="hero-button">
                                            <a href="{{route('offer.index')}}" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn">Oferta <i class="far fa-arrow-right"></i></a>
                                            <a href="{{route('contact.show')}}" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn style-2">Kontakt <i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts.body.bottom')
    <script>
        const sliderActive2 = ".hero-slider";
        const sliderInit2 = new Swiper(sliderActive2, {
            loop: true,
            slidesPerView: 1,
            effect: "fade",
            speed: {{$rotator->speed ?? 500}},
            autoplay: {
                delay: {{$rotator->time ?? 3000}},
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".array-prev",
                prevEl: ".array-next",
            },
            pagination: {
                el: ".dot",
                clickable: true,
            },
        });
    </script>
@endpush
