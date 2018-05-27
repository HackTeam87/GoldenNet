@extends('layouts_site.base')

@section('content')

    <!-- about-heading -->
    <div class="about-heading">
        <h2> Наші <span>Контакти</span></h2>
    </div>
    <!-- //about-heading -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="agile-contact-form">
                <div class="col-md-6 contact-form-left">
                    <div class="w3layouts-contact-form-top">
                        <h3>Get in <span>touch</span></h3>
                        <p>Pellentesque eget mi nec est tincidunt accumsan. Proin fermentum dignissim justo, vel euismod
                            justo sodales vel. In non condimentum mauris. Maecenas condimentum interdum lacus, ac varius
                            nisl dignissim ac. Vestibulum euismod est risus, quis convallis nisi tincidunt eget. Sed
                            ultricies congue lacus at fringilla.</p>
                    </div>
                    <div class="agileits-contact-address">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <span>+1 234 567 8901</span></li>
                            <li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a
                                            href="mailto:example@email.com">mail@example.com</a></span></li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Eiusmod Tempor inclore Place,Kingsport 56777.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 contact-form-right">
                    <div class="contact-form-top">
                        <h3>Текст <span> повідомлення</span></h3>
                    </div>
                    <div class="agileinfo-contact-form-grid">
                        <form action="#" method="post">
                            <input type="text" name="Name" placeholder="Ім'я" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Telephone" placeholder="Телефон" required="">
                            <textarea name="Message" placeholder="Додаткова інформація" required=""></textarea>
                            <button class="btn1">Надіслати</button>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="w3agile-map">
                <h3>Find us <span>here</span></h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159.02766764504136!2d30.381694026418852!3d50.37694576502002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c9893a156cd3%3A0xced8ae6d8f9cfea5!2sEvropeys%CA%B9ke+Misto!5e0!3m2!1sru!2sua!4v1527413494263" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- //contact -->

@endsection