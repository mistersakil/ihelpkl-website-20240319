<section>
    @if ($isDisplaySection)
        <article class="about-area about-mt">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ Vite::imageWeb('about-img1.jpg') }}" alt="Choose Images" />
                            <div class="line">
                                <img src="{{ Vite::imageWeb('about-line.png') }}" alt="Choose Images" />
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-6">
                        <div class="about-content pl-20">
                            <div class="section-title">
                                <span class="sp-title">{{ $title }}</span>
                                <h2>{{ $subTitle }}</h2>
                            </div>
                            <!-- /.section-title -->
                            <p>
                                {{ $body }}
                            </p>

                            @if (count($items))
                                <ul class="about-list">
                                    @foreach ($items as $item)
                                        <li>
                                            <i class="{{ _icons('arrow_right') }}"></i>
                                            {{ ucfirst($item) }}
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- /.about-list -->
                            @endif
                        </div>
                        <!-- /.about-content  -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </article>
    @endif
</section>
