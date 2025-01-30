<main>
    @if ($isDisplaySection)
        <div class="project-area-two pt-45 pb-45">
            <div class="container">
                <div class="section-title text-center">
                    @if (isset($title))
                        <h1 class="sp-title2">{{ $title }}</h1>
                    @endif
                    @if (isset($subTitle))
                        <h2>{{ ucwords($subTitle) }}</h2>
                    @endif
                    @if (isset($shortDetails))
                        <p class="form-text">{{ ucwords($shortDetails) }}</p>
                    @endif

                </div>
                <!-- /.section-title -->

                @if (count($items))
                    <div class="row pt-45">
                        <div class="col-lg-6">
                            <div class="project-slider-two owl-carousel owl-theme" data-slider-id="1">
                                @foreach ($items as $item)
                                    <div class="project-slider-img">
                                        <img src="{{ $item['img'] }}" alt="Project image 1">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /.col-->

                        <div class="col-lg-6">
                            <div class="thumbs-wrap">
                                <div class="owl-thumbs project-area-thumb" data-slider-id="1">
                                    @foreach ($items as $item)
                                        <div class="owl-thumb-item">
                                            <div class="content">
                                                @if (isset($item['heading']))
                                                    <h3> {{ ucfirst($item['title']) }}</h3>
                                                @endif
                                                <p> {{ ucfirst($item['body']) }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- /.row-->
                @endif
            </div>
            <!-- /.container -->
        </div>
        <!-- /.project-area-two -->
    @endif
</main>
