<div class="choose-us-content">
    @foreach($items->chunk(2) as $chunk)
        <div class="choose-us-wrap{{ $loop->last ? ' mb-0' : '' }}">
            @foreach($chunk as $index => $item)
                @php
                    $globalIndex = ($loop->parent->index * 2) + $loop->index + 1;
                @endphp
                <div class="choose-us-item wow fadeInUp" data-wow-delay="{{ $loop->index == 0 ? '.3s' : '.5s' }}">
                    <div class="choose-us-icon">
                        <div class="icon">
                            <img src="{{ renderImage($item->galleryCover(), 60, 60, 'cover') }}" style="height: 60px; object-fit: cover" />
                        </div>
                        <div class="text">
                            <h2>{{ str_pad($globalIndex, 2, '0', STR_PAD_LEFT) }}</h2>
                        </div>
                    </div>
                    <div class="content">
                        <h5>{{ $item->title }}</h5>
                        {!! $item->text !!}
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
