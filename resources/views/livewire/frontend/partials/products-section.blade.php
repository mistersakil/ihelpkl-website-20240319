<main class="project-area services-area-bg pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center ">
            <span class="sp-title">{{ $sectionTitle }}</span>
            <h2>{{ ucwords($sectionSubTitle) }}</h2>
        </div>
        <!-- /.section-title -->
        <div class="row pt-45 justify-content-center">
            @forelse ($dataList as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="project-item">
                        <a wire:navigate href="{{ $item['slug'] }}">
                            <img src="{{ $item['img_featured'] }}" alt="Project Images">
                        </a>
                        <div class="content content-max">
                            <h3>
                                <a wire:navigate href="{{ $item['slug'] }}">
                                    {{ truncate_without_breaking($item['title'], 30) }}
                                </a>
                            </h3>
                            <p>
                                {{ truncate_without_breaking($item['subTitle'], 80) }}
                            </p>
                        </div>
                    </div>
                    <!-- /.project-item-->
                </div>
                <!-- /.col-->
            @empty
                <div class="section-title text-center">
                    <code>There is no product available right now! We are working on it ...</code>
                </div>
            @endforelse

        </div>
        <!-- /.row-->
    </div>
    <!-- /.container-->
</main>
