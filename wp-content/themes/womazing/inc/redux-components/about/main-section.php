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
		'title'            => esc_html__( 'Основная секция', 'your-textdomain-here' ),
		'desc'     		   => esc_html__( 'Редактирование основной секции страницы О бренде', 'your-textdomain-here' ),
		'id'               => 'about-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'about-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Название', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'about-section-img1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Картинка слева', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'about-section-title1',
				'type'     => 'text',
				'title'    => esc_html__( 'Название справа', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-section-desc1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст справа', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-section-desc1a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст справа', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'about-section-img2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Картинка справа', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'about-section-title2',
				'type'     => 'text',
				'title'    => esc_html__( 'Название слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-section-desc2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-section-desc2a',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст слева', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
