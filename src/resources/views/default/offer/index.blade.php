@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <section class="news-section section-padding section-bg">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items">
                            <div class="news-image">
                                <img src="{{ renderImage($item->galleryCover(), 900, 345, 'cover') }}" style="width: 100%;height: 345px;object-fit: cover" alt="img">
                            </div>
                            <div class="news-content">
                                <h4>
                                    <a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a>
                                </h4>
                                {!! $item->lead !!}
                            </div>
                            <a href="{{route('offer.show.'.$item->id)}}" class="link-btn">Zobacz ofertę <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
