<?php

$lang['booking.bookings'] = 'Reservas';
$lang['booking.booking'] = 'Reserva';
$lang['booking.bookings_in_series'] = 'Reservas en serie recurrente';
$lang['booking.details'] = 'Detalles de la reserva';
$lang['booking.and_others'] = 'y otros';		// para editar series: 'Fecha Mes Año (Semana de horario) (**y otros**)'

$lang['booking.slot'] = 'Franja';
$lang['booking.start'] = 'Inicio';
$lang['booking.end'] = 'Fin';
$lang['booking.book'] = 'Reservar';
$lang['booking.do_not_book'] = 'No reservar';

$lang['booking.booking_status'] = 'Estado de la reserva';
$lang['booking.active_bookings'] = 'Reservas activas';
$lang['booking.in_my_rooms'] = 'Reservas en mis salas';
$lang['booking.existing_booking'] = 'Reserva existente';
$lang['booking.recurs'] = 'Recurrente';
$lang['booking.recur_start'] = 'Inicio de recurrencia';
$lang['booking.recur_end'] = 'Fin de recurrencia';
$lang['booking.date_start'] = 'Fecha de inicio';
$lang['booking.date_end'] = 'Fecha de fin';
$lang['booking.create_booking'] = 'Crear reserva';
$lang['booking.create_bookings'] = 'Crear reservas';
$lang['booking.create_multiple_bookings'] = 'Crear múltiples reservas';
$lang['booking.no_conflicts'] = 'Sin conflictos';
$lang['booking.conflict'] = 'Conflicto';
$lang['booking.conflicts'] = 'Conflictos';

$lang['booking.action.replace'] = 'Reemplazar reserva existente';
$lang['booking.action.keep'] = 'Mantener reserva existente';

$lang['booking.conflict.one'] = 'Hay un conflicto de reserva para revisar.';
$lang['booking.conflict.multiple'] = 'Hay %d conflictos de reserva para revisar.';

$lang['booking.add.title'] = 'Crear nueva reserva';
$lang['booking.edit.title'] = 'Actualizar reserva';
$lang['booking.edit.action'] = 'Actualizar reserva';

$lang['booking.add.single.action'] = 'Crear reserva puntual';
$lang['booking.add.recurring.action'] = 'Crear reserva recurrente';
$lang['booking.recurring.repeat_description'] = 'Cada %s los %s';
$lang['booking.recurring.starting_from'] = 'A partir de...';
$lang['booking.recurring.until'] = 'Hasta...';
$lang['booking.recurring.start_of_session'] = 'Inicio de sesión';
$lang['booking.recurring.end_of_session'] = 'Fin de sesión';
$lang['booking.recurring.specific_date'] = 'Fecha específica';
$lang['booking.recurring.preview'] = 'Vista previa de reservas recurrentes';

$lang['booking.add.multi.single.action'] = 'Crear reservas puntuales seleccionadas';
$lang['booking.add.multi.recurring.action'] = 'Crear reservas recurrentes';


$lang['booking.selection.this_only'] = 'Solo esta reserva';
$lang['booking.selection.future'] = 'Esta y las reservas futuras de la serie';
$lang['booking.selection.all'] = 'Todas las reservas de la serie';

$lang['booking.edit.recurring.title'] = 'Actualizar reserva recurrente';
$lang['booking.edit.single.hint'] = 'Los cambios que realice a continuación se aplicarán solo a la reserva seleccionada.';
$lang['booking.edit.future.hint'] = 'Los cambios que realice a continuación se aplicarán a la reserva seleccionada y a todas las entradas futuras de la serie.';
$lang['booking.edit.all.hint'] = 'Los cambios que realice a continuación se aplicarán a todas las reservas de la serie.';

$lang['booking.cancel.recurring.title'] = 'Cancelar reserva recurrente';
$lang['booking.cancel.single.title'] = 'Cancelar reserva puntual';
$lang['booking.cancel.single.action'] = 'Sí, cancelar reserva';
$lang['booking.cancel.abort'] = 'No, mantenerla';

$lang['booking.action.cancel_booking'] = 'Cancelar reserva';
$lang['booking.action.cancel_bookings'] = 'Cancelar reservas';
$lang['booking.series.go_back'] = 'Volver a los detalles de la reserva';

$lang['booking.occurs'] = 'Ocurre';
$lang['booking.occurs.once'] = 'Una vez';
$lang['booking.booked_by'] = 'Reservado por';
$lang['booking.notes'] = "Notas";

$lang['booking.legend.legend'] = 'Leyenda';
$lang['booking.legend.free'] = 'Disponible';
$lang['booking.legend.static'] = 'Reserva recurrente';
$lang['booking.legend.staff'] = 'Reserva puntual';

$lang['booking.type_single'] = 'Puntual';
$lang['booking.type_recurring'] = 'Recurrente';

$lang['booking.warning.not_own'] = 'Esta no es su propia reserva.';

