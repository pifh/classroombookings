<?php

$lang['booking.bookings'] = 'Réservations';
$lang['booking.booking'] = 'Réservation';
$lang['booking.bookings_in_series'] = 'Réservations dans la série récurrente';
$lang['booking.details'] = 'Détails de la réservation';
$lang['booking.and_others'] = 'et autres';		// for editing series: 'Date Month Year (Timetable Week) (**and others**)'

$lang['booking.slot'] = 'Créneau';
$lang['booking.start'] = 'Début';
$lang['booking.end'] = 'Fin';
$lang['booking.book'] = 'Réserver';
$lang['booking.do_not_book'] = 'Ne pas réserver';

$lang['booking.booking_status'] = 'Statut de la réservation';
$lang['booking.active_bookings'] = 'Réservations actives';
$lang['booking.in_my_rooms'] = 'Réservations dans mes salles';
$lang['booking.existing_booking'] = 'Réservation existante';
$lang['booking.recurs'] = 'Se répète';
$lang['booking.recur_start'] = 'Début de la récurrence';
$lang['booking.recur_end'] = 'Fin de la récurrence';
$lang['booking.date_start'] = 'Date de début';
$lang['booking.date_end'] = 'Date de fin';
$lang['booking.create_booking'] = 'Créer une réservation';
$lang['booking.create_bookings'] = 'Créer des réservations';
$lang['booking.create_multiple_bookings'] = 'Créer une réservation multiple';
$lang['booking.no_conflicts'] = 'Aucun conflit';
$lang['booking.conflict'] = 'Conflit';
$lang['booking.conflicts'] = 'Conflits';

$lang['booking.action.replace'] = 'Remplacer la réservation existante';
$lang['booking.action.keep'] = 'Conserver la réservation existante';

$lang['booking.conflict.one'] = 'Il y a un conflit de réservation à examiner.';
$lang['booking.conflict.multiple'] = 'Il y a %d conflits de réservation à examiner.';

$lang['booking.add.title'] = 'Créer une nouvelle réservation';
$lang['booking.edit.title'] = 'Mettre à jour la réservation';
$lang['booking.edit.action'] = 'Mettre à jour la réservation';

$lang['booking.add.single.action'] = 'Créer une réservation ponctuelle';
$lang['booking.add.recurring.action'] = 'Créer une réservation récurrente';
$lang['booking.recurring.repeat_description'] = 'Chaque %s le %s';
$lang['booking.recurring.starting_from'] = 'À partir de...';
$lang['booking.recurring.until'] = 'Jusqu\'à...';
$lang['booking.recurring.start_of_session'] = 'Début de la session';
$lang['booking.recurring.end_of_session'] = 'Fin de la session';
$lang['booking.recurring.specific_date'] = 'Date précise';
$lang['booking.recurring.preview'] = 'Aperçu des réservations récurrentes';

$lang['booking.add.multi.single.action'] = 'Créer les réservations ponctuelles sélectionnées';
$lang['booking.add.multi.recurring.action'] = 'Créer des réservations récurrentes';


$lang['booking.selection.this_only'] = 'Cette réservation uniquement';
$lang['booking.selection.future'] = 'Cette réservation et les suivantes de la série';
$lang['booking.selection.all'] = 'Toutes les réservations de la série';

$lang['booking.edit.recurring.title'] = 'Mettre à jour la réservation récurrente';
$lang['booking.edit.single.hint'] = 'Les modifications que vous effectuez ci-dessous s\'appliqueront uniquement à la réservation sélectionnée.';
$lang['booking.edit.future.hint'] = 'Les modifications que vous effectuez ci-dessous s\'appliqueront à la réservation sélectionnée ainsi qu\'à toutes les occurrences futures de la série.';
$lang['booking.edit.all.hint'] = 'Les modifications que vous effectuez ci-dessous s\'appliqueront à toutes les réservations de la série.';

$lang['booking.cancel.recurring.title'] = 'Annuler la réservation récurrente';
$lang['booking.cancel.single.title'] = 'Annuler la réservation ponctuelle';
$lang['booking.cancel.single.action'] = 'Oui, annuler la réservation';
$lang['booking.cancel.abort'] = 'Non, la conserver';

$lang['booking.action.cancel_booking'] = 'Annuler la réservation';
$lang['booking.action.cancel_bookings'] = 'Annuler les réservations';
$lang['booking.series.go_back'] = 'Retour aux détails de la réservation';

$lang['booking.occurs'] = 'A lieu';
$lang['booking.occurs.once'] = 'Une fois';
$lang['booking.booked_by'] = 'Réservé par';
$lang['booking.notes'] = "Notes";

$lang['booking.legend.legend'] = 'Légende';
$lang['booking.legend.free'] = 'Disponible';
$lang['booking.legend.static'] = 'Réservation récurrente';
$lang['booking.legend.staff'] = 'Réservation ponctuelle';

$lang['booking.type_single'] = 'Ponctuelle';
$lang['booking.type_recurring'] = 'Récurrente';

$lang['booking.warning.not_own'] = 'Ce n\'est pas votre propre réservation.';

