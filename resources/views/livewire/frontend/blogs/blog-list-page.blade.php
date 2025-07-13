<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>

    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" :imageUrl="'blog-list.jpg'" />
    </x-slot:innerBanner>

    @if (is_array($dataList) && count($dataList))
        <div class="blog-widget-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row justify-content-center">
                            @foreach ($dataList as $key => $item)
                                <div class="col-lg-6 col-md-6" key="{{ $key }}">
                                    <div class="blog-card-two">
                                        <a wire:navigate href="{{ $item['slug'] }}">
                                            <img src="{{ $item['img_thumb'] }}" alt="Blog Images">
                                        </a>
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a wire:navigate href="javascript:void(0)">
                                                        <i class="{{ _icons('user') }}"></i>
                                                        {{ $item['author'] }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <i class="{{ _icons('calendar') }}"></i>
                                                    {{ $item['date'] }}
                                                </li>
                                                <li>

                                                    <a href="javascript:void(0)">
                                                        <i class="{{ _icons('category') }}"></i>
                                                        {{ ucfirst($item['category']) }}
                                                    </a>
                                                </li>
                                            </ul>
                                            <h3>
                                                <a wire:navigate href="{{ $item['slug'] }}" >
                                                    {{ ucfirst($item['title']) }}
                                                </a>
                                            </h3>
                                            <a wire:navigate href="{{ $item['slug'] }}" class="read-btn">Read More</a>
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.blog-card-two -->
                                </div>
                                <!-- /.col -->
                            @endforeach

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-4">
                        <div class="side-bar-area pl-20">

                            <x-frontend.partials.recent-data-sidebar-widget title="recent blogs" :dataList="$dataList" />

                            <!-- /.side-bar-widget -->

                            <div class="side-bar-widget side-bar-categories">
                                <h3 class="title">Categories</h3>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" target="_blank">
                                            Data Entry
                                            <i class="flaticon-arrow-pointing-to-right"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.side-bar-widget -->

                            <div class="side-bar-widget">
                                <h3 class="title">Tags</h3>
                                <ul class="side-bar-widget-tag">
                                    <li><a href="javascript:void(0)">Employee</a></li>
                                </ul>
                            </div>
                            <!-- /.side-bar-widget -->
                        </div>
                        <!-- /.side-bar-area -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.blog-widget-area -->
    @endif
</main>
