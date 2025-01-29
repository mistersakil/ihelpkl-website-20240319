<section>
    <div class="about-area-two pt-45 pb-45">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-img-two">
                        @if ($img)
                            <img src="{{ $img }}" alt="About Images">
                        @endif
                    </div>
                </div>
                <!-- /.col-->

                <div class="col-lg-6">
                    <div class="about-content pl-20">
                        <div class="section-title">
                            @if ($title)
                                <h1 class="sp-title2">{{ $title }}</h1>
                            @endif
                            @if ($subTitle)
                                <h2>{{ $subTitle }}</h2>
                            @endif
                        </div>
                        @if ($shortDetails)
                            {{ $shortDetails }}
                        @endif
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
                    <!-- /.about-content -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.about-area-two -->
</section>