$lang['booking.error.not_found'] = 'Impossible de trouver les détails de la réservation demandée.';
$lang['booking.error.bad_type'] = 'Type de réservation invalide.';
$lang['booking.error.bad_form'] = 'Sélection invalide.';
$lang['booking.error.not_cancelable'] = 'La réservation ne peut pas être annulée.';
$lang['booking.error.bad_session'] = 'La session demandée n\'est pas disponible.';
$lang['booking.error.no_permission_room_date'] = 'Vous n\'avez pas l\'autorisation de créer des réservations dans cette salle à cette date.';
$lang['booking.error.no_permission_room'] = 'Vous n\'avez pas l\'autorisation de créer des réservations de ce type dans cette salle.';
$lang['booking.error.no_slots_selected'] = "Vous n'avez sélectionné aucun créneau libre à réserver.";
$lang['booking.error.multibooking_create_error'] = "Impossible de créer l'entrée de réservation multiple.";
$lang['booking.error.some_invalid_values'] = 'Une ou plusieurs réservations contiennent des valeurs invalides. Veuillez vérifier et réessayer.';
$lang['booking.error.none_created'] = 'Aucune réservation n\'a été créée.';
$lang['booking.error.generic'] = 'Impossible de créer une ou plusieurs réservations.';
$lang['booking.error.not_created'] = 'Impossible de créer la réservation demandée.';
$lang['booking.error.must_select_fewer'] = 'Veuillez désélectionner certaines réservations pour rester dans votre limite.';
$lang['booking.error.too_many_instances'] = 'Vous pouvez créer au maximum %d occurrences dans votre réservation récurrente. Désélectionnez %d créneaux pour continuer.';
$lang['booking.error.no_recurring_dates'] = 'La session ne comporte aucune date disponible permettant des réservations récurrentes.';
$lang['booking.error.invalid_recurring_dates'] = 'La date de fin de la récurrence (%s) doit être postérieure à la date de début %s.';
$lang['booking.error.no_dates'] = 'Aucune date sélectionnée.';

$lang['booking.error.constraint.range_min_only'] = 'Les réservations ponctuelles doivent être effectuées au moins %d jours à l\'avance.';
$lang['booking.error.constraint.range_max_only'] = 'Les réservations ponctuelles ne peuvent être créées que jusqu\'à %d jours à l\'avance.';
$lang['booking.error.constraint.range_min'] = "Les réservations ponctuelles doivent être effectuées au moins %d jours à l’avance.\\nLa première date possible de réservation est %s.";
$lang['booking.error.constraint.range_max'] = "Les réservations ponctuelles ne peuvent être créées que jusqu’à %d jours à l’avance.\\nLa date de réservation la plus éloignée est %s.";
$lang['booking.error.constraint.max_reached'] = 'Vous avez atteint le nombre maximum de réservations actives (%d). Attendez que votre prochaine réservation ait eu lieu ou annulez une réservation future.';
$lang['booking.error.period_wrong_day'] = '%s n’est pas disponible le %s.';
$lang['booking.error.date_not_in_range'] = "Cette date n’est pas comprise dans la plage autorisée ou se situe dans le passé.";

$lang['booking.success.created'] = 'La réservation a été créée.';
$lang['booking.success.created.multiple'] = 'Les réservations ont été créées.';
$lang['booking.success.some_created'] = '%d réservations ont été créées.';
$lang['booking.success.recurring.some_created'] = '%d réservations récurrentes ont été créées avec succès.';

$lang['booking.warning.permitted_limit'] = 'Le nombre maximal de réservations que vous pouvez créer est de %d.';
$lang['booking.warning.permitted_limit_with_active'] = 'Le nombre maximal de réservations que vous pouvez créer est de %d. Votre limite de réservations actives est de %d et vous avez %d réservations actives.';

$lang['booking.error.cancelling'] = 'Une erreur s\'est produite lors de l\'annulation de la réservation.';

$lang['booking.notice.instances_to_create'] = 'Cette réservation récurrente créera %d occurrences.';

$lang['booking.cancel.one.success'] = 'La réservation a été annulée.';
$lang['booking.cancel.future.success'] = 'La réservation sélectionnée et toutes les occurrences futures de la série ont été annulées.';
$lang['booking.cancel.all.success'] = 'Toutes les réservations de la série récurrente ont été annulées.';
$lang['booking.cancel.invalid_type.error'] = 'Type d\'annulation invalide.';

$lang['booking.cancel_multi.title'] = 'Annuler plusieurs réservations';
$lang['booking.cancel_multi.action'] = 'Annuler les réservations sélectionnées';
$lang['booking.cancel_multi.error.none_selected'] = 'Aucune réservation sélectionnée pour annulation.';
$lang['booking.cancel_multi.number_cancelled'] = '%d réservations ont été annulées.';
$lang['booking.cancel_multi.none_cancelled'] = 'Aucune réservation n\'a été annulée.';


$lang['booking.edit.one.success'] = 'La réservation a été mise à jour.';
$lang['booking.edit.future.success'] = 'La réservation ainsi que toutes les réservations futures de la série ont été mises à jour.';
$lang['booking.edit.all.success'] = 'Toutes les réservations de la série ont été mises à jour.';

$lang['booking.edit.error'] = 'Impossible de mettre à jour la réservation.';


$lang['booking.session.current'] = 'Actuelles et futures';
$lang['booking.session.past'] = 'Passées';

$lang['booking.nav.back'] = 'Retour';
$lang['booking.nav.next'] = 'Suivant';
$lang['booking.nav.week_prev'] = 'Semaine précédente';
$lang['booking.nav.week_next'] = 'Semaine suivante';
$lang['booking.nav.week_commencing'] = 'Semaine commençant le %s';

$lang['booking.slot.unavailable_period'] = 'Créneau non disponible';
$lang['booking.toggle_multi_select'] = 'Activer/désactiver la sélection multiple';

$lang['booking.status.booked'] = 'Réservé';
$lang['booking.status.cancelled'] = 'Annulée';
