<main>
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$module" :active-item="$activeItem">

                {{-- @can('sliders-list') --}}
                <x-slot:add_new>
                    <livewire:backend.addons.add-new-btn-component title="add new" icon="add"
                        route="admin.sliders.create" />
                </x-slot:add_new>
                {{-- @endcan --}}

            </x-backend.addons.breadcrumb-component>
        </x-slot:breadcrumb>
        <!-- /:breadcrumb -->

        <!--########## Filter Section Start  ##########-->
        <div class="row mb-3" id="filter_section">
            <div class="col-12 col-sm">
                <div class="input-group" title="{{ __('showing records', ['records' => __($filter['perPage'])]) }}">
                    <span class="input-group-text"><i class="{{ _icons('per_page') }}"></i></span>
                    <select class="form-select" wire:model.live="filter.perPage">
                        @isset($filter['perPageList'])
                            @foreach ($filter['perPageList'] as $key => $perPage)
                                <option value="{{ $perPage['number'] }}" @if ($perPage['default']) selected @endif
                                    wire:key="perPage_{{ $key }}">
                                    {{ $perPage['label'] }}
                                </option>
                            @endforeach
                        @endisset
                    </select>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm">
                <div class="input-group" title="{{ __('order by', ['orderBy' => __($filter['orderBy'])]) }}">
                    <span class="input-group-text">
                        <i class="{{ _icons('order_by') }}"></i>
                    </span>
                    <select wire:model.live="filter.orderBy" class="form-select text-capitalize">
                        <option value="id">{{ __('id') }}</option>
                        <option value="slider_title">{{ __('title') }}</option>
                        <option value="slider_body">{{ __('body') }}</option>
                        <option value="slider_link_text">{{ __('link text') }}</option>
                        <option value="slider_link">{{ __('link') }}</option>
                        <option value="order">{{ __('order') }}</option>
                        <option value="is_active">{{ __('status') }}</option>
                    </select>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm">
                <div class="input-group"
                    title="{{ __('order direction', ['orderDirection' => __($filter['orderDirection'])]) }}">
                    <span class="input-group-text"><i class="{{ _icons('order_direction') }}"></i></span>
                    <select wire:model.live="filter.orderDirection" class="form-select text-capitalize">
                        <option value="asc">{{ __('ascending') }}</option>
                        <option value="desc">{{ __('descending') }}</option>
                    </select>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="{{ _icons('search') }}"></i>
                    </span>
                    <input type="search" class="form-control" wire:model.live.debounce.500ms="search"
                        placeholder="{{ $filter['searchPlaceholderText'] }}">
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!--########## Filter Section End  ##########-->

        <div class="row">
            <div class="col-sm-12 table-responsive">
                @if ($models->count())
                    <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;"
                        role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th>#</th>
                                <th>{{ __('image') }}</th>
                                <th>{{ __('title') }}</th>
                                <th>{{ __('body') }}</th>
                                <th class="text-center">{{ __('order') }}</th>
                                <th>{{ __('status') }}</th>
                                <th class="text-center">{{ __('actions') }}</th>

                            </tr>
                        </thead>
                        <!-- /thead -->
                        <tbody>
                            @foreach ($models as $index => $model)
                                <tr class="odd" wire:key="slider_key_{{ $model->id }}">
                                    <td>
                                        {{ $models->firstItem() + $index }}
                                    </td>
                                    <td>
                                        {!! Vite::showUploadedImg($model->slider_image, 'sliders') !!}
                                    </td>
                                    <td>
                                        {{ $model->slider_title }}
                                    </td>
                                    <td>
                                        {{ $model->slider_body }}
                                    </td>

                                    <td>
                                        <div
                                            class="d-flex align-items-center justify-content-center gap-2 order-actions">
                                            @if ($countModel == 1)
                                                <a href="javascript:void(0)"
                                                    class="bg-gray
                                                    text-secondary border-secondary"
                                                    title="{{ __('order not available') }}" data-step="1">
                                                    <i class="{{ _icons('stop') }}"></i>
                                                </a>
                                            @elseif ($lowerOrderModel->order == $model->order)
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'DOWN')"
                                                    class="bg-gray
                                                    text-danger border-danger"
                                                    title="{{ __('step up') }}" data-step="2">
                                                    <i class="{{ _icons('arrow_down') }}"></i>
                                                </a>
                                            @elseif ($highestOrderModel->order == $model->order)
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'UP')"
                                                    class="bg-gray text-success border-success"
                                                    title="{{ __('step up') }}" data-step="3">
                                                    <i class="{{ _icons('arrow_up') }}"></i>
                                                </a>
                                            @else
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'DOWN')"
                                                    class="bg-gray text-danger border-danger"
                                                    title="{{ __('step down') }}" data-step="4">
                                                    <i class="{{ _icons('arrow_down') }}"></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    wire:click="swapOrder({{ $model->id }},  'UP')"
                                                    class="bg-gray text-success border-success"
                                                    title="{{ __('step up') }}" data-step="4">
                                                    <i class="{{ _icons('arrow_up') }}"></i>
                                                </a>
                                            @endif


                                        </div>
                                    </td>
                                    <td>
                                        <livewire:backend.addons.is-active-component :isActive="$model->is_active" :modelId="$model->id"
                                            wire:key="{{ rand() }}" />
                                    </td>

                                    <td>
                                        <div
                                            class="d-flex align-items-center justify-content-center gap-1 order-actions">
                                            <a wire:navigate href="{{ route('admin.sliders.edit', $model->id) }}"
                                                title="{{ __('edit') }}" class="badge bg-info text-white">
                                                <i class="{{ _icons('edit') }}"></i>
                                            </a>
                                            <a href="javascript:void(0)" wire:click="deleteModel({{ $model->id }})"
                                                title="{{ __('delete') }}" class="badge bg-danger text-white">
                                                <i class="{{ _icons('delete') }}"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- /tr -->
                            @endforeach

                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /.table -->
                    {{ $models->links() }}
                @else
                    <livewire:backend.addons.no-data-found-component goBackRoute="admin.sliders.list" />
                @endif
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </x-backend.addons.card-component>
    <!-- /card-component -->

</main>
