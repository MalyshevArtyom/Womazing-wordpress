<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */

 global $womazingredux;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body>
    <header class="header main-up">
        <div class="container">
            <section class="navigation" id="upper">
                <div class="row justify-content-lg-between"> 
                    <div class="col-5 col-md-3 col-lg-2">
                        <div class="logo m-left">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo_ref"></a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 d-flex mr-auto">
                        <nav class="main-menu">
                        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
                    'container' => 'ul',
                    'menu_class' => 'menu__nav d-lg-flex justify-content-center',
				)
			);
			?>
                        </nav>
                    </div> 
                    <div class="col-5 col-lg-3 offset-lg-1">
                        <div class="info d-flex">
                            <div class="adress d-flex text-align-end">
                                <div class="adress__phone">
                                    <button class="adress__phone_call" id="myBtn"> <img src="<?=$womazingredux ["header-section-phone-img"]['url'];?>" alt="Phone-call"></button>
                                </div>
                                <div class="adress__phone_number">
                                    <a href="<?=$womazingredux ["header-section-phone-link"];?>"><?=$womazingredux ["header-section-phone-number"];?></a>
                                </div>
                            </div>
                            <div class="bag d-flex justify-content-end">
                                <a href="cart.html" class="bag-ref">
                                    <img src="<?=$womazingredux ["header-section-bag-img"]['url'];?>" alt="bag-button">
                                </a>
                                <span class="bag-span d-none">3</span>
                            </div>
                        </div>
                    </div>
                    <!-- hamburger -->
                    <div class="col-1 d-lg-none">
                        <div class="mobile__menu">
                            <div class="hamburger">
                                <img src="<?=$womazingredux ["header-section-hamburger-img"]['url'];?>" alt="Menu" role="button">
                            </div>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                        <span class="close">&times;</span>
                            <form action="#" class="form-book" id="popupResult">
                                <h3 class="form-book__title">Заказать обратный звонок</h3>
                                <input type="text" class="form-book__input" placeholder="Name" name="fullName">
                                <input type="text" class="form-book__input" placeholder="Email" name="allEmail">
                                <input type="text" class="form-book__input" placeholder="Phone" name="phoneNumber">
                                <button class="btn select-btn offer__btn_open" id="button1" data-submit>Заказать звонок</button>
                            </form>
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div id="myModala" class="modal">
                        <!-- Modal content -->
                        <div class="modal-contenta">
                            <span id="spana" class="close">&times;</span>
                            <h3 class="modal-contenta-title">Отлично! Мы скоро вам перезвоним.</h3>
                            <button class="btn modal-contenta__button offer__btn_open" id="" data-submit>Закрыть</button>
                        </div>
                    </div>
                </div>
            </section>
           
    </header>
<main>
