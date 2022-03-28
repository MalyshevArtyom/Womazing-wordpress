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
		'title'            => esc_html__( 'Нижняя секция', 'your-textdomain-here' ),
		'desc'     		   => esc_html__( 'Редактирование вехрней секции главной страницы', 'your-textdomain-here' ),
		'id'               => 'home-bottom-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-bottom-section-tittle',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок нижней секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-bottom-section-sliderl',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Левый слайд', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-bottom-section-sliderc',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Слайд центр', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-bottom-section-sliderr',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Правый слайд', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-bottom-section-item-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок нижней секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-bottom-section-item-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Заголовок нижней секции', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-bottom-section-item-descr',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Заголовок нижней секции если нужно поделить', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-bottom-section-item-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => '#',
			),
		),
	)
);
