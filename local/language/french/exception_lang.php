<?php

$lang['exception.DateException.invalidDate'] = "Aucune date sélectionnée ou date invalide (%s).";
$lang['exception.DateException.forSessionRange'] = "La date sélectionnée (%s) n'est pas comprise dans la session actuelle.";


$lang['exception.AgentException.forInvalidType'] = "Type de réservation non reconnu. Doit être l'un des suivants : %s";
$lang['exception.AgentException.forNoSession'] = 'La date demandée n\'appartient à aucune session.';
$lang['exception.AgentException.forNoPeriod'] = 'Le créneau demandé est introuvable.';
$lang['exception.AgentException.forNoRoom'] = 'La salle demandée est introuvable ou ne peut pas être réservée.';
$lang['exception.AgentException.forInvalidDate'] = 'La date demandée n\'est pas reconnue ou ne peut pas être réservée.';
$lang['exception.AgentException.forNoWeek'] = 'La date demandée n\'est associée à aucune semaine d\'emploi du temps.';
$lang['exception.AgentException.forNoBooking'] = 'La réservation demandée est introuvable.';
$lang['exception.AgentException.forAccessDenied'] = 'Vous n\'avez pas l\'autorisation de modifier la réservation demandée.';

$lang['exception.AvailabilityException.forNoWeek'] = "La date sélectionnée n'est associée à aucune semaine d'emploi du temps.";
$lang['exception.AvailabilityException.forNoPeriods'] = "Aucun créneau n'est disponible pour la date sélectionnée.";
$lang['exception.AvailabilityException.forHoliday.unknown'] = 'La date que vous avez sélectionnée se situe pendant des vacances.';
$lang['exception.AvailabilityException.forHoliday'] = 'La date que vous avez sélectionnée se situe pendant des vacances : %s : %s - %s';


$lang['exception.BookingValidationException.forExistingBooking'] = "Une autre réservation existe déjà.";
$lang['exception.BookingValidationException.forHoliday'] = "Une réservation ne peut pas être créée pendant des vacances.";

$lang['exception.SessionException.notSelected'] = "Aucune session active trouvée.";


$lang['exception.SettingsException.forDisplayType'] = "Le paramètre « Type d'affichage » n'a pas été défini.";
$lang['exception.SettingsException.forColumns'] = "Le paramètre « Colonnes d'affichage » n'a pas été défini.";
$lang['exception.SettingsException.forNoRooms'] = "Aucune salle disponible.";
$lang['exception.SettingsException.forNoSchedule'] = "Ce groupe de salles n'a pas d'emploi du temps configuré pour cette session.";
