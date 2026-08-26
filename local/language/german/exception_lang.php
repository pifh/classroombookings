<?php

$lang['exception.DateException.invalidDate'] = "Kein Datum ausgewählt oder Datum ist ungültig (%s).";
$lang['exception.DateException.forSessionRange'] = "Das ausgewählte Datum (%s) liegt nicht innerhalb der aktuellen Session.";


$lang['exception.AgentException.forInvalidType'] = "Nicht erkannter Buchungstyp. Muss einer der folgenden sein: %s";
$lang['exception.AgentException.forNoSession'] = 'Das angeforderte Datum gehört zu keiner Session.';
$lang['exception.AgentException.forNoPeriod'] = 'Der angeforderte Zeitraum konnte nicht gefunden werden.';
$lang['exception.AgentException.forNoRoom'] = 'Der angeforderte Raum konnte nicht gefunden werden oder ist nicht buchbar.';
$lang['exception.AgentException.forInvalidDate'] = 'Das angeforderte Datum wird nicht erkannt oder ist nicht buchbar.';
$lang['exception.AgentException.forNoWeek'] = 'Das angeforderte Datum ist keiner Stundenwoche zugeordnet.';
$lang['exception.AgentException.forNoBooking'] = 'Die angeforderte Buchung konnte nicht gefunden werden.';
$lang['exception.AgentException.forAccessDenied'] = 'Sie haben keine Berechtigung, die angeforderte Buchung zu ändern.';

$lang['exception.AvailabilityException.forNoWeek'] = "Das ausgewählte Datum ist keiner Stundenwoche zugeordnet.";
$lang['exception.AvailabilityException.forNoPeriods'] = "Für das ausgewählte Datum sind keine Zeiträume verfügbar.";
$lang['exception.AvailabilityException.forHoliday.unknown'] = 'Das ausgewählte Datum fällt in einen Ferientag.';
$lang['exception.AvailabilityException.forHoliday'] = 'Das ausgewählte Datum fällt in einen Ferientag: %s: %s - %s';


$lang['exception.BookingValidationException.forExistingBooking'] = "Es existiert bereits eine andere Buchung.";
$lang['exception.BookingValidationException.forHoliday'] = "An einem Ferientag kann keine Buchung erstellt werden.";

$lang['exception.SessionException.notSelected'] = "Keine aktive Session gefunden.";


$lang['exception.SettingsException.forDisplayType'] = "Die Einstellung 'Anzeigetyp' wurde nicht festgelegt.";
$lang['exception.SettingsException.forColumns'] = "Die Einstellung 'Anzeigespalten' wurde nicht festgelegt.";
$lang['exception.SettingsException.forNoRooms'] = "Es sind keine Räume verfügbar.";
$lang['exception.SettingsException.forNoSchedule'] = "Diese Raumgruppe hat für diese Session keinen konfigurierten Stundenplan.";
