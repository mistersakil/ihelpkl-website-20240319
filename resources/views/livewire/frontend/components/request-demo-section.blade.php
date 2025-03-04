<div class="contact-area my-4">
    {{-- @dump($dataList) --}}
    {{-- @dump($countries) --}}
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
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="{{ __('your name') }}" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="{{ __('your email') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    @if (count($countries))
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select name="country_id" id="country_id" class="form-control" wire:model="state.country_id">
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
                            @if($phoneCode)
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ $phoneCode }}</span>
                            </div>
                            @endif
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ $phoneCode }}</span>
                            </div>
                            <input type="text" name="mobile_number" id="mobile_number" class="form-control"
                                placeholder="{{ __('your mobile number') }}">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- /.col -->
                    @if (is_array($dataList) && count($dataList))
                    <div class="col-12">
                        <div class="form-group">
                            <select class="form-control" name="product_id" id="product_id">
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
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required=""
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

