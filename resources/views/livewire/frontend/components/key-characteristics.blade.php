<section>
    @if ($isDisplaySection)
        <div class="why-area pt-45  pb-45">
            <div class="container">

                <div class="section-title text-center">
                    @if (isset($title))
                        <h1 class="sp-title2">{{ $title }}</h1>
                    @endif
                    @if (isset($subTitle))
                        <h2>{{ $subTitle }}</h2>
                    @endif
                    @if (isset($shotDetails))
                    <p class="form-text">{{ ucwords($shotDetails) }}</p>
                @endif
                </div>
                <!-- /.section-title -->

                <div class="row pt-45 justify-content-center">
                    @if (count($items))
                        @foreach ($items as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="why-card">
                                    <h3>{{ ucfirst($item['heading']) }}</h3>
                                    <p>{{ ucfirst($item['body']) }}</p>
                                    <i class="{{ $item['icon'] }}"></i>
                                    <div class="circle"></div>
                                </div>
                            </div>
                            <!-- /.col-->
                        @endforeach
                    @endif
                </div>
                <!-- /.row-->
            </div>
            <!-- /.container-->
        </div>
    @endif
</section>
