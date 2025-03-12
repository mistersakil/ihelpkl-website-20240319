<main>
    {{-- @dump($search) --}}
    {{-- @dump($filter) --}}
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-backend.addons.card-component>
        <x-slot:breadcrumb>
            <x-backend.addons.breadcrumb-component :title="$module" :active-item="$activeItem">

                {{-- @can('sliders-list') --}}
                {{-- <x-slot:add_new>
                    <livewire:backend.addons.add-new-btn-component title="add new" icon="add"
                        route="admin.sliders.create" />
                </x-slot:add_new> --}}
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
                        <option value="name">{{ __('name') }}</option>
                        <option value="email">{{ __('email') }}</option>
                        <option value="country_id">{{ __('country id') }}</option>
                        <option value="mobile_number">{{ __('mobile number') }}</option>
                        {{-- <option value="product_id">{{ __('product id') }}</option> --}}
                        <option value="message">{{ __('message') }}</option>
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
                            <tr role="row" class="text-capitalize">
                                <th>{{ __('sl') }}</th>
                                <th>{{ __('name') }}</th>
                                <th>{{ __('email') }}</th>
                                <th>{{ __('country id') }}</th>
                                <th class="text-center">{{ __('mobile number') }}</th>
                                {{-- <th>{{ __('product id') }}</th> --}}
                                <th class="text-center">{{ __('message') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($models as $index => $model)
                                <tr class="odd" wire:key="slider_key_{{ $model->id }}">
                                    <td>
                                        {{ $models->firstItem() + $index }}
                                    </td>
                                    <td>
                                        {{ $model->name }}
                                    </td>
                                    <td>
                                        {{ $model->email }}
                                    </td>
                                    <td>
                                        {{ $model->country_id }}
                                    </td>
                                    <td>
                                        {{ $model->mobile_number }}
                                    </td>
                                    {{-- <td>
                                        {{ $model->product_id }}
                                    </td> --}}
                                    <td>
                                        {{ $model->message }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $models->links() }}
                @else
                    <livewire:backend.addons.no-data-found-component goBackRoute="admin.leads.list" />
                @endif
            </div>
        </div>
    </x-backend.addons.card-component>
</main>
