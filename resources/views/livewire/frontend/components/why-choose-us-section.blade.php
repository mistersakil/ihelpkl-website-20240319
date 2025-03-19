<section class="choose-area pt-100 pb-70">

    <div class="container-fluid">
        <div class="section-title text-center">
            @if (!empty($title))
                <h1 class="sp-title">{{ ucwords($title) }}</h1>
            @endif
            @if (!empty($subTitle))
                <h2>{{ ucwords($subTitle) }}</h2>
            @endif
            @if (!empty($shortDetails))
                <p>{{ ucwords($shortDetails) }}</p>
            @endif
        </div>
        <!-- /.section-title  -->
        <div class="row pt-45 align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="choose-img">
                    <img src="{{ Vite::imageWeb('choose-img1.png') }}" alt="Choose Images">
                </div>
            </div>
            <!-- /.col -->
            <div class="col-lg-7">
                <div class="choose-leftside">
                    <div class="row">
                        @if (is_array($items) && count($items))
                            @foreach ($items as $item)
                                <div class="col-lg-6 col-sm-6">
                                    <div class="choose-card">
                                        <h3>
                                            {{ $item['heading'] }}
                                        </h3>
                                        <p>
                                            {{ $item['body'] }}    
                                        </p>
                                        <i class="{{ $item['icon'] }}"></i>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            @endforeach
                        @endif

                    </div>
                    <!-- /.row -->
                    <div class="choose-bg">
                        <img src="{{ Vite::imageWeb('choose-bg.png') }}" alt="Choose Images">
                    </div>
                    <!-- /.choose-bg -->
                </div>
                <!-- /.choose-leftside -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
