<section>
    @if ($isDisplaySection)
        <div class="faq-area pt-45 pb-45">
            <div class="container">
                <div class="section-title text-center">
                    @if (isset($title))
                        <h1 class="sp-title2">{{ $title }}</h1>
                    @endif
                    @if (isset($subTitle))
                        <h2>{{ $subTitle }}</h2>
                    @endif
                </div>
                <!-- /.section-title -->
                @if ($items->count())
                    <div class="row pt-45">
                        @foreach ($items->chunk(1) as $chunk)
                            <div class="col-lg-6">
                                <div class="faq-accordion">
                                    <ul class="accordion">
                                        @foreach ($chunk as $item)
                                            <li class="accordion-item">
                                                <a class="accordion-title " href="javascript:void(0)">

                                                    <i class="bx bx-plus"></i>
                                                    {{ $item['heading'] }}

                                                </a>
                                                <div class="accordion-content ">
                                                    <p>
                                                        {{ $item['body'] }}
                                                    </p>
                                                </div>
                                            </li>
                                            <!-- /.accordion-item -->
                                        @endforeach
                                    </ul>
                                    <!-- /.accordion -->
                                </div>
                                <!-- /.faq-accordion -->
                            </div>
                            <!-- /.col -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                @else
                    <livewire:frontend.components.coming-soon content="Coming soon">
                @endif
            </div>
            <!-- /.container -->
        </div>
        <!-- /.faq-area -->
    @endif
    </main>
