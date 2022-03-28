<?php

/*
 * Template name: Контакты
 */
get_header();

global $womazingredux;
?>

<section class="about-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title"><?=$womazingredux["contacts-section-title"];?></h1>
                        <ul class="bread bread__one about-bread d-flex">
                            <li class="bread__item d-flex"><a href="index.html" class="bread__item_src">Главная</a></li>
                            <li><span class="bread__item_span">Контакты</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="sizing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="map"> <?php echo do_shortcode('[wpgmza id="1"]'); ?></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="write">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="contact-phone">
                            <p class="contact-phone__title">Телефон</p>
                            <a href="<?=$womazingredux["contacts-section-phone-link"];?>" type="phone" class="contact-phone__number"><?=$womazingredux["contacts-section-phone-number"];?></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="contact-mail">
                            <p class="contact-mail__title">E-mail</p>
                            <a href="<?=$womazingredux["contacts-section-mail-link"];?>" class="contact-mail__adress"><?=$womazingredux["contacts-section-mail-name"];?></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1">
                        <div class="contact-adress">
                            <p class="contact-adress__title">Адрес</p>
                            <span class="contact-adress__span"><?=$womazingredux["contacts-section-adress"];?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fields">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-wrapper">
                            <h3 class="contact-title">Напишите нам</h3>
                            <form action="#" class="contact-form">
                                <input type="text" name="name" required placeholder="Имя" class="input d-block">
                                <input type="email" name="email" required placeholder="E-mail" class="input d-block">
                                <input type="tel" name="tel" required placeholder="Телефон" class="input d-block">
                                <textarea name="message" id="" required placeholder="Сообщение" class="contact-textarea d-block"></textarea>
                                <button class="offer__btn_open contact-btn d-block" data-submit="">Отправить</button>
                                <p class="message d-none">Сообщение успешно отправлено</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>     

<?php
get_footer();
?>