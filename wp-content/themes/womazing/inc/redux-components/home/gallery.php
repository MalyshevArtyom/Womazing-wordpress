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
		'title'            => esc_html__( 'Новая коллекция', 'your-textdomain-here' ),
		'id'               => 'home-gallery',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-gallery-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-gallery-imgl',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение слева', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-gallery-imgc',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение центр', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-gallery-imgr',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение справа', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-gallery-item-titlel',
				'type'     => 'text',
				'title'    => esc_html__( 'Название товара слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-gallery-item-pricel',
				'type'     => 'text',
				'title'    => esc_html__( 'Цена товара слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-gallery-item-linkl',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на товара слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите Ссылку', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'       => 'home-gallery-item-titleс',
				'type'     => 'text',
				'title'    => esc_html__( 'Название товара центр ', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-gallery-item-pricec',
				'type'     => 'text',
				'title'    => esc_html__( 'Цена товара слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-gallery-item-linkc',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на товара центр', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите Ссылку', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'       => 'home-gallery-item-titler',
				'type'     => 'text',
				'title'    => esc_html__( 'Название товара справа', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-gallery-item-pricer',
				'type'     => 'text',
				'title'    => esc_html__( 'Цена товара слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-gallery-item-linkr',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на товара справа', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите Ссылку', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'       => 'home-top-section-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => '#',
			),
		),
	)
);
