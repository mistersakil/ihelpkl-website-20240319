<div class="side-bar-widget">
    <h3 class="title">{{ $title }}</h3>
    <div class="widget-popular-post">
        @forelse ($dataList as $key => $item)
            <article class="item">
                <a href="javascript:void(0)" class="thumb">
                    <span class="full-image cover" role="img">
                        <img src="{{ $item['img_thumb'] }}" alt=" {{ $item['title'] }}">
                    </span>
                </a>
                <div class="info">
                    <h4 class="title-text">
                        <a href="javascript:void(0)">
                            {{ $item['title'] }}
                        </a>
                    </h4>

                    <a href="javascript:void(0)" class="read-btn" target="_blank">Read
                        More</a>
                </div>
            </article>
        @empty
            <article class="item">
                {{ __('nothing found') }}
            </article>
        @endforelse
    </div>
</div>
