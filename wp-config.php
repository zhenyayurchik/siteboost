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
define( 'DB_NAME', 'siteboost' );

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
define( 'AUTH_KEY',         'xzyqJZSDK_#27BeoI5|U?aT/U],8[5xQ^g``CAvNFcrA:xP<;d0O8{~Ihb#Kd6xZ' );
define( 'SECURE_AUTH_KEY',  'x/Sk:c%_qLA).01|obea<?{?ea%1QKh5#_rrmErKpgFv.Jd*52fC<N,m>C/V aaw' );
define( 'LOGGED_IN_KEY',    'gjODj~NQJ;w!8&K7:ILG&a$iNfa}Lko0!y)Gpb]}3ut1&L&Av `wFN)R_X^|:A;C' );
define( 'NONCE_KEY',        'tx`TfY4;fHySU=oE7BSs<b:DZtQBz^{9c3)Aj`5vL!T%/3Jq=^_yD~0W,oe(6_Ec' );
define( 'AUTH_SALT',        'j#Mp_Ra6}(Bvug8rAn6}O/nv8R(X8Zm0hC!,YMYt#b>hxbJkAt~rc)PZctM:o;14' );
define( 'SECURE_AUTH_SALT', 's*7RmWjm15>*H~QY[Qcr$gYdiYSD{MCFIw#8:T]HGG7[P}ps^Xp>I|7W}&<X%u7H' );
define( 'LOGGED_IN_SALT',   '7OW>=_|,sb%!yIe8qyLF3H-66{p^s,m7)M/<L F)RzddTVb0w$M,0D G->G++n#h' );
define( 'NONCE_SALT',       '/Zr(zL4Lry VV:GA%H,eKip*$I%UH{X||mP7KRD;tu.|RV$[s_SvdAC#]~2HYm1+' );

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
