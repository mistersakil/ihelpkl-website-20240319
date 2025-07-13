<header class="top-header top-header-bg-two">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a href="{{ route('web.home') }}" wire:navigate>
                        <img src="{{ _getPublicImg('logo') }}" alt="Images" class="logo" style="width: 150px">
                    </a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-lg-8 col-md-10">
                <div class="head-middle m-auto">
                    <ul class="head-list-item">
                        <li>
                            <div class="icon">
                                <i class="{{ _icons('phone') }}"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="tel:{{ __('brand number') }}">
                                        {{ __('brand number') }}
                                    </a>
                                </h3>
                                <p> {{ __('office hours time') }} </p>

                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="{{ _icons('email') }}"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="mailto:{{ __('brand email') }}">{{ __('brand email') }}</a><br>
                                </h3>
                                <p> {{ __('get a free estimate') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="{{ _icons('location') }}"></i>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="{{ _social_media_links('map') }}" target="_blank">
                                        {{ __('brand address short') }}
                                    </a>
                                </h3>
                                <p>
                                    {{ __('get direction') }}
                                </p>
                            </div>
                        </li>
                    </ul>
                    <!-- /.head-list-item -->
                </div>
                <!-- /.head-middle -->
            </div>
            <!-- /.col -->
            <div class="col-lg-2 col-md-2">
                {{-- <div class="header-btn">
                    <a href="contact.html" class="default-btn border-radius-5">Get A Quote</a>
                </div> --}}
                @livewire('frontend.partials.local-change-component')
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="top-line"></div>
    <div class="top-line2"></div>
</header>
