<footer class="footer-area footer-area-bg-two">
    <div class="container">
        <div class="footer-top-two">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-contact-two">
                        <div class="icon">
                            <i class="{{ _icons('phone') }}"></i>
                        </div>
                        <div class="content">
                            <h3><a href="tel:{{ __('brand number') }}">{{ __('brand number') }}</a></h3>
                            <p> {{ __('give us a call') }} </p>
                        </div>
                        <div class="right"><i class="flaticon-phone-call-1"></i></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-contact-two">
                        <div class="icon">
                            <i class="{{ _icons('email') }}"></i>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="mailto:{{ __('brand email') }}">{{ __('brand email') }}</a>
                            </h3>
                            <p>{{ __('drop us a line') }}</p>
                        </div>
                        <div class="right"><i class="flaticon-email"></i></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-4 col-md-7">
                    <div class="footer-contact-two">
                        <div class="icon">
                            <i class="{{ _icons('location') }}"></i>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="https://goo.gl/maps/uNmtNyknSA3gBH198" target="_blank">
                                    {{ __('brand address') }}
                                </a>
                            </h3>
                        </div>
                        <div class="right"><i class="flaticon-pin"></i></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.footer-top-two -->
        <div class="footer-middel pt-100 pb-70">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a wire:navigate href="{{ route('web.home') }}">
                                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Images"
                                    class="logo_footer">
                            </a>
                        </div>
                        <ul class="social-link">
                            <li>
                                <a href="{{ _social_media_links('facebook') }}" target="_blank">
                                    <i class="icon {{ _icons('facebook') }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ _social_media_links('linkedin') }}" target="_blank">
                                    <i class="icon {{ _icons('linkedin') }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ _social_media_links('pinterest') }}" target="_blank">
                                    <i class="icon {{ _icons('pinterest') }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ _social_media_links('instagram') }}" target="_blank">
                                    <i class="icon {{ _icons('instagram') }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ _social_media_links('tiktok') }}" target="_blank">
                                    <i class="icon {{ _icons('tiktok') }}"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-5">
                        <h3>{{ __('useful links') }}</h3>
                        <ul class="footer-list">
                            <li>
                                <a wire:navigate href="{{ route('web.home') }}">
                                    {{ __('home') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.about') }}">
                                    {{ __('about us') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.privacy.policy') }}">
                                    {{ __('privacy policy') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.terms.conditions') }}">
                                    {{ __('terms conditions') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-3">
                        <h3>{{ __('quick links') }}</h3>
                        <ul class="footer-list">
                            <li>
                                <a wire:navigate href="{{ route('web.solutions') }}">
                                    {{ __('solutions') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.products') }}">
                                    {{ __('products') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.blogs') }}">
                                    {{ __('blogs') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.contact') }}">
                                    {{ __('contact') }}
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-2">
                        <h3>{{ __('contact us') }}</h3>
                        <div class="work-content">
                            <div class="content">
                                <p>{{ __('brand number') }}</p>
                                <div class="number">
                                    <i class="{{ _icons('phone2') }}"></i>
                                </div>
                            </div>
                            <!-- /.content -->
                            <div class="content">
                                <p>{{ __('brand email') }}</p>
                                <div class="number">
                                    <i class="{{ _icons('email') }}"></i>
                                </div>
                            </div>
                            <!-- /.content -->
                            <div class="content">
                                <p>{{ __('brand address') }}</p>
                                <div class="number">
                                    <i class="{{ _icons('location') }}"></i>
                                </div>
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.work-content -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.footer-middel -->
    </div>
    <!-- /.container -->

    <div class="copyright-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                    {{ __('brand copyright text') }}
                    <a href="https://ihelpbd.com/" target="_blank">iHelpBD</a>
                </p>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.copyright-area -->
</footer>
