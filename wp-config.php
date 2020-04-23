<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'store1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jI;[Oy96~*A>?L&W76%SUpBHeye{*nzYG8G16sBz}s_(@zR@-ys!Fop*k(SIu?m*' );
define( 'SECURE_AUTH_KEY',  'u5)[O_@~hY%=AE,v9oKH!gVA8$J9|e@Ot-@?>0J}#yfRd2~$YdFS&&{TfD?P*=z]' );
define( 'LOGGED_IN_KEY',    '|P3GG.zZj+$r=Z.x3wG 1 WTEgy26RG8BY/5D3,h7DBeZBEdiSJP C`5OjfM]9|/' );
define( 'NONCE_KEY',        '4:a*N#?MhIf{@Tzyx$]|1BbW~*)j0Me*B|#]2BKxd+lH~d TKS&F^g7O/OZw>c3S' );
define( 'AUTH_SALT',        'wxHrELel``(*me3QvR:-c8o:_}3nG8DNikZ8|K&W-N?hh4-;63R]q-~f&BtEMD)&' );
define( 'SECURE_AUTH_SALT', '`JYfZDesE_5;,klv.tMJnG7oQ[ZLW6:J2N#4hyHl7 U_9U+~Z)(skkjYWEnAvH*5' );
define( 'LOGGED_IN_SALT',   'SfwjoB_qkeR:B:0C3$w.[-H;_+mSPDeMRJjrMRDf>OoD(3:|CtO<jsqwzfqd(1>}' );
define( 'NONCE_SALT',       '@k1-5YR3P$TVZV}Ce=l:@Mt.~:c<^8A83,B,71 %hu* H,]4eOUW`H<w!:R7WQiY' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
