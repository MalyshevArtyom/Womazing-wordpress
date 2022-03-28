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
		'id'               => 'contacts-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'contacts-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'contacts-section-phone-number',
				'type'     => 'text',
				'title'    => esc_html__( 'Номер телефона', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите номер', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'contacts-section-phone-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Номер через ссылку на который будет сам звонок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите ссылку при нажатии на номер телефона обязательно tel: вначале иначе не будет работать', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'       => 'contacts-section-mail-name',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите почту', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'contacts-section-mail-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта через ссылку на которую будет отпаравлено пиьсмо', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите ссылку при нажатии на почту обязательно mailto: вначале иначе не будет работать', 'your-textdomain-here' ),
				'default'  => '#',
			),
			array(
				'id'       => 'contacts-section-adress',
				'type'     => 'text',
				'title'    => esc_html__( 'Адрес магазина', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
