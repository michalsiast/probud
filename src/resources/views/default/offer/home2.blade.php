<div class="col-xl-4 col-12">
    <div class="single-sideber-widget">
        <div class="sidebar-widget">
            <h4>Inne oferty</h4>
            <ul>
                 @foreach($items as $item)
                    <li><a href="{{route('offer.show.'.$item->id)}}">{{$item->title}} <i class="far fa-long-arrow-right"></i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
