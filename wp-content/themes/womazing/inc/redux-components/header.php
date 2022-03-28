<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Верхняя секция', 'your-textdomain-here' ),
		'desc'     		   => esc_html__( 'Редактирование вехрней секции', 'your-textdomain-here' ),
		'id'               => 'header-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			// array(
			// 	'id'       => 'header-section-logo-link',
			// 	'type'     => 'text',
			// 	'title'    => esc_html__( 'Ссылка на лого', 'your-textdomain-here' ),
			// 	'desc'     => esc_html__( 'Введите ссылку при нажатии на лого', 'your-textdomain-here' ),
			// 	'default'  => '#',
			// ),
			array(
				'id'           => 'header-section-phone-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение телефона', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'header-section-phone-number',
				'type'     => 'text',
				'title'    => esc_html__( 'Номер телефона', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите номер', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'header-section-phone-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Номер через ссылку на который будет сам звонок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите ссылку при нажатии на номер телефона обязательно tel: вначале иначе не будет работать', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'           => 'header-section-bag-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение корзины', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'header-section-hamburger-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение гамбургера', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
	)
);
