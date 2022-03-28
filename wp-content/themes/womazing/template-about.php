<?php

/*
 * Template name: О продукте
 */
get_header();

global $womazingredux;
?>

<section class="about-title">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title">
                        <?php

                            echo $womazingredux["about-section-title"];

                        ?>
                        </h1>
                        <ul class="bread bread__one about-bread d-flex">
                            <li class="bread__item d-flex"><a href="index.html" class="bread__item_src">Главная</a></li>
                            <li><span class="bread__item_span">О бренде</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-description">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5">
                        <img src="<?php

                            echo $womazingredux["about-section-img1"]['url'];

                        ?>" class="about-img" alt="Картинка">
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <div class="mid">
                            <h3 class="mid__title">
                            <?php

                                echo $womazingredux["about-section-title1"];

                            ?>
                            </h3>
                            <p class="mid__text">
                            <?php

                                echo $womazingredux["about-section-desc1"];

                            ?>
                            </p>
                            <p class="mid__text">
                            <?php

                                echo $womazingredux["about-section-desc1a"];

                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mid">
                            <h3 class="mid__title">
                            <?php

                                echo $womazingredux["about-section-title2"];

                            ?>
                            </h3>
                            <p class="mid__text">
                            <?php

                                echo $womazingredux["about-section-desc2"];

                            ?>
                            </p>
                            <p class="mid__text">
                            <?php

                                echo $womazingredux["about-section-desc2a"];

                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1">
                        <img src="<?php

                            echo $womazingredux["about-section-img2"]['url'];

                        ?>" class="about-img" alt="Картинки">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="offer__btn">
                            <button class="btn offer__btn_open btn__about d-block mx-auto" type="button" href="shop.html">Открыть магазин</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
?>