@extends('default.layout')
@section('content')
    <section class="breadcrumb-section fix bg-cover" style="background-image: url({{asset('images/bg-subheader.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="page-heading">
                    <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="/">Strona główna</a>
                        </li>
                        <li>
                            {{$item->title}}
                        </li>
                    </ul>
                    <h2 class="wow fadeInUp" data-wow-delay=".5s">{{$item->title}}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="service-details-section section-padding fix">
        <div class="container">
            <div class="service-details-wrapper">
                <div class="row g-4">
                    <div class="col-xl-8 col-12">
                        <div class="details-image">
                            <img src="{{ renderImage($item->galleryCover(), 1200, 500, 'cover') }}" style="width: 100%;height: 500px;object-fit: cover" alt="img">
                        </div>
                        <div class="details-content">
                            <h3>{{$item->title}}</h3>
                            {!! $item->text !!}
                        </div>
                    </div>
                    @include('default.offer.home2')
                </div>
            </div>
        </div>
    </section>


@endsection
