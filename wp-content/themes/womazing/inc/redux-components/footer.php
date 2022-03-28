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
		'id'               => 'footer-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'footer-section-phone-number',
				'type'     => 'text',
				'title'    => esc_html__( 'Номер телефона', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите номер', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'footer-section-phone-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Номер через ссылку на который будет сам звонок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите ссылку при нажатии на номер телефона обязательно tel: вначале иначе не будет работать', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'       => 'footer-section-mail-name',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите почту', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'footer-section-mail-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта через ссылку на которую будет отпаравлено пиьсмо', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите ссылку при нажатии на почту обязательно mailto: вначале иначе не будет работать', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'           => 'footer-section-inst',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение инстаграм', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'footer-section-facebk',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение фэйс', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'footer-section-twitter',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение твиттер', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'footer-section-card',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение оплаты', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
	)
);
