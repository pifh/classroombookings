<?php

$lang['settings.settings'] = 'Ajustes';

$lang['settings.email'] = 'Correo electrónico';
$lang['settings.email.enabled'] = 'Activar';
$lang['settings.email.host'] = 'Servidor SMTP';
$lang['settings.email.port'] = 'Puerto SMTP';
$lang['settings.email.encryption'] = 'Cifrado';
$lang['settings.email.encryption.none'] = 'Ninguno';
$lang['settings.email.username'] = 'Usuario SMTP';
$lang['settings.email.password'] = 'Contraseña SMTP';
$lang['settings.email.from_email'] = 'Dirección de envío';
$lang['settings.email.from_name'] = 'Nombre de envío';
$lang['settings.email.save.success'] = 'La configuración de correo se ha actualizado.';
$lang['settings.email.test.title'] = 'Enviar un correo de prueba';
$lang['settings.email.test.hint'] = 'Guarda primero tu configuración y luego envía un correo de prueba para confirmar que funciona.';
$lang['settings.email.test.send_to'] = 'Enviar a';
$lang['settings.email.test.button'] = 'Enviar correo de prueba';
$lang['settings.email.test.body'] = 'Este es un correo de prueba de classroombookings. Si lo has recibido, tu configuración de correo funciona.';
$lang['settings.email.test.success'] = 'Correo de prueba enviado correctamente.';
$lang['settings.email.test.error'] = 'No se pudo enviar el correo de prueba. Revisa tu configuración y el registro de la aplicación.';

$lang['settings.board'] = 'Panel de disponibilidad';
$lang['settings.board.intro'] = 'Elige qué salas aparecen en el panel público "ahora / a continuación" (accesible sin iniciar sesión). Solo se muestran las salas ocupadas.';
$lang['settings.board.save.success'] = 'La configuración del panel se ha actualizado.';
$lang['settings.board.no_rooms'] = 'Todavía no se ha configurado ninguna sala.';

$lang['settings.general.bookings'] = 'Reservas';
$lang['settings.general.datetime'] = 'Fechas y horas';
$lang['settings.general.datetime.hint'] = 'Las fechas siguen el formato PHP';
$lang['settings.general.datetime.link'] = 'ver referencia';
$lang['settings.general.login_message'] = 'Mensaje de inicio de sesión';
$lang['settings.general.login_message.hint'] = 'Muestra un mensaje personalizado a los usuarios en la página de inicio de sesión.';
$lang['settings.general.maintenance_mode'] = 'Modo de mantenimiento';
$lang['settings.general.maintenance_mode.hint'] = 'Activar el modo de mantenimiento impide que las cuentas de usuario vean y realicen reservas, a menos que estén exentas a través de los permisos de su Rol. Todos los usuarios aún pueden iniciar sesión para hacer cambios en su propia cuenta o cambiar su contraseña.';
$lang['settings.general.experimental_features'] = 'Funciones experimentales';
$lang['settings.general.experimental_features.hint'] = 'Pruebe funciones nuevas y experimentales.';

$lang['settings.general.displaytype.label'] = 'Tipo de visualización';
$lang['settings.general.displaytype.hint'] = 'Especifique el enfoque principal y el modo de visualización de la página de reservas.';
$lang['settings.general.displaytype.day'] = 'Día';
$lang['settings.general.displaytype.day.hint'] = 'se muestran todos los períodos y salas para la fecha seleccionada.';
$lang['settings.general.displaytype.room'] = 'Sala';
$lang['settings.general.displaytype.room.hint'] = 'se muestran todos los períodos y días de la semana para la sala seleccionada.';

$lang['settings.general.columns.label'] = 'Columnas';
$lang['settings.general.columns.hint'] = 'Seleccione qué datos deben mostrarse horizontalmente en la parte superior de la página de reservas. La opción no seleccionada se mostrará verticalmente.';
$lang['settings.general.columns.days'] = 'Días';
$lang['settings.general.columns.periods'] = 'Períodos';
$lang['settings.general.columns.rooms'] = 'Salas';
$lang['settings.general.columns.error'] = 'La columna seleccionada es incompatible con el tipo de visualización.';

$lang['settings.general.grid_highlight.label'] = 'Resaltado de cuadrícula';
$lang['settings.general.grid_highlight.hint'] = 'Aplica un efecto de resaltado de color a las franjas enfocadas con el ratón en la cuadrícula de reservas.';

$lang['settings.general.timezone.label'] = 'Zona horaria';

$lang['settings.general.date_format_long.label'] = 'Formato de fecha largo';
$lang['settings.general.date_format_long.hint'] = 'Formato de fecha largo mostrado en la parte superior de la página de reservas.';

$lang['settings.general.date_format_weekday.label'] = 'Formato de fecha de día de la semana';
$lang['settings.general.date_format_weekday.hint'] = 'Formato de fecha corto para un día de la semana específico.';

$lang['settings.general.time_format_period.label'] = 'Formato de hora del período';
$lang['settings.general.time_format_period.hint'] = 'Formato de hora para los períodos.';

$lang['settings.general.login_message_text'] = 'Mensaje';

$lang['settings.general.maintenance_mode_message'] = 'Mensaje';
$lang['settings.general.maintenance_mode_message.hint'] = 'Este es el mensaje que se mostrará a los usuarios durante el modo de mantenimiento.';

$lang['settings.save.success'] = 'Los ajustes han sido actualizados.';
