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
		'title'            => esc_html__( 'Что для нас важно', 'your-textdomain-here' ),
		'id'               => 'home-important',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-important-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-important-item-imgl',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение слева', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-important-item-titlel',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для левой секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-important-item-descl',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст для левой секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-important-item-imgc',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение центр', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-important-item-titlec',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для центр секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-important-item-descc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание для центр секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-important-item-imgr',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение справа', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-important-item-titler',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для секции справа', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-important-item-descr',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание для правой секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
