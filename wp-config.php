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
define('DB_NAME', 'wp-incopro');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'l%UkLyNZ=kpmY`1|NMGyE|%X>9 5Q fQI3lArd.rqREK3?*bzZ)9myK.2R///h>]');
define('SECURE_AUTH_KEY', ' ;>1_!cb#@(hz4fh*?#RW*TO/&+&(h+eF~Rv_`U~bL&3KhA#yg`p9!O2Vo d*r9j');
define('LOGGED_IN_KEY', 'EfIu)h2==zj>!{WnG~K[fqG]`j@%F6vE|2*U8ZHxyM2lbQaO7*nx!l sc<]*5-=2');
define('NONCE_KEY', '>rxrT~sMP.>p^nH!TRAU]YBTrIl;:BH.=gO[tQjgz?x,:_:tuB[,:Trdu(e=ywZ@');
define('AUTH_SALT', 'nMMt6xvy|a_N7fQq`/DYCP+ot_3]61`o?K9z23|Gp2!#{OqL:B*mok`kTM2WF9~#');
define('SECURE_AUTH_SALT', 'X-|(UFGH}.u>Pg/Fh=(;Oc:i^hm}6]ZLnpX{)|DKlId,9X6fojaP@LKH%#Gfg9[y');
define('LOGGED_IN_SALT', 'l3=73|p^O+!X7:wV#_@rA>dsn`d7Hu`;7.,;@LCE5UK0P0mBK6ig7)T(=Fpwu4>I');
define('NONCE_SALT', '4Ulch~&j;8sI0{/V`^OcN>@p r1cZ|%7VStoRD`Fue0<OVIC|iDwlSHe>Y!688M(');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

