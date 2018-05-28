@extends('layouts_site.base')


@section('content')
    <!-- about-heading -->
    <div class="about-heading">
        <h2>Оберіть ваш <span>Тарифний план</span></h2>
    </div>
    <!-- //about-heading -->
    <!-- plans -->
    <!-- shared-grid -->
    <div class="shared-grid">
        <div class="container">
            <div class="w3-banner-bottom-heading">
                <h3>Багатоквартирні <span>Будинки</span></h3>
            </div>
            <div class="priceing-table-main">
                <div class="col-md-4 price-grid ">
                    <div class="price-block agile ">
                        <div class="price-gd-top  silver-top">
                            <h4>Срібло</h4>
                            <h3>80,00 грн.</h3>
                            <h5>місяць</h5>
                        </div>
                        <div class="price-gd-bottom ">
                            <div class="price-list">
                                <ul>
                                    <li><span>Безлімітний</span> Трафік</li>
                                    <li><span>Інтернет до 30 Мбіт / сек</span></li>
                                    <li><span>Підключення </span> 100 грн.</li>
                                    <li class="text"><span>24/7</span> Цілодобова Підтримка</li>
                                </ul>
                            </div>
                            <div class="price-selet pric-sclr1">
                                <a href="/contact">Підключити</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr2">
                            <h4>Золото</h4>
                            <h3>150,00 грн.</h3>
                            <h5>місяць</h5>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><span>Безлімітний</span> Трафік</li>
                                    <li><span>Інтернет до 100 Мбіт / сек</span></li>
                                    <li><span>Підключення </span> 100 грн.</li>
                                    <li class="text"><span>24/7</span> Цілодобова Підтримка</li>
                                </ul>
                            </div>
                            <div class="price-selet pric-sclr2">
                                <a href="/contact">Підключити</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top pric-clr3">
                            <h4>Платина</h4>
                            <h3>200,00 грн.</h3>
                            <h5>місяць</h5>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><span>Безлімітний</span> Трафік</li>
                                    <li><span>Інтернет до 1000 Мбіт/сек</span></li>
                                    <li><span>Підключення </span> 100 грн.</li>
                                    <li class="text"><span>24/7</span> Цілодобова Підтримка</li>
                                </ul>
                            </div>
                            <div class="price-selet pric-sclr3">
                                <a href="/contact">Підключити</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shared-grid">
            <div class="container">
                <div class="w3-banner-bottom-heading">
                    <h3>Нежитлові <span>Приміщення</span></h3>
                </div>
                <div class="priceing-table-main" >

                        <div class="col-md-6 price-grid">
                            <div class="price-block agile">
                                <div class="price-gd-top pric-clr3">
                                    <h4>Унція</h4>
                                    <h3>150,00 грн.</h3>
                                    <h5>місяць</h5>
                                </div>
                                <div class="price-gd-bottom">
                                    <div class="price-list">
                                        <ul>
                                            <li><span>Безлімітний</span> Трафік</li>
                                            <li><span>Інтернет до 50 Мбіт / сек</span></li>
                                            <li><span>Підключення </span> від 200 грн.</li>
                                            <li class="text"><span>24/7</span> Цілодобова Підтримка</li>
                                        </ul>
                                    </div>
                                    <div class="price-selet pric-sclr3">
                                        <a href="/contact">Підключити</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 price-grid">
                            <div class="price-block agile">
                                <div class="price-gd-top pric-clr4">
                                    <h4>Карат</h4>
                                    <h3>500,00 грн.</h3>
                                    <h5>місяць</h5>
                                </div>
                                <div class="price-gd-bottom">
                                    <div class="price-list">
                                        <ul>
                                            <li><span>Безлімітний</span> Трафік</li>
                                            <li><span>Інтернет до 100 Мбіт / сек</span></li>
                                            <li><span>Підключення </span> від 200 грн.</li>
                                            <li class="text"><span>24/7</span> Цілодобова Підтримка</li>
                                        </ul>
                                    </div>
                                    <div class="price-selet pric-sclr4">
                                        <a href="/contact">Підключити</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

        </div>
    </div>

@endsection