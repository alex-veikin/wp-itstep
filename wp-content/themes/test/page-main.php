<?php

/**
 * Template name: Главная
 */

get_header(); ?>
<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo get_template_directory_uri() ?>/images/slide-1.jpg" alt="">
                            <div class="carousel-caption">
                                <h3>ООО МеталлСтрой СИК</h3>
                                <p>Строительство и собственное производство металлоконструкций</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/slide-1.jpg" alt="">
                            <div class="carousel-caption">
                                <h3>ООО МеталлСтрой СИК</h3>
                                <p>Строительство и собственное производство металлоконструкций</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/slide-1.jpg" alt="">
                            <div class="carousel-caption">
                                <h3>ООО МеталлСтрой СИК</h3>
                                <p>Строительство и собственное производство металлоконструкций</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ( count( ot_get_option( 'services' ) ) ) : ?>
    <section id="services">
        <div class="container">
            <div class="row">
                <h2>Наши Услуги</h2>
				<?php foreach ( ot_get_option( 'services' ) as $service ) : ?>
                    <div class="col-md-4">
                        <div class="services-block metall" style="background-image: url(<?php echo $service['service_image'] ?>);">
                            <div class="services-desc">
                                <h4><?php echo $service['title'] ?></h4>
								<?php echo $service['service'] ?>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<section id="about-company">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="company-contacts">
                    <h4>Контакты</h4>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+375 (232) 21-41-14
                        <span>+375 (232) 21-41-14</span></p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:matall.stroy@mail.ru">matall.stroy@mail.ru</a>
                    </p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>г. Гомель, ул. Могилёвская, 29</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>Пн - Пт: с 8:00 до
                        18:00<span>Сб - Вс: выходной</span>
                    </p>
                </div>
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="company-info">
                    <h3>О компании</h3>
                    <p>ООО «МеталлСтрой СиК» работает на рынке Республики Беларусь и на рынке Российской Федерации с
                        2009 года. Предприятие зарегистрировано Гомельским городским исполнительным комитетом, 29
                        апреля 2009г., с регистрационным номером № 490656178.</p>
                    <p>Руководитель юридического лица: Директор Титовец Сергей Петрович.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="edges">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="edges-info">
                    <h3>Основными видами деятельности является:</h3>
                    <ul>
                        <li><b>Строительство</b> (модернизация, реконструкция, капитальный и текущийремонты);</li>
                        <li><b>Собственное производство металлоконструкций</b> (изготовление металлоконструкций
                            любой сложности для строительства крупных объектов и для потребностей населения,
                            разработка чертежей КМД);
                        </li>
                        <li><b>Оказание услуг транспортом и спецтехникой</b> (автокраны, тягачи, экскаваторы,
                            погрузчики, самосвалы);
                        </li>
                        <li><b>Изготовление продукции для контактной сети железных дорог</b> (Электрификация
                            железных дорог - изготовление металлоконструкций)
                        </li>
                        <li><b>На сегодняшний момент</b> предприятие располагает достаточными
                            производственными и людскими ресурсами для осуществления намеченных целей.
                        </li>
                        <li>На предприятии работает - <b>93 сотрудника</b>.</li>
                        <li>В собственности предприятия <b>технически оснащенная производственная база - 6700
                                м2.</b></li>
                        <li><b>Результат работы</b> предприятия удовлетворяет пожелания Заказчика по качеству и
                            срокам.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="edges-img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/edges-image.jpg" alt=""
                         class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sert">
    <div class="container">
        <div class="row sertifikat-block">
            <div class="col-md-4">
                <div class="slide-sert">
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo get_template_directory_uri() ?>/images/sert-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/sert-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/sert-1.jpg" alt="">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="" href="#carousel-example" data-slide="prev">
                            <span class="prev-sert"></span>
                        </a>
                        <a class="" href="#carousel-example" data-slide="next">
                            <span class="next-sert"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="desc-sert">
                    <h3>На предприятии основаны, сертифицированы и декларированы:</h3>
                    <ul>
                        <li><b>Система контроля качества - на базе СТБ ISO 9001-2009 </b>(Сертификат соответствия
                            BY/112 05.01. 102. 04352).
                        </li>
                        <li><b>Система управления охраны труда </b>- на базе
                            требований СТБ 18001-2009 /b>(Сертификат соответствия BY/112 05.04. 102. 01434).
                        </li>
                        <li><b>Серийный выпуск металлоконструкций (продукции)</b>-
                            декларирован, сертифицирован РБ собственного
                            производства, сертифицированный по международным стандартам ISO 9001:2008
                        </li>
                        <li><b>Строительно-монтажные работы </b>(реконструкция,
                            модернизация, новое строительство, капитальный ремонт) – сертифицированы РБ,
                            сертифицированы по международным стандартам ISO 9001:2008.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row progress-block">
            <div class="col-md-4">
                <div class="slide-progress">
                    <div id="carousel-progress" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo get_template_directory_uri() ?>/images/sert-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/sert-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri() ?>/images/sert-1.jpg" alt="">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="" href="#carousel-progress" data-slide="prev">
                            <span class="prev-sert"></span>
                        </a>
                        <a class="" href="#carousel-progress" data-slide="next">
                            <span class="next-sert"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="desc-progress">
                    <h3>Достижения:</h3>
                    <ul>
                        <li><b>В 2013 году</b> предприятие удостоено и отмечено за достигнутые показатели Гомельским
                            областным исполнительным комитетом - <b>Дипломом «Лучший предприниматель года в
                                номинации производство промышленных товаров»</b> по Гомельской области.
                        </li>
                        <li><b>В 2014 году</b> предприятие удостоено и отмечено за достигнутые показатели Гомельским
                            областным исполнительным комитетом - <b>Дипломом «Лучший предприниматель года в
                                номинации организатор новых рабочих мест.</b></li>
                        <li><b>В 2015 году </b>предприятие удостоено и отмечено за достигнутые показатели Гомельским
                            областным исполнительным комитетом – <b>Благодарностью «За активную жизненную позицию,
                                развитие промышленного производства, создание новых рабочих мест и формирование
                                социально-ответственного бизнеса».</b></li>
                        <li><b>В 2013 году</b> предприятие выиграло <b>тендер по электрификации Белорусской железной
                                дороги и стало известным в Республике Беларусь, как одно из частных предприятий
                                Республики,</b> которое сотрудничает с Китайской Компанией в области электрификация
                            железных дорог - изготовление металлоконструкций, что подтверждено ГОССТАНДАРТОМ.
                        </li>
                        <li><b>В 2016 году</b> предприятие выиграло<b>тендер на строительство каркаса здания
                                торгово-выставочного центра «Китайско-Белорусского коммерческого логистического
                                парка первой очереди».</b> Количество изготовленных и смонтированных
                            металлоконструкций составляет 3850 тонн, работы были выполнены всего за 3,5 месяца.
                            Торгово-выставочный центр определен как объект республиканского значения.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="customers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Наши заказчики</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="our-customers">
                            <p>Китайская компания «КУЭК СтройТорг», Китайская компания КООО «КОРПОРАЦИЯ СЮАНЬ ЮАНЬ»,
                                ОАО «Гомельпромстрой», ОАО «Беларусбанк», Гомельское РУП «Фармация», ОАО «Према»,
                                РУП «Гомсельмаш», РУП «ГЗЛиН», ОАО «Гомельдрев», ОАО «ГЗСУ», РУП «Гомельский ЛВЗ»,
                                ОАО «Гомельская птицефабрика», Национальный Аэропорт «Минск-2», ОАО «Белинвестплаза»
                                и др.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselOne" class="owl-carousel">
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-1.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-2.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-3.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-4.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-5.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-6.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-7.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-8.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-9.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-10.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-1.png"
                                      alt=""></div>
                            <div><img src="<?php echo get_template_directory_uri() ?>/images/partners/partner-2.png"
                                      alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
