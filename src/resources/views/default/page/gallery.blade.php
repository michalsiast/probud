@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])

    <div class="gallery section-padding">
        <div class="container">
            <div class="row">
                @foreach($page->gallery->items as $item)
                    <div class="col-lg-4 mb-3">
                        <a href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                            <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
