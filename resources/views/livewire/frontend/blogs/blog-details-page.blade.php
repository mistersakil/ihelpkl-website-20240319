<main class="blog-details-area pt-100 pb-70">
    <x-slot:metaTitle> {{ __($metaTitle) }} </x-slot:metaTitle>
    <x-slot:metaDescription> {{ __($metaDescription) }} </x-slot:metaDescription>

    <x-slot:innerBanner>
        <x-frontend.layout.inner-banner :metaTitle="$metaTitle" :module="$module" />
    </x-slot:innerBanner>

    {{-- @dump($itemDetails) --}}

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
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.
                                </p>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida.
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                    the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley
                                    of type and scrambled it to make a type specimen book. It has survived not only
                                    five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged.
                                    It was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.
                                </p>
                            </div>
                        </div>

                        <div class="article-content-area">
                            <blockquote class="blockquote">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <i class='bx bxs-quote-right'></i>
                            </blockquote>
                        </div>

                        <div class="blog-benefit-content">
                            <h3>Beneficial Strategies</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                gravida.
                                Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It
                                was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.
                            </p>
                            <ul>
                                <li>At vero eos et accusam et justo duo dolores et ea rebum. </li>
                                <li>Eirmod tempor invidunt ut labore et dolore magna</li>
                                <li>Stet clita kasd gubergren, no sea takimata sanctus.</li>
                            </ul>
                        </div>

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
            <livewire:backend.addons.no-data-found-component />
        @endif
    </div>
</main>
