<?php

$lang['session.sessions'] = 'Sessions';
$lang['session.all_sessions'] = 'Toutes les sessions';
$lang['session.weeks'] = 'Semaines';
$lang['session.update'] = 'Mettre à jour';
$lang['session.schedules'] = 'Emplois du temps des salles';
$lang['session.holidays'] = 'Vacances';
$lang['session.session'] = 'Session';
$lang['session.add.action'] = 'Créer une session';
$lang['session.add.title'] = 'Créer une session';
$lang['session.edit.title'] = 'Mettre à jour la session';
$lang['session.no_items'] = 'Aucune session trouvée.';

$lang['session.error.no_timetable_weeks'] = 'Veuillez ajouter au moins une semaine d\'emploi du temps.';
$lang['session.error.no_week_selected'] = 'Aucune semaine sélectionnée.';

$lang['session.field.name'] = 'Nom';
$lang['session.field.is_selectable'] = 'Sélectionnable par l\'utilisateur';
$lang['session.field.is_selectable.hint'] = "Autoriser les utilisateurs à consulter et à effectuer des réservations dans cette session même si ce n'est pas la session actuelle.";
$lang['session.field.default_schedule_id'] = 'Emploi du temps par défaut';
$lang['session.field.date_start'] = 'Date de début';
$lang['session.field.date_end'] = 'Date de fin';
$lang['session.field.available'] = 'Disponible';
$lang['session.field.is_current'] = 'Actuelle';

$lang['session.create.success'] = "La session %s a été créée.";
$lang['session.create.error'] = 'Une erreur s\'est produite lors de la création de la session.';
$lang['session.update.success'] = 'La session %s a été mise à jour.';
$lang['session.update.error'] = 'Une erreur s\'est produite lors de la mise à jour de la session.';
$lang['session.delete.success'] = 'La session %s a été supprimée.';
$lang['session.delete.title'] = 'Supprimer la session : %s';

$lang['session.save_weeks.success'] = "Les semaines de la session ont été mises à jour.";
$lang['session.save_weeks.error'] = "Une erreur s'est produite lors de la mise à jour des semaines de la session.";
$lang['session.bulk_week.success'] = "%s a été appliqué à chaque semaine de la session.";
$lang['session.bulk_week.no_week_selected'] = "Aucune semaine sélectionnée.";

$lang['session.delete.warning'] = 'Toutes les réservations et vacances de cette session seront également supprimées définitivement.';

$lang['session.validation.date_check'] = 'Le champ {field} (%s) fait déjà partie d\'une session existante (%s).';

$lang['session.list.current_and_future'] = 'Sessions actuelles et futures';
$lang['session.list.past'] = 'Sessions passées';


$lang['session.help.session.text'] = "Chaque session dure généralement toute l'année scolaire. Définissez ici les dates de début et de fin de la session.";


$lang['session.help.date_format'] = "Format de date";
$lang['session.help.date_format.text'] = "Utilisez le format JJ/MM/AAAA lors de la saisie des dates. Par exemple, 16/04/2026.";

$lang['session.help.changing_dates'] = 'Modification des dates';
$lang['session.help.changing_dates.text'] = "Si vous modifiez la date de début ou de fin après que des réservations ont été effectuées pendant la session, les réservations existantes <em>en dehors de la nouvelle plage de dates</em> seront supprimées.";

$lang['session.help.default_schedule'] = 'Emploi du temps par défaut';
$lang['session.help.default_schedule.text'] = "Chaque groupe de salles de la session peut fonctionner avec un emploi du temps différent. Indiquez ici un emploi du temps par défaut qui sera appliqué aux groupes de salles existants ou à tout nouveau groupe de salles que vous créerez. Vous pourrez modifier l'emploi du temps de chaque groupe plus tard.";


$lang['session.weeks.intro'] = 'Cliquez sur les dates de chaque calendrier pour basculer la semaine d\'emploi du temps correspondante.';


$lang['session.room_schedules'] = 'Emplois du temps des salles';
$lang['session.room_schedules.no_groups'] = 'Aucun groupe de salles trouvé.';

$lang['session.room_schedules.help.intro'] = "Indiquez l'emploi du temps qui doit être utilisé par chaque groupe de salles pour cette session. L'emploi du temps choisi pour chaque groupe s'appliquera à toutes les salles qu'il contient.";
$lang['session.room_schedules.help.change_warning'] = "Si vous modifiez l'emploi du temps d'un groupe de salles, les réservations de l'ancien emploi du temps ne seront plus accessibles.";
