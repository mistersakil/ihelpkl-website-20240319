<main class="blog-details-area pt-100 pb-70">
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-slot:metaDescription> {{ __($metaDescription) }} </x-slot:metaDescription>

    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    {{-- @dd($itemDetails) --}}

    <div class="container">
        @if (isset($itemDetails) && is_array($itemDetails) && count($itemDetails))
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-article">
                        <div class="blog-article-content">
                            <figure class="d-flex justify-content-center">
                                <img src="{{ $itemDetails['img_featured'] }}" alt="Blog Images">
                            </figure>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="author.html">
                                            <i class="{{ _icons('user') }}"></i>
                                            {{ $itemDetails['author'] }}
                                        </a>
                                    </li>
                                    <li>
                                        <i class="{{ _icons('calendar') }}"></i>
                                        {{ $itemDetails['date'] }}
                                    </li>
                                    <li>
                                        <i class="{{ _icons('category') }}"></i>
                                        {{ $itemDetails['category'] }}
                                    </li>
                                </ul>
                                <h1 class="blogTitle">
                                    {{ $itemDetails['title'] }}
                                </h1>
                                @isset($itemDetails['details'])
                                    {!! $itemDetails['details'] !!}
                                @endisset
                            </div>
                        </div>
                        @if (isset($itemDetails['article_content']))
                            <div class="article-content-area">
                                <h2 class="blogSubTitle">
                                    {{ $itemDetails['article_content']['title'] }}
                                </h2>
                                <blockquote class="blockquote">
                                    @if (isset($itemDetails['article_content']['details']))
                                        {!! $itemDetails['article_content']['details'] !!}
                                    @endif
                                    <i class="{{ _icons('quote') }} " style="transform: rotate(180deg)"></i>
                                </blockquote>
                            </div>
                        @endif
                        @if (isset($itemDetails['benefit_content']))
                            <div class="blog-benefit-content">
                                <h2 class="blogSubTitle">
                                    {{ $itemDetails['benefit_content']['title'] ?? '' }}
                                </h2>
                                @if (isset($itemDetails['benefit_content']['details']))
                                    {!! $itemDetails['benefit_content']['details'] !!}
                                @endif
                                @if (isset($itemDetails['benefit_content']['items']))
                                    <ul class="my-3">
                                        @foreach ($itemDetails['benefit_content']['items'] as $benefitKey => $benefitItem)
                                            <li>
                                                {{ $benefitItem['title'] }}
                                                <blockquote class="quote">
                                                    {{ $benefitItem['details'] }}
                                                </blockquote>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endif

                        <div class="article-share">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-5">
                                    <div class="article-tag">
                                        <ul>
                                            <li class="title">Tags :</li>
                                            <li><a href="blog-details.html" target="_blank">Workflow,</a></li>
                                            <li><a href="blog-details.html" target="_blank">Media,</a></li>
                                            <li><a href="blog-details.html" target="_blank">Tips</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-7">
                                    <div class="article-social-icon">
                                        <ul class="social-icon">
                                            <li class="title">Share :</li>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/" target="_blank">
                                                    <i class='bx bxl-linkedin'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/" target="_blank">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class='bx bxl-instagram'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">

                </div>
            </div>
        @else
            <livewire:backend.addons.no-data-found-component goBackRoute="web.blogs" />
        @endif
    </div>
</main>
