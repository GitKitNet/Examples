<?php
// #### Begin #### //
// ## Really Simple SSL ##//
// ##session cookie settings## //
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
// ### END ### //
// ### Really Simple SSL ### //

/*
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

//  Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера //

// Имя базы данных для WordPress
define('DB_NAME', '');

// Имя пользователя MySQL
define('DB_USER', '');

// Пароль к базе данных MySQL
define('DB_PASSWORD', '');

// Имя сервера MySQL */
define('DB_HOST', 'localhost');

// Кодировка базы данных для создания таблиц.
define('DB_CHARSET', 'utf8mb4');

// Схема сопоставления. Не меняйте, если не уверены.
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
define('AUTH_KEY',         'SECRETKEY');
define('SECURE_AUTH_KEY',  'SECRETKEY');
define('LOGGED_IN_KEY',    'SECRETKEY');
define('NONCE_KEY',        'SECRETKEY');
define('AUTH_SALT',        'SECRETKEY');
define('SECURE_AUTH_SALT', 'SECRETKEY');
define('LOGGED_IN_SALT',   'SECRETKEY');
define('NONCE_SALT',       'SECRETKEY');

/**#@-*/

/
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'prefix_';

/
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

// ================================ //
//          РЕЖИМ ОТЛАДКИ.          //
//      Вывода ОШИБОК и предупр.    //
// ================================ //

//define('WP_ALLOW_REPAIR', true);        // автом. ремонт БД
//define('SCRIPT_DEBUG', true);           // Используйте dev-версии основных файлов JS и CSS (необходимо только в случае изменения этих основных файлов)
//define('wp_maintenance_mode', true);    // режим ТЕХНИЧЕСКИЕ РАБОТЫ
define('SAVEQUERIES', true);              // MySQL-запросы отслеживаются и отображаются
define('WP_DEBUG', true);                 // Режим отладки и вывода ОШИБОК
if ( WP_DEBUG ) {
   define('WP_DEBUG_LOG', true);            // Enable Debug logging to the /wp-content/debug.log file
   define('WP_DEBUG_DISPLAY', false);
   @ini_set( 'display_errors', 0);
}

/* БЕЗОПАСНОСТЬ*/
define('FORCE_SSL', true);                //  на сайт по протоколу https
define('FORCE_SSL_LOGIN', true);          //  Вход на сайт по протоколу https
define('FORCE_SSL_ADMIN', true);          //  Вход в админку сайта по протоколу https
//define('WP_CACHE', true);               //  Кеш

/*Скорость: */
//define('WP_POST_REVISIONS', false);       // Отключите сохраненные версии... Сейчас!
//define('COOKIE_DOMAIN', 'domen.com');     // Установите домен Cookie
//define('FS_METHOD', 'direct');           // Измените метод файловой системы

// ---------    Другое:
//define ('WPLANG', 'ru_RU');            // Альтернатива для Руского я зыка строчка ниже =>
//if (strpos($_SERVER['REQUEST_URI'], 'wp-admin')) else define ('WPLANG', 'ru_RU_lite');
//define( 'WP_DEFAULT_THEME', 'default-theme-folder-name' );
define( 'MEDIA_TRASH', true );
//require_once( dirname( __FILE__ ) . '/wp-lang.php' );      // нужно создать wp-lang.php в директории wp-config.php

define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );
define('AUTOMATIC_UPDATER_DISABLED', true);    // Откл. установку обновление.
define('DISALLOW_FILE_EDIT', true);      // Откл. редактирование файлов плагина и темы.
define('DISALLOW_FILE_MODS',true);      // Откл. установку новых тем и плагинов,и обновление.
define('AUTOSAVE_INTERVAL', 240);        // Изменение интервала автосохранения
define('WP_ALLOW_MULTISITE', true);       // Включите Мультисайт
define('WP_MEMORY_LIMIT', '256M');         // try with 400M if 256M not working.
define('WP_MAX_MEMORY_LIMIT', '400M');
set_time_limit(90);
define('ALLOW_UNFILTERED_UPLOADS', true);        // "mu-plugins/MIME-checking.php"

/* Другое: *///
define('RELOCATE',true);

// еренесите WP на домен ил поддомен


////////////////////////////////////////////////////////////////
// ===========================END===========================  //
////////////////////////////////////////////////////////////////

/* Это всё, дальше не редактируем. Успехов! */
/ Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/ Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
