<main>
    @if ($isDisplaySection)
        <div class="testimonial-area-one pb-70 pt-70">
            <div class="container">
                <div class="testimonial-slider-one owl-carousel owl-theme owl-loaded ">
                    <div class="testimonial-item-one">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="testimonial-item-img">
                                    <div class="testimonial-item-box">
                                        <img src="{{ $imgFeatured }}" alt="{{ $title }}">
                                    </div>

                                    <div class="testimonial-shape">
                                        <img src="{{ $imgFrame }}" alt="frame">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 offset-lg-1">
                                <div class="testimonial-item-content pl-20">
                                    <div class="section-title">
                                        @if (isset($title))
                                            <h1 class="sp-title">{{ ucwords($title) }}</h1>
                                        @endif
                                        @if (isset($subTitle))
                                            <h2>{{ ucwords($subTitle) }}</h2>
                                        @endif
                                    </div>

                                    @if (isset($shortDetails))
                                        <p>{{ ucwords($shortDetails) }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</main>
