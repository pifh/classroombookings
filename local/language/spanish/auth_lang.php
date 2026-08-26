<?php

$lang['auth.log_in'] = 'Iniciar sesión';
$lang['auth.log_out'] = 'Cerrar sesión';

$lang['auth.bad_credentials'] = 'Nombre de usuario y/o contraseña incorrectos.';
$lang['auth.login_required'] = 'Debe iniciar sesión para acceder a esa página.';
$lang['auth.permission_required'] = 'No tiene los permisos necesarios para acceder a esa página.';

$lang['auth.forgot.link'] = '¿Olvidaste tu contraseña?';
$lang['auth.forgot.title'] = 'Contraseña olvidada';
$lang['auth.forgot.intro'] = 'Introduce tu usuario y, si existe una cuenta con una dirección de correo asociada, te enviaremos un enlace para restablecer tu contraseña.';
$lang['auth.forgot.submit'] = 'Enviar enlace';
$lang['auth.forgot.success'] = 'Si existe una cuenta con ese usuario, se ha enviado un enlace de restablecimiento a la dirección de correo asociada.';

$lang['auth.reset.title'] = 'Restablecer contraseña';
$lang['auth.reset.intro'] = 'Elige una nueva contraseña para tu cuenta.';
$lang['auth.reset.submit'] = 'Establecer nueva contraseña';
$lang['auth.reset.success'] = 'Tu contraseña ha sido actualizada. Ya puedes iniciar sesión.';
$lang['auth.reset.invalid_token'] = 'Este enlace de restablecimiento no es válido o ha caducado. Solicita uno nuevo.';

$lang['auth.authentication'] = 'Autenticación';
$lang['auth.ldap.ldap'] = 'LDAP';
$lang['auth.ldap.connection'] = 'Conexión';
$lang['auth.ldap.search'] = 'Búsqueda';
$lang['auth.ldap.user_attribute_mapping'] = 'Mapeo de atributos de usuario';
$lang['auth.ldap.user_assignments'] = 'Asignaciones predeterminadas de usuario';

$lang['auth.ldap.user_attribute_mapping.hint.1'] = 'Cuando utiliza un filtro de búsqueda para encontrar al usuario autenticador, puede rellenar los siguientes datos de usuario de classroombookings con atributos encontrados en LDAP cada vez que inicien sesión.';
$lang['auth.ldap.user_attribute_mapping.hint.2'] = 'Combine varios atributos LDAP añadiendo dos puntos antes del nombre del atributo, por ejemplo - ';
$lang['auth.ldap.user_attribute_mapping.hint.3'] = 'Deje estos campos en blanco para deshabilitar el relleno automático.';

$lang['auth.ldap.demo_notice'] = "En el modo de demostración, la función de verificación y la posibilidad de habilitar la autenticación LDAP están desactivadas para evitar bloqueos de cuenta y proteger contra el abuso.";

$lang['auth.ldap.field.ldap_enabled'] = 'Activar';
$lang['auth.ldap.field.ldap_enabled.title'] = 'Usar LDAP para autenticar usuarios.';

$lang['auth.ldap.field.ldap_create_users'] = 'Crear usuarios';
$lang['auth.ldap.field.ldap_create_users.title'] = 'Crear cuentas de usuario automáticamente en una autenticación exitosa.';
$lang['auth.ldap.field.ldap_create_users.hint.1'] = 'Cuando está activado, cualquier credencial válida devuelta por un intento de autenticación LDAP creará automáticamente una cuenta de classroombookings con el Rol y/o Departamento especificados a continuación.';
$lang['auth.ldap.field.ldap_create_users.hint.2'] = 'Cuando no está activado, solo los usuarios que tengan una cuenta existente en classroombookings serán autenticados.';

$lang['auth.ldap.field.ldap_server'] = 'Servidor';
$lang['auth.ldap.field.ldap_server.hint'] = 'Nombre de host o dirección IP.';

$lang['auth.ldap.field.ldap_port'] = 'Puerto';
$lang['auth.ldap.field.ldap_port.hint'] = 'Los puertos estándar son 389 (sin SSL) o 636 (SSL).';

$lang['auth.ldap.field.ldap_version'] = 'Versión del protocolo';
$lang['auth.ldap.field.ldap_version.hint'] = 'Normalmente 3.';

$lang['auth.ldap.field.ldap_use_tls'] = 'Usar TLS';
$lang['auth.ldap.field.ldap_ignore_cert'] = 'Ignorar certificado';
$lang['auth.ldap.field.ldap_bind_dn_format'] = 'Formato Bind DN';
$lang['auth.ldap.field.ldap_bind_dn_format.hint'] = 'Esto variará dependiendo de su servidor y configuración. La etiqueta `:user` será reemplazada por el usuario autenticador. Algunos formatos comunes son:';

$lang['auth.ldap.field.ldap_base_dn'] = 'DN base';
$lang['auth.ldap.field.ldap_search_filter'] = 'Filtro de búsqueda';
$lang['auth.ldap.field.ldap_search_filter.hint'] = 'La etiqueta `:user` será reemplazada por el usuario que inicia sesión.';

$lang['auth.ldap.test.title'] = 'Verificar configuración';
$lang['auth.ldap.test.hint.1'] = "Configure los ajustes de la izquierda y luego proporcione un nombre de usuario y contraseña en este cuadro para verificar el acceso. No es necesario hacer clic en Guardar antes de verificar la configuración aquí.";
$lang['auth.ldap.test.hint.2'] = "Estas credenciales se pasan directamente al servidor LDAP que ha especificado y classroombookings nunca las almacena.";
$lang['auth.ldap.test.verify'] = "Verificar credenciales";
$lang['auth.ldap.test.verifying'] = "Probando conexión";

$lang['auth.ldap.test.bind_dn'] = 'Bind DN';
$lang['auth.ldap.test.search_filter'] = 'Filtro de búsqueda';
$lang['auth.ldap.test.auth_success'] = '¡Autenticación exitosa!';

$lang['auth.ldap.save.success'] = 'La configuración LDAP ha sido actualizada.';

$lang['auth.ldap.error.demo_mode'] = 'Función desactivada en el modo de demostración.';
$lang['auth.ldap.error.no_module'] = 'El módulo PHP LDAP no está instalado o habilitado.';
$lang['auth.ldap.error.no_server_or_port'] = 'No se proporcionó servidor y/o puerto.';
$lang['auth.ldap.error.no_socket_connection'] = 'Error de conexión o tiempo de espera agotado.';
$lang['auth.ldap.error.invalid_ldap_uri'] = 'URI de conexión LDAP no válida.';
$lang['auth.ldap.error.no_username_or_password'] = 'No se proporcionó nombre de usuario y/o contraseña.';
$lang['auth.ldap.error.bind_error'] = 'Error de enlace LDAP o nombre de usuario y/o contraseña incorrectos.';
$lang['auth.ldap.error.search_error'] = 'Error de búsqueda LDAP.';
$lang['auth.ldap.error.search_num_results_error'] = 'La búsqueda LDAP no devolvió exactamente un resultado.';
$lang['auth.ldap.error.search_get_entry_error'] = 'Error al obtener la entrada de resultado de búsqueda LDAP.';
$lang['auth.ldap.error.search_get_attributes_error'] = 'Error al obtener los atributos de usuario LDAP.';
