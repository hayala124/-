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
 * * Настройки базы данных
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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'hayala567' );

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
define( 'AUTH_KEY',         'I!>FJjC&O,L&Kt9)lz2+UVZ}.lKxFXM, 8RMr*yLp}:m]Y3;X(M=oIbtnZj5WsOq' );
define( 'SECURE_AUTH_KEY',  'HQk$T6Ha()Ggkg@D@^J1,Nh%!X~J{FhKXEfr{wmzqL;7H*$9J(2+Pz+amlulZY|L' );
define( 'LOGGED_IN_KEY',    '?rJZnLePmI1-C .|+1r*EEpZ&Y@,^U_HOKcw|GOb1lxO6nuYB~F-Mo90lQ246cv-' );
define( 'NONCE_KEY',        'y+GXO(jY #XFK6I=(r?fv@PeDPDY3dPjq6~@Xr,6.E6Q25h~%[g-s.2alH)?^{`q' );
define( 'AUTH_SALT',        'Gc7_Ci?k0Q]D4~3|z;4g!$``/Y(g*5N?c;Ewvie/5SUJdpH{1wIBHIvyWR,7G*kV' );
define( 'SECURE_AUTH_SALT', '0Cj5_Og^oStSLp|MOzM(iUV$-9ll4Y|QUyq8KH<(*io`TM,cZP2{~?Ca[/GTP/a)' );
define( 'LOGGED_IN_SALT',   'CJveapMg7ziKS&B >LLnv r6=uHct1Y[xW|`9J0mF1`Z5ptqA]{o1@p0FcK,f/]N' );
define( 'NONCE_SALT',       'IHO!(N!/f/+FOwNkbWf;+hEE{OK6S=EWz#WNL?FN_<sAb>[n7Nywvlm+jg6QYME$' );

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
