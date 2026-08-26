<?php

$lang['constraint.constraints'] = 'Restricciones';

$lang['constraint.user.hint.1'] = 'Las restricciones de reserva le permiten controlar el número de reservas activas que pueden tener los usuarios, el rango de fechas en que se pueden crear reservas puntuales y el número de eventos en una serie recurrente.';
$lang['constraint.user.hint.2'] = 'Los usuarios pueden heredar una restricción de su Rol o tenerla configurada a nivel de usuario.';
$lang['constraint.user.hint.3'] = 'Si el usuario no tiene un Rol, el valor heredado será el mismo que si no estuviera establecido.';

$lang['constraint.type.R'] = 'Heredar del Rol (no configurado)';
$lang['constraint.type.X'] = 'No establecido';
$lang['constraint.type.U'] = 'Otro...';
$lang['constraint.user.inherit_role_hint'] = 'Heredar del Rol (%s: %s)';

$lang['constraint.max_active_bookings.short'] = 'Máx. reservas activas';
$lang['constraint.max_active_bookings'] = 'Número máximo de reservas puntuales activas';
$lang['constraint.max_active_bookings.hint'] = 'Número máximo de reservas activas que un usuario puede tener al mismo tiempo.';

$lang['constraint.range_min'] = 'Días mínimos de antelación para reservas puntuales';
$lang['constraint.range_min.hint'] = "El número mínimo de días requerido entre el día en que se crea la reserva y la fecha de la reserva.";

$lang['constraint.range_max'] = 'Máximo de días de antelación para reservas puntuales';
$lang['constraint.range_max.hint'] = "El número máximo de días en el futuro que puede tener una reserva.";

$lang['constraint.recur_max_instances'] = 'Número máximo de ocurrencias para reservas recurrentes';
$lang['constraint.recur_max_instances.hint'] = 'El número máximo de ocurrencias que se pueden crear como parte de una serie de reservas recurrentes.';
