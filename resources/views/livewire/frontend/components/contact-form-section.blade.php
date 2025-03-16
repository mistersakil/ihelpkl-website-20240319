<section class="contact-widget-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1991.8965619318585!2d101.710675!3d3.149208!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362832b00e6b%3A0x9514d96ecbe632ce!2sGrand%20Millennium%20Hotel%20Kuala%20Lumpur!5e0!3m2!1sen!2sbd!4v1732950515238!5m2!1sen!2sbd"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-widget-form pl-20">
                    <div class="contact-form">
                        <h3>{{ __('contact with us') }}!</h3>

                        <livewire:frontend.components.form-section sectionTitle="request demo"
                            sectionSubTitle="our demos" :showProductInput="false" :showRequestDemoButton="false" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