$lang['booking.error.not_found'] = 'No se pudieron encontrar los detalles de la reserva solicitada.';
$lang['booking.error.bad_type'] = 'Tipo de reserva no válido.';
$lang['booking.error.bad_form'] = 'Selección no válida.';
$lang['booking.error.not_cancelable'] = 'La reserva no puede ser cancelada.';
$lang['booking.error.bad_session'] = 'La sesión solicitada no está disponible.';
$lang['booking.error.no_permission_room_date'] = 'No tiene permiso para crear reservas en esta sala en esta fecha.';
$lang['booking.error.no_permission_room'] = 'No tiene permiso para crear reservas de ese tipo en esta sala.';
$lang['booking.error.no_slots_selected'] = "No seleccionó ninguna franja libre para reservar.";
$lang['booking.error.multibooking_create_error'] = "No se pudo crear la entrada de reserva múltiple.";
$lang['booking.error.some_invalid_values'] = 'Una o más reservas contienen valores no válidos. Por favor, verifique e inténtelo de nuevo.';
$lang['booking.error.none_created'] = 'No se han creado reservas.';
$lang['booking.error.generic'] = 'No se pudieron crear una o más reservas.';
$lang['booking.error.not_created'] = 'No se pudo crear la reserva solicitada.';
$lang['booking.error.must_select_fewer'] = 'Por favor, deseleccione algunas reservas para mantenerse dentro de su límite.';
$lang['booking.error.too_many_instances'] = 'Solo puede crear hasta %d eventos en su reserva recurrente. Deseleccione %d franjas para continuar.';
$lang['booking.error.no_recurring_dates'] = 'La sesión no tiene fechas disponibles para reservas recurrentes.';
$lang['booking.error.invalid_recurring_dates'] = 'La fecha de fin de recurrencia (%s) debe ser posterior a la fecha de inicio de %s.';
$lang['booking.error.no_dates'] = 'No hay fechas seleccionadas.';

$lang['booking.error.constraint.range_min_only'] = 'Las reservas puntuales deben realizarse con al menos %d días de antelación.';
$lang['booking.error.constraint.range_max_only'] = 'Las reservas puntuales solo pueden crearse con hasta %d días de antelación.';
$lang['booking.error.constraint.range_min'] = "Las reservas puntuales deben realizarse con al menos %d días de antelación.\nLa fecha de reserva más temprana es %s.";
$lang['booking.error.constraint.range_max'] = "Las reservas puntuales solo pueden crearse con hasta %d días de antelación.\nLa fecha de reserva más lejana es %s.";
$lang['booking.error.constraint.max_reached'] = 'Ha alcanzado el número máximo de reservas activas (%d). Espere hasta que su próxima reserva haya tenido lugar o cancele una reserva futura.';
$lang['booking.error.period_wrong_day'] = '%s no disponible el %s.';
$lang['booking.error.date_not_in_range'] = "Esta fecha no está dentro del rango de fechas permitido o está en el pasado.";

$lang['booking.success.created'] = 'La reserva ha sido creada.';
$lang['booking.success.created.multiple'] = 'Las reservas han sido creadas.';
$lang['booking.success.some_created'] = 'Se han creado %d reservas.';
$lang['booking.success.recurring.some_created'] = '%d reservas recurrentes han sido creadas con éxito.';

$lang['booking.warning.permitted_limit'] = 'El número máximo de reservas que puede crear es %d.';
$lang['booking.warning.permitted_limit_with_active'] = 'El número máximo de reservas que puede crear es %d. Su límite de reservas activas es %d y tiene %d reservas activas.';

$lang['booking.error.cancelling'] = 'Se produjo un error al cancelar la reserva.';

$lang['booking.notice.instances_to_create'] = 'Esta reserva recurrente creará %d instancias.';

$lang['booking.cancel.one.success'] = 'La reserva ha sido cancelada.';
$lang['booking.cancel.future.success'] = 'La reserva seleccionada y todas las ocurrencias futuras de la serie han sido canceladas.';
$lang['booking.cancel.all.success'] = 'Todas las reservas de la serie recurrente han sido canceladas.';
$lang['booking.cancel.invalid_type.error'] = 'Tipo de cancelación no válido.';

$lang['booking.cancel_multi.title'] = 'Cancelar múltiples reservas';
$lang['booking.cancel_multi.action'] = 'Cancelar reservas seleccionadas';
$lang['booking.cancel_multi.error.none_selected'] = 'No hay reservas seleccionadas para cancelar.';
$lang['booking.cancel_multi.number_cancelled'] = 'Se han cancelado %d reservas.';
$lang['booking.cancel_multi.none_cancelled'] = 'No se han cancelado reservas.';


$lang['booking.edit.one.success'] = 'La reserva ha sido actualizada.';
$lang['booking.edit.future.success'] = 'La reserva y todas las reservas futuras de la serie han sido actualizadas.';
$lang['booking.edit.all.success'] = 'Todas las reservas de la serie han sido actualizadas.';

$lang['booking.edit.error'] = 'No se pudo actualizar la reserva.';


$lang['booking.session.current'] = 'Actuales y futuras';
$lang['booking.session.past'] = 'Pasadas';

$lang['booking.nav.back'] = 'Atrás';
$lang['booking.nav.next'] = 'Siguiente';
$lang['booking.nav.week_prev'] = 'Semana anterior';
$lang['booking.nav.week_next'] = 'Semana siguiente';
$lang['booking.nav.week_commencing'] = 'Semana del %s';

$lang['booking.slot.unavailable_period'] = 'Período no disponible';
$lang['booking.toggle_multi_select'] = 'Activar selección múltiple';

$lang['booking.status.booked'] = 'Reservado';
$lang['booking.status.cancelled'] = 'Cancelado';
