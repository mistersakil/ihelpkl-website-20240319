<form novalidate="true" wire:submit.prevent="submitForm">
    @if (session('message_'))
        <div class="alert alert-success">
            {{ session('message_') }}
        </div>
    @endif

    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group input-group has-validation">
                <input wire:model.lazy="name" wire:dirty.class="border border-warning" type="text" name="name"
                    id="name" class="form-control @error('name') is-invalid @enderror" />

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if (!$errors->has('name'))
                    <div class="form-text">
                        {{ __('your name') }}
                    </div>
                @endif
            </div>
        </div>


        <div class="col-lg-6">
            <div class="form-group">
                <input wire:model.lazy="email" wire:dirty.class="border border-warning" type="email" name="email"
                    id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                @if (!$errors->has('email'))
                    <div class="form-text">
                        {{ __('your email') }}
                    </div>
                @endif
            </div>
        </div>

        @if (count($countries))
            <div class="col-lg-6">
                <div class="form-group">
                    <select class="form-control" wire:model.lazy="country_id">
                        <option value=""></option>
                        @foreach ($countries as $key => $country)
                            <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                        @endforeach
                    </select>

                    @error('country_id')
                        <span class="form-text" style="color: #dc3545;">{{ $message }}</span>
                    @enderror

                    @if (!$errors->has('country_id'))
                        <div class="form-text ">
                            {{ __('select your country') }}
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group flex-nowrap">
                    @if ($phoneCode)
                        <span class="input-group-text" id="addon-wrapping">{{ $phoneCode }}</span>
                    @endif
                    <input wire:model.lazy="phone" wire:dirty.class="border border-warning" type="number"
                        class="form-control  @error('phone') is-invalid @enderror">
                </div>
                @error('phone')
                    <span class="form-text" style="color: #dc3545;">{{ $message }}</span>
                @enderror

                @if (!$errors->has('phone'))
                    <div class="form-text ">
                        {{ __('your mobile number') }}
                    </div>
                @endif
            </div>
        </div>


        @if ($showSubjectInput)
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="text" name="subject" id="subject"
                        class="form-control  @error('message') is-invalid @enderror" wire:model.lazy="subject">

                    @error('subject')
                        <span class="form-text" style="color: #dc3545;">{{ $message }}</span>
                    @enderror

                    @if (!$errors->has('subject'))
                        <div class="form-text ">
                            {{ __('your subject') }}
                        </div>
                    @endif
                </div>
            </div>
        @endif


        @if ($showProductInput && is_array($dataList) && count($dataList))
            <div class="col-12">
                <div class="form-group">
                    <select class="form-control" wire:model.lazy="product_id">
                        <option selected></option>
                        @foreach ($dataList as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>

                    @error('product_id')
                        <span class="form-text" style="color: #dc3545;">{{ $message }}</span>
                    @enderror

                    @if (!$errors->has('product_id'))
                        <div class="form-text ">
                            {{ __('select product') }}
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <textarea name="message" class="form-control" id="message" wire:model.lazy="message" cols="30" rows="2"
                    required="" data-error="Write your message"></textarea>
                <div class="help-block with-errors"></div>

                @error('message')
                    <span class="form-text" style="color: #dc3545;">{{ $message }}</span>
                @enderror

                @if (!$errors->has('message'))
                    <div class="form-text ">
                        {{ __('your message') }}
                    </div>
                @endif
            </div>
        </div>


        @if ($showTermsConditionCheck)
            <div class="col-lg-12 col-md-12">
                <div class="agree-label">
                    <input type="checkbox" id="chb1" wire:model="termsAccepted">
                    <label for="chb1">
                        {{ __('accept') }} <a href="javascript:void(0)">{{ __('terms and conditions') }}</a> {{ __('and')}} <a
                            href="javascript:void(0)">{{ __('privacy policy') }}.</a>
                    </label> <br>

                    @error('termsAccepted')
                        <span class="form-text" style="color: #dc3545;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        @endif


        @if ($showSendMessageButton)
            <div class="col-lg-12 col-md-12">
                <button type="submit" class="default-btn">
                    {{ __('send message') }}
                </button>
            </div>
        @endif

        @if ($showRequestDemoButton)
            <div class="col-lg-12 col-md-12">
                <div class="agree-label form-text">
                    {{ __('demo agree text') }}
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="default-btn">
                    {{ __('request a demo') }}
                </button>
            </div>
        @endif
    </div>
</form>
