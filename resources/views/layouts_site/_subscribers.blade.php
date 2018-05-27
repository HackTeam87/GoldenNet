<!-- choose -->
<div class="choose jarallax">
    <div class="w3-agile-testimonial">
        <div class="container">
            <div class="w3-agileits-choose">
                <div class="col-md-6 choose-grid">
                    <div class="w3-banner-bottom-heading choose-heading">
                        <h3>Відгуки<span> кліентів?</span></h3>
                    </div>
                    <div class="top-choose-info testimonial-info">
                        <div class="wthree-testimonial-grid">
                            <div class="slider">
                                <div class="callbacks_container">
                                    <ul class="rslides" id="slider3">
                                        <li>
                                            <div class="testimonial-top">
                                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                                <p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed
                                                    luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt
                                                    elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar
                                                    semper justo. Vestibulum et aliquet magna, maximus dapibus enim.</p>
                                                <h5>John Smith <span>- Customer</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="testimonial-top">
                                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                                <p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi.
                                                    Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean
                                                    leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras
                                                    consectetur justo lorem, sed dictum sapien eleifend at.Donec
                                                    sed </p>
                                                <h5>Divide Rule <span>- Customer</span></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <script>
                                    // You can also use "$(window).load(function() {"
                                    $(function () {
                                        // Slideshow 4
                                        $("#slider3").responsiveSlides({
                                            auto: true,
                                            pager: true,
                                            nav: false,
                                            speed: 500,
                                            namespace: "callbacks",
                                            before: function () {
                                                $('.events').append("<li>before event fired.</li>");
                                            },
                                            after: function () {
                                                $('.events').append("<li>after event fired.</li>");
                                            }
                                        });

                                    });
                                </script>
                                <!--banner Slider starts Here-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //choose -->
<!-- subscribe -->
<div class="subscribe">
    <div class="container">
        <div class="w3-banner-bottom-heading">
            <h3>Підключай інтернет <span> Приєднуйся до нас</span></h3>
        </div>
        <div class="w3-agile-subscribe-form">
            <form action="#" method="post">
                <input type="text" placeholder="Ім'я" name="Email" required="">
                <input type="text" placeholder="Телефон" name="Email" required="">
                <button class="btn1">Підключитись</button>
            </form>
        </div>
    </div>
</div>
<!-- //subscribe -->