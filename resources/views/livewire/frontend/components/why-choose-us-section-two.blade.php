<main>
    @if ($isDisplaySection)
        <div class="choose-area-two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="choose-content-left">
                            <div class="section-title">
                                @if (isset($title))
                                    <h1 class="sp-title">{{ $title }}</h1>
                                @endif
                                @if (isset($subTitle))
                                    <h2>{{ ucwords($subTitle) }}</h2>
                                @endif
                                @if (isset($shortDetails))
                                <p>{{ ucwords($shortDetails) }}</p>
                            @endif
                            </div>

                            <div class="row">
                                @if (count($list))

                                    @foreach ($list as $key => $item)
                                        <div class="col-lg-6 col-sm-6" key="{{ $key }}">
                                            <div class="choose-item">
                                                <div class="choose-circle">
                                                    <h3>{{ isset($item['progress']) ? $item['progress'] : 0 }}%</h3>
                                                </div>
                                                <h4>{{ isset($item['title']) ? $item['title'] : '' }}</h4>

                                                @if (isset($item['items']) && count($item['items']))
                                                    <ul>
                                                        @foreach ($item['items'] as $keyChild => $itemChild)
                                                            <li key="child_key_{{ $keyChild }}">
                                                                {{ $itemChild }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </div>
                                        </div>
                                    @endforeach

                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-img-three">
                            <img src="{{ $imgFeatured }}" alt="Images">
                            <div class="line">
                                <img src="{{ $imgFrame }}" alt="Choose Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</main>
