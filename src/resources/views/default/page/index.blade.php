@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="about-section section-padding">
    <div class="container">
        <div class="about-wrapper-2">
            <div class="about-shape">
                <img src="{{asset('images/dot-shape.png')}}" alt="img">
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{asset('images/about_us_1.jpg')}}" style="width: 100%;height: 642px;object-fit: cover" alt="img" class="about-image-1 wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">
                        <div class="about-image-2">
                            <img src="{{asset('images/about_us_2.jpg')}}" style="width: 100%; height: 364px;object-fit: cover" alt="img" class="wow img-custom-anim-right" data-wow-duration="1.3s" data-wow-delay="0.3s">
                        </div>
                        <div class="about-counter">
                            @php $experianceYear = date('Y') - 2015; @endphp
                            <h2><span class="odometer" data-count="{{ $experianceYear }}">00</span>+</h2>
                            <p>Lat doświadczenia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-0">
                            @if(!empty($fields->subtitle_about_us))
                                <span class="wow fadeInUp">{{ $fields->subtitle_about_us }}</span>
                            @endif

                            @if(!empty($fields->header_about_us))
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $fields->header_about_us }}</h2>
                            @endif
                        </div>

                        @if(!empty($fields->description_about_us))
                            {!! str_replace('<p>', '<p class="about-text wow fadeInUp" data-wow-delay=".5s">', $fields->description_about_us ?? '') !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="choose-us-section section-padding bg-cover" style="background-image: url({{asset('images/machine_park_bg.jpg')}});">
    <div class="section-animation-shape1-1 animation-infinite-test line-shape animation-infinite" style="background-image: url('{{asset('images/line-shape.png')}}');"></div>
    <div class="circle-shape">
        <img src="{{asset('images/circle.png')}}" alt="img">
    </div>
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="section-title-area">
                <div class="section-title">
                    @if(!empty($fields->subtitle_machine_park))
                        <span class="wow fadeInUp">{{ $fields->subtitle_machine_park }}</span>
                    @endif

                    @if(!empty($fields->header_machine_park))
                        <h2 class="text-white wow fadeInUp" style="font-size: 24px;" data-wow-delay=".3s">{{ $fields->header_machine_park }}</h2>
                    @endif

                    @if(!empty($fields->description_machine_park))
                        {!! str_replace('<p>', '<p class="wow fadeInUp" data-wow-delay=".5s">', $fields->description_machine_park ?? '') !!}
                    @endif
                </div>
                <a href="{{route('contact.show')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Skontaktuj sie z nami <i class="far fa-arrow-right"></i></a>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-xl-6">
                    <div class="choose-us-image wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">
                        <img src="{{asset('images/machine_park.jpg')}}" style="width: 100%; height: 740px;object-fit: cover" alt="img">
                    </div>
                </div>
                <div class="col-xl-6">
                    @include('default.realization.category.home')
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-section-3 section-padding">
    <div class="right-shape">
        <img src="{{asset('images/right-shape-2.png')}}" alt="img">
    </div>
    <div class="service-wrapper">
        <div class="container">
            <div class="section-title mb-0" style="display: flex;flex-direction: column;align-items: center;margin-bottom: 25px !important;">
                @if(!empty($fields->subtitle_why_us))
                    <span class="wow fadeInUp">{{ $fields->subtitle_why_us }}</span>
                @endif

                @if(!empty($fields->header_why_us))
                    <h2 class="wow fadeInUp" style="text-align: center" data-wow-delay=".3s">{{ $fields->header_why_us }}</h2>
                @endif
            </div>
            @include('default.article.home')
        </div>
    </div>
</section>
<section class="news-section section-padding section-bg">
    <div class="container">
        <div class="section-title text-center">
            @if(!empty($fields->subtitle_offer))
                <span class="wow fadeInUp">{{ $fields->subtitle_offer }}</span>
            @endif

            @if(!empty($fields->header_offer))
                <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $fields->header_offer }}</h2>
            @endif
        </div>
        @include('default.offer.home')
        <div style="display: flex;align-items: center;justify-content: center;margin-top: 40px;">
            <a href="{{route('offer.index')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Zobacz więcej <i class="far fa-arrow-right"></i></a>
        </div>
    </div>
</section>
@endsection
