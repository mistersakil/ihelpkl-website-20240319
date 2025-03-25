<main>
    @if (is_array($sliders) && count($sliders))
        <div class="banner-area-two" style="min-height: calc(100vh);">
            <div class="banner-slider owl-carousel owl-theme" id="banner-slider">
                @foreach ($sliders as $key => $item)
                    <div :key="sliders_{{ $key }}" class="banner-item">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="banner-content-two">
                                        <h1>
                                            {{ $item['slider_title'] }}
                                        </h1>
                                    </div>
                                </div>
                                <!-- /.col -->

                                <div class="col-lg-6">
                                    <div class="banner-img-two">
                                        <img src="{{ $item['slider_image_link'] }}" alt="slider-image-{{ $key }}"  style="min-height: calc(100vh);">
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.banner-item -->
                @endforeach
            </div>
            <!-- /.banner-slider -->
        </div>
        <!-- /.banner-area-two -->
    @endif
</main>
