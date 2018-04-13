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
define('DB_NAME', 'wp-itstep');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd@C#2-8blY-<w=kLoW7DDId(jkM~+>[LQDbfea?)>-`<v%H%](u@1cPsLj`eo,1v');
define('SECURE_AUTH_KEY',  '8lq~Ex~q[e6c(?v4Uh)g=Mo,b,!uftPPKaG(~Y37T{ byD>mP<8:A]jAQ4{pryM}');
define('LOGGED_IN_KEY',    '}Cpp_(1H06RB$1uU}t|zQ/HDdG_m?lzzU2oQ,=({o$&MH07{4BIM]^rw$UTh=WG+');
define('NONCE_KEY',        'Cn}~7E&u?kcXTfm=;F@=W_WU1g84^c-6sy;q0<%gl|(@l}$R+z5msd94(y)D|D~*');
define('AUTH_SALT',        'g?Bsl`ZApGms+,;#LK(14E=Jb1om?j07gb<@0>kN?Ak`FaT4:l}*+5Doqx- ,g% ');
define('SECURE_AUTH_SALT', '&+#81S3_A%aaX8C2Ve5aR=vt$<pvkkydXLVe&(+=P,C7e5_9~0[@?ro?m^|Cc>6!');
define('LOGGED_IN_SALT',   'IIZ*z7P{O>q`EXpz6Vgj8)%q^L;AQ$3Q{(;Vg~e|J^Lpksd0mYa; ^g_,Mj~ju+!');
define('NONCE_SALT',       '+[[#,@C+&Tm&bcBZH(iW}i1S9IT5S^A@h|q( #^g)!{3s*/q6`hLUNeYIc1XC<Ml');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
