<main>
    <div class="project-area services-area-bg pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-title">Project</span>
                <h2>Our Recent Project Case</h2>
            </div>

            <div class="project-slider owl-carousel owl-theme pt-45" id="homeProductsSlider">
                @forelse ($dataList as $item)
                    <div class="project-item">
                        <a href="{{ url($item['slug']) }}">
                            <img src="{{ asset($item['img_thumb']) }}" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3>
                                <a href="{{ url($item['slug']) }}">
                                    {{ Str::limit($item['title'], 30) }}
                                </a>
                            </h3>
                            <p>{{ Str::limit($item['subTitle'], 80) }}</p>
                        </div>
                    </div>
                @empty
                    <div class="section-title text-center">
                        <code>There is no product available right now! We are working on it ...</code>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</main>
