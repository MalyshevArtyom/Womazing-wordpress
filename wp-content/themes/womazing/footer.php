<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */

global $womazingredux;
?>

</main>


<footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <div class="bottom__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo_ref bottom__logo"></a>
                    </div>
                    <div class="bottom__links text-align-start">
                        <span class="rights">
                            © Все права защищены
                        </span>
                        <div class="public">
                            <a href="#" class="public__link">
                                Политика конфиденциальности
                            </a>
                        </div>
                        <div class="public">
                            <a href="#" class="public__link">
                                Публичная оферта
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-5">
                    <nav class="main-menu bottom__menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'nav-menu' ) ); ?>
                    </nav>
                </div>
                <div class="col-6 col-lg-2 offset-lg-2 ">
                    <div class="right-links">
                        <a href="<?=$womazingredux ["footer-section-phone-link"];?>" type="phone" class="right-links__phone d-flex justify-content-end"><?=$womazingredux ["footer-section-phone-number"];?></a>
                        <a href="<?=$womazingredux ["footer-section-mail-link"];?>" class="right-links__email d-flex justify-content-end"> <?=$womazingredux ["footer-section-mail-name"];?></a>
                        <div class="right-links__social d-flex justify-content-end">
                            <a href="#" class="right-links__soical_inst d-block"><img src="<?=$womazingredux ["footer-section-inst"]['url'];?>" alt="instagram"></a>
                            <a href="#" class="right-links__soical_facebk d-block"><img src="<?=$womazingredux ["footer-section-facebk"]['url'];?>" alt="facebook"></a>
                            <a href="#" class="right-links__soical_twit d-block"><img src="<?=$womazingredux ["footer-section-twitter"]['url'];?>" alt="twitter"></a>
                        </div>
                        <div class="right-links__card d-flex justify-content-end">
                            <img src="<?=$womazingredux ["footer-section-card"]['url'];?>" alt="card" class="right-links__card">    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>