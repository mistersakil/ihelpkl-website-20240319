<section>
    @if ($isDisplaySection)
        <div class="services-area-two services-area-bg pt-100 pb-70" style="background: url({{ $serviceAreaBgDynamic }})">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="sp-title2">{{ $title }}</h1>
                    <h2>{{ $subTitle }}</h2>
                    @if (isset($shortDetails))
                        <p class="form-text">{{ ucwords($shortDetails) }}</p>
                    @endif
                </div>
                <!-- /.section-title -->

                <div class="services-slider-two owl-carousel owl-theme align-items-center pt-45">
                    @if (count($items))
                        @foreach ($items as $key => $item)
                            <div class="services-card">
                                <div class="service-icon">
                                    <i class="{{ $item['icon'] }}"></i>
                                </div>
                                <h3>
                                    {{ $item['heading'] }}
                                </h3>
                                <p>
                                    {{ $item['body'] ?? '' }}
                                </p>
                                <div class="top">
                                    <img src="{{ $img }}" alt="services-top" />
                                    <img src="{{ $img2 }}" alt="services-top2" />
                                </div>
                            </div>
                            <!-- /.services-card -->
                        @endforeach
                    @endif

                </div>
                <!-- /.services-slider-two  -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.services-area-two -->
    @endif
</section>
