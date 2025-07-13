<section class="bg-light py-5">
    <div class="container text-center">
        @if (isset($sectionSubTitle))
            <h2 class="text-blue-medium fw-bold mb-4 position-relative d-inline-block">
                {{ $sectionSubTitle }}
                <span class="position-absolute top-0 left-3 text-info fs-2">✨</span>
            </h2>
        @endif

        @if (count($dataList))
            <div class="row gx-4 gy-4 justify-content-center">
                @foreach ($dataList as $data)
                    <div class="col-md-8">
                        <div class="expert-card p-4 rounded-3 d-flex align-items-start gap-3">
                            <div class="fs-3 text-primary">✔️</div>
                            <div class="text-start">
                                <h3 class="h5 fw-semibold">{{ ucwords($data['title']) }}</h3>
                                {{-- <p class="text-secondary small">{{ $data['subTitle'] }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center mt-3">
                    <a href="#" class="btn btn-warning">Talk to us</a>
                </div>
            </div>
        @endif
    </div>
</section>
