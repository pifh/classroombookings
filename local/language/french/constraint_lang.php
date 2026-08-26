<?php

$lang['constraint.constraints'] = 'Contraintes';

$lang['constraint.user.hint.1'] = 'Les contraintes de réservation vous permettent de contrôler le nombre de réservations actives que les utilisateurs peuvent avoir, la plage de dates dans laquelle des réservations ponctuelles peuvent être créées et le nombre d\'occurrences dans une série récurrente.';
$lang['constraint.user.hint.2'] = 'Les utilisateurs peuvent hériter d\'une contrainte de leur rôle ou l\'avoir configurée au niveau de l\'utilisateur.';
$lang['constraint.user.hint.3'] = 'Si l\'utilisateur n\'a pas de rôle, la valeur héritée sera la même que si elle n\'était pas définie.';

$lang['constraint.type.R'] = 'Hériter du rôle (non configuré)';
$lang['constraint.type.X'] = 'Non défini';
$lang['constraint.type.U'] = 'Autre...';
$lang['constraint.user.inherit_role_hint'] = 'Hériter du rôle (%s : %s)';

$lang['constraint.max_active_bookings.short'] = 'Réservations actives max.';
$lang['constraint.max_active_bookings'] = 'Nombre maximal de réservations ponctuelles actives';
$lang['constraint.max_active_bookings.hint'] = 'Nombre maximal de réservations actives qu’un utilisateur peut avoir simultanément.';

$lang['constraint.range_min'] = 'Délai minimal en jours pour les réservations ponctuelles';
$lang['constraint.range_min.hint'] = "Nombre minimal de jours requis entre le jour de création de la réservation et la date de la réservation.";

$lang['constraint.range_max'] = 'Nombre maximal de jours à l’avance pour les réservations ponctuelles';
$lang['constraint.range_max.hint'] = "Nombre maximal de jours dans le futur pour lesquels une réservation peut être effectuée.";

$lang['constraint.recur_max_instances'] = 'Nombre maximal d’occurrences pour les réservations récurrentes';
$lang['constraint.recur_max_instances.hint'] = 'Nombre maximal d’occurrences pouvant être créées dans une série de réservations récurrentes.';
