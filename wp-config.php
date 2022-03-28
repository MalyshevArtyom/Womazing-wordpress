<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'womazing' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':aE/hBp6`[ VrGZW>kWiAz0|NJ?e-nhGz(w~)%U9vz%U6$ge+*1XealDokgYvGK7' );
define( 'SECURE_AUTH_KEY',  '@.W,k- X$bha!ae.Gq5u:AyO]+P0B3[cwX/4+ESa~1z0l3!h_BJ]O$o]H2/lxQb4' );
define( 'LOGGED_IN_KEY',    'nehmroir-qZiD5zSyJ3}y`h/w82:1ncCDda@M~IEWwYNN%J%8fSg@V/31Ix>@G`8' );
define( 'NONCE_KEY',        'Us*M-V#w 2g`Peq/f 4MK6+HF;BY#g[7_*[)zaQ_&Yj0?mi()Grz%F%=U<.}=5uQ' );
define( 'AUTH_SALT',        'Lj7an(Yv??>|nQ^b!eDG:v/{_7ouM+jvBNf_jrl?B83o2}d8$s 5(s-3OIa3wb(f' );
define( 'SECURE_AUTH_SALT', '0|aXYmPm2#U!/d9W-PRY|4E#G&P17bAVia{`Y{K>SbVIV.~mPil&{K8u++!U@Ze$' );
define( 'LOGGED_IN_SALT',   'T$>5ALAN!#tDW/`:)[Yaanz5wonZFnDsU}ALbVc*]7p%[E*^Z^IKP7={(tR>uB)<' );
define( 'NONCE_SALT',       '^6dKP[+63@S?YdS}T7.!3ItDBR(C3E73S,2G]Zz1V;.,CA`fgE2) h.m7UF:Go`]' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
