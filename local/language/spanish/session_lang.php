<?php

$lang['session.sessions'] = 'Sesiones';
$lang['session.all_sessions'] = 'Todas las sesiones';
$lang['session.weeks'] = 'Semanas';
$lang['session.update'] = 'Actualizar';
$lang['session.schedules'] = 'Horarios de salas';
$lang['session.holidays'] = 'Vacaciones';
$lang['session.session'] = 'Sesión';
$lang['session.add.action'] = 'Crear sesión';
$lang['session.add.title'] = 'Crear sesión';
$lang['session.edit.title'] = 'Actualizar sesión';
$lang['session.no_items'] = 'No se encontraron sesiones.';

$lang['session.error.no_timetable_weeks'] = 'Por favor, añada al menos una semana de horario.';
$lang['session.error.no_week_selected'] = 'No se seleccionó ninguna semana.';

$lang['session.field.name'] = 'Nombre';
$lang['session.field.is_selectable'] = 'Seleccionable por el usuario';
$lang['session.field.is_selectable.hint'] = "Permite a los usuarios ver y hacer reservas en esta sesión aunque no sea la actual.";
$lang['session.field.default_schedule_id'] = 'Horario predeterminado';
$lang['session.field.date_start'] = 'Fecha de inicio';
$lang['session.field.date_end'] = 'Fecha de fin';
$lang['session.field.available'] = 'Disponible';
$lang['session.field.is_current'] = 'Actual';

$lang['session.create.success'] = "La sesión %s ha sido creada.";
$lang['session.create.error'] = 'Se produjo un error al crear la sesión.';
$lang['session.update.success'] = 'La sesión %s ha sido actualizada.';
$lang['session.update.error'] = 'Se produjo un error al actualizar la sesión.';
$lang['session.delete.success'] = 'La sesión %s ha sido eliminada.';
$lang['session.delete.title'] = 'Eliminar sesión: %s';

$lang['session.save_weeks.success'] = "Las semanas de la sesión han sido actualizadas.";
$lang['session.save_weeks.error'] = "Se produjo un error al actualizar las semanas de la sesión.";
$lang['session.bulk_week.success'] = "%s ha sido aplicado a todas las semanas de la sesión.";
$lang['session.bulk_week.no_week_selected'] = "No se seleccionó ninguna semana.";

$lang['session.delete.warning'] = 'Todas las reservas y vacaciones de esta sesión también serán eliminadas de forma permanente.';

$lang['session.validation.date_check'] = 'El campo {field} (%s) ya forma parte de una sesión existente (%s).';

$lang['session.list.current_and_future'] = 'Sesiones actuales y futuras';
$lang['session.list.past'] = 'Sesiones pasadas';


$lang['session.help.session.text'] = "Cada sesión suele durar todo el año escolar. Establezca aquí las fechas de inicio y fin de la sesión.";


$lang['session.help.date_format'] = "Formato de fecha";
$lang['session.help.date_format.text'] = "Use el formato DD/MM/AAAA al ingresar fechas. Por ejemplo, 16/04/2026.";

$lang['session.help.changing_dates'] = 'Cambiar fechas';
$lang['session.help.changing_dates.text'] = "Si cambia la fecha de inicio o fin después de que se hayan realizado reservas durante la sesión, las reservas existentes <em>fuera del nuevo rango de fechas</em> serán eliminadas.";

$lang['session.help.default_schedule'] = 'Horario predeterminado';
$lang['session.help.default_schedule.text'] = "Cada grupo de salas en la sesión puede funcionar con un horario diferente. Especifique aquí un horario predeterminado que se aplicará a los grupos de salas existentes o a los nuevos grupos de salas que cree. Puede cambiar el horario de cada grupo más adelante.";


$lang['session.weeks.intro'] = 'Haga clic en las fechas de cada calendario para alternar la semana de horario de esa semana.';


$lang['session.room_schedules'] = 'Horarios de salas';
$lang['session.room_schedules.no_groups'] = 'No se encontraron grupos de salas.';

$lang['session.room_schedules.help.intro'] = "Especifique el horario que debe usar cada grupo de salas para esta sesión. El horario elegido para cada grupo se aplicará a todas las salas que contiene.";
$lang['session.room_schedules.help.change_warning'] = "Si cambia el horario de un grupo de salas, las reservas del horario anterior dejarán de ser accesibles.";
