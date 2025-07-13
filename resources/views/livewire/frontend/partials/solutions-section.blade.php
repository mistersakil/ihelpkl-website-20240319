<main class="services-area-two pt-100 pb-70">

    <div class="container">
        <div class="section-title text-center ">
            <div class="section-title text-center">
                @if (isset($sectionTitle))
                    <span class="sp-title2">{{ $sectionTitle }}</span>
                @endif
                @if (isset($sectionSubTitle))
                    <h2>{{ $sectionSubTitle }}</h2>
                @endif
            </div>
        </div>
        <!-- /.section-title -->

        @if (count($dataList))
            <div class="tab services-tab {{ $isShowSectionHeader ? 'pt-45' : '' }}">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="tabs active">
                            @foreach ($dataList as $tabIndex => $data)
                                <li class="{{ $loop->first ? 'current' : '' }}" wire:key="tab_{{ $tabIndex }}">
                                    <a href="javascript:void(0)">
                                        {{ ucwords($data['title']) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- /.tabs -->
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-12 col-md-12">
                        <div class="tab_content current active pt-45 ">
                            @foreach ($dataList as $tabContentindex => $data)
                                <div class="tabs_item {{ $loop->first ? 'current' : '' }}"
                                    wire:key="tab_content_{{ $tabContentindex }}">

                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="services-tab-img">
                                                <a wire:navigate href="{{ $data['slug'] }}">
                                                    <img src="{{ $data['img_featured'] }}"
                                                        alt="{{ ucwords($data['title']) }}"></a>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-lg-6">
                                            <div class="services-tab-content pl-20">
                                                <h2>{{ ucwords($data['subTitle']) }}</h2>

                                                <p>
                                                    {{ ucwords($data['short_details']) }}
                                                </p>

                                                <a wire:navigate href="{{ $data['slug'] }}"
                                                    class="default-btn border-radius-5">
                                                    {{ __('read more') }}
                                                </a>
                                            </div>
                                            <!-- /.services-tab-content -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.tabs_item -->
                            @endforeach
                        </div>
                        <!-- /.tab_content -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.tab -->
        @endif
    </div>
    <!-- /.container -->
</main>
