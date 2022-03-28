<?php

/*
 * Template name: Товар
 */
get_header();

global $womazingredux;
?>

<section class="one-item-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title">Свитшот Sweet Shot</h1>
                        <ul class="bread bread__one bread__sale d-flex">
                            <li class="bread__item d-flex"><a href="index.html" class="bread__item_src">Главная</a></li>
                            <li class="bread__item d-flex"><a href="item.html" class="bread__item_src">Свитшоты</a></li>
                            <li><span class="bread__item_span">Свитшот Sweet Shot</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="one-item-card">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <div class="item-img"><img src="img/one item/item.jpg" class="item-img__photo" alt="товар"></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <form action="#" class="options">
                            <div class="price justify-content-center">
                                <span class="price__normal">$311</span>
                                <span class="price__sale"><S>$450</S></span>
                            </div>
                            <div class="size">
                                <h4 class="size__title">Выберите размер</h4>
                                <div class="size__buttons">
                                    <button type="button" class="size__buttons_item">S</button>
                                    <button type="button" class="size__buttons_item active">M</button>
                                    <button type="button" class="size__buttons_item">L</button>
                                    <button type="button" class="size__buttons_item">XL</button>
                                    <button type="button" class="size__buttons_item">XL</button>
                                </div>
                            </div>
                            <div class="color">
                                <h4 class="color__title">Выберите цвет</h4>
                                <div class="color__buttons">
                                    <button type="button" class="color__buttons_item1 round"></button>
                                    <button type="button" class="color__buttons_item2 round active"></button>
                                    <button type="button" class="color__buttons_item3 round"></button>
                                    <button type="button" class="color__buttons_item4 round"></button>
                                </div>
                            </div>
                            <div class="card">
                                <input type="number" class="card__input" value="1">
                                <button class="btn-item select-btn offer__btn_open" id="button" data-submit>Добавить в корзину</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="connected-items">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="connection-title">Связанные товары</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="item justify-content-center">
                            <div class="item__src">
                                <img src="img/collection-shirt.jpg" alt="shirt" class="item__src_img">
                                <a href="item.html" class="item__src_overlay"></a>
                            </div>
                            <span class="item__text">Футболка USA</span>
                            <span class="item__price">$129</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="item justify-content-center">
                            <div class="item__src">
                                <img src="img/collection-swimsuit.jpg" alt="shirt" class="item__src_img">
                                <a href="item.html" class="item__src_overlay"></a>
                            </div>
                            <span class="item__text">Купальник Glow</span>
                            <span class="item__price">$129</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
?>