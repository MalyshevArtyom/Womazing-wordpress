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
		'desc'     		   => esc_html__( 'Редактирование вехрней секции главной страницы', 'your-textdomain-here' ),
		'id'               => 'home-top-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-top-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для первого слайда', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-top-section-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание для первого слайда', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-top-section-arrow',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Стрелка', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-top-section-title1',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для второго слайда', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-top-section-desc1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание для второго слайда', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-top-section-arrow1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Стрелка', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-top-section-title2',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок для третьего слайда', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-top-section-desc2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание для третьего слайда', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-top-section-arrow2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Стрелка', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-top-section-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'           => 'home-top-section-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Большое изображение', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-top-section-img-smal',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Маленькое изображение', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-top-section-img-smal1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Маленькое изображение', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
	)
);
