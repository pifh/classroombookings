<?php

$lang['exception.DateException.invalidDate'] = "No se seleccionó ninguna fecha o la fecha no es válida (%s).";
$lang['exception.DateException.forSessionRange'] = "La fecha seleccionada (%s) no está dentro de la Sesión actual.";


$lang['exception.AgentException.forInvalidType'] = "Tipo de reserva no reconocido. Debe ser uno de: %s";
$lang['exception.AgentException.forNoSession'] = 'La fecha solicitada no pertenece a ninguna sesión.';
$lang['exception.AgentException.forNoPeriod'] = 'No se pudo encontrar el período solicitado.';
$lang['exception.AgentException.forNoRoom'] = 'La sala solicitada no se encontró o no se puede reservar.';
$lang['exception.AgentException.forInvalidDate'] = 'La fecha solicitada no es reconocida o no se puede reservar.';
$lang['exception.AgentException.forNoWeek'] = 'La fecha solicitada no está asociada a ninguna semana de horario.';
$lang['exception.AgentException.forNoBooking'] = 'No se pudo encontrar la reserva solicitada.';
$lang['exception.AgentException.forAccessDenied'] = 'No tiene permiso para modificar la reserva solicitada.';

$lang['exception.AvailabilityException.forNoWeek'] = "La fecha seleccionada no está asignada a ninguna semana de horario.";
$lang['exception.AvailabilityException.forNoPeriods'] = "No hay períodos disponibles para la fecha seleccionada.";
$lang['exception.AvailabilityException.forHoliday.unknown'] = 'La fecha seleccionada cae en un período de vacaciones.';
$lang['exception.AvailabilityException.forHoliday'] = 'La fecha seleccionada cae en un período de vacaciones: %s: %s - %s';


$lang['exception.BookingValidationException.forExistingBooking'] = "Ya existe otra reserva.";
$lang['exception.BookingValidationException.forHoliday'] = "No se puede crear una reserva en un día de vacaciones.";

$lang['exception.SessionException.notSelected'] = "No se encontró ninguna Sesión activa.";


$lang['exception.SettingsException.forDisplayType'] = "El ajuste 'Tipo de visualización' no ha sido establecido.";
$lang['exception.SettingsException.forColumns'] = "El ajuste 'Columnas de visualización' no ha sido establecido.";
$lang['exception.SettingsException.forNoRooms'] = "No hay salas disponibles.";
$lang['exception.SettingsException.forNoSchedule'] = "Este grupo de salas no tiene un Horario configurado para esta sesión.";
