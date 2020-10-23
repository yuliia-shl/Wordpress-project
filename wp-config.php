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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f}/7Zv0Op%p9S9T 8D%V;^fOb&~>owu0w<X]0Guj+@mRFo>U*WK&Oru3LLEj7)mL' );
define( 'SECURE_AUTH_KEY',  'O>!*(0Gm00k2XXxf2VB-DkIC&SyQ|%:N;N$0gf;wRkMd^p~un$!]>ror_9-LDV:v' );
define( 'LOGGED_IN_KEY',    'E+H-jhc/EYG(0?NOsP;y?t9,(Dk8.F7Ba~v5DaR/D{evnb-96yTj-;.-1J2_k=`s' );
define( 'NONCE_KEY',        'Dn*v:yyKvRU@G05D)Vjg6gN}w#1#$M^:.r73zd%P33?J}m+qXLq&k*wl~C-h@2{Q' );
define( 'AUTH_SALT',        'o:HE8$94n8kuD:%xv3sajp:t|RW>7F-~F7T1RYNL#oL{J4M(%lw3#iRI7oVOn[n-' );
define( 'SECURE_AUTH_SALT', '}>;)[,JO[81; 7$kdELL5{pd&N<uBox%g9N(suLgYwmtlUk1]!Gyq46?{cdpCszv' );
define( 'LOGGED_IN_SALT',   '>r.Ul:qYh7cU`dQ$L7#NH6;L%6*w >@>+go{GzyLxgVJB4}yzV+9LVVL05><Iexc' );
define( 'NONCE_SALT',       'WGc.=MDh(AkPHtn/TQ_PWD)u2/:qkti(yPif~h_jn9_9i?oKxW~~R,[qHyrT/k_[' );

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
