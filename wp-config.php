<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'rafa2112');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '9rT7zRM$VR]@a!KERfDM02PQ_w<f#8$:K+Vb^1RbH*$_T:@BC8Pz?%ruOsPjR0z)');
define('SECURE_AUTH_KEY', '$O_BR}<v19P8h&*I4`|>1wReHcl| h,rhSI*^)Vo,Fxg;JiIVZyd-tNu0Dl)rJS&');
define('LOGGED_IN_KEY', 'A{MlVIikADWGn^@t8S/SJ[1NIf?ImZoYt$8ge?.%HP&RPGS[J@qi(0RX,BidE|}!');
define('NONCE_KEY', '25DI!8O`h?J-(RamDDqe{g{auP?^/R(EMrDpAfKtez}BpC:~</??<>><MYwc=Sh<');
define('AUTH_SALT', 'EUU-1wh>JK*QfyAN6j_9RQR0O7;[,|1,dYDvq&F<;2yQX&hgkFE206v{=z&Ocn9*');
define('SECURE_AUTH_SALT', '2]MU[@74f@{_J_Ow)./,>?);B.wBPn$C1=gq1V>jh/`uAORfuPF%zoA,g!2REy^?');
define('LOGGED_IN_SALT', 'M}#dTUomesXiB0aqhPY@p99Td9yM+}xtanRzw+PKdT22BHD_]oQ]t[ntU3Qo<}Z0');
define('NONCE_SALT', 'd,Qd5zd7Vb.y2.z;viG}JU_QYkKO.}sVw[+wNSbY(NyZE2.:4dG-` e%LAm .fW1');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cfa_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

