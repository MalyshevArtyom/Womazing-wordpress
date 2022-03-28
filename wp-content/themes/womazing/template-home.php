<?php

/*
 * Template name: Главная страница
 */
get_header();

global $womazingredux;

?>

        <section class="news">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="slider">
                            <div class="offer">
                                <h1 class="offer__name">
                                    <?php

                                        echo $womazingredux["home-top-section-title"];

                                    ?>
                                </h1>
                                <p class="offer__text">
                                <?php

                                    echo $womazingredux["home-top-section-desc"];

                                ?>
                                </p>
                                <div class="offer__btn d-flex">
                                    <a href="#anchor" class="offer__btn_next-section"><img src="
                                    <?php

echo $womazingredux["home-top-section-arrow"]['url'];

?>
                                    " alt="arrow_button" class="offer__btn_next-section-img"></a>
                                    <button href="
                                    <?php

                                        echo $womazingredux["home-top-section-link"];

                                    ?>
                                    " class="btn offer__btn_open" type="button">Открыть магазин</button>
                                </div>
                            </div>
                            <div class="offer">
                                <h1 class="offer__name">
                                    <?php

                                        echo $womazingredux["home-top-section-title1"];

                                    ?>
                                </h1>
                                <p class="offer__text">
                                <?php

                                    echo $womazingredux["home-top-section-desc1"];

                                ?>
                                </p>
                                <div class="offer__btn d-flex">
                                    <a href="#anchor" class="offer__btn_next-section"><img src="
                                    <?php

echo $womazingredux["home-top-section-arrow1"]['url'];

?>
                                    " alt="arrow_button" class="offer__btn_next-section-img"></a>
                                    <button class="btn offer__btn_open" type="button" href="shop.html">Открыть магазин</button>
                                </div>
                            </div>
                            <div class="offer">
                                <h1 class="offer__name">
                                <?php

                                    echo $womazingredux["home-top-section-title2"];

                                ?>
                                </h1>
                                <p class="offer__text">
                                <?php

                                    echo $womazingredux["home-top-section-desc2"];

                                ?>
                                </p>
                                <div class="offer__btn d-flex">
                                    <a href="#anchor" class="offer__btn_next-section"><img src="
                                    <?php

echo $womazingredux["home-top-section-arrow2"]['url'];

?>" alt="arrow_button" class="offer__btn_next-section-img"></a>
                                    <button class="btn offer__btn_open" type="button" href="shop.html">Открыть магазин</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="photos d-none d-lg-block">
                            <div class="photos__main">
                                <img src=" 
                                    <?php

                                        echo $womazingredux["home-top-section-img"]['url'];

                                    ?>
                                " alt="main-photo" class="photos__main-img m-right">
                            </div>
                            <div class="photos__other d-none d-lg-block">
                                <img src="
                                    <?php

                                        echo $womazingredux["home-top-section-img-smal"]['url'];

                                    ?>
                                " alt="other photo" class="photos__other_face">
                                <img src="
                                <?php

                                    echo $womazingredux["home-top-section-img-smal1"]['url'];

                                ?>
                                " alt="other photo" class="photos__other_front">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="collection" id="anchor">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <h2 class="clothes-tittle">
                    <?=$womazingredux["home-gallery-title"];?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="item justify-content-center">
                        <div class="item__src">
                            <img src="<?=$womazingredux["home-gallery-imgl"]['url'];  ?>" alt="shirt" class="item__src_img">
                            <a href="<?=$womazingredux["home-gallery-item-linkl"];?>" class="item__src_overlay"></a>
                        </div>
                        <span class="item__text"><?=$womazingredux["home-gallery-item-titlel"];?></span>
                        <span class="item__price"><s class="item__price_delete">$229</s> <?=$womazingredux["home-gallery-item-pricel"];?></span>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="item justify-content-center">
                        <div class="item__src">
                            <img src="<?=$womazingredux["home-gallery-imgc"]['url'];  ?>" alt="shirt" class="item__src_img">
                            <a href="<?=$womazingredux["home-gallery-item-linkc"];?>" class="item__src_overlay"></a>
                        </div>
                        <span class="item__text"><?=$womazingredux["home-gallery-item-titleс"];?></span>
                        <span class="item__price"><?=$womazingredux["home-gallery-item-pricec"];?></span>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="item justify-content-center">
                        <div class="item__src">
                            <img src="<?=$womazingredux["home-gallery-imgr"]['url'];  ?>" alt="shirt" class="item__src_img">
                            <a href="<?=$womazingredux["home-gallery-item-linkr"];?>" class="item__src_overlay"></a>
                        </div>
                        <span class="item__text"><?=$womazingredux["home-gallery-item-titler"];?></span>
                        <span class="item__price"><?=$womazingredux["home-gallery-item-pricer"];?></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="shop justify-content-center">
                        <button href="<?=$womazingredux["home-top-section-link"];?>" class="btn shop__button">
                        Открыть магазин
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="important">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h2 class="description__title">
                    <?=$womazingredux["home-important-title"];?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="quality">
                        <img src="<?=$womazingredux["home-important-item-imgl"]['url'];?>" alt="quality" class="quality__img">
                        <h3 class="quality__title">
                        <?=$womazingredux["home-important-item-titlel"];?>
                        </h3>
                        <p class="quality__text">
                        <?=$womazingredux["home-important-item-descl"];?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="quality">
                        <img src="<?=$womazingredux["home-important-item-imgl"]['url'];?>" alt="quality" class="quality__img">
                        <h3 class="quality__title">
                        <?=$womazingredux["home-important-item-titlec"];?>
                        </h3>
                        <p class="quality__text">
                        <?=$womazingredux["home-important-item-descc"];?>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="quality">
                        <img src="<?=$womazingredux["home-important-item-imgl"]['url'];?>" alt="quality" class="quality__img">
                        <h3 class="quality__title">
                        <?=$womazingredux["home-important-item-titler"];?>
                        </h3>
                        <p class="quality__text">
                        <?=$womazingredux["home-important-item-descr"];?>
                        </p>
                    </div>
                </div>            
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="club__title">
                        <h2 class="club__title_h">
                        <?=$womazingredux["home-bottom-section-tittle"];?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="club__slider">
                        <img src="<?=$womazingredux["home-bottom-section-sliderl"]['url'];?>" alt="">
                        <img src="<?=$womazingredux["home-bottom-section-sliderc"]['url'];?>" alt="">
                        <img src="<?=$womazingredux["home-bottom-section-sliderr"]['url'];?>" alt="">
                    </div>
                </div>
                <div class="col-lg-3 offset-1 ">
                    <div class="about">
                        <h3 class="about__title">
                        <?=$womazingredux["home-bottom-section-item-title"];?>
                        </h3>
                        <p class="about__text text1">
                        <?=$womazingredux["home-bottom-section-item-desc"];?>
                        </p>
                        <p class="about__text">
                        <?=$womazingredux["home-bottom-section-item-descr"];?>
                        </p>
                        <a href="<?=$womazingredux["home-bottom-section-item-link"];?>" class="about__src">Подробнее о бренде</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>