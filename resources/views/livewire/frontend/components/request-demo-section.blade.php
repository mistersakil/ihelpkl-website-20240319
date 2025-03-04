<div class="contact-area my-4">
    {{-- @dump($dataList) --}}
    <!-- @dump($countries)  -->
    <!-- @dump($countries)  -->

    @json($state)
    <div class="container">
        <div class="contact-form">
            <div class="section-title">
                <span class="sp-title2">{{ __('request demo') }}</span>
                <h2>{{ __('demo heading text') }}</h2>
            </div>

            <form novalidate="true" wire.submit.prevent="submitForm">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group input-group has-validation">
                            <input wire:model.live="name" wire:dirty.class="border border-warning" type="text"
                                name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="{{ __('your name') }}" />

                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if (!$errors->has('name'))
                                <div class="form-text">
                                    {{ __('Enter you Name') }}
                                </div>
                            @endif
                        </div>
                    </div>


                    <!-- /.col -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input wire:model.live.debounce.500ms="email" wire:dirty.class="border border-warning"
                                type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="{{ __('your email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if (!$errors->has('email'))
                                <div class="form-text">
                                    {{ __('Enter you Email') }}
                                </div>
                            @endif
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    @if (count($countries))
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="country_id" id="country_id" class="form-control"
                                    wire:model.live="state.country_id">
                                    <option value="">{{ __('select your country') }}</option>
                                    @foreach ($countries as $key => $country)
                                        <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                    @endif

                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="input-group flex-nowrap">
                                @if($phoneCode)
                                    <span class="input-group-text" id="addon-wrapping">{{ $phoneCode }}</span>
                                @endif
                                <input wire:model.live.debounce.500ms="phone" wire:dirty.class="border border-warning"
                                    type="text" name="mobile_number" id="mobile_number" wire:model.live="phone"
                                    class="form-control  @error('phone') is-invalid @enderror"
                                    placeholder="{{ __('your mobile number') }}">

                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @if (!$errors->has('phone'))
                                <div class="form-text">
                                    {{ __('Enter you Phone') }}
                                </div>
                            @endif
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- /.col -->
                    @if (is_array($dataList) && count($dataList))
                        <div class="col-12">
                            <div class="form-group">
                                <select class="form-control" name="product_id" id="product_id" wire:model.live="product_id">
                                    <option selected>{{ __('select product') }}</option>
                                    @foreach ($dataList as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <!-- /.col -->
                    @endif

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message"
                                wire:model.live.debounce.500ms="message" cols="30" rows="5" required=""
                                data-error="Write your message" placeholder="{{ __('your message') }}"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-12 col-md-12">
                        <div class="agree-label form-text">
                            {{ __('demo agree text') }}
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn disabled">
                            {{ __('request a demo') }}
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </form>
            <!-- /form -->
        </div>
        <!-- /.contact-form -->
    </div>
    <!-- /.container -->
</div>