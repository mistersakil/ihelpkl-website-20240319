<div class="wrapper">
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>

    <div class="section-authentication-cover">

        <div class="row g-0">
            <div
                class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                    <div class="card-body">
                        <img src="{{ Vite::imageBack('register-cover.svg') }}" class="img-fluid auth-img-cover-login"
                            width="550" alt="" />
                    </div>
                </div>

            </div>
            <!-- /.col -->

            <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                    <div class="card-body p-sm-5">
                        <div class="mb-3 text-center">
                            {{-- <img src="{{ Vite::imageRoot('logo.svg') }}" width="160" alt="logo" /> --}}
                        </div>
                        <div class="text-center mb-4">
                            <h4>
                                {{ __('login as admin') }}
                            </h4>
                            <p class="mb-0">
                                {{ __('please provide the details below to log in') }}
                            </p>
                        </div>
                        <div class="form-body">
                            <form class="row g-3 needs-validation" autocomplete="off"
                                wire:submit.prevent="login_process">
                                <div class="col-12">
                                    <label for="email" class="form-label">
                                        {{ __('email address') }}
                                    </label>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="{{ _icons('email') }}"></i>
                                        </div>
                                        <input wire:model.lazy="email" type="text"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="{{ __('enter your email address') }}">

                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- /.col -->

                                <div class="col-12">
                                    <label for="password" class="form-label">
                                        {{ __('enter password') }}
                                    </label>
                                    <div class="input-group" id="show_hide_password">
                                        <div class="input-group-text toggle" title="{{ __('show or hide password') }}">
                                            <i class="{{ _icons('hide') }}"></i>
                                        </div>
                                        <input wire:model.lazy="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            value="12345678#" placeholder="{{ __('Enter your password') }}">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                </div>
                                <!-- /.col -->

                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                            id="remember_me" @if ($remember_me) checked @endif />
                                        <label class="form-check-label"
                                            for="remember_me">{{ __('remember me') }}</label>
                                    </div>
                                </div>
                                <!-- /.col -->

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bx bxs-lock-open"></i>
                                            {{ __('login') }}
                                        </button>
                                    </div>
                                </div>
                                <!-- /.col -->


                            </form>
                            <!-- /.row -->
                        </div>
                        <!-- /.border -->


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.section-authentication-cover -->
</div>
<!-- /.wrapper -->
