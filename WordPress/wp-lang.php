<?php 
/**
  * Динамическая настройка WPLANG на многоязычных веб-сайта.
  * Если у вас есть многоязычный веб-сайт и вам нужно, чтобы ваш веб-сайт изменил язык вашей темы и панели администрирования, вы можете сделать небольшой трюк, чтобы определить язык браузера посетителя и определить WPLANGконстанту на основе этой информации.
  * 
  * Затем в wp-config.phpфайле замените строку, где WPLANG определено, на строку ниже: require_once( dirname( __FILE__ ) . '/wp-lang.php' );
  * Сначала вам нужно создать wp-lang.phpфайл и заполнить его приведенным ниже кодом, затем сохранить его в той же директории wp-config.php, что и в:
  
*/

// start the session 
session_start(); 
 
// if there's a "lang" parameter in the URL...  
if( isset( $_GET[ 'lang' ] ) ) { 
 
    // ...set a session variable named WPLANG based on the URL parameter...     
    $_SESSION[ 'WPLANG' ] = $_GET[ 'lang' ]; 
 
    // ...and define the WPLANG constant with the WPLANG session variable 
    define( 'WPLANG', $_SESSION[ 'WPLANG' ] ); 
 
// if there isn't a "lang" parameter in the URL...  
} else {
 
    // if the WPLANG session variable is already set...
    if( isset( $_SESSION[ 'WPLANG' ] ) ) {
 
        // ...define the WPLANG constant with the WPLANG session variable 
        define( 'WPLANG', $_SESSION[ 'WPLANG' ] );  
 
    // if the WPLANG session variable isn't set...
    } else { 
         
        // set the WPLANG constant to your default language code is (or empty, if you don't need it)        
        define( 'WPLANG', 'tr_TR' ); 
             
    } 
} 
?>
