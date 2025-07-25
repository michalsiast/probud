@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <section class="contact-section-21 section-padding fix">
        <div class="container">
            <div class="contact-wrapper-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-left-item">
                            <div class="section-title">
                                @if(!empty($fields->subtitle_contact))
                                    <span class="wow fadeInUp">{{ $fields->subtitle_contact }}</span>
                                @endif

                                @if(!empty($fields->header_contact))
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $fields->header_contact }}</h2>
                                @endif

                                @if(!empty($fields->description_contact))
                                    {!! str_replace('<p>', '<p class="mt-4 wow fadeInUp" data-wow-delay=".5s">', $fields->description_contact ?? '') !!}
                                @endif

                            </div>
                            <div class="contact-item mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                                <div class="contect-icon-item">
                                    <div class="contact-icon">
                                        <i class="flaticon-phone-1"></i>
                                    </div>
                                    <div class="contect-content">
                                        <span>Telefon</span>
                                        <h6>
                                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="contect-icon-item">
                                    <div class="contact-icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <div class="contect-content">
                                        <span>Lokalizacja</span>
                                        <h6>
                                            <a href="{{getConstField('google_map')}}">{{getConstField('company_address')}}, <br/> {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-item mt-5 wow fadeInUp" data-wow-delay=".5s">
                                <div class="contect-icon-item">
                                    <div class="contact-icon">
                                        <i class="flaticon-suitcase"></i>
                                    </div>
                                    <div class="contect-content">
                                        <span>E-mail</span>
                                        <h6>
                                            <a style="text-transform: lowercase" href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-content">
                            @if(!empty($fields->header_contact_2))
                                <h3 class="wow fadeInUp" data-wow-delay=".3s">{{ $fields->header_contact_2 }}</h3>
                            @endif
                            @include('default.form.contact_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map-section Start -->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
                <iframe src="{{getConstField('google_map_iframe')}}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
