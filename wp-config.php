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
define( 'DB_NAME', 'wp2212' );

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
define( 'AUTH_KEY',         '{-F7Hd_+SOy/Z+d`G8$l8cs(y3Qn<EW0TNIoG,*<}J:*XJZW1Ds;3d {lgy2lmg&' );
define( 'SECURE_AUTH_KEY',  '0ga[rvAe|_|WW>Gm5p.B7Vnx)VN&QVFnzTNAA@>#$Uu|d2psHg_X8i]c[mL|E2;>' );
define( 'LOGGED_IN_KEY',    'BA#t<Ckj{^u~5lx|P q+.i8PpA!QWY]myy!BESy{-lN1$Pn}i>fLZ7^]KXp}1$%z' );
define( 'NONCE_KEY',        '3wc]#7w4/H{{vDQp]xm[ACT8$w;Dx6C:PSjRowd0V=17TZUD=$TA4kZ~!f/chzJ(' );
define( 'AUTH_SALT',        '$eAiO2h|fl|6b4NOcd+S}#-L!Vi=Cd;```qq8hY^&E^Mb|BMS*7FN<OuSBrs4|QF' );
define( 'SECURE_AUTH_SALT', 'Bcx})]&9gMfGQQ9s9YW,Y,QSC<2:l=$E 4@XoQvIYM4OqR0liu25s*ElGehL]+Vv' );
define( 'LOGGED_IN_SALT',   'NF0+;jM.>FwSEo~!P!;_Hfq;rMeCRCgoapev-YturapJ5_BFdbPF[1|9kK/B2Z8$' );
define( 'NONCE_SALT',       '0F_CK-9IhP+B3u^&Pze2<aq }vR5]hX^]ioXkl}Li)X{bco.1Bs|9.LPER608Zue' );

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
