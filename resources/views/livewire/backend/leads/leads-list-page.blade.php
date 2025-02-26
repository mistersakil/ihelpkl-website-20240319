<main>
    <x-backend.addons.card-component>
        <div class="row">
            <div class="col-sm-12 table-responsive">

                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;"
                    role="grid" aria-describedby="example_info">
                    <thead>
                        <tr role="row">
                            <th>SL</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Country ID') }}</th>
                            <th class="text-center">{{ __('Mobile Number') }}</th>
                            <th>{{ __('Product ID') }}</th>
                            <th class="text-center">{{ __('Message') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($leads as $index => $lead)
                        <tr class="odd" wire:key="slider_key_{{ $lead->id }}">
                            <td>
                                {{ $index + 1 }}
                            </td>
                            <td>
                                {{ $lead->name }}
                            </td>
                            <td>
                                {{ $lead->email }}
                            </td>
                            <td>
                                {{ $lead->country_id }}
                            </td>
                            <td>
                                {{ $lead->mobile_number }}
                            </td>
                            <td>
                                {{ $lead->product_id }}
                            </td>
                            <td>
                                {{ $lead->message }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-backend.addons.card-component>
</main>