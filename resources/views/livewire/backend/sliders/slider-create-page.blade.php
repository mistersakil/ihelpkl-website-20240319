<main>
    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$module" :active-item="$activeItem">

                {{-- @can('sliders-create') --}}
                <x-slot:add_new>
                    <livewire:backend.addons.add-new-btn-component title="sliders list" icon="list"
                        route="admin.sliders.list" />
                </x-slot:add_new>
                {{-- @endcan --}}

            </x-backend.addons.breadcrumb-component>
        </x-slot:breadcrumb>
        <!-- /:breadcrumb -->

        <form class="row g-3" class="was-validated">
            <div class="col-md-8">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="slider_title" class="form-label">{{ __('slider title') }}</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">
                                <i class="{{ _icons('title') }}"></i>
                            </span>
                            <input wire:model.lazy="slider_title" type="text"
                                class="form-control  @error('slider_title') is-invalid @enderror" id="slider_title"
                                wire:dirty.class="border border-warning">
                            @error('slider_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (!$errors->has('slider_title'))
                            <div class="form-text">
                                {{ __('slider title required') }}
                            </div>
                        @endif

                    </div>
                    <!-- /.col-->

                    <div class="col-md-6">
                        <label for="slider_body" class="form-label">{{ __('slider body') }}</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">
                                <i class="{{ _icons('body') }}"></i>
                            </span>
                            <input wire:model.lazy="slider_body" type="text"
                                class="form-control  @error('slider_body') is-invalid @enderror" id="slider_body"
                                wire:dirty.class="border border-warning">
                            @error('slider_body')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                        @if (!$errors->has('slider_body'))
                            <div class="form-text">
                                {{ __('sliders body required') }}
                            </div>
                        @endif

                    </div>
                    <!-- /.col-->

                    <div class="col-md-6">
                        <label for="slider_link_text" class="form-label">{{ __('slider link text') }}</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">
                                <i class="{{ _icons('link_text') }}"></i>
                            </span>
                            <input wire:model.lazy="slider_link_text" type="text"
                                class="form-control  @error('slider_link_text') is-invalid @enderror"
                                id="slider_link_text" wire:dirty.class="border border-warning">
                            @error('slider_link_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                        @if (!$errors->has('slider_link_text'))
                            <div class="form-text">
                                {{ __('if there is link, slider text required') }}
                            </div>
                        @endif

                    </div>
                    <!-- /.col-->

                    <div class="col-md-6">
                        <label for="slider_link" class="form-label">{{ __('slider link') }}</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">
                                <i class="{{ _icons('link45') }}"></i>
                            </span>
                            <input wire:model.lazy="slider_link" type="text"
                                class="form-control  @error('slider_link') is-invalid @enderror" id="slider_link"
                                wire:dirty.class="border border-warning">
                            @error('slider_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                        @if (!$errors->has('slider_link'))
                            <div class="form-text">
                                {{ __('sliders link optional') }}
                            </div>
                        @endif

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <div class="file_upload_container">
                    <div class="card_wrapper" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false, progress = 0"
                        x-on:livewire-upload-cancel="uploading = false" x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress" x-clock>
                        <!-- Start: File selection -->
                        <h6 class="text-secondary text-capitalize text-center">
                            {{ __('upload slider image') }}
                        </h6>
                        <div class="drop_box">
                            <ul class="form-text d-flex flex-column">
                                <li> {{ __('translations.supported_image_files', ['mimes' => implode(',', $supportedImgTypes)]) }}
                                </li>
                                <li> {{ __('translations.image_minimum_dimension', ['minHeight' => $imgMinHeight, 'minWidth' => $imgMinWidth]) }}
                                </li>
                                <li> {{ __('translations.image_max_size_mb', ['size' => $maxFileUploadSize / 1024]) }}
                                </li>
                            </ul>

                            <input wire:model="slider_image" type="file" accept=".jpg,.jpeg,.png,.mp4" id="fileID"
                                style="">

                            <button type="button" class="btn btn-secondary">{{ __('choose file') }}</button>
                        </div>
                        <!-- End: File selection -->

                        <!-- Start: Loading progress -->
                        <div wire:loading.flex wire:target="slider_image">
                            <div wire:loading wire:target="slider_image"
                                class="chip d-flex items-center justify-content-between">
                                <section>
                                    <span class="spinner-grow spinner-grow-sm text-info" role="status"
                                        aria-hidden="true"></span>
                                    {{ __('uploading') }}
                                </section>
                            </div>
                        </div>
                        <!-- End: Loading progress -->


                        <!-- Start: Upload preview -->
                        @if ($displayTmpUploadedImage && $slider_image)
                            <div wire:target="slider_image" wire:loading.class="d-none"
                                wire:loading.class.remove="chip chip-md" class="chip chip-md">
                                <img src="{{ $slider_image->temporaryUrl() }}" alt="Contact Person">
                                <span wire:click="deleteTmpUploadedImg" class="closebtn text-danger">
                                    <i class="{{ _icons('delete') }}"></i>
                                </span>
                            </div>
                        @endif
                        <!-- End: Upload preview -->

                        <!-- Start: validation error message -->
                        @error('slider_image')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <!-- End: validation error message -->

                    </div>
                    <!-- /.card_wrapper -->
                </div>
                <!-- /.file_upload_container -->

            </div>
            <!-- /.col -->


        </form>
        <!-- /form -->


        <x-slot:cardFooter>
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div class="form-check form-switch">
                        <input wire:model.live='is_active' class="form-check-input" type="checkbox" role="switch"
                            id="is_active">
                        <label class="form-check-label" for="is_active">
                            {{ $isActiveText }}
                        </label>
                    </div>
                    <!-- /.form-check -->

                    <div class="row row-cols-auto g-3">
                        <div wire:target="save" wire:loading class="col">
                            <button class="btn btn-success" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status"
                                    aria-hidden="true"></span>
                                {{ __('processing') }}
                            </button>
                        </div>
                        <!-- /.col -->

                        <div class="col">
                            <button wire:loading.class="btn-secondary" wire:target="save" wire:click="save"
                                type="button" class="btn btn-outline-primary px-4 btn-sm">
                                <i class="{{ _icons('save') }}"></i>
                                {{ __('save') }}
                            </button>
                        </div>
                        <!-- /.col -->

                        <div class="col">
                            <button wire:click="resetStateProps" type="button"
                                class="btn btn-outline-danger px-4 btn-sm">
                                <i class="{{ _icons('reset') }}"></i>
                                {{ __('reset') }}
                            </button>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.d-flex -->
            </div>
            <!-- /.col -->

        </x-slot:cardFooter>
        <!-- /cardFooter -->

    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
